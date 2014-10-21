<?php /* Smarty version Smarty-3.1.17, created on 2014-06-20 17:49:45
         compiled from "D:\wamp\www\web\shop\view\admin\goods\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2762953815de5707552-29089344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd62862d80f2ca2373545c8414fcd532391d93539' => 
    array (
      0 => 'D:\\wamp\\www\\web\\shop\\view\\admin\\goods\\update.tpl',
      1 => 1403257162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2762953815de5707552-29089344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_53815de574eb60_18549006',
  'variables' => 
  array (
    'oneGoods' => 0,
    'prev_url' => 0,
    'goodsNav' => 0,
    'value' => 0,
    'bool' => 0,
    'allService' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53815de574eb60_18549006')) {function content_53815de574eb60_18549006($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_radios')) include 'D:\\wamp\\www\\web\\shop\\smarty\\plugins\\function.html_radios.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>商城后台管理</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/goods.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/goods_update.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>
<body>
<h2><a href="?a=goods">返回商品列表</a>商品 -- 修改商品</h2>
<form method="post" action="?a=goods&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->id;?>
" name="form" id="updateForm">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
" />
	<dl class="form">
		<dd>商品类型：<select name="nav" class="type">
					<option value="0" selected="selected">--请选择商品的类型--</option>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goodsNav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
									<optgroup label="<?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
">
									<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['value']->value->child,'selected'=>$_smarty_tpl->tpl_vars['oneGoods']->value->nav),$_smarty_tpl);?>

									</optgroup>
									<?php } ?>
				</select> <span class="red">[必选]</span>
		</dd>
		
		<dd>商品品牌：<select name="brand" class="brand" key="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->brand;?>
">
					<option value="0" selected="selected">--请选择商品的类型--</option>
					</select> <span class="red">[必选]</span>
		</dd>
		
		<dd><label for="name">商品名称：</label><input type="text" attr="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->attr;?>
" attrid="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->nav;?>
" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->name;?>
" class="text"/><span class="red"> [不得为空且不得大于20位]</span></dd>
		
		<dd class="mark"><label for="sn">商品编号：</label><input update_id="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->id;?>
" type="text" id="sn" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->sn;?>
" class="text"/><span class="red"> [不得为空且2-50字符之间]</span></dd>		
		
		<dd><label for="price_sale">销 售 价：</label><input type="text" id="price_sale" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->price_sale;?>
" name="price_sale" class="text small"/>
			<label for="price_market">市 场 价：</label><input type="text" id="price_market" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->price_market;?>
"  name="price_market" class="text small"/>
			<label for="price_cost">成 本 价：</label><input type="text" id="price_cost" name="price_cost" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->price_cost;?>
"  class="text small"/>（*成本价不在前台显示）
		</dd>
		
		<dd><label for="keyword">关 键 字：</label><input type="text" id="keyword" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->keyword;?>
"  name="keyword" class="text"/><span>（*例：秋季|纯棉|彩色；每个关键字必须用‘|’隔开）</span></dd>
		
		<dd><label for="unit">计量单位：</label><input type="text" id="unit" name="unit" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->unit;?>
"  class="text small"/>
			<label for="weight">重　　量：</label><input type="text" id="weight" name="weight" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->weight;?>
"  class="text small"/>（*计量单位：个、kg、件；重量：默认kg）
		</dd>
		
		<dd>上传图片：<input type="text" class="text" name="thumb"  value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->thumb;?>
" readonly="readonly"/>　<input type="button" value="选择" onclick="centerWindow(500,200)"/><img name="pic" alt="商品图片" src="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->thumb;?>
" style="display:block"/> (*为保存图片完整性，最佳尺寸为：300 * 300  必须是jpg,gif,png，并且200k内)</dd>
		
		<dd><textarea class="ckeditor" id="TextArea1" name="content"><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->content;?>
</textarea></dd>
		
		<dd>是否上架：<?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['bool']->value,'selected'=>$_smarty_tpl->tpl_vars['oneGoods']->value->is_up,'name'=>"is_up"),$_smarty_tpl);?>
　　
			免 运 费：<?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['bool']->value,'selected'=>$_smarty_tpl->tpl_vars['oneGoods']->value->is_freight,'name'=>"is_freight"),$_smarty_tpl);?>
　　
			是否促销：<?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['bool']->value,'selected'=>$_smarty_tpl->tpl_vars['oneGoods']->value->is_promote,'name'=>"is_promote"),$_smarty_tpl);?>
	　
			是否推荐：<?php echo smarty_function_html_radios(array('options'=>$_smarty_tpl->tpl_vars['bool']->value,'selected'=>$_smarty_tpl->tpl_vars['oneGoods']->value->is_recommend,'name'=>"is_recommend"),$_smarty_tpl);?>
	　
		</dd>
		<dd><label for="inventory">库　　存：</label><input type="text"  id="inventory" name="inventory" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->inventory;?>
"  class="text small"/>
			<label for="warn_inventory">库存告急：</label><input type="text" id="warn_inventory" name="warn_inventory" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value->warn_inventory;?>
"  class="text small"/> （*库存达到指定数量就会在后台提醒） 
		</dd>
		<dd>
			售后服务：<?php echo smarty_function_html_radios(array('name'=>"service",'options'=>$_smarty_tpl->tpl_vars['allService']->value,'selected'=>$_smarty_tpl->tpl_vars['oneGoods']->value->service),$_smarty_tpl);?>

		</dd>
		<dd><input type="submit" name="send" value="修改商品"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>
