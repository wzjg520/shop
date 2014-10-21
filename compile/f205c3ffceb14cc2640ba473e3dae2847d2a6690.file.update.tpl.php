<?php /* Smarty version Smarty-3.1.17, created on 2014-05-27 15:54:18
         compiled from "D:\wamp\www\web\shop\view\admin\attr\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:565653842a21f1f0e4-61559712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f205c3ffceb14cc2640ba473e3dae2847d2a6690' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\attr\\update.tpl',
      1 => 1401177244,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '565653842a21f1f0e4-61559712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53842a220320b6_99045457',
  'variables' => 
  array (
    'oneAttr' => 0,
    'prev_url' => 0,
    'way' => 0,
    'allNav' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53842a220320b6_99045457')) {function content_53842a220320b6_99045457($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_checkboxes')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\function.html_checkboxes.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/attr.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/attr.js"></script>
<title>商城后台管理</title>
</head>
<body>
	<h2><a href="?a=attr">返回属性列表</a>商品 -- 修改自定义属性</h2>
<form method="post" action="?a=attr&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneAttr']->value->id;?>
" name="update" id="updateForm">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
" />
	<dl class="form">
		<dd>
			<label for="name">属性名称：</label><input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['oneAttr']->value->name;?>
" class="text"/><span> <b class="red">[必选]</b>（*2-4位之间）</span>
		</dd>
		<dd>选择方式：<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oneAttr']->value->way;?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_radios(array('name'=>"way",'options'=>$_smarty_tpl->tpl_vars['way']->value,'selected'=>$_tmp1),$_smarty_tpl);?>
</dd>
		<dd>属性项目：<textarea name="item"><?php echo $_smarty_tpl->tpl_vars['oneAttr']->value->item;?>
</textarea> （*每个项目用“|”隔开，例如，红色|蓝色|绿色）</dd>
		<dd>请选择关联的类别：</dd>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allNav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<dd><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</dd>
			<?php if ($_smarty_tpl->tpl_vars['value']->value->child) {?>
			<?php echo smarty_function_html_checkboxes(array('options'=>$_smarty_tpl->tpl_vars['value']->value->child,'name'=>"nav",'selected'=>$_smarty_tpl->tpl_vars['oneAttr']->value->nav),$_smarty_tpl);?>

			<?php }?>
		<?php } ?>
		<dd>没有您需要的类别，请先<a class="red" href="?a=nav&m=runAdd">添加</a>类别</dd>
		<dd><input type="submit" name="send" value="修改属性"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
