<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/main.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<h2>起始页 -- 后台管理中心</h2>

<div id="list">
	<table class="public">
		<tr><th colspan="4">订单统计信息</th></tr>
		<tr><td>待发货订单：</td><td>{$count1}</td><td>未确认订单：</td><td>{$count2}</td></tr>
		<tr><td>未支付订单：</td><td>{$count3}</td><td>申请退款订单：</td><td>{$count4}</td></tr>
	</table>
	
	<table class="public">
		<tr><th colspan="4">商品统计信息</th></tr>
		<tr><td>商品总数量：</td><td>{$allGoodsCount}</td><td>库存警告量：</td><td>{$warnInventoryCount}</td></tr>
		<tr><td>下架商品量：</td><td>{$downGoodsCount}</td><td>促销商品量：</td><td>{$promoteGoodsCount}</td></tr>
	</table>
	
	<table class="public">
		<tr><th colspan="4">系统信息</th></tr>
		<tr><td>服务器操作系统：</td><td>{$os}</td><td>服务器软件：</td><td>{$server.SERVER_SOFTWARE}</td></tr>
		<tr><td>客户端浏览器：</td><td>{$server.HTTP_USER_AGENT}</td><td>本站网址：</td><td>{$server.HTTP_HOST}</td></tr>
	</table>
</div>
</html>