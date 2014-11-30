<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/reg.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/default/js/user.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
{include file='default/public/header.tpl'}
<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 个人中心
</div>
<div id="shop_main">
	{include file='default/public/user_sidebar.tpl'}
	<div id="main">	
		<h2>个人信息</h2>
		<div class="personal_info">
			<dl>
				<!-- <dt><img src="view/default/images/default_face.jpg" alt="当前头像"/></dt> -->
				<dd>
					<!-- <p class="user_name">用户名：{$smarty.cookies.user}</p> -->
					<p class="infor_progress">资料完整度：<span><em></em></span> 70%</p>
				</dd>
			</dl>
			<div id="reg">	
				<form action="?a=user&m=update" method="post" id="updateForm" name="form">
				{if $user->thumb }
				<input type="hidden" name="thumb" value="{$user->thumb}"/>
				{else}
				<input type="hidden" name="thumb" value="view/default/images/default_face.jpg"/>
				{/if}
				
				<dl>
					<dd><label> 用 &nbsp;户 &nbsp;名：</label><input type="text" name="user" value="{$user->user}" class="text"/><span class="red"> *</span></dd>
					<dd><label>性　　别：</label><label><input type="radio" name="gender" checked="checked" value="1"/>男</label><label><input type="radio" name="gender" value="0"/>女</label></dd>
					<dd  class="face"><label style="float:left;padding-top:40px;">默认头像：</label><img name="pic" src="{$user->thumb}" style="float:left"/> <input style="margin-top:40px;" type="button" value="上传" onclick="javascript:centerWindow(500,200)"/><em style="padding-top:40px;">（*请上传200k内jpg、gif、png格式的图片）</em></dd>
					<dd style="clear:both"><label>邮　　件：</label><input type="text" name="email" class="text" value="{$user->email}"/><span></span></dd>
					<dd><label>验 &nbsp;证 &nbsp;码：</label><input type="text" name="validateCode" class="text code"/><span class="red">*</span></dd>
					<dd class="code"><img src="?a=index&m=validateCode" alt="验证码" onclick=" this.src='?a=index&m=validateCode&'+Math.random();"/> <span class="change">看不清换一张</span></dd>

					<dd><input type="submit" name="send" class="sub" value="修改信息"/></dd>
				</dl>
				</form>
			</div>
		</div>
	</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>