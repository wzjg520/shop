<?php /* Smarty version Smarty-3.1.17, created on 2014-05-07 08:08:46
         compiled from "D:\wamp\www\web\shop\view\admin\public\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314995369ce970c51f6-17112557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32c8b108159185577dc95baec9501fb75197de4a' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\public\\admin.tpl',
      1 => 1399450125,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314995369ce970c51f6-17112557',
  'function' => 
  array (
  ),
  'cache_lifetime' => 86400,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5369ce970fd133_69984741',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5369ce970fd133_69984741')) {function content_5369ce970fd133_69984741($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<div id="header">
	<p>您好，admin [超级管理员] [去首页] [退出]</p>
	<ul>
		<li class="first" onclick="javascript:channel(0)"><a href="#">起始页</a></li>
		<li><a href="#" onclick="javascript:channel(1)">商品</a></li>
		<li><a href="#" onclick="javascript:channel(2)">订单</a></li>
		<li><a href="#" onclick="javascript:channel(3)">会员</a></li>
		<li><a href="#" onclick="javascript:channel(4)">系统</a></li>
	</ul>
</div>
<div id="sidebar">
	<dl style="display:block">
		<dt>起始页</dt>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>	
	</dl>
	<dl style="display:none">
		<dt>商品</dt>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>	
	</dl>
	<dl style="display:none">
		<dt>订单</dt>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>	
	</dl>
	<dl style="display:none">
		<dt>会员</dt>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>	
	</dl>
	<dl style="display:none">
		<dt>系统</dt>
		<dd><a href="?a=manage" target="in">管理员列表</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>
		<dd><a href="#">商品1</a></dd>	
	</dl>
</div>
<div id="main">
	<iframe frameborder='0' src="?a=admin&m=main" name="in"></iframe>
</div>
</body>
</html><?php }} ?>
