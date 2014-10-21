<?php /* Smarty version Smarty-3.1.17, created on 2014-06-20 17:24:11
         compiled from "D:\wamp\www\web\shop\view\admin\goods\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:984053815391529ac2-37836745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7bfbc8487d9d33dcd90d2b82e56119bbb80a054' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\goods\\show.tpl',
      1 => 1403256246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '984053815391529ac2-37836745',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_538153915c86b8_02118391',
  'variables' => 
  array (
    'allGoods' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538153915c86b8_02118391')) {function content_538153915c86b8_02118391($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/goods.css'/>
</head>
<body>
<h2><a href="?a=goods&m=runAdd">新增商品</a>商品 -- 品牌列表</h2>
<div id="list">
	<table class="public">
		<tr><th>序号</th><th>商品名称</th><th>商品编号</th><th>商品售价（元）</th><th>商品类型</th><th>品牌</th><th>是否上架</th><th>是否促销</th><th>是否推荐</th><th>库存</th><th>操作</th></tr>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allGoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td><td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value->name,15);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->sn;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->brand;?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['value']->value->is_up==0) {?>
						<span class="red">否</span> <a class="green"href="?a=goods&m=isUp&act=up&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[上架]</a>
					<?php } else { ?>
						<span class="green">是</span> <a class="red" href="?a=goods&m=isUp&act=down&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[下架]</a>
					<?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['value']->value->is_promote==0) {?>
						<span class="red">否</span> <a class="green"href="?a=goods&m=isPromote&act=yes&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[促销]</a>
					<?php } else { ?>
						<span class="green">是</span> <a class="red" href="?a=goods&m=isPromote&act=no&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[取消]</a>
					<?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['value']->value->is_recommend==0) {?>
						<span class="red">否</span> <a class="green"href="?a=goods&m=isRecommend&act=yes&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[推荐]</a>
					<?php } else { ?>
						<span class="green">是</span> <a class="red" href="?a=goods&m=isRecommend&act=no&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[取消]</a>
					<?php }?>
				</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->inventory;?>
</td><td>
					<a href="?a=goods&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
					<a href="?a=goods&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('您确定要删除吗') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
				</td></tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
				<tr><td colspan="9">暂时没有数据</td></tr>
			<?php } ?>
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>
