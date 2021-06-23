<?php
$link=@mysqli_connect('localhost','root','root','bbq') or
die('连接失败：'.mysqli_connect_error());
mysqli_set_charset($link,'utf8');
$sql="select * from user";
$res=mysqli_query($link,$sql);
if (!$res){
    die('查询失败');
}
$news=mysqli_fetch_all($res,MYSQLI_ASSOC);
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
    <link rel="stylesheet" type="text/css" href="admin.css"/>
    <style>
        .but2 {
            position: absolute;
            top: 17px;
            left: 900px;
            background-color: #ff7200;
            font-size: 14px;
            width: 80px;
            height: 25px;
            text-align: center;
            line-height: 25px;
            color: white;
            border:none;
            cursor: pointer;
            outline: none;
        }
        .zm{
            position: absolute;
            top: 17px;
            left: 450px;
            height: 25px;
            text-align: center;
            line-height: 25px;
            color: black;
            cursor: pointer;
            outline: none;
        }
        .zm input{
            height: 25px;
            width: 130px;
            border: none;
            border-bottom: 1px solid black;
            outline: none;
        }
        .left a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
<div class="top">
    <div class="topbox">
        <span>表白墙后台管理系统</span>
    </div>
</div>
<div class="under">
    <form action="./useradd.php" method="post" style="display: inline-block;float: right">
        <div class="right">
            <span class="topspan">管理员信息展示表</span>
            <div class="zm">
                账号：<input class="tj" name="name" type="text">&nbsp;
                密码：<input class="tj" name="password" type="text">
            </div>
            <input type="submit" value="添加人员" class="but2"/>
            <table>
                <thead>
                    <tr class="tr1">
                        <th>编号</th>
                        <th>帐号</th>
                        <th>密码</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($news as $key=>$value){ ?>
                        <tr>
                            <td><?php echo $value['id']?></td>
                            <td><?php echo $value['name']?></td>
                            <td><?php echo $value['password']?></td>
                            <td>
                                <a class="gs" href="usersc.php?id=<?php echo $value['id']?>">删除</a>
                                <a class="gs" href="userxg.php?id=<?php echo $value['id']?>">修改</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </form>
    <div class="left">
        <ul>
            <a href="admin.php"><li>表白信息-></li></a>
            <li>人员管理-></li>
        </ul>
    </div>
</div>
<script src="./admin.js" charset="utf-8"></script>
</body>
</html>