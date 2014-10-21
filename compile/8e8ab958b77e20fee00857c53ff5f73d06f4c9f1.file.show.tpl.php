<?php /* Smarty version Smarty-3.1.17, created on 2014-06-16 15:37:13
         compiled from "D:\wamp\www\web\shop\view\admin\commend\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1267539e91d9ca7f64-68521521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e8ab958b77e20fee00857c53ff5f73d06f4c9f1' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\commend\\show.tpl',
      1 => 1402904033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1267539e91d9ca7f64-68521521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_539e91d9d131f5_64916976',
  'variables' => 
  array (
    'allCommend' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539e91d9d131f5_64916976')) {function content_539e91d9d131f5_64916976($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2>商品 -- 评论列表</h2>
<div id="list">
	<table class="public">
		<tr><th>序号</th><th>商品名称</th><th>评论内容</th><th>回复内容</th><th>评价星级</th><th>评价者</th><th>日期</th><th>操作</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allCommend']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allCommend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td>
			<td title="<?php echo $_smarty_tpl->tpl_vars['value']->value->content;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value->content,20);?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['value']->value->re_content) {?><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value->re_content,20);?>
<?php } else { ?><span>尚未回复</span><?php }?></td>
			<td style="color:pink">
				<?php if ($_smarty_tpl->tpl_vars['value']->value->star==5) {?><span class="star">★★★★★</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value->star==4) {?><span class="star">★★★★</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value->star==3) {?><span class="star">★★★</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value->star==2) {?><span class="star">★★</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value->star==1) {?><span class="star">★</span><?php }?>					
			</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->user;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</td><td>
				<a href="?a=commend&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=commend&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('删除之后，用户可以重新评价\r\n如果你想要屏蔽该评价，请在修改里设置\r\n你真的要删除这个评价吗？') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
			</td></tr>
			<?php } ?>
		<?php } else { ?>
			<tr><td colspan="6">暂时没有数据</td></tr>
		<?php }?>
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>
