<?php /* Smarty version Smarty-3.1.17, created on 2014-06-17 16:48:06
         compiled from "D:\wamp\www\web\shop\view\admin\order\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20572538ed5140917a6-05475848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e05de36ff9499964d4f9bae0e67a7124b2f3b7ec' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\order\\update.tpl',
      1 => 1402994818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20572538ed5140917a6-05475848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538ed5140fb539_27629500',
  'variables' => 
  array (
    'oneOrder' => 0,
    'value' => 0,
    'k' => 0,
    'v' => 0,
    'vv' => 0,
    'prev_url' => 0,
    'key' => 0,
    'allDelivery' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538ed5140fb539_27629500')) {function content_538ed5140fb539_27629500($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/order.js"></script>
</head>
<body>
<h2><a href="?a=order">返回订单列表</a>订单 -- 订单列表</h2>
<div id="list">
	<!--订单信息-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">订单信息</caption>
		<tr><th>订单编号</th><th>下单时间</th></tr>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->ordernum;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->date;?>
</td></tr>
	</table>
	
	<!--商品信息-->
	<table class="public">
		<caption style="padding:10px">商品列表</caption>
		<tr><th>序号</th><th>名称</th><th>属性</th><th>售价</th><th>数量</th><th>小计</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['oneOrder']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneOrder']->value[0]->goods; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['sn'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
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
			</tr>
			<?php } ?>
		<?php } else { ?>
			<tr><td colspan="6">暂时没有数据</td></tr>
		<?php }?>
	</table>
	<!--个人信息-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">用户信息</caption>
		<tr><th>用户名</th><th>收货人</th><th>电子邮件</th></tr>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->user;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->email;?>
</td></tr>
	</table>
	<!--送货信息-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">送货信息</caption>
		<tr><th>邮政编码</th><th>手机号码</th><th>标志性建筑</th><th>收货地址</th></tr>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->code;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->tel;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->buildings;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->address;?>
</td></tr>
	</table>
	<!--支付信息-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">支付信息</caption>
		<tr><th>物流方式</th><th>支付方式</th><th>费用</th></tr>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->tel;?>
</td><td><span class="red"><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->price;?>
/元</span></td></tr>
	</table>
	<!--备注信息-->
	<table class="public">
		<caption style="padding:10px">备注信息</caption>
		<tr><th>备注信息</th><th>缺货处理</th></tr>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->text;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->ps;?>
</td></tr>
	</table>
	<form method="post" action="?a=order&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->id;?>
" name="update" id="updateForm">
		<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
"/>
		<input type="hidden" name="is_record" value="<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->is_record;?>
"/>
		<input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->user;?>
"/>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneOrder']->value[0]->goods; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<input type="hidden" name="goods_id[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"/>
			<input type="hidden" name="goods_num[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
"/>
			<input type="hidden" name="goods_name[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
"/>
			<input type="hidden" name="goods_price_sale[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale'];?>
"/>
			<input type="hidden" name="goods_attr[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
:<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
;<?php } ?><?php } ?>"/><?php } ?>		
		<dl class="form">
			<?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state=='已取消') {?>
				<dd class="red">此订单已取消，可以删除</dd>
			<?php } else { ?>
			<dd>订单状态：
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state=='未确认') {?>checked="checked"<?php }?> name="order_state" value="未确认"/> 未确认</label>
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state=='已确认') {?>checked="checked"<?php }?> name="order_state" value="已确认"/> 已确认</label>
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state=='已取消') {?>checked="checked"<?php }?> name="order_state" value="已取消"/> 已取消</label>
			</dd>
			<dd>支付状态：
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_pay=='未付款') {?>checked="checked"<?php }?> name="order_pay" value="未付款"/> 未付款</label>
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_pay=='已付款') {?>checked="checked"<?php }?> name="order_pay" value="已付款"/> 已付款</label>
			</dd>
			<dd>配送状态：
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery=='未发货') {?>checked="checked"<?php }?> name="order_delivery" value="未发货"/> 未发货</label>
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery=='已配货') {?>checked="checked"<?php }?> name="order_delivery" value="已配货"/> 已配货</label>
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery=='已发货') {?>checked="checked"<?php }?> name="order_delivery" value="已发货"/> 已发货</label>
			</dd>
			<dd>物流配送：<select id="delivery" name="delivery">
					<option>--请选择一个物流公司</option>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allDelivery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery==$_smarty_tpl->tpl_vars['value']->value->name) {?>
						<option url="<?php echo $_smarty_tpl->tpl_vars['value']->value->url;?>
" selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</option>
						<?php } else { ?>
						<option url="<?php echo $_smarty_tpl->tpl_vars['value']->value->url;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</option>
						<?php }?>
						
					<?php } ?>
				</select><input id="url" name="delivery_url" type="hidden"/>
				
			</dd>
			<dd>运 单 号：<input type="text" name="delivery_num" value="<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery_num;?>
" class="text"/></dd>
			<?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->refund==1) {?>
				<dd>
					<label><span class="red">此订单正在申请退款处理中，如确认无误请勾选：</span><input type="checkbox" name="refund" value="2"/></label>
				</dd>
			<?php } elseif ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->refund==2) {?>
				<dd>
					<span class="green">此订单已退款成功</span>
				</dd>
			<?php }?>
			<dd><input type="submit" name="send" value="修改订单"/></dd>
			<?php }?>
			
			
		</dl>
		
	</form>
</div>

</body>
</html><?php }} ?>
