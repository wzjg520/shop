<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城系统</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/list.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/user_mycommend.css" />
<script type="text/javascript" src="view/default/js/jquery.js"></script>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	当前位置：<a href="?a=user">个人中心</a> &gt; 我的评论	
</div>
<div id="shop_main">
{include file='default/public/user_sidebar.tpl'}
<div id="main">
	<h2>我的评论</h2>
	<div class="mycommend">		
		{foreach from=$allCommend key=key item=value}
			<dl>
				<dt><img src="{$value->thumb_small}"/></dt>
				<dd><a href="?a=details&goodsid={$value->goodsid}&navid={$value->nav}" target="_blank">{$value->name}</a></dd>
				<dd><span class="date">{$value->date}</span>{$value->attr}</dd>
				<dd>评价：
						{if $value->star == 5}<span class="star">★★★★★</span>{/if}
						{if $value->star == 4}<span class="star">★★★★</span>{/if}
						{if $value->star == 3}<span class="star">★★★</span>{/if}
						{if $value->star == 2}<span class="star">★★</span>{/if}
						{if $value->star == 1}<span class="star">★</span>{/if}
				</dd>
				{if $value->re_content}
				<dd><span class="red">商家回复：{$value->re_content}</span></dd>
				{/if}
			</dl>
			<p class="clear"></p>
		{/foreach}
		<div id="page">{$page}</div>				
	</div>
</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>