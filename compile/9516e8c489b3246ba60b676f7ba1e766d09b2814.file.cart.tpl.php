<?php /* Smarty version Smarty-3.1.17, created on 2014-06-09 14:54:36
         compiled from "D:\wamp\www\web\shop\view\default\public\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296935389a0774b37e0-72192032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9516e8c489b3246ba60b676f7ba1e766d09b2814' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\default\\public\\cart.tpl',
      1 => 1402296842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296935389a0774b37e0-72192032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5389a0774fb1e7_52442461',
  'variables' => 
  array (
    'frontProduct' => 0,
    'value' => 0,
    'k' => 0,
    'v1' => 0,
    'v2' => 0,
    'total_sale' => 0,
    'total_market' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5389a0774fb1e7_52442461')) {function content_5389a0774fb1e7_52442461($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/cart.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/cart.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 购物车
</div>
<div id="cart">
	<h2>商品列表</h2>	
	<table cellspacing="1">
		<tr><th>商品名称</th><th>属性</th><th>本店价</th><th>市场价</th><th>购买数量</th><th>小计</th><th>操作</th></tr>
		<?php $_smarty_tpl->tpl_vars['total_sale'] = new Smarty_variable(0, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['total_market'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontProduct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
		<td>
			<?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
			<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
:
				<?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value) {
$_smarty_tpl->tpl_vars['v2']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['v2']->value;?>
;
				<?php } ?>
			<?php } ?>
		</td>
		<?php $_smarty_tpl->tpl_vars['total_sale'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_sale']->value+$_smarty_tpl->tpl_vars['value']->value['price_sale']*$_smarty_tpl->tpl_vars['value']->value['num'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['total_market'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_market']->value+$_smarty_tpl->tpl_vars['value']->value['price_market']*$_smarty_tpl->tpl_vars['value']->value['num'], null, 0);?>
		<td><strong class="red">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale'];?>
元</strong></td>
		<td>￥<?php echo $_smarty_tpl->tpl_vars['value']->value['price_market'];?>
元</td>
		<td><input goodsid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
" class="num"/></td>
		<td><strong class="red">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale']*$_smarty_tpl->tpl_vars['value']->value['num'];?>
元</strong></td>
		<td><a href="?a=cart&m=deleteProduct&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a></td></tr>
		<?php } ?>
	</table>
	<p>购物金额小计 <strong class="red">￥<?php echo $_smarty_tpl->tpl_vars['total_sale']->value;?>
元</strong>，比市场价 <strong class="red">￥<?php echo $_smarty_tpl->tpl_vars['total_market']->value;?>
元</strong> 节省了 <strong class="red">￥<?php echo $_smarty_tpl->tpl_vars['total_market']->value-$_smarty_tpl->tpl_vars['total_sale']->value;?>
元</strong> <span><a href="?a=cart&m=clearProduct">清空购物车</a> | <a href="./">继续购物</a></span></p>
	<div><a href="?a=cart&m=flow"><img src="view/default/images/checkout.gif"/></a></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
