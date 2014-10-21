<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/attr.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/attr.js"></script>
<title>商城后台管理</title>
</head>
<body>
	<h2><a href="?a=attr">返回属性列表</a>商品 -- 修改自定义属性</h2>
<form method="post" action="?a=attr&m=runUpdate&id={$oneAttr->id}" name="update" id="updateForm">
	<input type="hidden" name="prev_url" value="{$prev_url}" />
	<dl class="form">
		<dd>
			<label for="name">属性名称：</label><input type="text" id="name" name="name" value="{$oneAttr->name}" class="text"/><span> <b class="red">[必选]</b>（*2-4位之间）</span>
		</dd>
		<dd>选择方式：{html_radios name="way" options=$way selected={$oneAttr->way}}</dd>
		<dd>属性项目：<textarea name="item">{$oneAttr->item}</textarea> （*每个项目用“|”隔开，例如，红色|蓝色|绿色）</dd>
		<dd>请选择关联的类别：</dd>
		{foreach from=$allNav key=key item=value}
			<dd>{$value->name}</dd>
			{if $value->child}
			{html_checkboxes options=$value->child name="nav" selected=$oneAttr->nav}
			{/if}
		{/foreach}
		<dd>没有您需要的类别，请先<a class="red" href="?a=nav&m=runAdd">添加</a>类别</dd>
		<dd><input type="submit" name="send" value="修改属性"/></dd>
	</dl>
</form>

</body>
</html>