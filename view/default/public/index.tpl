<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/index.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script src="view/default/js/slide.js"></script>
<script type="text/javascript" src="view/default/js/index.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
{include file='default/public/header.tpl'}
<!-- 轮播图 -->
<div class="scroll-box" id="HP_carousel" rel="auto-play">
    <div class="img">
        <div class="slider" id="hp_images">
            <a href="#"><img src="view/default/images/four1.jpg" /></a>
            <a href="#"><img src="view/default/images/two1.jpg" /></a>
            <a href="#"><img src="view/default/images/three1.jpg" /></a>
            <a href="#"><img src="view/default/images/one1.jpg" /></a>
        </div>
        <div class="paging pattern"></div>
        <div class="paging subpattern"></div>
    </div>
</div>
<div id="sale_num">
	<h2>销售排行</h2>
	<p class="short_line"></p>
	<div class="box">
		<ul>
		{foreach from=$hotSale key=key item=value}
		{if  $key<5}
			<li>
				<a target="_blank" href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img src="{$value->thumb_small}"/></a>
				<div class="bg_hover">
					<p class="price">￥{$value->price_sale}元</p>
					<p class="see"><a target="_blank" href="?a=details&navid={$value->nav}&goodsid={$value->id}">去看看</a></p>
					<p class="title"><a target="_blank" href="?a=details&navid={$value->nav}&goodsid={$value->id}">{$value->name}</a></p>
				</div>
			</li>
		{/if}
		{/foreach}
		</ul>
	</div>
</div>
<div id="main">
	<h2>欢乐促销</h2>
	<p class="short_line"></p>
	<div class="pro_list">
		{foreach from=$promoteGoods key=key item=value}
		<dl>
			<dt><a href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img src="{$value->thumb_small}"/></a></dt>
			<dd class="price"><strong>￥{$value->price_sale}元</strong> <del>￥{$value->price_market}元</del></dd>
			<dd class="title"><a href="#">{$value->name}</a></dd>
			<dd class="commend"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}#commend">已有{$value->count}人评价 </a> <span class="green">(销售{$value->sale_count}{$value->unit})</span></dd>
			<dd class="buy">
			<a href="?a=details&navid={$value->nav}&goodsid={$value->id}">购买</a> | 
			<a href="?a=user&m=addCollect&id={$value->id}" target="blank">收藏</a> | 
			<a href="?a=compare&m=setCompare&navid={$value->nav}&goodsid={$value->id}" onclick="javascript:return checkCompare('{$value->nav}')" target="blank">比较</a>
			<span class="now_buy"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}">马上购买</a></span>
			</dd>			
		</dl>
		{/foreach}
		<div id="page">{$page}</div>
	</div>
	<h2>店家推荐</h2>
	<p class="short_line"></p>
	<div class="pro_list">
		{foreach from=$recommendGoods key=key item=value}
		<dl>
			<dt><a href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img src="{$value->thumb_small}"/></a></dt>
			<dd class="price"><strong>￥{$value->price_sale}元</strong> <del>￥{$value->price_market}元</del></dd>
			<dd class="title"><a href="#">{$value->name}</a></dd>
			<dd class="commend"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}#commend">已有{$value->count}人评价 </a> <span class="green">(销售{$value->sale_count}{$value->unit})</span></dd>
			<dd class="buy"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}">购买</a> | <a href="?a=user&m=addCollect&id={$value->id}" target="blank">收藏</a> | <a href="?a=compare&m=setCompare&navid={$value->nav}&goodsid={$value->id}" onclick="javascript:return checkCompare('{$value->nav}')" target="blank">比较</a>
			<span class="now_buy"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}">马上购买</a></span>
			</dd>			
		</dl>
		{/foreach}
		<div id="page">{$page}</div>
	</div>
	<h2>品牌联盟</h2>
	<p class="short_line"></p>
	<div class="brand">
		<ul>
			{foreach from=$allBrand key=key item=value}
			<li><a href="{$value->url}" target="_blank"><!-- {$value->name} --><img src="view/default/images/huahua_logo2.png" alt="花花家LOGO"></a></li>
			{/foreach}
		</ul>
	</div>	
</div>

<!-- <div id="sidebar">
	<h2>商城公告</h2>
	<div class="box">
		<p>欢迎光临本店,我们竭诚为您服务：</p>
	<marquee onmouseover="this.stop()" onmouseout="this.start()" ><span class="red">我们的联系方式：234234</span></marquee>
	</div>
	<div class="cart">
		您的购物车中有{$cartGoodsCount.num}件商品,总金额共计￥{$cartGoodsCount.price}元
	</div>
	<h2>销售排行</h2>
	<div class="box">
		{foreach from=$hotSale key=key item=value}
		{if  $key<5}
			<dl>
				<dt><a target="_blank" href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img width="100" height="100" src="{$value->thumb_small}"/></a></dt>
				<dd class="price">￥{$value->price_sale}元</dd>
				<dd class="title"><a target="_blank" href="?a=details&navid={$value->nav}&goodsid={$value->id}">{$value->name}</a></dd>
			</dl>
		{/if}
		{/foreach}
	</div>	
</div>
<div id="main">
	<div id="banner">
		<img src="view/default/images/advert3.jpg" alt="白玉兰"/>
		<img src="view/default/images/advert4.jpg" alt="桂花"/>
		<img src="view/default/images/advert5.jpg" alt="竹外一支梅==花中君子"/>		
		<ul>
			<li>●</li>
			<li>●</li>
			<li>●</li>
		</ul>
		<span></span>
		<strong></strong>
	</div>
	<h2>欢乐促销</h2>
	<div class="pro_list">
		{foreach from=$promoteGoods key=key item=value}
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
	<h2>店家推荐</h2>
	<div class="pro_list">
		{foreach from=$recommendGoods key=key item=value}
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
	<h2>品牌联盟</h2>
	<div class="brand">
		<ul>
			{foreach from=$allBrand key=key item=value}
			<li><a href="{$value->url}" target="_blank">{$value->name}</a></li>
			{/foreach}
		</ul>
	</div>
</div> -->
<p class="clear"></p>

{include file='default/public/footer.tpl'}
</body>

</html>