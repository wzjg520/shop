<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/admin.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2>{if !$flag}<a href="?a=nav&m=runAdd">新增导航</a>{else}<a href="?a=nav&m=runadd&id={$oneNav[0]->id}">新增导航</a>{/if}系统 -- 导航列表</h2>
<div id="list">
	<form method="post" action="?a=nav&m=runSort">
	<table class="public">
		<tr><th>序号<th>名称</th><th>简介</th>{if !$flag}<th>子类</th>{else}<th>品牌</th>{/if}<th>排序</th><th>操作</th></tr>
		{if $allNav}
			{foreach from=$allNav key=key item=value}			
				<tr><td>{$key+1}<td>{$value->name}</td><td>{$value->info}</td><td>
					{if !$flag}
					<a href="?a=nav&sid={$value->id}">查看</a> | <a href="?a=nav&m=runAdd&id={$value->id}">新增</a></td>
					{else}
					{$value->brand}
					{/if}
					<td><input type="text" class="text sort" name="sort[{$value->id}]" value="{$value->sort}"/></td>
				<td>
				<a href="?a=nav&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=nav&m=runDelete&id={$value->id}" onclick="return confirm('您确定要删除吗') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
				</td></tr>
			{/foreach}
			<tr><td></td><td></td><td></td><td></td><td><input type="submit" name="send" value="排序"/></td><td></td></tr>
		{else}
			<tr><td colspan="6">暂时没有数据</td></tr>
		{/if}
	</table>
	</form>
	{if $flag}<p class="return">上级导航：<strong>{$oneNav[0]->name}</strong>  [<a href="{$prev_url}">返回上一级</a>]</p>{/if}
	<div id="page">{$page}</div>	
</div>

</body>
</html>