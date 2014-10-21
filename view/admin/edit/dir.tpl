<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=edit&m=runAddDir">添加目录</a>系统 -- 目录列表</h2>
<div id="list">
	<table class="public">
		<tr><th>目录名称</th><th>操作</th></tr>
		{foreach from=$dir key=key item=value}
		<tr><td>{$value}</td><td><a href="?a=edit&m=file&dir={$smarty.get.dir}&file={$value}">进入目录</a></td></tr>
		{/foreach}
		<tr><td colspan="2"><a href="?a=edit">[返回风格]</a></td></tr>
			
	</table>
	<div id="page">{$page}</div>	
</div>

</body>
</html>