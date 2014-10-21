<?php /* Smarty version Smarty-3.1.17, created on 2014-06-07 14:03:03
         compiled from "D:\wamp\www\web\shop\view\admin\service\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1485053929ba081b490-12584871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70be7d239114065d7e429cb6fe721b4109efae76' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\service\\update.tpl',
      1 => 1402120742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1485053929ba081b490-12584871',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53929ba086a127_05812109',
  'variables' => 
  array (
    'oneService' => 0,
    'prev_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53929ba086a127_05812109')) {function content_53929ba086a127_05812109($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.form.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/service.js"></script>
<body>
<h2><a href="?a=service">返回售后服务列表</a>商品 -- 新增售后</h2>
<form method="post" action="?a=service&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneService']->value[0]->id;?>
" name="update" id="serviceForm">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
"/>
	<dl class="form">
		<dd>
			<label for="name">售后服务名称：</label>
			<input type="text" class="text" name="name" ajax_id="<?php echo $_smarty_tpl->tpl_vars['oneService']->value[0]->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oneService']->value[0]->name;?>
" id="name"/><span> [*必填]不得超过20位</span>
		</dd>
		
		<dd><textarea class="ckeditor" id="TextArea1" name="content"><?php echo $_smarty_tpl->tpl_vars['oneService']->value[0]->content;?>
</textarea></dd>
		<dd>是否首选：<input type="radio" name="first" <?php if ($_smarty_tpl->tpl_vars['oneService']->value[0]->first==1) {?>checked="checked"<?php }?> value="1"/>是</label>
		<label><input type="radio" name="first" <?php if ($_smarty_tpl->tpl_vars['oneService']->value[0]->first==0) {?>checked="checked"<?php }?> value="0"/>否</label></dd>
		<dd><input type="submit" name="send" class="submit" value="修改售后服务"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
