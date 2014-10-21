<?php /* Smarty version Smarty-3.1.17, created on 2014-05-09 10:05:03
         compiled from "D:\wamp\www\web\shop\view\admin\manage\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8315536c6e8b411e75-77497418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d88b3cc0bb66b877f70962b933a4a1dbbe0f19c' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\manage\\manage.tpl',
      1 => 1399629898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8315536c6e8b411e75-77497418',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_536c6e8b4c3824_62573656',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536c6e8b4c3824_62573656')) {function content_536c6e8b4c3824_62573656($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<h2><a href="?a=manage&m=runadd">添加管理员</a>系统 -- 管理员列表</h2>
<div id="list">
	<table class="public">
		<tr><th>用户名</th><th>登陆</th><th>登陆次数</th><th>最后登录ip</th><th>最后登录时间</th><th>操作</th></tr>
		<tr><td>用户名</td><td>登陆</td><td>登陆次数</td><td>最后登录ip</td><td>最后登录时间</td><td>
			<img src="view/admin/images/edit.gif" alt="编辑" title="编辑" />
			<img src="view/admin/images/drop.gif" alt="删除" title="删除" />
		</td></tr>
	</table>	
</div>

</body>
</html><?php }} ?>
