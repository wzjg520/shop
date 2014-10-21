<?php /* Smarty version Smarty-3.1.17, created on 2014-06-23 12:25:42
         compiled from "D:\wamp\www\web\shop\view\default\public\user_address.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29929538c4a07899209-18884644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6aae5e5d68309924ec48dbbe0b3c557729ee2a8e' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\default\\public\\user_address.tpl',
      1 => 1403497527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29929538c4a07899209-18884644',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538c4a078d98c9_60833806',
  'variables' => 
  array (
    'allAddress' => 0,
    'value' => 0,
    'frontUser' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c4a078d98c9_60833806')) {function content_538c4a078d98c9_60833806($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/user.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 当前位置：<a href="./">首页</a> &gt; 个人中心
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/user_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main">	
	<h2><a href="?a=cart">[去结算中心]</a>收货地址</h2>
	<table>
		<tr><th>收货人姓名</th><th>地址</th><th>电话</th><th>邮编</th><th>电子邮件</th><th>标志性建筑</th><th>操作</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allAddress']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->address;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->tel;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->code;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->email;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->buildings;?>
</td>
		<td><?php if ($_smarty_tpl->tpl_vars['value']->value->selected) {?>是<?php } else { ?><a href="?a=user&m=selected&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">首选</a><?php }?> | <a href="?a=user&m=address&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">修改</a> | <a href="?a=user&m=RunDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('您确定要删除吗') ? true : false">删除</a></td></tr>
		<?php } ?>
	</table>
	<h2>修改收货人信息</h2>
	<form action="?a=user&m=address&id=<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->id;?>
" method="post">
	<table class="left">
		<tr><td width="15%">收货人姓名：</td><td><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->name;?>
" name="name"/></td><td width="15%">电子邮件地址：</td><td><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->email;?>
" name="email"/></td></tr>
		<tr><td>详细地址：</td><td><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->address;?>
" name="address"/></td><td>邮政编码：</td><td><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->code;?>
" name="code"/></td></tr>
		<tr><td>手机：</td><td><input type="text" class="text" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->tel;?>
"/></td><td>标志建筑：</td><td><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->buildings;?>
" name="buildings"/></td></tr>
		<tr><td>江浙沪：</td><td><label><input type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['frontUser']->value[0]->flag) {?>checked="checked"<?php }?> name="flag"/>是</label><label><input type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['frontUser']->value[0]->flag==0) {?>checked="checked"<?php }?> name="flag"/>否</label></td><td>最佳送货时间：</td><td><input type="text" name="time" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->time;?>
"/></td></tr>
		<tr><td colspan="4" class="submit"><input class="submit" name="send" value="" type="submit"/></td></tr>	
	</table>
	</form>
	<h2>新增收货人</h2>
	<form action="?a=user&m=address" method="post">
	<table class="left">
		<tr><td width="15%">收货人姓名：</td><td><input type="text" class="text"  name="name"/></td><td width="15%">电子邮件地址：</td><td><input type="text" class="text" name="email"/></td></tr>
		<tr><td>详细地址：</td><td><input type="text" class="text"  name="address"/></td><td>邮政编码：</td><td><input type="text" class="text" name="code"/></td></tr>
		<tr><td>手机：</td><td><input type="text" class="text" name="tel" /></td><td>标志建筑：</td><td><input type="text" class="text"name="buildings"/></td></tr>
		<tr><td>江浙沪：</td><td><label><input type="radio" checked="checked" value="1" name="flag"/>是</label><label><input type="radio" value="0" name="flag"/>否</label></td><td>最佳送货时间：</td><td><input type="text" name="time" /></td></tr>
		<tr><td colspan="4" class="submit"><input class="submit" name="send" value="" type="submit"/></td></tr>	
	</table>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
