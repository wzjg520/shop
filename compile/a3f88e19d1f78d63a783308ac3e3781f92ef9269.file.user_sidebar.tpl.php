<?php /* Smarty version Smarty-3.1.17, created on 2014-06-19 15:36:20
         compiled from "D:\wamp\www\web\shop\view\default\public\user_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8483538c4731282242-76475430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3f88e19d1f78d63a783308ac3e3781f92ef9269' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\default\\public\\user_sidebar.tpl',
      1 => 1403163342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8483538c4731282242-76475430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538c473131f3c5_31137511',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538c473131f3c5_31137511')) {function content_538c473131f3c5_31137511($_smarty_tpl) {?>
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
