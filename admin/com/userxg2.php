<?php
$id=$_POST['id'];
$name1=$_POST['name'];
$name2=$_POST['password'];
$link=mysqli_connect('localhost','root','root','bbq') or
die('连接失败'.mysqli_connect_error());
mysqli_set_charset($link,'utf8');
$sql="update user set name='$name1',password='$name2' where id=$id";
$res=mysqli_query($link,$sql);
if ($res){
    echo '修改成功';
    header('location:admin2.php');
}
else{
    echo '修改失败';
    header('refresh:1;url=userxg.php');
}
mysqli_close($link);