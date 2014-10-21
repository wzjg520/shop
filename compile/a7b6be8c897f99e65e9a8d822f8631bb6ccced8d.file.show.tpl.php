<?php /* Smarty version Smarty-3.1.17, created on 2014-06-07 13:32:28
         compiled from "D:\wamp\www\web\shop\view\admin\service\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1861453928d88a5ccc1-54882460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7b6be8c897f99e65e9a8d822f8631bb6ccced8d' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\service\\show.tpl',
      1 => 1402119146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1861453928d88a5ccc1-54882460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53928d88aa4222_09104990',
  'variables' => 
  array (
    'allService' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53928d88aa4222_09104990')) {function content_53928d88aa4222_09104990($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=service&m=runadd">新增售后服务</a>商品 -- 售后服务列表</h2>
<div id="list">
	<form method="post" action="?a=service&m=runAdd">
	<table class="public">
		<tr><th>序号<th>售后服务名称</th><th>默认首选</th><th>操作</th></tr>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allService']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>			
				<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
<td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td><td><?php if ($_smarty_tpl->tpl_vars['value']->value->first==1) {?>是<?php } else { ?>否|<a class="green" href="?a=service&m=setFirst&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">首选</a><?php }?></td>
				<td>
				<a href="?a=service&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=service&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
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
