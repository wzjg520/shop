<?php /* Smarty version Smarty-3.1.17, created on 2014-06-21 16:36:49
         compiled from "D:\wamp\www\web\shop\view\admin\edit\addfile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2554553a543054de556-68793920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f17ae59f02d142d6aee1441b83764e1ca03f78a' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\edit\\addfile.tpl',
      1 => 1403339647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2554553a543054de556-68793920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53a54305526528_44539535',
  'variables' => 
  array (
    'prev_url' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a54305526528_44539535')) {function content_53a54305526528_44539535($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/edit.css'/>
<title>商城后台管理</title>
</head>
<body>
	<h2><a href="?a=edit&m=file&dir=<?php echo $_GET['dir'];?>
&file=<?php echo $_GET['file'];?>
">返回文件列表</a>系统 -- 添加文件</h2>
	<form method="post" name="update" action="?a=edit&m=runAddFile&dir=<?php echo $_GET['dir'];?>
&file=<?php echo $_GET['file'];?>
">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
"/>
	<dl class="form">
		<dd>文件名称：<input type="text" name="name" class="text" value="<?php echo $_GET['name'];?>
" /> </dd>
		<dd><span class="middle">代码编辑：</span><textarea name="content" style="width:90%;height:500px;"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea></dd>
		<dd><input type="submit" name="send"  value="新增文件" class="submit" /></dd>
	</dl>
</form>
</body>
</html><?php }} ?>
