<?php
$id = $_GET['id'];
include "../../db/connectdb.php";
$sql = "delete from user where id={$id}";
$res = mysqli_query($link, $sql);
if ($res) {
    header('location:admin2.php');
}
mysqli_close($link);
