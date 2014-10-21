<?php /* Smarty version Smarty-3.1.17, created on 2014-05-29 10:33:15
         compiled from "D:\wamp\www\web\shop\view\admin\price\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:228725386949c0b91f6-09229512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1eb933ead8f4e6b326ae9bf17f2d29373a5b07b' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\price\\add.tpl',
      1 => 1401330792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228725386949c0b91f6-09229512',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5386949c0ef320_99131680',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5386949c0ef320_99131680')) {function content_5386949c0ef320_99131680($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/price.css'/>
<body>
<h2><a href="?a=price">返回价格区间列表</a>商品 -- 新增价格区间</h2>
<form method="post" action="?a=price&m=runAdd" name="add" id="priceForm">
	<dl class="form">
		<dd>
		<label for="price_left">价格区间：</label>
			<input type="text" id="price_left" name="price_left" class="text"/> - <input type="text" id="price_right" name="price_right" class="text"/><span>（*必须是数字）</span>
		</dd>
		<dd><input type="submit" name="send" value="新增价格区间"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
