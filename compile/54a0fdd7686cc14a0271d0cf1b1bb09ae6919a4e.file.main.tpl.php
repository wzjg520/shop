<?php /* Smarty version Smarty-3.1.17, created on 2014-06-20 21:21:36
         compiled from "D:\wamp\www\web\shop\view\admin\public\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4475536c6e95d99904-17478564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54a0fdd7686cc14a0271d0cf1b1bb09ae6919a4e' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\public\\main.tpl',
      1 => 1403270434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4475536c6e95d99904-17478564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_536c6e95e17219_91570255',
  'variables' => 
  array (
    'count1' => 0,
    'count2' => 0,
    'count3' => 0,
    'count4' => 0,
    'allGoodsCount' => 0,
    'warnInventoryCount' => 0,
    'downGoodsCount' => 0,
    'promoteGoodsCount' => 0,
    'os' => 0,
    'server' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_536c6e95e17219_91570255')) {function content_536c6e95e17219_91570255($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/main.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<h2>起始页 -- 后台管理中心</h2>

<div id="list">
	<table class="public">
		<tr><th colspan="4">订单统计信息</th></tr>
		<tr><td>待发货订单：</td><td><?php echo $_smarty_tpl->tpl_vars['count1']->value;?>
</td><td>未确认订单：</td><td><?php echo $_smarty_tpl->tpl_vars['count2']->value;?>
</td></tr>
		<tr><td>未支付订单：</td><td><?php echo $_smarty_tpl->tpl_vars['count3']->value;?>
</td><td>申请退款订单：</td><td><?php echo $_smarty_tpl->tpl_vars['count4']->value;?>
</td></tr>
	</table>
	
	<table class="public">
		<tr><th colspan="4">商品统计信息</th></tr>
		<tr><td>商品总数量：</td><td><?php echo $_smarty_tpl->tpl_vars['allGoodsCount']->value;?>
</td><td>库存警告量：</td><td><?php echo $_smarty_tpl->tpl_vars['warnInventoryCount']->value;?>
</td></tr>
		<tr><td>下架商品量：</td><td><?php echo $_smarty_tpl->tpl_vars['downGoodsCount']->value;?>
</td><td>促销商品量：</td><td><?php echo $_smarty_tpl->tpl_vars['promoteGoodsCount']->value;?>
</td></tr>
	</table>
	
	<table class="public">
		<tr><th colspan="4">系统信息</th></tr>
		<tr><td>服务器操作系统：</td><td><?php echo $_smarty_tpl->tpl_vars['os']->value;?>
</td><td>服务器软件：</td><td><?php echo $_smarty_tpl->tpl_vars['server']->value['SERVER_SOFTWARE'];?>
</td></tr>
		<tr><td>客户端浏览器：</td><td><?php echo $_smarty_tpl->tpl_vars['server']->value['HTTP_USER_AGENT'];?>
</td><td>本站网址：</td><td><?php echo $_smarty_tpl->tpl_vars['server']->value['HTTP_HOST'];?>
</td></tr>
	</table>
</div>
</html><?php }} ?>
