<?php /* Smarty version Smarty-3.1.17, created on 2014-10-04 12:28:20
         compiled from "/home/wwwroot/myweb.com/shop/view/default/public/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1208859680542f7764ec9895-87652114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c6b291f4d3b11cf6f50ca657878eeaf9664e328' => 
    array (
      0 => '/home/wwwroot/myweb.com/shop/view/default/public/header.tpl',
      1 => 1403347944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1208859680542f7764ec9895-87652114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontTenNav' => 0,
    'oneFrontNav' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_542f7764ee2065_71270541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542f7764ee2065_71270541')) {function content_542f7764ee2065_71270541($_smarty_tpl) {?><div id="header">
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
