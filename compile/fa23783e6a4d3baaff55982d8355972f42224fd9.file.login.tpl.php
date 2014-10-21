<?php /* Smarty version Smarty-3.1.17, created on 2014-10-04 12:28:40
         compiled from "/home/wwwroot/myweb.com/shop/view/admin//public/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50591963542f77781d8922-09559905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa23783e6a4d3baaff55982d8355972f42224fd9' => 
    array (
      0 => '/home/wwwroot/myweb.com/shop/view/admin//public/login.tpl',
      1 => 1400330106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50591963542f77781d8922-09559905',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_542f777821bee9_16678937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542f777821bee9_16678937')) {function content_542f777821bee9_16678937($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
				<input type="text" id="pwd" name="pwd" class="text"/>
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
</html><?php }} ?>
