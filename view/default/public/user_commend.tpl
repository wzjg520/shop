<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城系统</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/user_commend.css" />
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	当前位置：<a href="?a=user">个人中心</a> &gt; 商品评论	
</div>
{include file='default/public/user_sidebar.tpl'}
<form method="post" action="?a=user&m=commend">
	<input type="hidden" name="goods_id" value="{$smarty.get.goods_id}"/>
	<input type="hidden" name="order_id" value="{$smarty.get.order_id}"/>
	<input type="hidden" name="attr" value="{foreach from=$oneGoods.attr key=key item=value}{$key}:{foreach from=$value key=k item=v}{$v}{/foreach};{/foreach}"/>
	<div id="main">
		<h2>商品评论</h2>
		<div class="commend">
			<a href="?a=details&navid={$oneGoods.navid}&goodsid={$oneGoods.id}" target="_blank"><img src="{$oneGoods.thumb_small}"/></a>
			
			<dl>
				<dt>{$oneGoods.name}</dt>
				<dd>
					{foreach from=$oneGoods.attr key=key item=value}
					<p>{$key}：{foreach from=$value key=k item=v}{$v}{/foreach}</p>
					{/foreach}
				</dd>
				{if $oneCommend}
				<dd>评分：
						{if $oneCommend[0]->star == 5}<span class="star">★★★★★</span>{/if}
						{if $oneCommend[0]->star == 4}<span class="star">★★★★</span>{/if}
						{if $oneCommend[0]->star == 3}<span class="star">★★★</span>{/if}
						{if $oneCommend[0]->star == 2}<span class="star">★★</span>{/if}
						{if $oneCommend[0]->star == 1}<span class="star">★</span>{/if}
				</dd>
			<dd class="content">评　　论：{$oneCommend[0]->content}</dd>
			{if $oneCommend[0]->re_content}
			<dd><span class="red">商家回复：{$oneCommend[0]->re_content}</span></dd>
			{/if}
			<dd><a href="?a=user&m=order_details&id={$smarty.get.order_id}">[返回订单]</a></dd>
				{else}
				<dd>评　　分：
					<label for="star5"><input type="radio" id="star5" name="star" value="5" checked="checked" /> <span class="star">★★★★★</span></label>
					<label for="star4"><input type="radio" name="star" id="star4" value="4" /> <span class="star">★★★★</span></label>
					<label for="star3"><input type="radio" name="star" id="star3" value="3" /> <span class="star">★★★</span></label>
					<label for="star2"><input type="radio" name="star" id="star2" value="2" /> <span class="star">★★</span></label>
					<label for="star1"><input type="radio" name="star" id="star1" value="1" /> <span class="star">★</span></label>
				</dd>
				<dd><textarea name="content"></textarea></dd>
				<dd><input type="submit" name="send" value="提交评论"/></dd>
				{/if}
				
			</dl>
			<p class="clear"></p>		
		</div>
	</div>
</form>

{include file='default/public/footer.tpl'}
</body>
</html>