<?php
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="../css/loginRegister.css" />
</head>
<body style="background-image:url(../../imgs/bbqbj.jpg);">
<div class="box" style="height: 290px">
    <!--标题-->
    <div class="title">
        <span class="login"><a href="login.php" style="color: red">登录</a></span>
        <span class="register"><a href="" style="color: white">注册</a></span>
    </div>
    <!--具体信息-->
    <form action="./register2.php" method="post" class="register">
        <ul>
            <li>
                <label for="phone">帐&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号</label>
                <input type="text" placeholder="请输入帐号" id="phone" maxlength="12" name="name"/>
                <span class="error"></span>
            </li>
            <li>
                <label for="password2">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                <input type="password" class="password" id="password2" placeholder="请输入密码" name="password"/>
                <span class="error"></span>
            </li>
            <li>
                <label for="password3">确认密码</label>
                <input type="password" class="email" id="password3" placeholder="请再次输入密码" />
                <span class="error"></span>
            </li>
        </ul>
        <div class="submit" style="margin-top: 10px">
            <input type="submit" value="立即注册" />
        </div>
    </form>
</div>
</body>
</html>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="register.js" type="text/javascript" charset="utf-8"></script>
