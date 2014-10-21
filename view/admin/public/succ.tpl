<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="refresh" content="1;url={$url}" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/succ.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
	<h2>成功 -- 提示页</h2>
<div id="list" class="succ">	
	{foreach from=$message key=key item=value}
		<p>{$key+1}.{$value}</p>
	{/foreach}
	<p><a href="{$url}">[如果浏览器没有及时跳转请点击这里]</a></p>
</div>
</body>
</html>