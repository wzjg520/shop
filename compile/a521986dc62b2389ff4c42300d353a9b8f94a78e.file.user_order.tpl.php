<?php /* Smarty version Smarty-3.1.17, created on 2014-10-19 11:27:41
         compiled from "/home/wwwroot/myweb.com/shop/view/default/public/user_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14610746454432fad5f21d2-21919095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a521986dc62b2389ff4c42300d353a9b8f94a78e' => 
    array (
      0 => '/home/wwwroot/myweb.com/shop/view/default/public/user_order.tpl',
      1 => 1402563030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14610746454432fad5f21d2-21919095',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allOrder' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54432fad63e038_32436052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54432fad63e038_32436052')) {function content_54432fad63e038_32436052($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/user.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 个人中心
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/user_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main">	
	<h2><a href="?a=cart">[去结算中心]</a>订单列表</h2>
	<table>
		<tr><th>订单号</th><th>下单时间</th><th>总金额</th><th>订单状态</th><th>操作</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allOrder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr><td><a href="?a=user&m=order_details&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->ordernum;?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price;?>
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
			<?php if ($_smarty_tpl->tpl_vars['value']->value->order_delivery=='已配货'||$_smarty_tpl->tpl_vars['value']->value->order_state=='已取消'||$_smarty_tpl->tpl_vars['value']->value->order_pay=='已付款') {?>	
				<?php if ($_smarty_tpl->tpl_vars['value']->value->order_state=='已取消'||$_smarty_tpl->tpl_vars['value']->value->refund==2) {?>
				<a href="?a=user&m=deleteOrder&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('您确定要删除吗') ? true : false">删除</a>
				<?php } elseif ($_smarty_tpl->tpl_vars['value']->value->refund=='0') {?>
				<a href="?a=user&m=refund&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('申请退款须知：\n\n1.已付款、已配货或已发货可申请退款；\n2.已付款或已配货的 72 小时确认退款；\n3.已发货的请寄回物品后 72 小时确认退款；\n\n您真的要申请退款吗？') ? true : false">申请退款</a> 
				<?php } else { ?>
				----
				<?php }?>
			<?php } else { ?>
				<a href="">在线支付</a> | 
				<a href="?a=user&m=cancel&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('您确定要取消吗') ? true : false">取消</a> 
			<?php }?>
		
		</td></tr>
		<?php } ?>
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
