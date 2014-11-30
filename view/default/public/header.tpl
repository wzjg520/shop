<div id="header">
	<span class="tel"><em class="tel_ico"></em>400-878-1619</span>
	<h1><a href="./"><img src="view/default/images/huahua_logo2.png" alt="花花家LOGO"></a></h1>
	{if $smarty.cookies.user}
	<p>
		您好，{$smarty.cookies.user}，<a href="?a=user">个人中心</a> | <a href="?a=cart"><i class="cat"></i>购物袋(<strong>{$cartGoodsCount.num}</strong>)</a> | <a href="?a=user&m=loginOut">退出</a>
	</p>
	{else}
	<p>
		<a href="?a=cart"><i class="cat"></i>购物袋(<strong>0</strong>)</a>
		<a href="?a=user&m=login">登录</a> | 
		<a href="?a=user&m=reg">注册</a>
	</p>
	{/if}
	<div class="header_search">
		<form method="post" name="form_search" action="?a=list&m=searchGoods">
			<input type="text" name="content" placeholder=" 快捷搜一搜吧"/>
			<input type="submit" name="search" value="" />
		</form>
	</div>
</div>
<div id="nav">
	<ul>
		{if isset($smarty.get.navid)}
			<li><a href="./">首页</a></li>
		{else}
			<li><a class="selected" href="./">首页</a></li>
		{/if}
		
		{foreach from=$frontTenNav key=key item=value}
			{if isset($oneFrontNav[0]->id) && $oneFrontNav[0]->id==$value->id}
				<li><a class="selected" href="?a=list&navid={$value->id}" >{$value->name}</a></li>
			{else}
				<li><a href="?a=list&navid={$value->id}" >{$value->name}</a></li>
			{/if}
		{/foreach}
	</ul>
</div>
<div id="blackHead">
	<div class="inner_top">
		<span class="tel"><em class="tel_ico"></em>400-878-1619</span>
		<h1>
			<a href="./"><img src="view/default/images/small_logo.png" alt="花花家LOGO"></a>
			<form method="post" name="form_search" action="?a=list&m=searchGoods">
				<input type="text" name="content"/>
				<input type="submit" name="search" value="" />
			</form>
		</h1>
		
		{if $smarty.cookies.user}
		<p>
			您好，{$smarty.cookies.user}，<a href="?a=user">个人中心</a> | <a href="?a=cart"><i class="cat"></i> 购物袋(<strong>0</strong>)</a> | <a href="?a=user&m=loginOut">退出</a>
		</p>
		{else}
		<p>
			<a href="?a=cart"><i class="cat"></i> 购物袋(<strong>0</strong>)</a>
			<a href="?a=user&m=login">登录</a> | 
			<a href="?a=user&m=reg">注册</a>
		</p>
		{/if}

	</div>
</div>
<script type="text/javascript" src="view/default/js/basic.js"></script>
<!-- <div id="search">
	<form method="post" name="form" action="?a=list&m=searchGoods">
		<select name="way">
			<option value="nav">按类别</option>
			<option value="goods">按商品名称</option>
		</select>
		<input type="text" name="content"/>
		<input type="submit" name="search"/>
	</form>
</div> -->
