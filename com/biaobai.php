<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        div{
            width: 520px;
            height: 380px;
            margin: 100px auto;
            background-color: pink;
            text-align: center;
            border:2px solid white;
        }
        h3{
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
        .content{
            margin: 8px auto 0;
            width: 480px;
            height: 200px;
            resize: none;
        }
        .submit{
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
<body style="background-image: url(bbqbj.jpg);background-size:1000px;">
<div>
    <h3>心动不如行动，表白你爱的ta！</h3>
    <form action="./bbadd.php" method="post" enctype="multipart/form-data">
        ta的名字：<input type="text" name="name1" class="name" placeholder="请输入你要表白的人">
        你的名字：<input type="text" name="name2" class="name" placeholder="请输入你的尊姓大名">
        <textarea name="content" id="" class="content" placeholder="请输入表白的内容"></textarea><br>
        你的电话：<input type="text" name="tel" class="name" placeholder="请输入你的电话号码">
        ta的照片：<input type="file" name="pic" id="pic" style="width: 170px">
        <input type="submit" class="submit" value="提交">
        <a href="qiang.php" class="submit" style="display: inline-block;color: black;background-color:white;text-decoration: none;line-height: 30px">取消</a>
    </form>
</div>
</body>
</html>