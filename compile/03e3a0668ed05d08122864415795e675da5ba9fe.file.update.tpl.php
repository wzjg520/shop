<?php /* Smarty version Smarty-3.1.17, created on 2014-05-29 10:46:43
         compiled from "D:\wamp\www\web\shop\view\admin\price\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:547253869d53a670a7-38917537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03e3a0668ed05d08122864415795e675da5ba9fe' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\price\\update.tpl',
      1 => 1401331583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '547253869d53a670a7-38917537',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53869d53aab212_12953788',
  'variables' => 
  array (
    'onePrice' => 0,
    'prev_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53869d53aab212_12953788')) {function content_53869d53aab212_12953788($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/price.css'/>
</head>
<body>
<h2><a href="?a=price">返回价格区间列表</a>商品 -- 修改价格区间</h2>
<form method="post" action="?a=price&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['onePrice']->value[0]->id;?>
" name="update" id="priceForm">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
"/>
	<dl class="form">
		<dd>
		<label for="price_left">价格区间：</label>
			<input type="text" id="price_left" name="price_left" value="<?php echo $_smarty_tpl->tpl_vars['onePrice']->value[0]->price_left;?>
" class="text"/> - <input type="text" id="price_right" name="price_right" value="<?php echo $_smarty_tpl->tpl_vars['onePrice']->value[0]->price_right;?>
" class="text"/><span>（*必须是数字）</span>
		</dd>
		<dd><input type="submit" name="send" value="修改价格区间"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
