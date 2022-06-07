<?php
$id = $_GET['id'];
include "../db/connectdb.php";
$sql = "select * from qiang where id={$id}";
$res = mysqli_query($link, $sql);
$arr = mysqli_fetch_assoc($res);
mysqli_close($link);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改表白信息</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        div {
            width: 520px;
            height: 380px;
            margin: 100px auto;
            background-color: pink;
            text-align: center;
            border: 2px solid white;
        }

        h3 {
            width: 500px;
            height: 50px;
            line-height: 50px;
            text-align: center;
        }

        .name {
            width: 130px;
            height: 30px;
            border: 1px solid #eeeeee;
            outline: none;
        }

        .content {
            margin: 8px auto 0;
            width: 480px;
            height: 200px;
            resize: none;
        }

        .submit {
            width: 100px;
            height: 30px;
            border: none;
            outline: none;
            background-color: orange;
            color: white;
            margin: 10px auto;
        }
    </style>
</head>

<body style="background-image: url(../imgs/bbqbj.jpg)">
    <div>
        <h3>表白信息修改</h3>
        <form action="xiugai2.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            你要表白的人：<input type="text" name="name1" class="name" placeholder="请输入你要表白的人" value="<?php echo $arr['name1'] ?>">
            <textarea name="content" id="" class="content" placeholder="请输入表白的内容"><?php echo $arr['content'] ?></textarea><br>
            你的名字：<input type="text" name="name2" class="name" placeholder="请输入你的尊姓大名" value="<?php echo $arr['name2'] ?>">
            你的电话：<input type="text" name="tel" class="name" placeholder="请输入你的电话号码" value="<?php echo $arr['tel'] ?>">
            <input type="submit" class="submit" value="提交修改">
        </form>
    </div>
</body>

</html>