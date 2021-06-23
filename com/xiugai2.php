<?php
$id = $_POST['id'];
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$tel = $_POST['tel'];
$content = $_POST['content'];
$link = mysqli_connect('localhost', 'root', 'root', 'bbq') or
die('连接失败' . mysqli_connect_error());
mysqli_set_charset($link, 'utf8');
$sql = "update qiang set name1='$name1',content='$content',name2='$name2',tel='$tel',btime=UNIX_TIMESTAMP() where id=$id";
$res = mysqli_query($link, $sql);
if ($res) {
    header('location:../index.php');
} else {
    echo '更新失败';
    header('refresh:1;url=../index.php');
}
mysqli_close($link);
