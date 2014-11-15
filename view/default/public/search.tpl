<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/list.js"></script>

<title>ihuahua.cc在线商城</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	当前位置：<a href="./">首页</a> 
	&gt; 搜索列表
</div>
<div id="shop_main">
	<div id="sidebar">
		<h2>当月热销</h2>
		<div>
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
		<div>
			{foreach from=$history key=key item=value}
				{if  $key<5}
				<dl>
					<dt><a target="_blank" href="?a=details&navid={$value.navid}&goodsid={$value.goodsid}"><img width="100" height="100" src="{$value.thumb_small}"/></a></dt>
					<dd class="price">￥{$value.price_sale}元</dd>
					<dd class="title"><a target="_blank" href="?a=details&navid={$value.navid}&goodsid={$value.goodsid}">{$value.name}</a></dd>
				</dl>
				{/if}
			{foreachelse}
			<p style="padding:10px;text-align:center">暂无历史记录</p>
			{/foreach}
			<p style="padding:10px;text-align:right"><a href="?a=list&m=clearHistory">清理全部</a></p>
		</div>
	</div>
	<div id="main">
		<h2>搜索列表</h2>
		<div class="pro_list">
			{foreach from=$listGoods key=key item=value}
			<dl>
				<dt><a href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img src="{$value->thumb_small}"/></a></dt>
				<dd class="price"><strong>￥{$value->price_sale}元</strong> <del>￥{$value->price_market}元</del></dd>
				<dd class="title"><a href="#">{$value->name}</a></dd>
				<dd class="commend"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}#commend">已有{$value->count}人评价 </a> <span class="green">(销售{$value->sale_count}{$value->unit})</span></dd>
				<dd class="buy"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}">购买</a> | <a href="?a=user&m=addCollect&id={$value->id}" target="blank">收藏</a> | <a href="?a=compare&m=setCompare&navid={$value->nav}&goodsid={$value->id}" onclick="javascript:return checkCompare('{$value->nav}')" target="blank">比较</a></dd>			
			</dl>
			{/foreach}
			<div id="page">{$page}</div>
		</div>	
	</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>