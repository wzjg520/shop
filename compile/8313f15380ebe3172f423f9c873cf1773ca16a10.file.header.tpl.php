<?php /* Smarty version Smarty-3.1.17, created on 2014-05-21 17:07:24
         compiled from "view\default\public\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5927537c6ccc7c24d3-64937633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8313f15380ebe3172f423f9c873cf1773ca16a10' => 
    array (
      0 => 'view\\default\\public\\header.tpl',
      1 => 1400663139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5927537c6ccc7c24d3-64937633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontTenNav' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_537c6ccc7d6d87_65822670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537c6ccc7d6d87_65822670')) {function content_537c6ccc7d6d87_65822670($_smarty_tpl) {?><div id="header">
	<h1><a href="./">爱花花</a></h1>
</div>
<div id="nav">
	<ul>
		<li><a href="#">首页</a></li>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontTenNav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<li><a href="?a=list&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></li>
		<?php } ?>
	</ul>
</div>
<div id="search"></div><?php }} ?>
