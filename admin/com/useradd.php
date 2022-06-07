<?php
$name = $_POST['name'];
$password = $_POST['password'];
include "../../db/connectdb.php";
$sql = "insert into user (name,password) values ('{$name}','{$password}')";
$res = mysqli_query($link, $sql);
if ($res) {
    echo '添加成功';
    header("location:admin2.php");
} else {
    echo '添加失败';
    header("refresh:1;url=admin2.php");
}
