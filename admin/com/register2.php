<?php
$name=$_POST['name'];
$password=$_POST['password'];
$link=@mysqli_connect('localhost','root','root','bbq') or
die('连接失败'.mysqli_connect_error());
mysqli_set_charset($link,'utf8');
$sql="insert into user (name,password) values ('{$name}','{$password}')";
$res=mysqli_query($link,$sql);
if($res){
    echo '注册成功，请登录！';
    header("location:login.php");
}else{
    echo '注册失败，请重新注册！';
    header("refresh:2;url=./register.php");
}
?>