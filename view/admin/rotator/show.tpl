<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=rotator&m=runAdd">添加轮播器</a>轮播器 -- 轮播器列表</h2>
<div id="list">
	<table class="public">
		<tr><th>序号</th><th>图片名称</th><th>链接网址</th><th>图片地址</th><th>时间</th><th>操作</th></tr>
		{if $allRotator}
			{foreach from=$allRotator key=key item=value}
			<tr><td>{$key+1}</td><td>{$value->name}</td><td>{$value->link}</td><td>{$value->thumb}</td><td>{$value->date}</td><td>
				<a href="?a=rotator&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=rotator&m=runDelete&id={$value->id}" onclick="return confirm('您确定要删除吗') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
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