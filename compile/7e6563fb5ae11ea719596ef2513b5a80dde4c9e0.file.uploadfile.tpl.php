<?php /* Smarty version Smarty-3.1.17, created on 2014-05-31 12:44:19
         compiled from "D:\wamp\www\web\shop\view\admin\public\uploadfile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145105380086a4f2888-48733373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e6563fb5ae11ea719596ef2513b5a80dde4c9e0' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\public\\uploadfile.tpl',
      1 => 1401509775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145105380086a4f2888-48733373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5380086a518394_78724386',
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5380086a518394_78724386')) {function content_5380086a518394_78724386($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>上传缩略图</title>
</head>
<body >
<div style="margin:30px auto;width:400px;text-align:center" >
	<form method="post" action="?a=call&m=upload" enctype="multipart/form-data" >
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" name="type"/>	
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
		<input type="file" name="userfile" id="userfile"/>
		<input type="submit" name="send"  value="确认上传"/>
	</form>
</div>

</body>
</html><?php }} ?>
