<?php
$name=$_POST['name'];
$password=$_POST['password'];
$link=@mysqli_connect('localhost','root','root','bbq') or
die('连接失败'.mysqli_connect_error());
mysqli_set_charset($link,'utf8');
$sql="insert into user (name,password) values ('{$name}','{$password}')";
$res=mysqli_query($link,$sql);
if($res){
    echo '添加成功';
    header("location:admin2.php");
}else{
    echo '添加失败';
    header("refresh:1;url=admin2.php");
}