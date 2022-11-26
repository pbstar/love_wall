<?php
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$tel = $_POST['tel'];
$content = $_POST['content'];
$file_info = $_FILES['pic'];
$file_name = $file_info['name'];
$name = date('Y').date('m').date("d").date('H').date('i').date('s').rand(0,9).$file_name;
move_uploaded_file($file_info['tmp_name'], '../uploads/'.$name);
include "../db/connectdb.php";
$sql = "insert into qiang (name1,name2,content,tel,btime,photo) values ('{$name1}','{$name2}','{$content}','{$tel}',UNIX_TIMESTAMP(),'{$name}')";
$res = mysqli_query($link, $sql);
if ($res) {
    header("location:../index.php");
} else {
    echo '添加失败';
    header("refresh:1;url=../index.php");
}
