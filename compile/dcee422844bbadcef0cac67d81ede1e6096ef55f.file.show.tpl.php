<?php /* Smarty version Smarty-3.1.17, created on 2014-05-22 16:26:16
         compiled from "D:\wamp\www\web\shop\view\admin\manage\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23757536f205e851771-75086204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcee422844bbadcef0cac67d81ede1e6096ef55f' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\manage\\show.tpl',
      1 => 1400747162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23757536f205e851771-75086204',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_536f205e878854_98561266',
  'variables' => 
  array (
    'allManage' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536f205e878854_98561266')) {function content_536f205e878854_98561266($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=manage&m=runAdd">添加管理员</a>系统 -- 管理员列表</h2>
<div id="list">
	<table class="public">
		<tr><th>序号</th><th>用户名</th><th>等级</th><th>登陆次数</th><th>最后登录ip</th><th>最后登录时间</th><th>操作</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allManage']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allManage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->user;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->level_name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->login_count;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->last_ip;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->last_time;?>
</td><td>
				<a href="?a=manage&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=manage&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
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
