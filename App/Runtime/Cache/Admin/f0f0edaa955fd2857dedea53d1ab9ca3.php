<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>后台登录</title>
    <link href="/EPP_Project/legacy/Public/Admin/css/admin.css" rel="stylesheet" />
    <script src="/EPP_Project/legacy/Public/Admin/js/jquery-3.4.1.js"></script>
</head>
<body class="login">
<div class="login_box">
    <form method="post">
        <h1>欢迎访问后台</h1>
        <table>
            <tr><th width="80">用户名：</th><td><input class="input" type="text" name="admin_name" /></td></tr>
            <tr><th>密　码：</th><td><input class="input" type="password" name="admin_pwd" /></td></tr>
            <tr><th>验证码：</th><td><input class="input" type="text" name="verify" /></td></tr>
            <tr><td>&nbsp;</td><td><img src="/EPP_Project/legacy/Admin/Login/getVerify" onclick="this.src='/EPP_Project/legacy/Admin/Login/getVerify/'+Math.random()"/></td></tr>
            <tr><td>&nbsp;</td><td><input class="login_btn" type="submit" value="登录" /></td></tr>
        </table>
    </form>
</div>
</body>
</html>