<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=edit&m=runAdd">添加主题</a>商品 -- 主题列表</h2>
<div id="list">
	<table class="public">
		<tr><th>风格名称</th><th>风格目录</th><th>版本号</th><th>操作</th></tr>
		<tr><td><input type="text" value="默认主题" size="8" /></td><td>default</td><td>v.10</td><td><a href="?a=edit&m=dir&dir=default">进入目录</a></td></tr>
			
	</table>
	<div id="page">{$page}</div>	
</div>

</body>
</html>