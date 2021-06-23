<?php
$account=$_POST['name'];
$pass=$_POST['password'];
$code=$_POST['code'];
session_start();
$vcode=$_SESSION['vcode'];
if(empty($account)||empty($pass)||empty($code)){
    echo '登录失败，所有内容不能为空';
    header('refresh:1;url=./login.php');
    die();
}
if ($code!=$vcode){
    echo '登陆失败，验证码不正确';
    header('refresh:1;url=./login.php');
    die();
}
$reg1='/^[a-zA-Z0-9]{5,12}$/';
$reg2='/^[a-zA-Z0-9]{3,8}$/';
$result1=preg_match($reg1,$name);//验证账号是否符合规则
$result2=preg_match($reg2,$pass);//验证账号是否符合规则
if($result1==0){
     header("Location:register.php?error=账号不符合规则");
     return;//终止后续代码的执行
}
if($result2==0){
     header("Location:register.php?error=密码不符合规则");
     return;//终止后续代码的执行
}
//连库操作
$link=mysqli_connect('localhost','root','root','bbq') or
die('连接失败'.mysqli_connect_error());
//设置字符集
mysqli_set_charset($link,'utf8');
//执行sql语句
$sql="select * from user where name='$account' and password='$pass'";
$res=mysqli_query($link,$sql);
$num=mysqli_num_rows($res);
if ($num>0){
    echo '登录成功';
    header('location:admin.php');
}
else{
    echo '登陆失败，账号密码输入错误';
    header('refresh:1;url=./login.php');
}
//关闭数据库
mysqli_close($link);