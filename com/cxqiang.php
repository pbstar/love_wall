<?php
$name=$_POST['name'];
$link=@mysqli_connect('localhost','root','root','bbq') or
die('连接失败：'.mysqli_connect_error());
mysqli_set_charset($link,'utf8');
$sql="select * from qiang where name1 like '%$name%'";
$res=mysqli_query($link,$sql);
if (!$res){
    die('查询失败');
}
$news=mysqli_fetch_all($res,MYSQLI_ASSOC);
//print_r($news);
//die(
//);
mysqli_close($link);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="qiang.css"/>
    <style>
        .gs{
            text-decoration: none;
            font-size: small;
            color: black;
        }
    </style>
</head>
<body style="background-image: url(bbqbj.jpg);background-size:1000px;">
<div class="top" style="background-color:lightpink;">
    <div class="topbox">
        <h3 style="float: left;color: red;">被表白信息查询结果</h3>
    </div>
</div>
<div class="but" style="background-color:rgba(255,255,255,.1);">
    <ul>
        <?php foreach ($news as $key=>$value){ ?>
            <li>
                <div class="bb" style="background-color:rgb(250,168,248);">
                    <div class="bbtop" style="color: crimson;">
                        亲爱的<?php echo $value['name1']?>:
                    </div>
                    <div class="bbmid" style="color: #ff7200">
                        &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['content']?><br>
                        <img src="./uploads/<?php echo $value['photo']?>" alt=""><br>
                        记得联系我呀，tel：<?php echo $value['tel']?>
                    </div>
                    <div class="bbbut">
                        <?php date_default_timezone_set("PRC") ?>
                        <span style="font-size: xx-small;color: #447391;">发表时间：<?php echo date('Y-m-d H:i',$value['btime'])?></span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="gs" href="xiugai.php?id=<?php echo $value['id']?>">修改</a>
                        <a class="gs" href="shanchu.php?id=<?php echo $value['id']?>">删除</a>
                        <span id="name2" style="color: dodgerblue">爱你的<?php echo $value['name2']?></span>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
</body>
</html>