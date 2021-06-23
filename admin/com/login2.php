<?php
$account = $_POST['name'];
$pass = $_POST['password'];
$code = $_POST['code'];
session_start();
$vcode = $_SESSION['vcode'];
if (empty($account) || empty($pass) || empty($code)) {
    echo '登录失败，所有内容不能为空';
    header('refresh:1;url=./login.php');
    die();
}
if ($code != $vcode) {
    echo '登陆失败，验证码不正确';
    header('refresh:1;url=./login.php');
    die();
}
//连库操作
$link = mysqli_connect('localhost', 'root', 'root', 'bbq') or
die('连接失败' . mysqli_connect_error());
//设置字符集
mysqli_set_charset($link, 'utf8');
//执行sql语句
$sql = "select * from user where name='$account' and password='$pass'";
$res = mysqli_query($link, $sql);
$num = mysqli_num_rows($res);
if ($num > 0) {
    echo '登录成功';
    header('location:../admin.php');
} else {
    echo '登陆失败，账号密码输入错误';
    header('refresh:1;url=./login.php');
}
//关闭数据库
mysqli_close($link);
