<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.form.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/service.js"></script>
<body>
<h2><a href="?a=service">返回售后服务列表</a>商品 -- 新增售后</h2>
<form method="post" action="?a=service&m=runAdd" name="add" id="serviceForm">
	<dl class="form">
		<dd>
			<label for="name">售后服务名称：</label>
			<input type="text" class="text" name="name" id="name"/><span> [*必填]不得超过20位</span>
		</dd>
		<dd><textarea class="ckeditor" id="TextArea1" name="content"></textarea></dd>
		<dd>是否首选：<label><input type="radio" name="first" check="checked" value="1"/>是</label><label><input type="radio" name="first" value="0"/>否</label></dd>
		<dd><input type="submit" name="send" class="submit" value="新增售后服务"/></dd>
	</dl>
</form>

</body>
</html>