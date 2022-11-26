<?php
$link = @mysqli_connect('43.138.29.120', 'bbq', 'bbq', 'bbq') or
    die('连接失败：' . mysqli_connect_error());
mysqli_set_charset($link, 'utf8');
