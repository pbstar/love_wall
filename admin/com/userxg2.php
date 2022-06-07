<?php
$id = $_POST['id'];
$name1 = $_POST['name'];
$name2 = $_POST['password'];
include "../../db/connectdb.php";
$sql = "update user set name='$name1',password='$name2' where id=$id";
$res = mysqli_query($link, $sql);
if ($res) {
    echo '修改成功';
    header('location:admin2.php');
} else {
    echo '修改失败';
    header('refresh:1;url=userxg.php');
}
mysqli_close($link);
