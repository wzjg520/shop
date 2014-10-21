<?php /* Smarty version Smarty-3.1.17, created on 2014-06-21 16:39:30
         compiled from "D:\wamp\www\web\shop\view\admin\edit\dir.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2874453a531cd2e30e1-48298427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b68a28e6d532cd5dd688e6d960b14ad698c0de7' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\edit\\dir.tpl',
      1 => 1403339503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2874453a531cd2e30e1-48298427',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53a531cd386387_67593298',
  'variables' => 
  array (
    'dir' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a531cd386387_67593298')) {function content_53a531cd386387_67593298($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=edit&m=runAddDir">添加目录</a>系统 -- 目录列表</h2>
<div id="list">
	<table class="public">
		<tr><th>目录名称</th><th>操作</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dir']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td><td><a href="?a=edit&m=file&dir=<?php echo $_GET['dir'];?>
&file=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">进入目录</a></td></tr>
		<?php } ?>
		<tr><td colspan="2"><a href="?a=edit">[返回风格]</a></td></tr>
			
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>
