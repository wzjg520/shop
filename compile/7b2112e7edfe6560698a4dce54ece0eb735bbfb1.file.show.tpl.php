<?php /* Smarty version Smarty-3.1.17, created on 2014-05-25 16:16:52
         compiled from "D:\wamp\www\web\shop\view\admin\brand\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18032537db766c12248-66329823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b2112e7edfe6560698a4dce54ece0eb735bbfb1' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\brand\\show.tpl',
      1 => 1401005802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18032537db766c12248-66329823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_537db766c8b8c8_99770534',
  'variables' => 
  array (
    'allFrand' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537db766c8b8c8_99770534')) {function content_537db766c8b8c8_99770534($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=brand&m=runAdd">添加品牌</a>商品 -- 品牌列表</h2>
<div id="list">
	<table class="public">
		<tr><th>序号</th><th>品牌</th><th>类型</th><th>信息</th><th>网址</th><th>注册时间</th><th>操作</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allFrand']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allFrand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->type;?>
</td><td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value->info,20);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->url;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->reg_time;?>
</td><td>
				<a href="?a=brand&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=brand&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
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
