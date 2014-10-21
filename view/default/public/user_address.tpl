<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/user.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 个人中心
</div>
{include file='default/public/user_sidebar.tpl'}
<div id="main">	
	<h2><a href="?a=cart">[去结算中心]</a>收货地址</h2>
	<table>
		<tr><th>收货人姓名</th><th>地址</th><th>电话</th><th>邮编</th><th>电子邮件</th><th>标志性建筑</th><th>操作</th></tr>
		{foreach from=$allAddress key=key item=value}
		<tr><td>{$value->name}</td><td>{$value->address}</td><td>{$value->tel}</td><td>{$value->code}</td><td>{$value->email}</td><td>{$value->buildings}</td>
		<td>{if $value->selected}是{else}<a href="?a=user&m=selected&id={$value->id}">首选</a>{/if} | <a href="?a=user&m=address&id={$value->id}">修改</a> | <a href="?a=user&m=RunDelete&id={$value->id}" onclick="return confirm('您确定要删除吗') ? true : false">删除</a></td></tr>
		{/foreach}
	</table>
	<h2>修改收货人信息</h2>
	<form action="?a=user&m=address&id={$frontUser[0]->id}" method="post">
	<table class="left">
		<tr><td width="15%">收货人姓名：</td><td><input type="text" class="text" value="{$frontUser[0]->name}" name="name"/></td><td width="15%">电子邮件地址：</td><td><input type="text" class="text" value="{$frontUser[0]->email}" name="email"/></td></tr>
		<tr><td>详细地址：</td><td><input type="text" class="text" value="{$frontUser[0]->address}" name="address"/></td><td>邮政编码：</td><td><input type="text" class="text" value="{$frontUser[0]->code}" name="code"/></td></tr>
		<tr><td>手机：</td><td><input type="text" class="text" name="tel" value="{$frontUser[0]->tel}"/></td><td>标志建筑：</td><td><input type="text" class="text" value="{$frontUser[0]->buildings}" name="buildings"/></td></tr>
		<tr><td>江浙沪：</td><td><label><input type="radio" value="1" {if $frontUser[0]->flag}checked="checked"{/if} name="flag"/>是</label><label><input type="radio" value="0" {if $frontUser[0]->flag==0}checked="checked"{/if} name="flag"/>否</label></td><td>最佳送货时间：</td><td><input type="text" name="time" value="{$frontUser[0]->time}"/></td></tr>
		<tr><td colspan="4" class="submit"><input class="submit" name="send" value="" type="submit"/></td></tr>	
	</table>
	</form>
	<h2>新增收货人</h2>
	<form action="?a=user&m=address" method="post">
	<table class="left">
		<tr><td width="15%">收货人姓名：</td><td><input type="text" class="text"  name="name"/></td><td width="15%">电子邮件地址：</td><td><input type="text" class="text" name="email"/></td></tr>
		<tr><td>详细地址：</td><td><input type="text" class="text"  name="address"/></td><td>邮政编码：</td><td><input type="text" class="text" name="code"/></td></tr>
		<tr><td>手机：</td><td><input type="text" class="text" name="tel" /></td><td>标志建筑：</td><td><input type="text" class="text"name="buildings"/></td></tr>
		<tr><td>江浙沪：</td><td><label><input type="radio" checked="checked" value="1" name="flag"/>是</label><label><input type="radio" value="0" name="flag"/>否</label></td><td>最佳送货时间：</td><td><input type="text" name="time" /></td></tr>
		<tr><td colspan="4" class="submit"><input class="submit" name="send" value="" type="submit"/></td></tr>	
	</table>
	</form>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>