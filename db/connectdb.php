<?php
$link = @mysqli_connect('localhost', 'root', 'root', 'bbq') or
    die('连接失败：' . mysqli_connect_error());
mysqli_set_charset($link, 'utf8');
