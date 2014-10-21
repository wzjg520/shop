<div id="header">
	<h1><a href="./">爱花花</a></h1>
	{if $smarty.cookies.user}
	<p>
		您好，{$smarty.cookies.user}，欢迎再次光临，<a href="?a=user">个人中心</a> | <a href="?a=cart">购物车</a> | <a href="?a=user&m=loginOut">退出</a>
	</p>
		
		{else}
		<p>
			<a href="?a=user&m=login"><img src="view/default/images/bnt_log.gif"/></a>
			<a href="?a=user&m=reg"><img src="view/default/images/bnt_reg.gif"/></a>
		</p>
	{/if}
	
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
<div id="search">
	<form method="post" name="form" action="?a=list&m=searchGoods">
		<select name="way">
			<option value="nav">按类别</option>
			<option value="goods">按商品名称</option>
		</select>
		<input type="text" name="content"/>
		<input type="submit" name="search"/>
	</form>
</div>