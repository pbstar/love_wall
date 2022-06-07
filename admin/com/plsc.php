<?php
$ckbox = $_POST['checkbox'];
$str = implode(',', $ckbox);
include "../../db/connectdb.php";
$sql = "delete from qiang where id in($str)";
$res = mysqli_query($link, $sql);
if ($res) {
    echo '批量删除成功';
    header("location:../admin.php");
} else {
    echo '批量删除失败';
    header("Refresh:1;url='../admin.php'");
}
mysqli_close($link);
