<?php /* Smarty version Smarty-3.1.17, created on 2014-06-21 17:27:43
         compiled from "D:\wamp\www\web\shop\view\admin\pic\file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1952653a54e7837b7a9-99294628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ca26ea62edcb4a7a7a0d6cb154e9203bc74f2d5' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\pic\\file.tpl',
      1 => 1403342861,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1952653a54e7837b7a9-99294628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53a54e78438500_42560414',
  'variables' => 
  array (
    'file' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a54e78438500_42560414')) {function content_53a54e78438500_42560414($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/pic.css" />
</head>
<body>

<h2>系统 -- 图片文件列表</h2>

<div id="list">
	<table class="public">
		<tr><th>文件名称</th><th>是否冗余</th><th>操作</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['value']->value!='.'&&$_smarty_tpl->tpl_vars['value']->value!='..') {?>
		<tr><td>
		<?php if ($_smarty_tpl->tpl_vars['value']->value->id) {?>
		<span class="green">./uploads/<?php echo $_GET['file'];?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value->pic;?>
</span>
		<?php } else { ?>
		<span class="red">./uploads/<?php echo $_GET['file'];?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>
		<?php }?>
		</td><td>
		<?php if ($_smarty_tpl->tpl_vars['value']->value->id) {?>
		<a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a>
		<?php } else { ?>
		是
		<?php }?>
		</td><td>
		<?php if ($_smarty_tpl->tpl_vars['value']->value->id) {?>
		---
		<?php } else { ?>
		<a onclick="javascript:return confirm('您确定要删除<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
吗？')" href="?a=pic&m=runDelete&dir=<?php echo $_GET['file'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">删除</a>
		<?php }?>
		</td></tr>
		<?php }?>
		<?php } ?>
		<tr><td colspan="2"><a href="?a=pic">[返回目录]</a></td></tr>
	</table>
</div>


</body>
</html><?php }} ?>
