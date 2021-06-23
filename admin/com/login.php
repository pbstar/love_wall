<?php
?>
<!Doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>登录</title>
		<link rel="stylesheet" type="text/css" href="loginRegister.css"/>
	</head>
	<body style="background-image:url(../bbqbj.jpg);">
		<div class="box">
			<div class="title">
				<span class="login colorRed"><a href="" style="color: white">登录</a></span>
				<span class="register"><a href="register.php" style="color: red">注册</a></span>
			</div>
            <form action="login2.php" method="post" class="login">
                <ul>
                    <li>
                        <label for="account">账&nbsp;&nbsp;&nbsp;&nbsp;号</label>
                        <input type="text" placeholder="请输入账号" class="name" id="name" name="name"/>
                        <span class="error"></span>
                    </li>
                    <li>
                        <label for="password">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                        <input type="password" class="password" id="password" placeholder="请输入密码" name="password"/>
                        <span class="error"></span>
                    </li>
                    <li>
                        <label for="authCode">验证码</label>
                        <input type="text" class="sraddphotokey" id="authCode" placeholder="请输入验证码" name="code"/>
                        <a id="kanbuq" href="javascript:;">看不清，点击图片切换</a><img src="./vcode.php" id="pic">
                        <script>
                            var pic=document.getElementById("pic");
                            pic.onclick=function () {
                                pic.src="./vcode.php?t="+new Date();
                            }
                        </script>
                        <span class="error"></span>
                    </li>
                        <div class="submit">
                            <input type="submit" value="立即登录"/>
                        </div>

                </ul>
            </form>
		</div>
	</body>
</html>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="login.js" type="text/javascript" charset="utf-8"></script>
<script src="register.js" type="text/javascript" charset="utf-8"></script>