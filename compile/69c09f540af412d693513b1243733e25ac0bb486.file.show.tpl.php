<?php /* Smarty version Smarty-3.1.17, created on 2014-06-16 20:32:13
         compiled from "D:\wamp\www\web\shop\view\admin\order\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17198538ece4e4e9250-86818688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69c09f540af412d693513b1243733e25ac0bb486' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\order\\show.tpl',
      1 => 1402921930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17198538ece4e4e9250-86818688',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538ece4e55be91_14659652',
  'variables' => 
  array (
    'allOrder' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538ece4e55be91_14659652')) {function content_538ece4e55be91_14659652($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2>订单 -- 订单列表</h2>
<div id="list">
	<table class="public">
		<tr><th>序号</th><th>订单号</th><th>买家</th><th>下单时间</th><th>总金额</th><th>订单状态</th><th>操作</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allOrder']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allOrder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
				<td><a href="?a=user&m=order_details&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value->ordernum;?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value->user;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->price;?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['value']->value->order_state=='已取消') {?>
						<span class="red">已取消</span>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->order_delivery=='已发货') {?>
							<?php if ($_smarty_tpl->tpl_vars['value']->value->refund==1) {?>
								<span class="red">退款处理中</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['value']->value->refund==2) {?>
								<span class="green">退款成功</span>
							<?php } else { ?>
								<span class="green">已发货，等待收货</span>
							<?php }?>
						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['value']->value->order_delivery=='已配货') {?>
								<?php if ($_smarty_tpl->tpl_vars['value']->value->refund==1) {?>
									<span class="red">退款处理中</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['value']->value->refund==2) {?>
									<span class="green">退款成功</span>
								<?php } else { ?>
									<span class="green">已配货，等待发货</span>
								<?php }?>
							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['value']->value->order_pay=='已付款') {?>
									<?php if ($_smarty_tpl->tpl_vars['value']->value->refund==1) {?>
										<span class="red">退款处理中</span>
									<?php } elseif ($_smarty_tpl->tpl_vars['value']->value->refund==2) {?>
										<span class="green">退款成功</span>
									<?php } else { ?>
										<span class="green">已付款，等待配货</span>
									<?php }?>
								<?php } else { ?>
									<?php if ($_smarty_tpl->tpl_vars['value']->value->order_state=='已确认') {?>
										<span class="green">已确认，等待付款</span>
									<?php } else { ?>
										<span style="color:#666">未确认</span>
									<?php }?>
								<?php }?>
							<?php }?>					
						<?php }?>
					<?php }?>
					</td>
				<td>
					<a href="?a=order&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
					<a href="?a=order&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('您确定要删除吗') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
				</td></tr>
			<?php } ?>
		<?php } else { ?>
			<tr><td colspan="6">暂时没有数据</td></tr>
		<?php }?>
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<input type="button" style="cursor:pointer" onclick="javascript:location.href='?a=order&m=clear'" value="清除24小时未确认的订单"/></div>	
</div>

</body>
</html><?php }} ?>
