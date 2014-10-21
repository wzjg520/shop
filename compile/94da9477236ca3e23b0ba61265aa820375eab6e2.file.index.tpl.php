<?php /* Smarty version Smarty-3.1.17, created on 2014-10-04 12:28:20
         compiled from "/home/wwwroot/myweb.com/shop/view/default/public/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80830780542f7764e0e769-62769126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94da9477236ca3e23b0ba61265aa820375eab6e2' => 
    array (
      0 => '/home/wwwroot/myweb.com/shop/view/default/public/index.tpl',
      1 => 1403500218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80830780542f7764e0e769-62769126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cartGoodsCount' => 0,
    'hotSale' => 0,
    'key' => 0,
    'value' => 0,
    'promoteGoods' => 0,
    'page' => 0,
    'recommendGoods' => 0,
    'allBrand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_542f7764ec6ab0_64596215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542f7764ec6ab0_64596215')) {function content_542f7764ec6ab0_64596215($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/index.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/index.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sidebar">
	<h2>商城公告</h2>
	<div class="box">
		<p>欢迎光临本店,我们竭诚为您服务：</p>
	<marquee onmouseover="this.stop()" onmouseout="this.start()" ><span class="red">我们的联系方式：234234</span></marquee>
	</div>
	<div class="cart">
		您的购物车中有<?php echo $_smarty_tpl->tpl_vars['cartGoodsCount']->value['num'];?>
件商品,总金额共计￥<?php echo $_smarty_tpl->tpl_vars['cartGoodsCount']->value['price'];?>
元
	</div>
	<h2>销售排行</h2>
	<div class="box">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hotSale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?>
			<dl>
				<dt><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></a></dt>
				<dd class="price">￥<?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
元</dd>
				<dd class="title"><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></dd>
			</dl>
		<?php }?>
		<?php } ?>
	</div>	
</div>
<div id="main">
	<div id="banner">
		<img src="view/default/images/advert3.jpg" alt="白玉兰"/>
		<img src="view/default/images/advert4.jpg" alt="桂花"/>
		<img src="view/default/images/advert5.jpg" alt="竹外一支梅--花中君子"/>		
		<ul>
			<li>●</li>
			<li>●</li>
			<li>●</li>
		</ul>
		<span></span>
		<strong></strong>
	</div>
	<h2>欢乐促销</h2>
	<div class="pro_list">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promoteGoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<dl>
			<dt><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></a></dt>
			<dd class="price"><strong>￥<?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
元</strong> <del>￥<?php echo $_smarty_tpl->tpl_vars['value']->value->price_market;?>
元</del></dd>
			<dd class="title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></dd>
			<dd class="commend"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
#commend">已有<?php echo $_smarty_tpl->tpl_vars['value']->value->count;?>
人评价 </a> <span class="green">(销售<?php echo $_smarty_tpl->tpl_vars['value']->value->sale_count;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value->unit;?>
)</span></dd>
			<dd class="buy"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">购买</a> | <a href="?a=user&m=addCollect&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" target="blank">收藏</a> | <a href="?a=compare&m=setCompare&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="javascript:return checkCompare('<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
')" target="blank">比较</a></dd>			
		</dl>
		<?php } ?>
		<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
	</div>
	<h2>店家推荐</h2>
	<div class="pro_list">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['recommendGoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<dl>
			<dt><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></a></dt>
			<dd class="price"><strong>￥<?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
元</strong> <del>￥<?php echo $_smarty_tpl->tpl_vars['value']->value->price_market;?>
元</del></dd>
			<dd class="title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></dd>
			<dd class="commend"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
#commend">已有<?php echo $_smarty_tpl->tpl_vars['value']->value->count;?>
人评价 </a> <span class="green">(销售<?php echo $_smarty_tpl->tpl_vars['value']->value->sale_count;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value->unit;?>
)</span></dd>
			<dd class="buy"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">购买</a> | <a href="?a=user&m=addCollect&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" target="blank">收藏</a> | <a href="?a=compare&m=setCompare&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="javascript:return checkCompare('<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
')" target="blank">比较</a></dd>			
		</dl>
		<?php } ?>
		<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
	</div>
	<h2>品牌联盟</h2>
	<div class="brand">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allBrand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value->url;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></li>
			<?php } ?>
		</ul>
	</div>
</div>
<p class="clear"></p>

<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>

</html><?php }} ?>
