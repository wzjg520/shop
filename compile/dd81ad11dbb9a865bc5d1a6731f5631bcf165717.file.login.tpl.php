<?php /* Smarty version Smarty-3.1.17, created on 2014-05-17 12:35:12
         compiled from "D:\wamp\www\web\shop\view\admin\\public\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175715375d0cb555873-87963045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd81ad11dbb9a865bc5d1a6731f5631bcf165717' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\\\public\\login.tpl',
      1 => 1400330104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175715375d0cb555873-87963045',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5375d0cb5acfe9_62690616',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5375d0cb5acfe9_62690616')) {function content_5375d0cb5acfe9_62690616($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
