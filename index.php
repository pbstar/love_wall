<?php
include "./db/connectdb.php";
$sql = "select * from qiang";
$res = mysqli_query($link, $sql);
if (!$res) {
    die('查询失败');
}
$news = mysqli_fetch_all($res, MYSQLI_ASSOC);
mysqli_close($link);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>表白墙</title>
    <link rel="stylesheet" type="text/css" href="./css/qiang.css" />
    <style>
        .gs {
            text-decoration: none;
            font-size: small;
            color: black;
        }
    </style>
</head>

<body style="background-image: url(./imgs/bbqbj.jpg);background-size:1000px;">
    <div class="top" style="background-color:lightpink;">
        <div class="topbox">
            <h3 style="float: left;color: red;">表白墙</h3>-山野千里，你是我藏在微风中的欢喜！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <form action="./com/cxqiang.php" method="post" style="display: inline-block;">
                <input type="text" placeholder="请输入被表白人姓名" class="name" id="name" name="name" />
                <a href="./com/cxqiang.php"><input type="submit" value="查询被表白信息" id="sub" /></a>
            </form>
            <a href="admin/com/login.php" class="topa">请登录！</a><span class="topspan">管理员，</span>
        </div>
    </div>
    <div class="mid" style="height: 250px">
        <a href="./com/biaobai.php"><img src="./imgs/logo.png" alt="" style="width: 100%;height: 100%"></a>
    </div>
    <div class="but" style="background-color:rgba(255,255,255,.1);">
        <ul>
            <?php foreach ($news as $key => $value) { ?>
                <li>
                    <div class="bb" style="background-color:rgb(250,168,248);">
                        <div class="bbtop" style="color: crimson;">
                            亲爱的<?php echo $value['name1'] ?>:
                        </div>
                        <div class="bbmid" style="color: #ff7200">
                            &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['content'] ?><br>
                            <img src="./uploads/<?php echo $value['photo'] ?>" alt=""><br>
                            记得联系我呀，tel：<?php echo $value['tel'] ?>
                        </div>
                        <div class="bbbut">
                            <?php date_default_timezone_set("PRC") ?>
                            <span style="font-size: xx-small;color: #447391;">发表时间：<?php echo date('Y-m-d H:i', $value['btime']) ?></span>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="gs" href="./com/xiugai.php?id=<?php echo $value['id'] ?>">修改</a>
                            <a class="gs" href="./com/shanchu.php?id=<?php echo $value['id'] ?>">删除</a>
                            <span id="name2" style="color: dodgerblue">爱你的<?php echo $value['name2'] ?></span>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>

</html>