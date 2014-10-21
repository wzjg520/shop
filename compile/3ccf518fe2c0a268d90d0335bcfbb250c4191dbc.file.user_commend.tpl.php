<?php /* Smarty version Smarty-3.1.17, created on 2014-06-16 21:26:15
         compiled from "D:\wamp\www\web\shop\view\default\public\user_commend.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12671539c07e3c3cb55-50312071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ccf518fe2c0a268d90d0335bcfbb250c4191dbc' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\default\\public\\user_commend.tpl',
      1 => 1402925172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12671539c07e3c3cb55-50312071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539c07e3ca04f4_99752621',
  'variables' => 
  array (
    'oneGoods' => 0,
    'key' => 0,
    'value' => 0,
    'v' => 0,
    'oneCommend' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539c07e3ca04f4_99752621')) {function content_539c07e3ca04f4_99752621($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城系统</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/user_commend.css" />
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	当前位置：<a href="./">首页</a> &gt; 支付宝支付	
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/user_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<form method="post" action="?a=user&m=commend">
	<input type="hidden" name="goods_id" value="<?php echo $_GET['goods_id'];?>
"/>
	<input type="hidden" name="order_id" value="<?php echo $_GET['order_id'];?>
"/>
	<input type="hidden" name="attr" value="<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneGoods']->value['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php } ?>;<?php } ?>"/>
	<div id="main">
		<h2>商品评论</h2>
		<div class="commend">
			<a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value['navid'];?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value['id'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value['thumb_small'];?>
"/></a>
			
			<dl>
				<dt><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value['name'];?>
</dt>
				<dd>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneGoods']->value['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<p><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
：<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
<?php } ?></p>
					<?php } ?>
				</dd>
				<?php if ($_smarty_tpl->tpl_vars['oneCommend']->value) {?>
				<dd>评分：
						<?php if ($_smarty_tpl->tpl_vars['oneCommend']->value[0]->star==5) {?><span class="star">★★★★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['oneCommend']->value[0]->star==4) {?><span class="star">★★★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['oneCommend']->value[0]->star==3) {?><span class="star">★★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['oneCommend']->value[0]->star==2) {?><span class="star">★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['oneCommend']->value[0]->star==1) {?><span class="star">★</span><?php }?>
				</dd>
			<dd class="content">评　　论：<?php echo $_smarty_tpl->tpl_vars['oneCommend']->value[0]->content;?>
</dd>
			<?php if ($_smarty_tpl->tpl_vars['oneCommend']->value[0]->re_content) {?>
			<dd><span class="red">商家回复：<?php echo $_smarty_tpl->tpl_vars['oneCommend']->value[0]->re_content;?>
</span></dd>
			<?php }?>
			<dd><a href="?a=user&m=order_details&id=<?php echo $_GET['order_id'];?>
">[返回订单]</a></dd>
				<?php } else { ?>
				<dd>评　　分：
					<label for="star5"><input type="radio" id="star5" name="star" value="5" checked="checked" /> <span class="star">★★★★★</span></label>
					<label for="star4"><input type="radio" name="star" id="star4" value="4" /> <span class="star">★★★★</span></label>
					<label for="star3"><input type="radio" name="star" id="star3" value="3" /> <span class="star">★★★</span></label>
					<label for="star2"><input type="radio" name="star" id="star2" value="2" /> <span class="star">★★</span></label>
					<label for="star1"><input type="radio" name="star" id="star1" value="1" /> <span class="star">★</span></label>
				</dd>
				<dd><textarea name="content"></textarea></dd>
				<dd><input type="submit" name="send" value="提交评论"/></dd>
				<?php }?>
				
			</dl>
			<p class="clear"></p>		
		</div>
	</div>
</form>

<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
