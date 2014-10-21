<?php /* Smarty version Smarty-3.1.17, created on 2014-06-21 17:09:51
         compiled from "D:\wamp\www\web\shop\view\admin\pic\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1062153a54b7beedbe8-93198075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f68f8a17e084d51c0f927ce1c2976912471e811' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\pic\\show.tpl',
      1 => 1403341789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1062153a54b7beedbe8-93198075',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53a54b7bf28e32_88222786',
  'variables' => 
  array (
    'dir' => 0,
    'value' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a54b7bf28e32_88222786')) {function content_53a54b7bf28e32_88222786($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/pic.css" />
</head>
<body>

<h2>系统 -- 图片目录列表</h2>

<div id="list">
	<table class="public">
		<tr><th>时间目录</th><th>图片张数</th><th>操作</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dir']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td><td><a href="?a=pic&m=file&file=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">进入目录</a></td></tr>
		<?php } ?>
	</table>
</div>


</body>
</html><?php }} ?>
