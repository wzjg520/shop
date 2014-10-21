<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=commend">返回评价列表</a>商品 -- 修改评价</h2>
<form method="post" action="?a=commend&m=runUpdate&id={$oneCommend->id}" name="update" id="updateForm">
	<input type="hidden" name="url" value="{$prev_url}"/>
	<dl class="form">
		<dd>商品名称：<a href="?a=details&navid={$oneCommend->nav}&goodsid={$oneCommend->goodsid}" target="_blank">{$oneCommend->name}</a></dd>
		<dd><a href="?a=details&navid={$oneCommend->nav}&goodsid={$oneCommend->goodsid}" target="_blank"><img src="{$oneCommend->thumb_small}"/></a></dd>
		<dd>购买属性：{$oneCommend->attr}</dd>
		<dd>评价用户：{$oneCommend->user}</dd>
		<dd >评价星级：<span style="color:pink">{html_radios name="star" options=$star checked=$oneCommend->star}</span></dd>
		<dd>评价内容：{$oneCommend->content}</dd>
		<dd>
			<label for="content">回复内容：</label>
			<textarea class="text" style="width:350px;height:80px;background:#fff;" name="re_content">{$oneCommend->re_content}</textarea>
			<span>（*不得大于200位）</span>
		</dd>
		<dd>是否显示：
		{if $oneCommend->flag==1}
		<label><input type="radio" name="flag" value="1" checked="checked"/>是</label>
		<label><input type="radio" name="flag" value="0"/>否</label>
		{else}
		<label><input type="radio" name="flag" value="1"/>是</label>
		<label><input type="radio" name="flag" value="0"  checked="checked"/>否</label>
		{/if}
		
		</dd>
		<dd><input type="submit" name="send" value="回复及修改评论"/></dd>
	</dl>
</form>

</body>
</html>