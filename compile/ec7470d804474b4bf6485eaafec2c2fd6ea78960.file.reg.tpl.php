<?php /* Smarty version Smarty-3.1.17, created on 2014-06-20 15:43:58
         compiled from "D:\wamp\www\web\shop\view\default\public\reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16788538937724f9258-25968614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec7470d804474b4bf6485eaafec2c2fd6ea78960' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\default\\public\\reg.tpl',
      1 => 1402110656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16788538937724f9258-25968614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5389377252e6e9_66288896',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5389377252e6e9_66288896')) {function content_5389377252e6e9_66288896($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 注册会员 
</div>
<div id="reg">	
	<form action="?a=user&m=reg" method="post" id="regForm" name="form">
		<input type="hidden" name="thumb" value="view/default/images/default_face.jpg"/>
		<dl>
			<dd>用 户 名：<input type="text" name="user" class="text"/><span> [必填](*用户名长度2到20位)</span></dd>
			<dd>性　　别：<label><input type="radio" name="gender" checked="checked" value="1"/>男</label><label><input type="radio" name="gender" value="0"/>女</label></dd>
			<dd>密　　码：<input type="password" id="pwd" name="pwd" class="text"/><span> [必填](*密码长度必须大于6位)</span></dd>
			<dd>确认密码：<input type="password"  name="notpwd" class="text"/><span> [必填](*确认密码必须和密码一致)</span></dd>
			<dd  class="face">默认头像：<img name="pic" src="view/default/images/default_face.jpg"/> <input type="button" value="上传" onclick="javascript:centerWindow(500,200)"/>（*必须是jpg,gif,png，并且200k内)）</dd>
			<dd>安全问题：<select name="question" class="text">
										<option value="">--请选择一个问题</option>
										<option value="您父亲的名字是">您父亲的姓名是</option>
										<option value="您母亲的年龄是">您母亲的年龄是</option>
										<option value="您配偶的名字是">您配偶的名字是</option>
										<option value="您配偶的生日是">您配偶的生日是</option>
									</select><span> [必填]（*用于密码找回）</span>
			</dd>
			<dd>安全答案：<input type="text" name="answer" class="text"/><span> [必填]（*用于密码找回）</span></dd>
			<dd>邮　　件：<input type="text" name="email" class="text"/><span></span></dd>
			<dd>验 证 码：<input type="text" name="validateCode" class="text code"/><span>（*输入下图中的字符，不区分大小写）</span></dd>
			<dd class="code"><img src="?a=index&m=validateCode" alt="验证码" onclick=" this.src='?a=index&m=validateCode&'+Math.random();"/> <span class="change">看不清换一张</span></dd>
			<dd>提　　交：<input type="submit" name="send" class="sub" value="注册会员"/></dd>
		</dl>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
