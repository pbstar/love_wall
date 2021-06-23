$(function() {
    //登录界面账户输入框失去焦点
    (function login_validate() {
        $(".account").blur(function() {
            accountReg = /^[1][3,4,5,7,8][0-9]{9}$/;
            if($(this).val() == "" || $(this).val() == "请输入您的账号（即手机号）") {
                $(this).addClass("errorInput");
                $(this).next().css("display", "block").html("账号不能为空！");
                console.log("账号不能为空");
                return;
            } else if(!accountReg.test($(".account").val())) {
                $(this).addClass("errorInput");
                $(this).next().css("display", "block").html("账号不存在!");
            } else {
                $(this).addClass("correctInput");
                $(this).removeClass("errorInput");
                $(this).next().empty();
            }
        });
        // 登录界面密码输入框失去焦点
        $(".password").blur(function() {
            reg = /^[A-Za-z0-9]{6}$/
            if($(this).val() == "") {
                $(this).addClass("errorInput");
                $(this).next().css("display", "block").html("密码不能为空！");
            } else if(!reg.test($(".password").val())) {
                $(this).addClass("errorInput");
                $(this).next().css("display", "block").html("请输入6位包含数字或字母的密码！");
            } else {
                $(this).addClass("correctInput");
                $(this).removeClass("errorInput");
                $(this).next().empty();
            }
        });
    })();
})