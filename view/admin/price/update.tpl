<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/price.css'/>
</head>
<body>
<h2><a href="?a=price">返回价格区间列表</a>商品 -- 修改价格区间</h2>
<form method="post" action="?a=price&m=runUpdate&id={$onePrice[0]->id}" name="update" id="priceForm">
	<input type="hidden" name="prev_url" value="{$prev_url}"/>
	<dl class="form">
		<dd>
		<label for="price_left">价格区间：</label>
			<input type="text" id="price_left" name="price_left" value="{$onePrice[0]->price_left}" class="text"/> - <input type="text" id="price_right" name="price_right" value="{$onePrice[0]->price_right}" class="text"/><span>（*必须是数字）</span>
		</dd>
		<dd><input type="submit" name="send" value="修改价格区间"/></dd>
	</dl>
</form>

</body>
</html>