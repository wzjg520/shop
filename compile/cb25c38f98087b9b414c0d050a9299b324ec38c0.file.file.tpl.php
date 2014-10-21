<?php /* Smarty version Smarty-3.1.17, created on 2014-06-21 16:32:03
         compiled from "D:\wamp\www\web\shop\view\admin\edit\file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2838553a5347c800e22-47131814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb25c38f98087b9b414c0d050a9299b324ec38c0' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\edit\\file.tpl',
      1 => 1403339520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2838553a5347c800e22-47131814',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53a5347c882c50_94402221',
  'variables' => 
  array (
    'file' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a5347c882c50_94402221')) {function content_53a5347c882c50_94402221($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=edit&m=runAddFile&dir=<?php echo $_GET['dir'];?>
&file=<?php echo $_GET['file'];?>
">添加文件</a>系统 -- 目录列表</h2>
<div id="list">
	<table class="public">
		<tr><th>文件名称</th><th>操作</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['file']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['value']->value!='.'&&$_smarty_tpl->tpl_vars['value']->value!='..') {?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td><td><a href="?a=edit&m=runUpdate&dir=<?php echo $_GET['dir'];?>
&file=<?php echo $_GET['file'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">编辑</a> <a onclick="javascript:return confirm('您确定要删除<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
吗？')" href="?a=edit&m=runDelete&dir=<?php echo $_GET['dir'];?>
&file=<?php echo $_GET['file'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">删除</a></td></tr>
		<?php }?>
		<?php } ?>
		<tr><td colspan="2"><a href="?a=edit&m=dir&dir=<?php echo $_GET['dir'];?>
">[返回风格主题列表]</a></td></tr>
	</table>
			
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>
