<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/cart.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/cart.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 购物车
</div>
<div id="cart">
	<h2>商品列表</h2>	
	<table cellspacing="1">
		<tr><th>商品名称</th><th>属性</th><th>本店价</th><th>市场价</th><th>购买数量</th><th>小计</th><th>操作</th></tr>
		{assign var=total_sale value=0}
		{assign var=total_market value=0}
		{foreach from=$frontProduct key=key item=value}
		<tr><td>{$value.name}</td>
		<td>
			{foreach from=$value.attr key=k item=v1}
			{$k}:
				{foreach from=$v1 item=v2}
				{$v2};
				{/foreach}
			{/foreach}
		</td>
		{assign var=total_sale value=$total_sale+$value.price_sale*$value.num}
		{assign var=total_market value=$total_market+$value.price_market*$value.num}
		<td><strong class="red">￥{$value.price_sale}元</strong></td>
		<td>￥{$value.price_market}元</td>
		<td><input goodsid="{$value.id}"type="text" value="{$value.num}" class="num"/></td>
		<td><strong class="red">￥{$value.price_sale*$value.num}元</strong></td>
		<td><a href="?a=cart&m=deleteProduct&id={$value.id}">删除</a></td></tr>
		{/foreach}
	</table>
	<p>购物金额小计 <strong class="red">￥{$total_sale}元</strong>，比市场价 <strong class="red">￥{$total_market}元</strong> 节省了 <strong class="red">￥{$total_market-$total_sale}元</strong> <span><a href="?a=cart&m=clearProduct">清空购物车</a> | <a href="./">继续购物</a></span></p>
	<div><a href="?a=cart&m=flow"><img src="view/default/images/checkout.gif"/></a></div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>