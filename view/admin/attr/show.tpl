<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=attr&m=runAdd">添加属性</a>商品 -- 属性列表</h2>
<div id="list">
	<table class="public">
		<tr><th>序号</th><th>属性名称</th><th>属性项目</th><th>关联类型</th><th>操作</th></tr>
		
			{foreach from=$allAttr key=key item=value}
			<tr><td>{$key+1}</td><td>{$value->name}</td><td>{$value->item|truncate:40}</td><td>{$value->nav|truncate:40}</td>
			<td>
				<a href="?a=attr&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=attr&m=runDelete&id={$value->id}" onclick="return confirm('您确定要删除吗') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
			</td></tr>
			{foreachelse}
			<tr><td colspan="5">暂时没有数据</td></tr>
			{/foreach}
		
			
	</table>
	<div id="page">{$page}</div>	
</div>

</body>
</html>