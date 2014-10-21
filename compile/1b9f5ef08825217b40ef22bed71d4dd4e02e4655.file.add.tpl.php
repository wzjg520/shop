<?php /* Smarty version Smarty-3.1.17, created on 2014-05-29 11:07:42
         compiled from "D:\wamp\www\web\shop\view\admin\nav\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1526453736b466357f5-75119055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b9f5ef08825217b40ef22bed71d4dd4e02e4655' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\nav\\add.tpl',
      1 => 1401332860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1526453736b466357f5-75119055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53736b46654fb3_78554158',
  'variables' => 
  array (
    'oneNav' => 0,
    'prev_url' => 0,
    'allBrands' => 0,
    'allPrice' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53736b46654fb3_78554158')) {function content_53736b46654fb3_78554158($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkboxes')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\function.html_checkboxes.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/nav.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/nav_add.js"></script>
</head>
<body>
<h2><a href="?a=nav">返回导航列表</a>商品 -- 新增导航条</h2>
<form method="post" action="?a=nav&m=runAdd" name="add" id="navForm">
	<?php if ($_smarty_tpl->tpl_vars['oneNav']->value) {?><input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['oneNav']->value[0]->id;?>
"/><?php }?>
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
" />
	<dl class="form">
		<?php if ($_smarty_tpl->tpl_vars['oneNav']->value) {?><dd>父类名称：<?php echo $_smarty_tpl->tpl_vars['oneNav']->value[0]->name;?>
</dd><?php }?>
		<dd>
		<label for="name">导航名称：</label>
		<input type="text" id="name" name="name" class="text"/><span>（*2-4位之间）</span>
		</dd>
		<dd>
		<label for="info">导航信息：</label>
		<textarea name="info" id="info"></textarea><span>（*小于200位）</span>
		</dd>
		<?php if ($_smarty_tpl->tpl_vars['oneNav']->value) {?>
		<dd>
			品　　牌：
			<?php echo smarty_function_html_checkboxes(array('name'=>'brand','options'=>$_smarty_tpl->tpl_vars['allBrands']->value,'selected'=>'1'),$_smarty_tpl);?>

		</dd>
		<?php }?>
		<dd>价格区间：<?php echo smarty_function_html_checkboxes(array('name'=>'price','options'=>$_smarty_tpl->tpl_vars['allPrice']->value),$_smarty_tpl);?>

		</dd>
		<dd><input type="submit" name="send" value="新增导航"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
