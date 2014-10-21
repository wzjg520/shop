<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/details.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/details.js"></script>
<script type="text/javascript" src="view/default/js/channel.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	当前位置：<a href="./">首页</a> {foreach from=$oneFrontNav[0]->sait key=key item=value}
	&gt;<a href="?a=list&navid={$key}">{$value}</a>
	{/foreach}
	&gt;<span>{$oneGoods[0]->name}</span>
	
</div>
<div id="sidebar">
	<h2>{$oneFrontNav[0]->name}</h2>
	<ul>
		{foreach from=$oneFrontNav[0]->child key=key item=value}
		<li><a href="?a=list&navid={$value->id}">{$value->name}<span class="gray">({$value->count})</span></a></li>
		{/foreach}
	</ul>
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
		<p style="padding:20px;color">暂无历史记录</p>
		{/foreach}
		<p style="padding:10px;text-align:right"><a href="?a=list&m=clearHistory">清理全部</a></p>
	</div>
</div>
<div id="main">
	<form method="post" name="buy" action="?a=cart&m=addProduct">
	<input type="hidden" id="attr" attr_type="{$attrType}" value="{$oneGoods[0]->attr}"/>
	<input type="hidden" name="id" value="{$oneGoods[0]->id}"/>
	<input type="hidden" name="nav" value="{$oneGoods[0]->nav}"/>
	<input type="hidden" name="price_sale" value="{$oneGoods[0]->price_sale}"/>
	<input type="hidden" name="price_market" value="{$oneGoods[0]->price_market}"/>
	<input type="hidden" name="sn" value="{$oneGoods[0]->sn}"/>
	<input type="hidden" name="name" value="{$oneGoods[0]->name}"/>
	<input type="hidden" name="thumb_small" value="{$oneGoods[0]->thumb_small}"/>
	<input type="hidden" name="weight" value="{$oneGoods[0]->weight}"/>
	<h2>{$oneGoods[0]->name}</h2>
	<dl class="pic">
		<dt><img src="{$oneGoods[0]->thumb}"/></dt>
		<script>var thumbnail = '{$domain}{$oneGoods[0]->thumb}';</script>
		{literal}
		
		<dd>分享至： 
		<!--新浪微博-->
		<a href="javascript:void((function(s,d,e){try{}catch(e){}var f='http://service.weibo.com/share/share.php?',u=d.location.href,p=['url=',e(u),'&title=',e(d.title),'&pic=',e(thumbnail),'&appkey='].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));">新浪微博</a> 		
		<!--腾讯微博-->
		| <a href="javascript:void(0)" onclick="postToWb();" class="tmblog">腾讯微博</a>
			<script type="text/javascript">
				function postToWb(){
				var _t = encodeURI(document.title);
				var _url = encodeURIComponent('http://www.yc60.com');
				var _appkey = encodeURI("appkey");//你从腾讯获得的appkey
				var _pic = encodeURI('http://www.yc60.com/video/dreamweavermain.png');//（列如：var _pic='图片url1|图片url2’）
				var _site = '';//你的网站地址
				var _u ='http://v.t.qq.com/share/share.php?title='+_t+'&url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic;window.open( _u,'转播到腾讯微博', 'width=700, height=680, top=0, left=0,toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );
			}
			</script> 		
		<!--人人网-->
		| <a href="javascript:void((function(s,d,e){if(/renren\.com/.test(d.location))return;var f='http://share.renren.com/share/buttonshare?link=',u=d.location,l=d.title,p=[e(u),'&title=',e(l)].join('');function a(){if(!window.open([f,p].join(''),'xnshare',['toolbar=0,status=0,resizable=1,width=626,height=436,left=',(s.width-626)/2,',top=',(s.height-436)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else a();})(screen,document,encodeURIComponent));" title="分享到人人">人人网</a> 		
		<!--开心网-->
		| <a href="javascript:d=document;t=d.selection?(d.selection.type!='None'?d.selection.createRange().text:''):(d.getSelection?d.getSelection():'');void(kaixin=window.open('http://www.kaixin001.com/~repaste/repaste.php?&amp;rurl='+escape(d.location.href)+'&amp;rtitle='+escape(d.title)+'&amp;rcontent='+escape(d.title),'kaixin'));kaixin.focus();">开心网</a></dd>		
		{/literal}
	</dl>	
		<dl class="text">
			   <dd>售　　价：<span class="sale">￥{$oneGoods[0]->price_sale}</span> <span class="market">￥{$oneGoods[0]->price_market}</span></dd>
			   <dd>商品编号：{$oneGoods[0]->sn}</dd>
			   <dd class="mark">所属品牌：{$oneGoods[0]->brand}</dd>
			   <dd>销 售 量：<span class="sale_num">65535 </span>{$oneGoods[0]->unit}</dd>
			   <dd>重　　量：{$oneGoods[0]->weight}/kg<span class="gray">库存：({$oneGoods[0]->inventory})</span></dd>
			   <dd>数　　量：<input type="text" name="num" value="1" class="num"/></dd>
			   <dd class="buy_button">
					<input class="submit" type="submit" value="" name="send">
					<a target="_blank" href="?a=user&m=addCollect&id={$oneGoods[0]->id}">
						<img border="0" title="收藏" alt="收藏" src="view/default/images/collect.gif">
					</a>
				</dd>
				
		</dl>
	<form>
	<div class="content">
		<a name="commend"></a>
		<ul class="channel">
			<li class="selected">商品详情</li>
			<li>评价列表</li>
			<li>成交记录</li>
			<li>售后服务</li>
		</ul>
		<!--商品详情-->
		<div class="c" style="display:block">{$oneGoods[0]->content}</div>
		<!--评价列表-->
		<div class="c" style="display:none" >
			{foreach from=$allCommend key=key item=value}
			<div class="commend_left">
				<p>{$value->user}</p>
				<p class="star">
						{if $value->star == 5}<span class="star">★★★★★</span>{/if}
						{if $value->star == 4}<span class="star">★★★★</span>{/if}
						{if $value->star == 3}<span class="star">★★★</span>{/if}
						{if $value->star == 2}<span class="star">★★</span>{/if}
						{if $value->star == 1}<span class="star">★</span>{/if}
				</p>
			</div>
			
			<div class="commend_right">
				<p><em>{$value->date}</em>{$value->content}</p>
				<p class="attr">{$value->attr} </p>
				<p><em>{$value->re_date}</em><span style="color:red;">店主回复：{$value->re_content}</span></p>
			</div>
			<p class="re_commend"></p>
			{/foreach}
			
			<div id="page">{$page}</div>
		</div>
		<!--成交记录-->
		<div class="c" style="display:none">
			<table border="0" cellspacing="0" width="100%" class="record">
				<tr><th>购买者</th><th>商品名称</th><th>购买价格</th><th>购买数量</th><th>成交时间</th></tr>
				{foreach from=$allRecord key=key item=value}
				<tr><td>{$value->user}</td><td style="text-align:left;padding:0 0 0 25px;line-height:180%;">{$value->name}<br /><span style="color:#666;">{$value->attr}</span></td><td>{$value->price}</td><td>{$value->num}</td><td>{$value->date}</td></tr>
				{/foreach}
			</table>
			<div id="page">{$recordPage}</div>
		</div>
		<!--售后服务-->
		<div class="c" style="display:none">{$oneGoods[0]->service}</div>
	</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>
