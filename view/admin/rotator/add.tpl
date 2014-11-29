<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<!-- <link rel="stylesheet" type="text/css" href='view/admin/style/goods.css'/> -->
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>

<script type="text/javascript" src="view/admin/js/rotator.js"></script>
</head>
<body>
<h2><a href="?a=goods">返回轮播器列表</a>轮播器 -- 新增轮播器</h2>
<form method="post" action="?a=rotator&m=runAdd" name="form" id="addForm">
	<dl class="form">
		
		<dd><label for="name">图片名称：</label><input type="text" id="name" name="name" class="text"/><span class="red"> (*)</span></dd>
		
		<dd><label for="link">链接地址：</label><input type="text" id="link" name="link" class="text"/><span class="red"> (*)</span></dd>

		<dd>上传图片：<input type="text" class="text" name="thumb" readonly="readonly"/>　<input type="button" value="选择" onclick="centerWindow(500,200)"/><img name="pic" alt="轮播器图片" style="display:none"/> (*为保存图片完整性，最佳尺寸为：300 * 300  必须是jpg,gif,png，并且200k内)</dd>
		
		<dd><input type="submit" name="send" value="新增轮播器"/></dd>
	</dl>
</form>

</body>
</html>