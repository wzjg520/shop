<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/goods.css'/>
</head>
<body>
<h2><a href="?a=goods&m=runAdd">新增商品</a>商品 -- 品牌列表</h2>
<div id="list">
	<table class="public">
		<tr><th>序号</th><th>商品名称</th><th>商品编号</th><th>商品售价（元）</th><th>商品类型</th><th>品牌</th><th>是否上架</th><th>是否促销</th><th>是否推荐</th><th>库存</th><th>操作</th></tr>
			{foreach from=$allGoods key=key item=value}
				<tr><td>{$key+1}</td><td>{$value->name|truncate:15}</td><td>{$value->sn}</td><td>{$value->price_sale}</td><td>{$value->nav}</td><td>{$value->brand}</td>
				<td>
					{if $value->is_up==0}
						<span class="red">否</span> <a class="green"href="?a=goods&m=isUp&act=up&id={$value->id}">[上架]</a>
					{else}
						<span class="green">是</span> <a class="red" href="?a=goods&m=isUp&act=down&id={$value->id}">[下架]</a>
					{/if}
				</td>
				<td>
					{if $value->is_promote==0}
						<span class="red">否</span> <a class="green"href="?a=goods&m=isPromote&act=yes&id={$value->id}">[促销]</a>
					{else}
						<span class="green">是</span> <a class="red" href="?a=goods&m=isPromote&act=no&id={$value->id}">[取消]</a>
					{/if}
				</td>
				<td>
					{if $value->is_recommend==0}
						<span class="red">否</span> <a class="green"href="?a=goods&m=isRecommend&act=yes&id={$value->id}">[推荐]</a>
					{else}
						<span class="green">是</span> <a class="red" href="?a=goods&m=isRecommend&act=no&id={$value->id}">[取消]</a>
					{/if}
				</td>
			<td>{$value->inventory}</td><td>
					<a href="?a=goods&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
					<a href="?a=goods&m=runDelete&id={$value->id}" onclick="return confirm('您确定要删除吗') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
				</td></tr>
			{foreachelse}
				<tr><td colspan="9">暂时没有数据</td></tr>
			{/foreach}
	</table>
	<div id="page">{$page}</div>	
</div>

</body>
</html>