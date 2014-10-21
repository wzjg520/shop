<?php /* Smarty version Smarty-3.1.17, created on 2014-06-19 16:37:41
         compiled from "D:\wamp\www\web\shop\view\default\public\user_mycollect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3023553a2923ced53c4-97692085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '922e73ce37ef205f7a9ed9c2895f54755da27d43' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\default\\public\\user_mycollect.tpl',
      1 => 1403166883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3023553a2923ced53c4-97692085',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53a2923d045f90_88976747',
  'variables' => 
  array (
    'allCollect' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a2923d045f90_88976747')) {function content_53a2923d045f90_88976747($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>在线商城系统</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/user_mycollect.css" />
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	当前位置：<a href="?a=user">个人中心</a> &gt; 我的收藏 	
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/user_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main">
	<h2>我的评论</h2>
	<div class="pro_list">		
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allCollect']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<dl>
			<dt><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></a></dt>
			<dd class="price"><strong>￥<?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
元</strong> <del>￥<?php echo $_smarty_tpl->tpl_vars['value']->value->price_market;?>
元</del></dd>
			<dd class="title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></dd>
			<dd class="commend"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
#commend">已有<?php echo $_smarty_tpl->tpl_vars['value']->value->count;?>
人评价 </a> <span class="green">(销售<?php echo $_smarty_tpl->tpl_vars['value']->value->sale_count;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value->unit;?>
)</span></dd>
			<dd class="buy"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">购买</a> | <a href="?a=user&m=deleteCollect&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">取消收藏</a> | <a href="?a=compare&m=setCompare&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="javascript:return checkCompare('<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
')" target="blank">比较</a></dd>			
		</dl>
		<?php } ?>
		<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>			
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
