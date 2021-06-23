<?php
$id=$_GET['id'];
$link=mysqli_connect('localhost','root','root','bbq') or
die('连接失败'.mysqli_connect_error());
mysqli_set_charset($link,'utf8');
$sql="select * from user where id={$id}";
$res=mysqli_query($link,$sql);
$arr=mysqli_fetch_assoc($res);
mysqli_close($link);
?>
<?php
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="loginRegister.css" />
</head>
<body style="background-image:url(../bbqbj.jpg);">
<div class="box" style="height: 240px">
    <!--标题-->
    <div class="title">
        <h3>管理员信息修改</h3>
    </div>
    <!--具体信息-->
    <form action="./userxg2.php" method="post" class="register">
        <ul>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <li>
                <label for="phone">帐号</label>
                <input type="text" value="<?php echo $arr['name'] ?>" id="phone" maxlength="12" name="name"/>
                <span class="error"></span>
            </li>
            <li>
                <label for="password2">密码</label>
                <input type="text" class="password" id="password2" value="<?php echo $arr['password'] ?>" name="password"/>
                <span class="error"></span>
            </li>
        </ul>
        <div class="submit" style="margin-top: 10px">
            <input type="submit" value="确认修改" />
        </div>
    </form>
</div>
</body>
</html>