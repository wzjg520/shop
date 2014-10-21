<?php /* Smarty version Smarty-3.1.17, created on 2014-10-19 11:27:29
         compiled from "/home/wwwroot/myweb.com/shop/view/default/public/user_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80155151154432fa137adb3-20263144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a90b9f03a5e62bef3be953e0f3daa8a2562d27d5' => 
    array (
      0 => '/home/wwwroot/myweb.com/shop/view/default/public/user_sidebar.tpl',
      1 => 1403163344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80155151154432fa137adb3-20263144',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_54432fa137bd53_55421655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54432fa137bd53_55421655')) {function content_54432fa137bd53_55421655($_smarty_tpl) {?>
<div id="sidebar">
	<h2>个人中心</h2>
	<ul>
		<li><a href="?a=user&m=user">起始页</a></li>
		<li><a href="?a=user&m=address">收货地址</a></li>
		<li><a href="?a=user&m=order">订单列表</a></li>
		<li><a href="?a=user&m=mycommend">我的评价</a></li>
		<li><a href="?a=user&m=mycollect">我的收藏</a></li>	
	</ul>
</div><?php }} ?>
