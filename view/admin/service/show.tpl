<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=service&m=runadd">新增售后服务</a>商品 -- 售后服务列表</h2>
<div id="list">
	<form method="post" action="?a=service&m=runAdd">
	<table class="public">
		<tr><th>序号<th>售后服务名称</th><th>默认首选</th><th>操作</th></tr>
			{foreach from=$allService key=key item=value}			
				<tr><td>{$key+1}<td>{$value->name}</td><td>{if $value->first==1}是{else}否|<a class="green" href="?a=service&m=setFirst&id={$value->id}">首选</a>{/if}</td>
				<td>
				<a href="?a=service&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=service&m=runDelete&id={$value->id}" onclick="return confirm('您确定要删除吗') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
				</td></tr>
			{foreachelse}
				<tr><td colspan="4">暂时没有数据</td></tr>
			{/foreach}
	</table>
	</form>
	<div id="page">{$page}</div>	
</div>

</body>
</html>