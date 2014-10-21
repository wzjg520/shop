<?php /* Smarty version Smarty-3.1.17, created on 2014-06-16 17:02:28
         compiled from "D:\wamp\www\web\shop\view\admin\commend\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8177539e9d90d372a6-65989183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77f7d84f5b22bb305ac37a6e9a322dd070a64327' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\commend\\update.tpl',
      1 => 1402909344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8177539e9d90d372a6-65989183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539e9d90d86ba2_31977280',
  'variables' => 
  array (
    'oneCommend' => 0,
    'prev_url' => 0,
    'star' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539e9d90d86ba2_31977280')) {function content_539e9d90d86ba2_31977280($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\function.html_radios.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=commend">返回评价列表</a>商品 -- 修改评价</h2>
<form method="post" action="?a=commend&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneCommend']->value->id;?>
" name="update" id="updateForm">
	<input type="hidden" name="url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
"/>
	<dl class="form">
		<dd>商品名称：<a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['oneCommend']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['oneCommend']->value->goodsid;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['oneCommend']->value->name;?>
</a></dd>
		<dd><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['oneCommend']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['oneCommend']->value->goodsid;?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['oneCommend']->value->thumb_small;?>
"/></a></dd>
		<dd>购买属性：<?php echo $_smarty_tpl->tpl_vars['oneCommend']->value->attr;?>
</dd>
		<dd>评价用户：<?php echo $_smarty_tpl->tpl_vars['oneCommend']->value->user;?>
</dd>
		<dd >评价星级：<span style="color:pink"><?php echo smarty_function_html_radios(array('name'=>"star",'options'=>$_smarty_tpl->tpl_vars['star']->value,'checked'=>$_smarty_tpl->tpl_vars['oneCommend']->value->star),$_smarty_tpl);?>
</span></dd>
		<dd>评价内容：<?php echo $_smarty_tpl->tpl_vars['oneCommend']->value->content;?>
</dd>
		<dd>
			<label for="content">回复内容：</label>
			<textarea class="text" style="width:350px;height:80px;background:#fff;" name="re_content"><?php echo $_smarty_tpl->tpl_vars['oneCommend']->value->re_content;?>
</textarea>
			<span>（*不得大于200位）</span>
		</dd>
		<dd>是否显示：
		<?php if ($_smarty_tpl->tpl_vars['oneCommend']->value->flag==1) {?>
		<label><input type="radio" name="flag" value="1" checked="checked"/>是</label>
		<label><input type="radio" name="flag" value="0"/>否</label>
		<?php } else { ?>
		<label><input type="radio" name="flag" value="1"/>是</label>
		<label><input type="radio" name="flag" value="0"  checked="checked"/>否</label>
		<?php }?>
		
		</dd>
		<dd><input type="submit" name="send" value="回复及修改评论"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
