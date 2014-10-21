<?php /* Smarty version Smarty-3.1.17, created on 2014-05-29 11:37:43
         compiled from "D:\wamp\www\web\shop\view\admin\nav\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175825373735bab3f23-42133686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d41752bf0e556b69644985f9a806325fcde337b' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\nav\\update.tpl',
      1 => 1401334660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175825373735bab3f23-42133686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5373735baf9b71_61360557',
  'variables' => 
  array (
    'oneNav' => 0,
    'prev_url' => 0,
    'allBrands' => 0,
    'updateBrands' => 0,
    'allPrice' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5373735baf9b71_61360557')) {function content_5373735baf9b71_61360557($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkboxes')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\function.html_checkboxes.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/nav.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/nav_update.js"></script>
</head>
<body>
<h2><a href="?a=nav">返回导航列表</a>商品 -- 修改导航</h2>
<form method="post" action="?a=nav&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneNav']->value->id;?>
" name="update" id="navForm">
	<input type="hidden" name="url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
"/>
	<dl class="form">
		<dd>
			<label for="name">导航名称： <?php echo $_smarty_tpl->tpl_vars['oneNav']->value->name;?>
</label>
		</dd>
		<dd>
		<label for="info">导航信息：</label>
		<textarea name="info" id="info" ><?php echo $_smarty_tpl->tpl_vars['oneNav']->value->info;?>
</textarea><span>（*不得大于200位）</span>
		</dd>
		<?php if ($_smarty_tpl->tpl_vars['oneNav']->value->sid!=0) {?>
		<dd>
			品　　牌：
			<?php echo smarty_function_html_checkboxes(array('name'=>'brand','options'=>$_smarty_tpl->tpl_vars['allBrands']->value,'selected'=>$_smarty_tpl->tpl_vars['updateBrands']->value),$_smarty_tpl);?>

		</dd>
		<?php }?>
		<dd>价格区间：<?php echo smarty_function_html_checkboxes(array('name'=>'price','options'=>$_smarty_tpl->tpl_vars['allPrice']->value,'selected'=>$_smarty_tpl->tpl_vars['oneNav']->value->price),$_smarty_tpl);?>

		<dd><input type="submit" name="send" value="修改导航"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
