<?php /* Smarty version Smarty-3.1.17, created on 2014-11-30 18:26:26
         compiled from "/home/wwwroot/myweb.com/shop/view/admin/public/succ_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1302956474547af0d2411754-00451651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd42aa0651973c50da24c65565cab36a3cbeb9af5' => 
    array (
      0 => '/home/wwwroot/myweb.com/shop/view/admin/public/succ_index.tpl',
      1 => 1417341295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1302956474547af0d2411754-00451651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_547af0d2445467_09693667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547af0d2445467_09693667')) {function content_547af0d2445467_09693667($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="refresh" content="1;url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/succ.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
	<h2>成功 -- 提示页(guihua)</h2>
<div id="list" class="succ">	
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
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">[如果浏览器没有及时跳转请点击这里]</a></p>
</div>
</body>
</html><?php }} ?>
