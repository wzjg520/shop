<?php /* Smarty version Smarty-3.1.17, created on 2014-06-14 17:39:56
         compiled from "D:\wamp\www\web\shop\view\default\public\user_order_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19853538ebe39cebb62-06013025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d17e90830cce2bf4235f53e023b2b6739086c68' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\default\\public\\user_order_details.tpl',
      1 => 1402738731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19853538ebe39cebb62-06013025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538ebe39d53573_35463812',
  'variables' => 
  array (
    'oneOrder' => 0,
    'value' => 0,
    'k' => 0,
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538ebe39d53573_35463812')) {function content_538ebe39d53573_35463812($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/user.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<title>ihuahua.cc在线商城</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 个人中心
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/user_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main">
	<h2><a href="?a=user&m=order">[返回订单列表]</a>订单详情</h2>
	<table cellspacing="1">
		<caption>订单状态</caption>
		<tr><th>订单号</th><th>订单状态</th><th>支付状态</th><th>配送状态</th></tr>	
		<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->ordernum;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_pay;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery;?>
</td></tr>		
	</table>
	<table cellspacing="1">
		<caption>商品列表</caption>
		<tr><th>编号</th><th>名称</th><th>属性</th><th>售价</th><th>数量</th><th>小计</th><th>评价</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneOrder']->value[0]->goods; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['sn'];?>
</td>
			<td><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value['navid'];?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></td>
			<td>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
:<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
;<?php } ?>
			<?php } ?>
			</td>
			<td><strong class="red"><?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale'];?>
元</strong></td><td><?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
</td>
			<td><strong class="red"><?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale']*$_smarty_tpl->tpl_vars['value']->value['num'];?>
元</strong></td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery=='已发货') {?>
				<a href="?a=user&m=commend&goods_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&order_id=<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->id;?>
">评价</a>
				<?php } else { ?>
				---
				<?php }?>
				
				
			</td>
			</tr>
		<?php } ?>
	</table>
	<table>
		<caption>收货人信息</caption>
		<tr><td width="25%">收货人姓名：</td><td width="25%"><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->name;?>
</td><td width="25%">电子邮件：</td><td width="25%"><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->email;?>
</td></tr>
		<tr><td>收货人地址：</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->address;?>
</td><td>邮政编码：</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->code;?>
</td></tr>
		<tr><td>手机信息：</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->tel;?>
</td><td>标志性建筑：</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->buildings;?>
</td></tr>
		<tr><td>是否江浙沪：</td><td><?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->flag) {?>是<?php } else { ?>否<?php }?></td><td>最佳配送时间：</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->date;?>
</td></tr>
	</table>
	
	
	<table>
		<caption>物流配送信息</caption>
		<tr><th>配送状态</th><th  width="50%">物流公司</th><th>运单号</th></tr>
		<tr>
			<td><?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery) {?><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery;?>
<?php } else { ?>---<?php }?></td>
			<td><?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery_name) {?><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery_name;?>
<?php } else { ?>---<?php }?></td>
			<td><?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery_num) {?><a href="<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery_url;?>
"><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery_num;?>
</a><?php } else { ?>---<?php }?></td>
		</tr>
	</table>
	<table>
		<caption>支付信息</caption>
		<tr><th>支付状态</th><th  width="50%">支付方式</th><th>总金额</th></tr>
		<tr><td>支付宝</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state;?>
</td><td><strong class="red"><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->price;?>
</strong></strong></td></tr>		
	</table>
	<table cellspacing="1">
		<caption>备注信息</caption>
		<tr><td>备注信息</td><td>缺货处理</td></tr>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->text;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->ps;?>
</td></tr>
	</table>

</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
