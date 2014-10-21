<?php /* Smarty version Smarty-3.1.17, created on 2014-06-19 15:32:39
         compiled from "D:\wamp\www\web\shop\view\default\public\user_collect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2792553a29176d649b8-28120549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb134baec3ef4a2d971ca6fa30135566e4e6eb7b' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\default\\public\\user_collect.tpl',
      1 => 1403163106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2792553a29176d649b8-28120549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53a29176dea321_47442762',
  'variables' => 
  array (
    'allCommend' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a29176dea321_47442762')) {function content_53a29176dea321_47442762($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城系统</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/user_mycommend.css" />
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	当前位置：<a href="./">个人中心</a> &gt;我的收藏 	
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/user_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main">
	<h2>我的评论</h2>
	<div class="mycollect">		
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allCommend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<dl>
				<dt><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></dt>
				<dd><a href="?a=details&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->goodsid;?>
&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></dd>
				<dd><span class="date"><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</span><?php echo $_smarty_tpl->tpl_vars['value']->value->attr;?>
</dd>
				<dd>评价：
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==5) {?><span class="star">★★★★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==4) {?><span class="star">★★★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==3) {?><span class="star">★★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==2) {?><span class="star">★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==1) {?><span class="star">★</span><?php }?>
				</dd>
				<?php if ($_smarty_tpl->tpl_vars['value']->value->re_content) {?>
				<dd><span class="red">商家回复：<?php echo $_smarty_tpl->tpl_vars['value']->value->re_content;?>
</span></dd>
				<?php }?>
			</dl>
			<p class="clear"></p>
		<?php } ?>
		<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>				
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
