<?php
$id = $_GET['id'];
include "../db/connectdb.php";
$sql = "delete from qiang where id={$id}";
$res = mysqli_query($link, $sql);
if ($res) {
    header('location:../index.php');
}
mysqli_close($link);
