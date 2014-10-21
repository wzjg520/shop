<?php /* Smarty version Smarty-3.1.17, created on 2014-05-14 13:58:21
         compiled from "D:\wamp\www\web\shop\view\admin\manage\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51425371ccfa777770-10957553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53ea09a3003667cd56362e18e41896d712b414d4' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\manage\\update.tpl',
      1 => 1400075612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51425371ccfa777770-10957553',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5371ccfa7bc194_77965913',
  'variables' => 
  array (
    'oneManage' => 0,
    'prev_url' => 0,
    'allLevel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5371ccfa7bc194_77965913')) {function content_5371ccfa7bc194_77965913($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>

<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/manage.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.form.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/channel.js"></script>
<script type="text/javascript" src="view/admin/js/manage_update.js"></script>
</head>
<body>
<h2><a href="?a=manage">返回导航列表</a>系统 -- 修改导航</h2>
<form method="post" action="?a=manage&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneManage']->value->id;?>
" name="update" id="updateForm">
	<input type="hidden" name="url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
"/>
	<dl class="form">
		<dd>
			用 户 名： <?php echo $_smarty_tpl->tpl_vars['oneManage']->value->user;?>

		</dd>
		<dd>
		<label for="pwd">密　　码：</label>
		<input type="password" id="pwd" name="pwd" class="text"/><span>（*大于6位）</span>
		</dd>
		<dd>
		<label for="notpwd">确认密码：</label>
		<input type="password" id="notpwd" name="notpwd" class="text"/><span>（*必须和密码一致）</span>
		</dd>
		<dd>
		<label for="level">等　　级：</label>
		<select name="level" id="level">
							<option value="0">--请选择一个权限--</option>
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['allLevel']->value,'selected'=>$_smarty_tpl->tpl_vars['oneManage']->value->level),$_smarty_tpl);?>

					</select><span>（*必须选定一个权限）</span>
		</dd>
		<dd><input type="submit" name="send" value="修改管理员"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
