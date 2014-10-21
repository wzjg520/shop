<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=price&m=runadd">新增价格区间</a>商品 -- 价格区间列表</h2>
<div id="list">
	<form method="post" action="?a=price&m=runAdd">
	<table class="public">
		<tr><th>序号<th>左区间</th><th>右区间</th><th>操作</th></tr>
			{foreach from=$allPrice key=key item=value}			
				<tr><td>{$key+1}<td>{$value->price_left}</td><td>{$value->price_right}</td>
				<td>
				<a href="?a=price&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=price&m=runDelete&id={$value->id}" onclick="return confirm('您确定要删除吗') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
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