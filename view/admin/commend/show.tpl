<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2>商品 -- 评论列表</h2>
<div id="list">
	<table class="public">
		<tr><th>序号</th><th>商品名称</th><th>评论内容</th><th>回复内容</th><th>评价星级</th><th>评价者</th><th>日期</th><th>操作</th></tr>
		{if $allCommend}
			{foreach from=$allCommend key=key item=value}
			<tr><td>{$key+1}</td><td>{$value->name}</td>
			<td title="{$value->content}">{$value->content|truncate:20}</td>
			<td>{if $value->re_content}{$value->re_content|truncate:20}{else}<span>尚未回复</span>{/if}</td>
			<td style="color:pink">
				{if $value->star == 5}<span class="star">★★★★★</span>{/if}
				{if $value->star == 4}<span class="star">★★★★</span>{/if}
				{if $value->star == 3}<span class="star">★★★</span>{/if}
				{if $value->star == 2}<span class="star">★★</span>{/if}
				{if $value->star == 1}<span class="star">★</span>{/if}					
			</td><td>{$value->user}</td><td>{$value->date}</td><td>
				<a href="?a=commend&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=commend&m=runDelete&id={$value->id}" onclick="return confirm('删除之后，用户可以重新评价\r\n如果你想要屏蔽该评价，请在修改里设置\r\n你真的要删除这个评价吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
			</td></tr>
			{/foreach}
		{else}
			<tr><td colspan="6">暂时没有数据</td></tr>
		{/if}
	</table>
	<div id="page">{$page}</div>	
</div>

</body>
</html>