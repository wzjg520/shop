<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/manage.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.form.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/channel.js"></script>
<script type="text/javascript" src="view/admin/js/manage_add.js"></script>
</head>
<body>
<h2><a href="?a=manage">返回管理员列表</a>系统 -- 新增管理员</h2>
<form method="post" action="?a=manage&m=runAdd" name="add" id="addForm">
	<dl class="form">
		<dd>
		<label for="user">用 户 名：</label>
		<input type="text" id="user" name="user" class="text"/><span>（*2-20位之间）</span>
		</dd>
		<dd>
		<label for="pwd">密　　码：</label>
		<input type="text" id="pwd" name="pwd" class="text"/><span>（*大于6位）</span>
		</dd>
		<dd>
		<label for="notpwd">确认密码：</label>
		<input type="text" id="notpwd" name="notpwd" class="text"/><span>（*必须和密码一致）</span>
		</dd>
		<dd>
		<label for="level">等　　级：</label>
		<select name="level" id="level">
						<option value="0">--请选择一个权限--</option>
						{html_options options=$allLevel}
					</select><span>（*必须选定一个权限）</span>
		</dd>
		<dd><input type="submit" name="send" value="新增管理员"/></dd>
	</dl>
</form>

</body>
</html>