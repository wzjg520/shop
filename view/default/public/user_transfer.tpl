<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城系统</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/pay.css" />
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	当前位置：<a href="./">首页</a> &gt; 支付宝支付	
</div>

<div id="sidebar">
	<h2>当月热销</h2>
	<div style="margin:0 0 10px 0">
		{foreach from=$hotSale key=key item=value}
		{if  $key<3}
			<dl>
				<dt><a target="_blank" href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img width="100" height="100" src="{$value->thumb_small}"/></a></dt>
				<dd class="price">￥{$value->price_sale}元</dd>
				<dd class="title"><a target="_blank" href="?a=details&navid={$value->nav}&goodsid={$value->id}">{$value->name}</a></dd>
			</dl>
			{/if}
		{/foreach}
	</div>
	<h2>浏览记录</h2>
	<div style="margin:0 0 10px 0">
		{foreach from=$history key=key item=value}
			{if  $key<5}
			<dl>
				<dt><a target="_blank" href="?a=details&navid={$value.navid}&goodsid={$value.goodsid}"><img width="100" height="100" src="{$value.thumb_small}"/></a></dt>
				<dd class="price">￥{$value.price_sale}元</dd>
				<dd class="title"><a target="_blank" href="?a=details&navid={$value.navid}&goodsid={$value.goodsid}">{$value.name}</a></dd>
			</dl>
			{/if}
		{foreachelse}
		<p style="padding:20px;color">暂无历史记录</p>
		{/foreach}
	</div>
</div>

<div id="main">
	<h2>在线支付</h2>
	<div class="pay">
		{if $oneOrder[0]->order_state == '已取消' || $oneOrder[0]->order_pay == '已付款' || $oneOrder[0]->order_delivery == '已配货' || $oneOrder[0]->order_delivery == '已发货'}
		<dl><dd>此订单已被锁定！<input type="button" value="返回" onclick="javascript:history.go(-1);" /></dd></dl>
		{else}
		<dl>
			<dd>订 单 号：{$oneOrder[0]->ordernum}</dd>
			<dd>总 金 额：{$oneOrder[0]->price}/元</dd>
			<dd>订单详情：{$oneOrder[0]->text}</dd>
			<dd>您选择的支付方式为：银行转账/汇款，请安如下要求填写汇款单：</dd>
			<dd><img src="view/default/images/image_pay.jpg" alt="汇款单" /></dd>
			<dd>我们收到汇款后及时为您发货</dd>
		</dl>
		{/if}
	</div>
</div>

{include file='default/public/footer.tpl'}
</body>
</html>