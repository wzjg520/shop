<?php /* Smarty version Smarty-3.1.17, created on 2014-05-08 10:16:09
         compiled from "D:\wamp\www\web\shop\view\admin\manage\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165155369f50bd021a7-24314632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8afe1b79fb1aa316d8184ff5486ffb631cb95380' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\manage\\add.tpl',
      1 => 1399544164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165155369f50bd021a7-24314632',
  'function' => 
  array (
  ),
  'cache_lifetime' => 86400,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5369f50bd570c4_26567148',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5369f50bd570c4_26567148')) {function content_5369f50bd570c4_26567148($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/admin.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<script type="text/javascript" src="view/admin/js/iframe.js"></script>
<script type="text/javascript" src="view/admin/js/channel.js"></script>
</head>
<body>
<h2><a href="?a=manage">返回管理员列表</a>系统 -- 新增管理员</h2>
<form method="post" action="?a=manage&m=runadd">
	<dl class="form">
		<dd>用户名：<input type="text" name="user" class="text"/></dd>
		<dd>密　码：<input type="text" name="pwd" class="text"/></dd>
		<dd>等　级：<select name="level">
						<option value="0">--请选择一个权限--</option>
						<option value="0">--超级管理员--</option>
						<option value="0">--普通管理员--</option>
						<option value="0">--商品发布专员--</option>
						<option value="0">--订单处理专员--</option>
					</select>
		</dd>
		<dd><input type="submit" name="send" value="新增管理员"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
