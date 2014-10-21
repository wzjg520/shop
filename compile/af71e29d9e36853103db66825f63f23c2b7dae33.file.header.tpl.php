<?php /* Smarty version Smarty-3.1.17, created on 2014-06-21 18:52:31
         compiled from "D:\wamp\www\web\shop\view\default\public\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24144537c6cb62639d7-96903556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af71e29d9e36853103db66825f63f23c2b7dae33' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\default\\public\\header.tpl',
      1 => 1403347942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24144537c6cb62639d7-96903556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_537c6cb62793e3_27207814',
  'variables' => 
  array (
    'frontTenNav' => 0,
    'oneFrontNav' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537c6cb62793e3_27207814')) {function content_537c6cb62793e3_27207814($_smarty_tpl) {?><div id="header">
	<h1><a href="./">爱花花</a></h1>
	<?php if ($_COOKIE['user']) {?>
	<p>
		您好，<?php echo $_COOKIE['user'];?>
，欢迎再次光临，<a href="?a=user">个人中心</a> | <a href="?a=cart">购物车</a> | <a href="?a=user&m=loginOut">退出</a>
	</p>
		
		<?php } else { ?>
		<p>
			<a href="?a=user&m=login"><img src="view/default/images/bnt_log.gif"/></a>
			<a href="?a=user&m=reg"><img src="view/default/images/bnt_reg.gif"/></a>
		</p>
	<?php }?>
	
</div>
<div id="nav">
	<ul>
		<?php if (isset($_GET['navid'])) {?>
			<li><a href="./">首页</a></li>
		<?php } else { ?>
			<li><a class="selected" href="./">首页</a></li>
		<?php }?>
		
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontTenNav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if (isset($_smarty_tpl->tpl_vars['oneFrontNav']->value[0]->id)&&$_smarty_tpl->tpl_vars['oneFrontNav']->value[0]->id==$_smarty_tpl->tpl_vars['value']->value->id) {?>
				<li><a class="selected" href="?a=list&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></li>
			<?php } else { ?>
				<li><a href="?a=list&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></li>
			<?php }?>
		<?php } ?>
	</ul>
</div>
<div id="search">
	<form method="post" name="form" action="?a=list&m=searchGoods">
		<select name="way">
			<option value="nav">按类别</option>
			<option value="goods">按商品名称</option>
		</select>
		<input type="text" name="content"/>
		<input type="submit" name="search"/>
	</form>
</div><?php }} ?>
