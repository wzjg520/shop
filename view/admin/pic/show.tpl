<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城后台管理</title>
<link rel="stylesheet" type="text/css" href="view/admin/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/admin/style/pic.css" />
</head>
<body>

<h2>系统 -- 图片目录列表</h2>

<div id="list">
	<table class="public">
		<tr><th>时间目录</th><th>图片张数</th><th>操作</th></tr>
		{foreach from=$dir key=key item=value}
		<tr><td>{$value}</td><td>{$key}</td><td><a href="?a=pic&m=file&file={$value}">进入目录</a></td></tr>
		{/foreach}
	</table>
</div>


</body>
</html>