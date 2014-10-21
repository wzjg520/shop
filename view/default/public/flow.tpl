<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
{include file='default/public/header.tpl'}
<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 购物车
</div>
<div id="cart">
	<h2>商品订单</h2>
	<form method="post" name="flow" action="?a=cart&m=order"> 
	
	<table cellspacing="1">
		<caption>商品列表</caption>
		<tr><th>编号</th><th>名称</th><th>属性</th><th>售价</th><th>数量</th><th>总重量</th><th>小计</th><th>操作</th></tr>
		{assign var=total_sale value=0}
		{assign var=total_weight value=0}
		{foreach from=$frontProduct key=key item=value}
		<tr><td>{$value.sn}</td>
			<td>{$value.name}</td>
		<td>
			{foreach from=$value.attr key=k item=v1}
			{$k}:
				{foreach from=$v1 item=v2}
				{$v2};
				{/foreach}
			{/foreach}
		</td>
		{assign var=total_sale value=$total_sale+$value.price_sale*$value.num}
		{assign var=total_weight value=$total_weight+$value.weight*$value.num}
		<td><strong class="red">￥{$value.price_sale}元</strong></td>
		<td>{$value.num} </td>
		<td>{$value.weight*$value.num}/kg </td>
		<td><strong class="red">￥{$value.price_sale*$value.num}元</strong></td>
		<td><a href="?a=cart&m=deleteProduct&id={$value.id}">删除</a></td></tr>
		{/foreach}
	</table>
	<p><span><a href="?a=cart">返回修改</a> | 商品总价： <strong class="red">￥{$total_sale}元</strong></span></p>
	<table>
		<caption>收货人信息</caption>
		<tr><td width="25%">收货人信息：</td><td width="25%">{$frontUser[0]->name}</td><td width="25%">电子邮件：</td><td width="25%">{$frontUser[0]->email}</td></tr>
		<tr><td>收货人地址：</td><td>{$frontUser[0]->address}</td><td>邮政编码：</td><td>{$frontUser[0]->code}</td></tr>
		<tr><td>手机信息：</td><td>{$frontUser[0]->tel}</td><td>标志性建筑：</td><td>{$frontUser[0]->buildings}</td></tr>
		<tr><td>是否江浙沪：</td><td>{if $frontUser[0]->flag}是{else}否{/if}</td><td>最佳配送时间：</td><td>{$frontUser[0]->time}</td></tr>
	</table>
	<p><a href="?a=user&m=address&id={$frontUser[0]->id}">修改收货人信息</a></p>
	
	
	<table>
		<caption>物流配送信息</caption>
		<tr><th width="10%"></th><th>名称</th><th  width="50%">描述</th><th>起步运费</th></tr>
		{foreach from=$frontDelivery key=key item=value}
		<tr>
			<td><input type="radio" class="delivery" checked="checked" value="{$value->price_in}" add="{$value->price_add}" weight="{$total_weight}" name="delivery"/></td>
			<td>{$value->name}</td><td>{$value->info}</td>
			<td>{$value->price_in}元</td>
		</tr>
		{/foreach}
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
	<p id="total">商品总计：<strong>{$total_sale}</strong>/元 + 物流运费：<strong></strong>/元 + 支付手续费：<strong></strong>/元</p>
	<p>您总共要支付的金额为：<strong class="red price"></strong></p>
	
	<input type="hidden" value="{$smarty.cookies.user}" name="user"/>
	<input type="hidden" value="{$frontUser[0]->name}" name="name"/>
	<input type="hidden" value="{$frontUser[0]->email}" name="email"/>
	<input type="hidden" value="{$frontUser[0]->code}" name="code"/>
	<input type="hidden" value="{$frontUser[0]->address}" name="address"/>
	<input type="hidden" value="{$frontUser[0]->tel}" name="tel"/>
	<input type="hidden" value="{$frontUser[0]->buildings}" name="buildings"/>
	<input type="hidden" value="" class="pay" name="pay"/>
	<input type="hidden" value="" class="form_price" name="price"/>	
	<p style="text-align:center;"><input type="submit" class="submit" name="send" value="" /></p>
	</form>	
</div>
{include file='default/public/footer.tpl'}
</body>
</html>