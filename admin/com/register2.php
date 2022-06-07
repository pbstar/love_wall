<?php
$name = $_POST['name'];
$password = $_POST['password'];
include "../../db/connectdb.php";
$sql = "insert into user (name,password) values ('{$name}','{$password}')";
$res = mysqli_query($link, $sql);
if ($res) {
    echo '注册成功，请登录！';
    header("location:./login.php");
} else {
    echo '注册失败，请重新注册！';
    header("refresh:2;url=./register.php");
}
