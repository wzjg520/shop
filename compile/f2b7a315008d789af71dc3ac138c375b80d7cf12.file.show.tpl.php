<?php /* Smarty version Smarty-3.1.17, created on 2014-05-29 10:31:01
         compiled from "D:\wamp\www\web\shop\view\admin\price\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3572538699d05f9cc7-20735746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2b7a315008d789af71dc3ac138c375b80d7cf12' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\price\\show.tpl',
      1 => 1401330659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3572538699d05f9cc7-20735746',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538699d0690cc9_21490431',
  'variables' => 
  array (
    'allPrice' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538699d0690cc9_21490431')) {function content_538699d0690cc9_21490431($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=price&m=runadd">新增价格区间</a>商品 -- 价格区间列表</h2>
<div id="list">
	<form method="post" action="?a=price&m=runAdd">
	<table class="public">
		<tr><th>序号<th>左区间</th><th>右区间</th><th>操作</th></tr>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allPrice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>			
				<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_left;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_right;?>
</td>
				<td>
				<a href="?a=price&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=price&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('您确定要删除吗') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
				</td></tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
				<tr><td colspan="4">暂时没有数据</td></tr>
			<?php } ?>
	</table>
	</form>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>
