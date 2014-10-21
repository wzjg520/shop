<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/edit.css'/>
<title>商城后台管理</title>
</head>
<body>
	<h2><a href="?a=edit&m=file&dir={$smarty.get.dir}&file={$smarty.get.file}">返回文件列表</a>系统 -- 添加文件</h2>
	<form method="post" name="update" action="?a=edit&m=runAddFile&dir={$smarty.get.dir}&file={$smarty.get.file}">
	<input type="hidden" name="prev_url" value="{$prev_url}"/>
	<dl class="form">
		<dd>文件名称：<input type="text" name="name" class="text" value="{$smarty.get.name}" /> </dd>
		<dd><span class="middle">代码编辑：</span><textarea name="content" style="width:90%;height:500px;">{$content}</textarea></dd>
		<dd><input type="submit" name="send"  value="新增文件" class="submit" /></dd>
	</dl>
</form>
</body>
</html>