<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/login.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/login.js"></script>
<title>商城后台管理</title>
</head>
<body>
<div id="login">
	<form method="post" action="?a=admin&m=runLogin" id="loginForm">
	<dl>
		<dd>
			<label for="user">用 户 名：</label>
				<input type="text" id="user" name="user" class="text"/>
			</dd>
		<dd>
			<label for="pwd">密　　码：</label>
				<input type="password" id="pwd" name="pwd" class="text"/>
			</dd>
		<dd>
			<label for="code">验 证 码：</label>
			<input type="text" id="validateCode" class="text" name="validateCode"/>
		</dd>
		<dd><img src="?a=index&m=validateCode" title="看不清，点击更换" onclick="javascript:this.src='?a=index&m=validateCode&rand='+Math.random()"/></dd>
		<dd><input type="submit" name="send" class="submit" value="登录系统"/></dd>
	</dl>
	</form>
	
</div>
</body>
</html>