<?php /* Smarty version Smarty-3.1.17, created on 2014-06-12 17:29:39
         compiled from "D:\wamp\www\web\shop\view\admin\delivery\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108425397f6c661cbd4-97612984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b08bd4ce0b1988e028c73d97972a16b14f9845b6' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\delivery\\show.tpl',
      1 => 1402565377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108425397f6c661cbd4-97612984',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5397f6c67725a3_67781891',
  'variables' => 
  array (
    'allDelivery' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5397f6c67725a3_67781891')) {function content_5397f6c67725a3_67781891($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=delivery&m=runAdd">添加物流配送</a>商品 -- 物流配送列表</h2>
<div id="list">
	<table class="public">
		<tr><th>序号</th><th>物流公司</th><th>省内</th><th>省外</th><th>额外</th><th>信息</th><th>网址</th><th>注册时间</th><th>操作</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allDelivery']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allDelivery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_in;?>
元</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_out;?>
元</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_add;?>
元</td>
			<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value->info,20);?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->url;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</td><td>
				<a href="?a=delivery&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=delivery&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('您确定要删除吗') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
			</td></tr>
			<?php } ?>
		<?php } else { ?>
			<tr><td colspan="6">暂时没有数据</td></tr>
		<?php }?>
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>
