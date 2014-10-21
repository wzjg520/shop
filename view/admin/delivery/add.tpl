<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/delivery.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/delivery_add.js"></script>
</head>
<body>
<h2><a href="?a=delivery">返回物流配送列表</a>订单 -- 新增物流配送</h2>
<form method="post" action="?a=delivery&m=runAdd" name="add" id="addForm">
	<dl class="form">
		
		<dd>
		<label for="name">物流公司：</label>
			<input type="text" id="name" name="name" class="text"/><span>（*不得为空且不得大于20位）</span>
		</dd>
		<dd>
		<label for="name">公司网址：</label>
			<input type="text" id="url" name="url" class="text"/><span>（*不得为空且不得大于40位）</span>
		</dd>
		
		<dd>
		<label for="price_in">省内运费：</label>
			<input name="price_in" id="price_in" type="text" class="text"><span>（*必填，为数字）</span>
		</dd>
		<dd>
		<label for="price_out">省外运费：</label>
			<input name="price_out" id="price_out" type="text" class="text"/><span>（*必填，为数字）</span>
		</dd>
		<dd>
		<label for="price_add">额外运费：</label>
			<input name="price_add" id="price_add" type="text" class="text"/><span>（*必填，为数字）</span>
		</dd>
		<dd>
		<label for="info">快递描述：</label>
			<textarea name="info" id="info"></textarea><span>（*小于200位）</span>
		</dd>
		<dd><input type="submit" name="send" value="新增物流配送"/></dd>
	</dl>
</form>

</body>
</html>