<?php
$id = $_GET['id'];
$link = mysqli_connect('localhost', 'root', 'root', 'bbq') or
die('连接失败' . mysqli_connect_error());
mysqli_set_charset($link, 'utf8');
$sql = "delete from qiang where id={$id}";
$res = mysqli_query($link, $sql);
if ($res) {
    header('location:../index.php');
}
mysqli_close($link);
