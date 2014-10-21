<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=edit&m=runAddFile&dir={$smarty.get.dir}&file={$smarty.get.file}">添加文件</a>系统 -- 目录列表</h2>
<div id="list">
	<table class="public">
		<tr><th>文件名称</th><th>操作</th></tr>
		{foreach from=$file key=key item=value}
		{if $value != '.' && $value != '..'}
		<tr><td>{$value}</td><td><a href="?a=edit&m=runUpdate&dir={$smarty.get.dir}&file={$smarty.get.file}&name={$value}">编辑</a> <a onclick="javascript:return confirm('您确定要删除{$value}吗？')" href="?a=edit&m=runDelete&dir={$smarty.get.dir}&file={$smarty.get.file}&name={$value}">删除</a></td></tr>
		{/if}
		{/foreach}
		<tr><td colspan="2"><a href="?a=edit&m=dir&dir={$smarty.get.dir}">[返回风格主题列表]</a></td></tr>
	</table>
			
	</table>
	<div id="page">{$page}</div>	
</div>

</body>
</html>