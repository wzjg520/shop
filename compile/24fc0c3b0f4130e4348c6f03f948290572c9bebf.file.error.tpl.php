<?php /* Smarty version Smarty-3.1.17, created on 2014-05-09 08:56:33
         compiled from "D:\wamp\www\web\shop\view\admin\public\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14618536c96c347cb98-83211484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24fc0c3b0f4130e4348c6f03f948290572c9bebf' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\public\\error.tpl',
      1 => 1399625789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14618536c96c347cb98-83211484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_536c96c35beb09_56587993',
  'variables' => 
  array (
    'message' => 0,
    'key' => 0,
    'value' => 0,
    'prev_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536c96c35beb09_56587993')) {function content_536c96c35beb09_56587993($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/error.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
	<h2>错误 -- 提示页</h2>
<div id="list" class="error">	
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<p><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
.<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>
	<?php } ?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
">[返回]</a></p>
</div>
</body>
</html><?php }} ?>
