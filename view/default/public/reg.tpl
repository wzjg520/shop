<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/reg.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/default/js/reg.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 注册会员 
</div>
<div id="reg">	
	<form action="?a=user&m=reg" method="post" id="regForm" name="form">
		<input type="hidden" name="thumb" value="view/default/images/default_face.jpg"/>
		<dl>
			<dt><h2>注册入口</h2><p class="short_line"></p></dt>
			<dd><label> 用 &nbsp;户 &nbsp;名：</label><input type="text" name="user" class="text"/><span> [必填](*用户名长度2到20位)</span></dd>
			<dd><label>性　　别：</label><label><input type="radio" name="gender" checked="checked" value="1"/>男</label><label><input type="radio" name="gender" value="0"/>女</label></dd>
			<dd><label>密　　码：</label><input type="password" id="pwd" name="pwd" class="text"/><span> [必填](*密码长度必须大于6位)</span></dd>
			<dd><label>确认密码：</label><input type="password"  name="notpwd" class="text"/><span> [必填](*确认密码必须和密码一致)</span></dd>
			<dd  class="face"><label>默认头像：</label><img name="pic" src="view/default/images/default_face.jpg"/> <input type="button" value="上传" onclick="javascript:centerWindow(500,200)"/><em>（*请上传200k内jpg、gif、png格式的图片）</em></dd>
			<dd><label>安全问题：</label><select name="question" class="text">
										<option value="">--请选择一个问题</option>
										<option value="您父亲的名字是">您父亲的姓名是</option>
										<option value="您母亲的年龄是">您母亲的年龄是</option>
										<option value="您配偶的名字是">您配偶的名字是</option>
										<option value="您配偶的生日是">您配偶的生日是</option>
									</select><span> [必填]（*用于密码找回）</span>
			</dd>
			<dd><label>安全答案：</label><input type="text" name="answer" class="text"/><span> [必填]（*用于密码找回）</span></dd>
			<dd><label>邮　　件：</label><input type="text" name="email" class="text"/><span></span></dd>
			<dd><label>验 &nbsp;证 &nbsp;码：</label><input type="text" name="validateCode" class="text code"/><span>（*输入下图中的字符，不区分大小写）</span></dd>
			<dd class="code"><img src="?a=index&m=validateCode" alt="验证码" onclick=" this.src='?a=index&m=validateCode&'+Math.random();"/> <span class="change">看不清换一张</span></dd>
			<dd><input type="submit" name="send" class="sub" value="注册会员"/></dd>
		</dl>
	</form>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>