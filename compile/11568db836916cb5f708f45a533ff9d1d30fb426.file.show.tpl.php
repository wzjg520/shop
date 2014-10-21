<?php /* Smarty version Smarty-3.1.17, created on 2014-06-06 17:45:00
         compiled from "D:\wamp\www\web\shop\view\admin\nav\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1736253736b20cf4ad6-30334367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11568db836916cb5f708f45a533ff9d1d30fb426' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\nav\\show.tpl',
      1 => 1402047869,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1736253736b20cf4ad6-30334367',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53736b20dabc60_06687206',
  'variables' => 
  array (
    'flag' => 0,
    'oneNav' => 0,
    'allNav' => 0,
    'key' => 0,
    'value' => 0,
    'prev_url' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53736b20dabc60_06687206')) {function content_53736b20dabc60_06687206($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/admin.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><?php if (!$_smarty_tpl->tpl_vars['flag']->value) {?><a href="?a=nav&m=runAdd">新增导航</a><?php } else { ?><a href="?a=nav&m=runadd&id=<?php echo $_smarty_tpl->tpl_vars['oneNav']->value[0]->id;?>
">新增导航</a><?php }?>系统 -- 导航列表</h2>
<div id="list">
	<form method="post" action="?a=nav&m=runSort">
	<table class="public">
		<tr><th>序号<th>名称</th><th>简介</th><?php if (!$_smarty_tpl->tpl_vars['flag']->value) {?><th>子类</th><?php } else { ?><th>品牌</th><?php }?><th>排序</th><th>操作</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allNav']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allNav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>			
				<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
<td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->info;?>
</td><td>
					<?php if (!$_smarty_tpl->tpl_vars['flag']->value) {?>
					<a href="?a=nav&sid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">查看</a> | <a href="?a=nav&m=runAdd&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">新增</a></td>
					<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['value']->value->brand;?>

					<?php }?>
					<td><input type="text" class="text sort" name="sort[<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->sort;?>
"/></td>
				<td>
				<a href="?a=nav&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="编辑" title="编辑" /></a>
				<a href="?a=nav&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('您确定要删除吗') ? true : false"><img src="view/admin/images/drop.gif" alt="删除" title="删除" /></a>
				</td></tr>
			<?php } ?>
			<tr><td></td><td></td><td></td><td></td><td><input type="submit" name="send" value="排序"/></td><td></td></tr>
		<?php } else { ?>
			<tr><td colspan="6">暂时没有数据</td></tr>
		<?php }?>
	</table>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['flag']->value) {?><p class="return">上级导航：<strong><?php echo $_smarty_tpl->tpl_vars['oneNav']->value[0]->name;?>
</strong>  [<a href="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
">返回上一级</a>]</p><?php }?>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>
