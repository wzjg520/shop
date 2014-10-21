<?php /* Smarty version Smarty-3.1.17, created on 2014-06-18 23:44:49
         compiled from "D:\wamp\www\web\shop\view\default\public\compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:973353a18211271f89-25724472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc44c3630adcd76d7d7092f35aa9ac8554905175' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\default\\public\\compare.tpl',
      1 => 1403106287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '973353a18211271f89-25724472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53a182113aff51_36409492',
  'variables' => 
  array (
    'history' => 0,
    'key' => 0,
    'value' => 0,
    'GoodsCompare' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a182113aff51_36409492')) {function content_53a182113aff51_36409492($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/compare.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<title>ihuahua.cc在线商城</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sidebar">
	<h2>浏览记录</h2>
	<div>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?>
			<dl>
				<dt><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value['navid'];?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value['goodsid'];?>
"><img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['thumb_small'];?>
"/></a></dt>
				<dd class="price">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale'];?>
元</dd>
				<dd class="title"><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value['navid'];?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value['goodsid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></dd>
			</dl>
			<?php }?>
		<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
		<p style="padding:10px;text-align:center">暂无历史记录</p>
		<?php } ?>
		<p style="padding:10px;text-align:right"><a href="?a=list&m=clearHistory">清理全部</a></p>
	</div>
</div>
<div id="main">
	<h2>商品列表</h2>
	<div class="pro_list">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GoodsCompare']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<dl>
			<dt><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></a></dt>
			<dd><strong>￥<?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
元</strong> <del>￥<?php echo $_smarty_tpl->tpl_vars['value']->value->price_market;?>
元</del></dd>
			<dd class="title"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</dd>
			<dd>编号：<?php echo $_smarty_tpl->tpl_vars['value']->value->sn;?>
</dd>
			<dd>品牌：<?php echo $_smarty_tpl->tpl_vars['value']->value->brand;?>
</dd>
			<dd>属性：<?php echo $_smarty_tpl->tpl_vars['value']->value->attr;?>
</dd>
			
			<dd>重量<?php echo $_smarty_tpl->tpl_vars['value']->value->weight;?>
/kg</dd>
			<dd>评论：<a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
#commend">已有<?php echo $_smarty_tpl->tpl_vars['value']->value->count;?>
人评价 </a> <span class="green">(销售<?php echo $_smarty_tpl->tpl_vars['value']->value->sale_count;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value->unit;?>
)</span></dd>
			<dd>销量：<a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">购买</a> | <a href="#">收藏</a> | <a href="#">比较</a></dd>
			<dd style="text-align:center"><a href="?a=compare&m=deleteCompare&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">删除此对比商品</a></dd>			
		</dl>
		<?php } ?>
		<div id="page"><a style="padding:5px;" href="?a=compare&m=clearAll">清理全部</a></div>
	</div>
	
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
