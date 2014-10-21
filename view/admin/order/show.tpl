<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		{if $allOrder}
			{foreach from=$allOrder key=key item=value}
			<tr>
				<td>{$key+1}</td>
				<td><a href="?a=user&m=order_details&id={$value->id}" target="_blank">{$value->ordernum}</a></td>
				<td>{$value->user}</td>
				<td>{$value->date}</td><td>{$value->price}</td>
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
					<a href="?a=order&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
					<a href="?a=order&m=runDelete&id={$value->id}" onclick="return confirm('您确定要删除吗') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
				</td></tr>
			{/foreach}
		{else}
			<tr><td colspan="6">暂时没有数据</td></tr>
		{/if}
	</table>
	<div id="page">{$page}<input type="button" style="cursor:pointer" onclick="javascript:location.href='?a=order&m=clear'" value="清除24小时未确认的订单"/></div>	
</div>

</body>
</html>