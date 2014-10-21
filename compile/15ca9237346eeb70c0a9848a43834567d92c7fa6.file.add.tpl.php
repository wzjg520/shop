<?php /* Smarty version Smarty-3.1.17, created on 2014-05-23 11:54:39
         compiled from "D:\wamp\www\web\shop\view\admin\brand\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31642537daa92cdaa41-58246103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15ca9237346eeb70c0a9848a43834567d92c7fa6' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\brand\\add.tpl',
      1 => 1400815753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31642537daa92cdaa41-58246103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_537daa92d12378_56753787',
  'variables' => 
  array (
    'prev_url' => 0,
    'allMainNavs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537daa92d12378_56753787')) {function content_537daa92d12378_56753787($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/brand.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/brand_add.js"></script>
</head>
<body>
<h2><a href="?a=nav">返回品牌列表</a>商品 -- 新增品牌</h2>
<form method="post" action="?a=brand&m=runAdd" name="add" id="addForm">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
" />
	<dl class="form">
		
		<dd>
		<label for="name">品牌名称：</label>
			<input type="text" id="name" name="name" class="text"/><span>（*不得为空且不得大于20位）</span>
		</dd>
		<dd>
			<label for="type">品牌类型：</label>
			<select id="type" name="type"><option value="0">--请选择一个类型</option>
				<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['allMainNavs']->value),$_smarty_tpl);?>

			</select><span>（*不得为空）</span>
		</dd>
		<dd>
		<label for="name">网站地址：</label>
			<input type="text" id="url" name="url" class="text"/><span>（*不得为空且不得大于40位）</span>
		</dd>
		<dd>
		<label for="info">品牌信息：</label>
			<textarea name="info" id="info"></textarea><span>（*小于200位）</span>
		</dd>
		<dd><input type="submit" name="send" value="新增品牌"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
