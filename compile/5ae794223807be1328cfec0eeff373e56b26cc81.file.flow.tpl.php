<?php /* Smarty version Smarty-3.1.17, created on 2014-07-01 14:43:43
         compiled from "D:\wamp\www\web\shop\view\default\public\flow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11752538adbf927f469-53950337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ae794223807be1328cfec0eeff373e56b26cc81' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\default\\public\\flow.tpl',
      1 => 1404197018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11752538adbf927f469-53950337',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538adbf930ecc5_83225903',
  'variables' => 
  array (
    'frontProduct' => 0,
    'value' => 0,
    'k' => 0,
    'v1' => 0,
    'v2' => 0,
    'total_sale' => 0,
    'total_weight' => 0,
    'frontUser' => 0,
    'frontDelivery' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538adbf930ecc5_83225903')) {function content_538adbf930ecc5_83225903($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/flow.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/flow.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 购物车
</div>
<div id="cart">
	<h2>商品订单</h2>
	<form method="post" name="flow" action="?a=cart&m=order"> 
	
	<table cellspacing="1">
		<caption>商品列表</caption>
		<tr><th>编号</th><th>名称</th><th>属性</th><th>售价</th><th>数量</th><th>总重量</th><th>小计</th><th>操作</th></tr>
		<?php $_smarty_tpl->tpl_vars['total_sale'] = new Smarty_variable(0, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['total_weight'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontProduct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['sn'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
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
		<?php $_smarty_tpl->tpl_vars['total_weight'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_weight']->value+$_smarty_tpl->tpl_vars['value']->value['weight']*$_smarty_tpl->tpl_vars['value']->value['num'], null, 0);?>
		<td><strong class="red">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale'];?>
元</strong></td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
 </td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['weight']*$_smarty_tpl->tpl_vars['value']->value['num'];?>
/kg </td>
		<td><strong class="red">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale']*$_smarty_tpl->tpl_vars['value']->value['num'];?>
元</strong></td>
		<td><a href="?a=cart&m=deleteProduct&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a></td></tr>
		<?php } ?>
	</table>
	<p><span><a href="?a=cart">返回修改</a> | 商品总价： <strong class="red">￥<?php echo $_smarty_tpl->tpl_vars['total_sale']->value;?>
元</strong></span></p>
	<table>
		<caption>收货人信息</caption>
		<tr><td width="25%">收货人信息：</td><td width="25%"><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->name;?>
</td><td width="25%">电子邮件：</td><td width="25%"><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->email;?>
</td></tr>
		<tr><td>收货人地址：</td><td><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->address;?>
</td><td>邮政编码：</td><td><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->code;?>
</td></tr>
		<tr><td>手机信息：</td><td><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->tel;?>
</td><td>标志性建筑：</td><td><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->buildings;?>
</td></tr>
		<tr><td>是否江浙沪：</td><td><?php if ($_smarty_tpl->tpl_vars['frontUser']->value[0]->flag) {?>是<?php } else { ?>否<?php }?></td><td>最佳配送时间：</td><td><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->time;?>
</td></tr>
	</table>
	<p><a href="?a=user&m=address&id=<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->id;?>
">修改收货人信息</a></p>
	
	
	<table>
		<caption>物流配送信息</caption>
		<tr><th width="10%"></th><th>名称</th><th  width="50%">描述</th><th>起步运费</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontDelivery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr>
			<td><input type="radio" class="delivery" checked="checked" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->price_in;?>
" add="<?php echo $_smarty_tpl->tpl_vars['value']->value->price_add;?>
" weight="<?php echo $_smarty_tpl->tpl_vars['total_weight']->value;?>
" name="delivery"/></td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->info;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_in;?>
元</td>
		</tr>
		<?php } ?>
		<tr><td colspan="4">总运费：<strong class="show_delivery"></strong>/元</td></tr>
	</table>
	<p>您要支付的总运费为：<strong class="red price_delivery">12/元</strong></p>
	<table>
		<caption>支付方式</caption>
		<tr><th width="10%"></th><th>名称</th><th  width="50%">描述</th><th>手续费</th></tr>
		<tr><th><input type="radio" checked="checked" value="0"  class="pay_way" name="pay_way" title="支付宝"/><td>支付宝</td><td>通过支付宝在线付款</td><td>0元</td></tr>
		<tr><th><input type="radio"  value="2" class="pay_way"  name="pay_way"  title="银行转账" /><td>银行转账</td><td>通过转账汇款，联系客服，提供汇款清单和商品订单号</td><td>2元</td></tr>
		<tr><th><input type="radio"  value="0" class="pay_way"  name="pay_way" title="货到付款" /><td>货到付款</td><td>通过配送人员，送货上门，收取费用</td><td>0元</td></tr>	
	</table>
	<p>您要支付的手续费为：<strong class="price_pay">12/元</strong></p>
	<table cellspacing="1">
		<caption>备注信息</caption>
		<tr><td width="30%"><strong>订单备注：</strong></td><td><textarea name="text"></textarea></td></tr>
		<tr><td><strong>缺货处理：</strong></td>
		<td>
			<label><input name="ps" checked="checked" value="等货物齐全再发货" type="radio" name=""/>等货物齐全再发货</label>
			<label><input name="ps" value="先发有货的" type="radio" name="ps"/>先发有货的</label>
			<label><input name="ps" value="取消订单" type="radio" name="ps"/>取消订单</label>
		</td></tr>
	</table>
	<p id="total">商品总计：<strong><?php echo $_smarty_tpl->tpl_vars['total_sale']->value;?>
</strong>/元 + 物流运费：<strong></strong>/元 + 支付手续费：<strong></strong>/元</p>
	<p>您总共要支付的金额为：<strong class="red price"></strong></p>
	
	<input type="hidden" value="<?php echo $_COOKIE['user'];?>
" name="user"/>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->name;?>
" name="name"/>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->email;?>
" name="email"/>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->code;?>
" name="code"/>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->address;?>
" name="address"/>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->tel;?>
" name="tel"/>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->buildings;?>
" name="buildings"/>
	<input type="hidden" value="" class="pay" name="pay"/>
	<input type="hidden" value="" class="form_price" name="price"/>	
	<p style="text-align:center;"><input type="submit" class="submit" name="send" value="" /></p>
	</form>	
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
