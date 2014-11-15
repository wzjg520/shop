<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<!-- <link rel="stylesheet" href="view/default/style/compare.css" type="text/css"/> -->
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<title>ihuahua.cc在线商城</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="shop_main">
	<div id="sidebar">
		<h2>浏览记录</h2>
		<div>
			{foreach from=$history key=key item=value}
				{if  $key<5}
				<dl>
					<dt><a target="_blank" href="?a=details&navid={$value.navid}&goodsid={$value.goodsid}"><img src="{$value.thumb_small}"/></a></dt>
					<dd class="price">￥{$value.price_sale}元</dd>
					<dd class="title"><a target="_blank" href="?a=details&navid={$value.navid}&goodsid={$value.goodsid}">{$value.name}</a></dd>
				</dl>
				{/if}
			{foreachelse}
			<p class="clear_all">暂无历史记录</p>
			{/foreach}
			<p class="clear_all"><a href="?a=list&m=clearHistory">清理全部</a></p>
		</div>
	</div>
	<div id="main">
		<h2>商品列表</h2>
		<div class="pro_list">
			{foreach from=$GoodsCompare key=key item=value}
			<dl>
				<dt><a href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img src="{$value->thumb_small}"/></a></dt>
				<dd><strong>￥{$value->price_sale}元</strong> <del>￥{$value->price_market}元</del></dd>
				<dd class="title">{$value->name}</dd>
				<dd>编号：{$value->sn}</dd>
				<dd>品牌：{$value->brand}</dd>
				<dd>属性：{$value->attr}</dd>
				
				<dd>重量{$value->weight}/kg</dd>
				<dd>评论：<a href="?a=details&navid={$value->nav}&goodsid={$value->id}#commend">已有{$value->count}人评价 </a> <span class="green">(销售{$value->sale_count}{$value->unit})</span></dd>
				<dd>销量：<a href="?a=details&navid={$value->nav}&goodsid={$value->id}">购买</a> | <a href="#">收藏</a> | <a href="#">比较</a></dd>
				<dd style="text-align:center"><a href="?a=compare&m=deleteCompare&id={$value->id}">删除此对比商品</a></dd>			
			</dl>
			{/foreach}
			<div id="page" class="clear_all"><a style="padding:5px;" href="?a=compare&m=clearAll">清理全部</a></div>
		</div>	
	</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>