<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/nav.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/nav_update.js"></script>
</head>
<body>
<h2><a href="?a=nav">返回导航列表</a>商品 -- 修改导航</h2>
<form method="post" action="?a=nav&m=runUpdate&id={$oneNav->id}" name="update" id="navForm">
	<input type="hidden" name="url" value="{$prev_url}"/>
	<dl class="form">
		<dd>
			<label for="name">导航名称： {$oneNav->name}</label>
		</dd>
		<dd>
		<label for="info">导航信息：</label>
		<textarea name="info" id="info" >{$oneNav->info}</textarea><span>（*不得大于200位）</span>
		</dd>
		{if $oneNav->sid != 0}
		<dd>
			品　　牌：
			{html_checkboxes name='brand' options=$allBrands selected=$updateBrands}
		</dd>
		{/if}
		<dd>价格区间：{html_checkboxes name='price' options=$allPrice selected=$oneNav->price}
		<dd><input type="submit" name="send" value="修改导航"/></dd>
	</dl>
</form>

</body>
</html>