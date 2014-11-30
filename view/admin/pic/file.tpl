<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/pic.css" />
</head>
<body>

<h2>系统 -- 图片文件列表</h2>

<div id="list">
	<table class="public">
		<tr><th>文件名称</th><th>是否冗余</th><th>操作</th></tr>
		{foreach from=$file key=key item=value}
		{if $value != '.' && $value != '..'}
		<tr><td>
		{if $value->id}
		<span class="green">./uploads/{$smarty.get.file}/{$value->pic}</span>
		{else}
		<span class="red">./uploads/{$smarty.get.file}/{$value}</span>
		{/if}
		</td><td>
		{if $value->id and $value->link eq 'index' }

		<a href="index.php" target="_blank">{$value->name}</a>
		{elseif $value->id  }
		<a href="?a=details&navid={$value->nav}&goodsid={$value->id}" target="_blank">{$value->name}</a>
		{else}
		是
		{/if}
		</td><td>
		{if $value->id}
		---
		{else}
		<a onclick="javascript:return confirm('您确定要删除{$value}吗？')" href="?a=pic&m=runDelete&dir={$smarty.get.file}&name={$value}">删除</a>
		{/if}
		</td></tr>
		{/if}
		{/foreach}
		<tr><td colspan="2"><a href="?a=pic">[返回目录]</a></td></tr>
	</table>
</div>


</body>
</html>