<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/user.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<title>ihuahua.cc在线商城</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 个人中心
</div>
{include file='default/public/user_sidebar.tpl'}
<div id="main">
	<h2><a href="?a=user&m=order">[返回订单列表]</a>订单详情</h2>
	<table cellspacing="1">
		<caption>订单状态</caption>
		<tr><th>订单号</th><th>订单状态</th><th>支付状态</th><th>配送状态</th></tr>	
		<tr><td>{$oneOrder[0]->ordernum}</td><td>{$oneOrder[0]->order_state}</td><td>{$oneOrder[0]->order_pay}</td><td>{$oneOrder[0]->order_delivery}</td></tr>		
	</table>
	<table cellspacing="1">
		<caption>商品列表</caption>
		<tr><th>编号</th><th>名称</th><th>属性</th><th>售价</th><th>数量</th><th>小计</th><th>评价</th></tr>
		{foreach from=$oneOrder[0]->goods key=key item=value}
			<tr><td>{$value.sn}</td>
			<td><a href="?a=details&navid={$value.navid}&goodsid={$value.id}" target="_blank">{$value.name}</a></td>
			<td>
			{foreach from=$value.attr key=k item=v}
				{$k}:{foreach from=$v key=kk item=vv}{$vv};{/foreach}
			{/foreach}
			</td>
			<td><strong class="red">{$value.price_sale}元</strong></td><td>{$value.num}</td>
			<td><strong class="red">{$value.price_sale*$value.num}元</strong></td>
			<td>
				{if $oneOrder[0]->order_delivery=='已发货'}
				<a href="?a=user&m=commend&goods_id={$value.id}&order_id={$oneOrder[0]->id}">评价</a>
				{else}
				---
				{/if}
				
				
			</td>
			</tr>
		{/foreach}
	</table>
	<table>
		<caption>收货人信息</caption>
		<tr><td width="25%">收货人姓名：</td><td width="25%">{$oneOrder[0]->name}</td><td width="25%">电子邮件：</td><td width="25%">{$oneOrder[0]->email}</td></tr>
		<tr><td>收货人地址：</td><td>{$oneOrder[0]->address}</td><td>邮政编码：</td><td>{$oneOrder[0]->code}</td></tr>
		<tr><td>手机信息：</td><td>{$oneOrder[0]->tel}</td><td>标志性建筑：</td><td>{$oneOrder[0]->buildings}</td></tr>
		<tr><td>是否江浙沪：</td><td>{if $oneOrder[0]->flag}是{else}否{/if}</td><td>最佳配送时间：</td><td>{$oneOrder[0]->date}</td></tr>
	</table>
	
	
	<table>
		<caption>物流配送信息</caption>
		<tr><th>配送状态</th><th  width="50%">物流公司</th><th>运单号</th></tr>
		<tr>
			<td>{if $oneOrder[0]->order_delivery}{$oneOrder[0]->order_delivery}{else}---{/if}</td>
			<td>{if $oneOrder[0]->delivery_name}{$oneOrder[0]->delivery_name}{else}---{/if}</td>
			<td>{if $oneOrder[0]->delivery_num}<a href="{$oneOrder[0]->delivery_url}">{$oneOrder[0]->delivery_num}</a>{else}---{/if}</td>
		</tr>
	</table>
	<table>
		<caption>支付信息</caption>
		<tr><th>支付状态</th><th  width="50%">支付方式</th><th>总金额</th></tr>
		<tr><td>支付宝</td><td>{$oneOrder[0]->order_state}</td><td><strong class="red">{$oneOrder[0]->price}</strong></strong></td></tr>		
	</table>
	<table cellspacing="1">
		<caption>备注信息</caption>
		<tr><td>备注信息</td><td>缺货处理</td></tr>
		<tr><td>{$oneOrder[0]->text}</td><td>{$oneOrder[0]->ps}</td></tr>
	</table>

</div>
{include file='default/public/footer.tpl'}
</body>
</html>