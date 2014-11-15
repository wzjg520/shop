<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/login.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/default/js/login.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 注册登陆
</div>
<div id="login">	
	<form action="?a=user&m=login" method="post" id="loginForm" name="form">
		<dl>
			<dt><h2>快速登录</h2><p class="short_line"></p></dt>
			<dd><label>用 户 名：</label><input type="text" name="user" class="text"/><span> [必填](*用户名长度2到20位)</span></dd>
			<dd><label>密　 码：</label><input type="password" id="pwd" name="pwd" class="text"/><span> [必填](*密码长度必须大于6位)</span></dd>
			<dd><label>验 证 码：</label><input type="text" name="validateCode" class="text code"/><span>（*输入下图中的字符，不区分大小写）</span></dd>
			<dd class="code"><img src="?a=index&m=validateCode" alt="验证码" onclick=" this.src='?a=index&m=validateCode&'+Math.random();"/> <span class="change">看不清换一张</span></dd>
			<dd class="hold_mesg"><label><input type="checkbox" name="keep">保留这次登录信息</label></dd>
			<dd><input type="submit" name="send" class="sub" value="登录"/></dd>
		</dl>
	</form>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>