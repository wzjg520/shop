<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/user.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 个人中心
</div>
<div id="shop_main">
{include file='default/public/user_sidebar.tpl'}
<div id="main">	
	<h2><a href="?a=cart">[去结算中心]</a>订单列表</h2>
	<table>
		<tr><th>订单号</th><th>下单时间</th><th>总金额</th><th>订单状态</th><th>操作</th></tr>
		{foreach from=$allOrder key=key item=value}
		<tr><td><a href="?a=user&m=order_details&id={$value->id}">{$value->ordernum}</a></td>
		<td>{$value->date}</td>
		<td>{$value->price}</td>
		<td>
			{if  $value->order_state=='已取消'}
						<span class="red">已取消</span>
					{else}
						{if $value->order_delivery=='已发货'}
							{if $value->refund==1}
								<span class="red">退款处理中</span>
							{elseif $value->refund==2}
								<span class="green">退款成功</span>
							{else}
								<span class="green">已发货，等待收货</span>
							{/if}							
						{else}
							{if $value->order_delivery=='已配货'}
								{if $value->refund==1}
									<span class="red">退款处理中</span>
								{elseif $value->refund==2}
									<span class="green">退款成功</span>
								{else}
									<span class="green">已配货，等待发货</span>
								{/if}							
							{else}
								{if $value->order_pay=='已付款'}	
									{if $value->refund==1}
										<span class="red">退款处理中</span>
									{elseif $value->refund==2}
										<span class="green">退款成功</span>
									{else}
										<span class="green">已付款，等待配货</span>
									{/if}																	
														
								{else}
									{if $value->order_state=='已确认'}
										<span class="green">已确认，等待付款</span>
									{else}
										<span style="color:#666">未确认</span>
									{/if}
								{/if}
							{/if}					
						{/if}
					{/if}
		</td>
		<td>
			{if $value->order_delivery=='已配货' || $value->order_state=='已取消' || $value->order_pay=='已付款'}	
				{if $value->order_state=='已取消' || $value->refund==2}
				<a href="?a=user&m=deleteOrder&id={$value->id}" onclick="return confirm('您确定要删除吗') ? true : false">删除</a>
				{elseif $value->refund=='0'}
				<a href="?a=user&m=refund&id={$value->id}" onclick="return confirm('申请退款须知：\n\n1.已付款、已配货或已发货可申请退款；\n2.已付款或已配货的 72 小时确认退款；\n3.已发货的请寄回物品后 72 小时确认退款；\n\n您真的要申请退款吗？') ? true : false">申请退款</a> 
				{else}
				----
				{/if}
			{else}
				<a href="?a=cart">在线支付</a> | 
				<a href="?a=user&m=cancel&id={$value->id}" onclick="return confirm('您确定要取消吗') ? true : false">取消</a> 
			{/if}
		
		</td></tr>
		{/foreach}
	</table>
	<div id="page">{$page}</div>
</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>