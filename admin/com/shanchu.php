<?php
$id = $_GET['id'];
include "../../db/connectdb.php";
$sql = "delete from qiang where id={$id}";
$res = mysqli_query($link, $sql);
if ($res) {
    header('location:../admin.php');
}
mysqli_close($link);
