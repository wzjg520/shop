<?php /* Smarty version Smarty-3.1.17, created on 2014-05-23 11:05:00
         compiled from "D:\wamp\www\web\shop\view\admin\brand\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19945537db98870d836-70476305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4459e0e225545fd555f16d99644088b9be207378' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\brand\\update.tpl',
      1 => 1400814298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19945537db98870d836-70476305',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_537db9887450c1_34698373',
  'variables' => 
  array (
    'oneBrand' => 0,
    'prev_url' => 0,
    'allMainNavs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537db9887450c1_34698373')) {function content_537db9887450c1_34698373($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/brand.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/brand_update.js"></script>
</head>
<body>
<h2><a href="?a=brand">返回品牌列表</a>商品 -- 修改品牌</h2>
<form method="post" action="?a=brand&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneBrand']->value->id;?>
" name="add" id="updateForm">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
" />
	<dl class="form">
		<dd>品牌名称： <?php echo $_smarty_tpl->tpl_vars['oneBrand']->value->name;?>
</dd>
		<dd>
			<label for="type">品牌类型：</label>
			<select id="type" name="type"><option value="0">--请选择一个类型</option>
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['allMainNavs']->value,'selected'=>$_smarty_tpl->tpl_vars['oneBrand']->value->type),$_smarty_tpl);?>

			</select><span>（*不得为空）</span>
		</dd>
		<dd>
		<label for="name">网站地址：</label>
			<input type="text" id="url" name="url" value="<?php echo $_smarty_tpl->tpl_vars['oneBrand']->value->url;?>
" class="text"/><span>（*不得为空且不得大于40位）</span>
		</dd>
		<dd>
		<label for="info">品牌信息：</label>
			<textarea name="info" id="info"><?php echo $_smarty_tpl->tpl_vars['oneBrand']->value->info;?>
</textarea><span>（*小于200位）</span>
		</dd>
		<dd><input type="submit" name="send" value="修改品牌"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
