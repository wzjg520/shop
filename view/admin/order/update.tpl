<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		<tr><td>{$oneOrder[0]->ordernum}</td><td>{$oneOrder[0]->date}</td></tr>
	</table>
	
	<!--商品信息-->
	<table class="public">
		<caption style="padding:10px">商品列表</caption>
		<tr><th>序号</th><th>名称</th><th>属性</th><th>售价</th><th>数量</th><th>小计</th></tr>
		{if $oneOrder}
			{foreach from=$oneOrder[0]->goods key=key item=value}
			<tr><td>{$value.sn}</td><td>{$value.name}</td>
			<td>
			{foreach from=$value.attr key=k item=v}
				{$k}:{foreach from=$v key=kk item=vv}{$vv};{/foreach}
			{/foreach}
			</td>
			<td><strong class="red">{$value.price_sale}元</strong></td><td>{$value.num}</td>
			<td><strong class="red">{$value.price_sale*$value.num}元</strong></td>
			<td>
			</tr>
			{/foreach}
		{else}
			<tr><td colspan="6">暂时没有数据</td></tr>
		{/if}
	</table>
	<!--个人信息-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">用户信息</caption>
		<tr><th>用户名</th><th>收货人</th><th>电子邮件</th></tr>
		<tr><td>{$oneOrder[0]->user}</td><td>{$oneOrder[0]->name}</td><td>{$oneOrder[0]->email}</td></tr>
	</table>
	<!--送货信息-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">送货信息</caption>
		<tr><th>邮政编码</th><th>手机号码</th><th>标志性建筑</th><th>收货地址</th></tr>
		<tr><td>{$oneOrder[0]->code}</td><td>{$oneOrder[0]->tel}</td><td>{$oneOrder[0]->buildings}</td><td>{$oneOrder[0]->address}</td></tr>
	</table>
	<!--支付信息-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">支付信息</caption>
		<tr><th>物流方式</th><th>支付方式</th><th>费用</th></tr>
		<tr><td>{$oneOrder[0]->delivery}</td><td>{$oneOrder[0]->tel}</td><td><span class="red">{$oneOrder[0]->price}/元</span></td></tr>
	</table>
	<!--备注信息-->
	<table class="public">
		<caption style="padding:10px">备注信息</caption>
		<tr><th>备注信息</th><th>缺货处理</th></tr>
		<tr><td>{$oneOrder[0]->text}</td><td>{$oneOrder[0]->ps}</td></tr>
	</table>
	<form method="post" action="?a=order&m=runUpdate&id={$oneOrder[0]->id}" name="update" id="updateForm">
		<input type="hidden" name="prev_url" value="{$prev_url}"/>
		<input type="hidden" name="is_record" value="{$oneOrder[0]->is_record}"/>
		<input type="hidden" name="user" value="{$oneOrder[0]->user}"/>
		{foreach from=$oneOrder[0]->goods key=key item=value}
			<input type="hidden" name="goods_id[{$key}]" value="{$key}"/>
			<input type="hidden" name="goods_num[{$key}]" value="{$value.num}"/>
			<input type="hidden" name="goods_name[{$key}]" value="{$value.name}"/>
			<input type="hidden" name="goods_price_sale[{$key}]" value="{$value.price_sale}"/>
			<input type="hidden" name="goods_attr[{$key}]" value="{foreach from=$value.attr key=k item=v}{$k}:{foreach from=$v key=kk item=vv}{$vv};{/foreach}{/foreach}"/>{/foreach}		
		<dl class="form">
			{if $oneOrder[0]->order_state=='已取消'}
				<dd class="red">此订单已取消，可以删除</dd>
			{else}
			<dd>订单状态：
				<label><input type="radio" {if $oneOrder[0]->order_state=='未确认'}checked="checked"{/if} name="order_state" value="未确认"/> 未确认</label>
				<label><input type="radio" {if $oneOrder[0]->order_state=='已确认'}checked="checked"{/if} name="order_state" value="已确认"/> 已确认</label>
				<label><input type="radio" {if $oneOrder[0]->order_state=='已取消'}checked="checked"{/if} name="order_state" value="已取消"/> 已取消</label>
			</dd>
			<dd>支付状态：
				<label><input type="radio" {if $oneOrder[0]->order_pay=='未付款'}checked="checked"{/if} name="order_pay" value="未付款"/> 未付款</label>
				<label><input type="radio" {if $oneOrder[0]->order_pay=='已付款'}checked="checked"{/if} name="order_pay" value="已付款"/> 已付款</label>
			</dd>
			<dd>配送状态：
				<label><input type="radio" {if $oneOrder[0]->order_delivery=='未发货'}checked="checked"{/if} name="order_delivery" value="未发货"/> 未发货</label>
				<label><input type="radio" {if $oneOrder[0]->order_delivery=='已配货'}checked="checked"{/if} name="order_delivery" value="已配货"/> 已配货</label>
				<label><input type="radio" {if $oneOrder[0]->order_delivery=='已发货'}checked="checked"{/if} name="order_delivery" value="已发货"/> 已发货</label>
			</dd>
			<dd>物流配送：<select id="delivery" name="delivery">
					<option>--请选择一个物流公司</option>
					{foreach from=$allDelivery key=key item=value}
						{if $oneOrder[0]->delivery==$value->name}
						<option url="{$value->url}" selected="selected" value="{$value->name}">{$value->name}</option>
						{else}
						<option url="{$value->url}" value="{$value->name}">{$value->name}</option>
						{/if}
						
					{/foreach}
				</select><input id="url" name="delivery_url" type="hidden"/>
				
			</dd>
			<dd>运 单 号：<input type="text" name="delivery_num" value="{$oneOrder[0]->delivery_num}" class="text"/></dd>
			{if $oneOrder[0]->refund==1}
				<dd>
					<label><span class="red">此订单正在申请退款处理中，如确认无误请勾选：</span><input type="checkbox" name="refund" value="2"/></label>
				</dd>
			{elseif $oneOrder[0]->refund==2}
				<dd>
					<span class="green">此订单已退款成功</span>
				</dd>
			{/if}
			<dd><input type="submit" name="send" value="修改订单"/></dd>
			{/if}
			
			
		</dl>
		
	</form>
</div>

</body>
</html>