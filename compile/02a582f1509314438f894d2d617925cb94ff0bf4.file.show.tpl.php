<?php /* Smarty version Smarty-3.1.17, created on 2014-06-21 15:01:12
         compiled from "D:\wamp\www\web\shop\view\admin\edit\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1040353a52d6fdfb5b0-22620181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02a582f1509314438f894d2d617925cb94ff0bf4' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\edit\\show.tpl',
      1 => 1403334071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1040353a52d6fdfb5b0-22620181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53a52d6fedbc16_31747575',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a52d6fedbc16_31747575')) {function content_53a52d6fedbc16_31747575($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=edit&m=runAdd">添加主题</a>商品 -- 主题列表</h2>
<div id="list">
	<table class="public">
		<tr><th>风格名称</th><th>风格目录</th><th>版本号</th><th>操作</th></tr>
		<tr><td><input type="text" value="默认主题" size="8" /></td><td>default</td><td>v.10</td><td><a href="?a=edit&m=dir&dir=default">进入目录</a></td></tr>
			
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>
