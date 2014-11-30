<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城系统</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/list.css" />
<script type="text/javascript" src="view/default/js/jquery.js"></script>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	当前位置：<a href="?a=user">个人中心</a> &gt; 我的收藏 	
</div>
<div id="shop_main">
{include file='default/public/user_sidebar.tpl'}
<div id="main">
	<h2>我的评论</h2>
	<div class="pro_list">		
		{foreach from=$allCollect key=key item=value}
		<dl>
			<dt><a href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img src="{$value->thumb_small}"/></a></dt>
			<dd class="price"><strong>￥{$value->price_sale}元</strong> <del>￥{$value->price_market}元</del></dd>
			<dd class="title"><a href="#">{$value->name}</a></dd>
			<dd class="commend"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}#commend">已有{$value->count}人评价 </a> <span class="green">(销售{$value->sale_count}{$value->unit})</span></dd>
			<dd class="buy"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}">购买</a> | <a href="?a=user&m=deleteCollect&id={$value->id}">取消收藏</a> | <a href="?a=compare&m=setCompare&navid={$value->nav}&goodsid={$value->id}" onclick="javascript:return checkCompare('{$value->nav}')" target="blank">比较</a></dd>			
		</dl>
		{/foreach}
		<div id="page">{$page}</div>			
	</div>
</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>