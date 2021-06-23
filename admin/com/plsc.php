<?php
$ckbox=$_POST['checkbox'];
//print_r($ckbox) ;
$str=implode(',',$ckbox);
$link=@mysqli_connect('localhost','root','root','bbq') or
die('连接失败：'.mysqli_connect_error());
mysqli_set_charset($link,'utf8');
$sql="delete from qiang where id in($str)";
$res=mysqli_query($link,$sql);
if ($res){
    echo '批量删除成功';
    header("location:admin.php");
}else{
    echo '批量删除失败';
    header("Refresh:1;url='admin.php'");
}
mysqli_close($link);