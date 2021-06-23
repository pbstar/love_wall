<?php
$name1=$_POST['name1'];
$name2=$_POST['name2'];
$tel=$_POST['tel'];
$content=$_POST['content'];
$file_info=$_FILES['pic'];
$file_name=$file_info['name'];
move_uploaded_file($file_info['tmp_name'],'./uploads/'.$file_name);
$link=@mysqli_connect('localhost','root','root','bbq') or
die('连接失败'.mysqli_connect_error());
mysqli_set_charset($link,'utf8');
$sql="insert into qiang (name1,name2,content,tel,btime,photo) values ('{$name1}','{$name2}','{$content}','{$tel}',UNIX_TIMESTAMP(),'{$file_name}')";
$res=mysqli_query($link,$sql);
if($res){
//    echo '添加成功';
    header("location:qiang.php");
}else{
    echo '添加失败';
    header("refresh:1;url=qiang.php");
}