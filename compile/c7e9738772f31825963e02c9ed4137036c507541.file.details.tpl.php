<?php /* Smarty version Smarty-3.1.17, created on 2014-11-14 17:18:34
         compiled from "E:\xampp\htdocs\shop\view\default\public\details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:321905465c8ea7a5f16-44927269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7e9738772f31825963e02c9ed4137036c507541' => 
    array (
      0 => 'E:\\xampp\\htdocs\\shop\\view\\default\\public\\details.tpl',
      1 => 1415238188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321905465c8ea7a5f16-44927269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oneFrontNav' => 0,
    'key' => 0,
    'value' => 0,
    'oneGoods' => 0,
    'hotSale' => 0,
    'history' => 0,
    'attrType' => 0,
    'domain' => 0,
    'allCommend' => 0,
    'page' => 0,
    'allRecord' => 0,
    'recordPage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_5465c8ea898241_59377855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5465c8ea898241_59377855')) {function content_5465c8ea898241_59377855($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/details.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/details.js"></script>
<script type="text/javascript" src="view/default/js/channel.js"></script>
<title>ihuahua.cc在线商城</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	当前位置：<a href="./">首页</a> <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneFrontNav']->value[0]->sait; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
	&gt;<a href="?a=list&navid=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
	<?php } ?>
	&gt;<span><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->name;?>
</span>
	
</div>
<div id="sidebar">
	<h2><?php echo $_smarty_tpl->tpl_vars['oneFrontNav']->value[0]->name;?>
</h2>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneFrontNav']->value[0]->child; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<li><a href="?a=list&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
<span class="gray">(<?php echo $_smarty_tpl->tpl_vars['value']->value->count;?>
)</span></a></li>
		<?php } ?>
	</ul>
	<h2>当月热销</h2>
	<div>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hotSale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value<3) {?>
			<dl>
				<dt><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></a></dt>
				<dd class="price">￥<?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
元</dd>
				<dd class="title"><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></dd>
			</dl>
			<?php }?>
		<?php } ?>
	</div>
	<h2>浏览记录</h2>
	<div>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?>
			<dl>
				<dt><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value['navid'];?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value['goodsid'];?>
"><img width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['thumb_small'];?>
"/></a></dt>
				<dd class="price">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale'];?>
元</dd>
				<dd class="title"><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value['navid'];?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value['goodsid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></dd>
			</dl>
			<?php }?>
		<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
		<p style="padding:20px;color">暂无历史记录</p>
		<?php } ?>
		<p style="padding:10px;text-align:right"><a href="?a=list&m=clearHistory">清理全部</a></p>
	</div>
</div>
<div id="main">
	<form method="post" name="buy" action="?a=cart&m=addProduct">
	<input type="hidden" id="attr" attr_type="<?php echo $_smarty_tpl->tpl_vars['attrType']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->attr;?>
"/>
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->id;?>
"/>
	<input type="hidden" name="nav" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->nav;?>
"/>
	<input type="hidden" name="price_sale" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->price_sale;?>
"/>
	<input type="hidden" name="price_market" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->price_market;?>
"/>
	<input type="hidden" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->sn;?>
"/>
	<input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->name;?>
"/>
	<input type="hidden" name="thumb_small" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->thumb_small;?>
"/>
	<input type="hidden" name="weight" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->weight;?>
"/>
	<h2><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->name;?>
</h2>
	<dl class="pic">
		<dt><img src="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->thumb;?>
"/></dt>
		<script>var thumbnail = '<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->thumb;?>
';</script>
		
		
		<dd>分享至： 
		<!--新浪微博-->
		<a href="javascript:void((function(s,d,e){try{}catch(e){}var f='http://service.weibo.com/share/share.php?',u=d.location.href,p=['url=',e(u),'&title=',e(d.title),'&pic=',e(thumbnail),'&appkey='].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));">新浪微博</a> 		
		<!--腾讯微博-->
		| <a href="javascript:void(0)" onclick="postToWb();" class="tmblog">腾讯微博</a>
			<script type="text/javascript">
				function postToWb(){
				var _t = encodeURI(document.title);
				var _url = encodeURIComponent('http://www.yc60.com');
				var _appkey = encodeURI("appkey");//你从腾讯获得的appkey
				var _pic = encodeURI('http://www.yc60.com/video/dreamweavermain.png');//（列如：var _pic='图片url1|图片url2’）
				var _site = '';//你的网站地址
				var _u ='http://v.t.qq.com/share/share.php?title='+_t+'&url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic;window.open( _u,'转播到腾讯微博', 'width=700, height=680, top=0, left=0,toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );
			}
			</script> 		
		<!--人人网-->
		| <a href="javascript:void((function(s,d,e){if(/renren\.com/.test(d.location))return;var f='http://share.renren.com/share/buttonshare?link=',u=d.location,l=d.title,p=[e(u),'&title=',e(l)].join('');function a(){if(!window.open([f,p].join(''),'xnshare',['toolbar=0,status=0,resizable=1,width=626,height=436,left=',(s.width-626)/2,',top=',(s.height-436)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else a();})(screen,document,encodeURIComponent));" title="分享到人人">人人网</a> 		
		<!--开心网-->
		| <a href="javascript:d=document;t=d.selection?(d.selection.type!='None'?d.selection.createRange().text:''):(d.getSelection?d.getSelection():'');void(kaixin=window.open('http://www.kaixin001.com/~repaste/repaste.php?&amp;rurl='+escape(d.location.href)+'&amp;rtitle='+escape(d.title)+'&amp;rcontent='+escape(d.title),'kaixin'));kaixin.focus();">开心网</a></dd>		
		
	</dl>	
		<dl class="text">
			   <dd>售　　价：<span class="sale">￥<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->price_sale;?>
</span> <span class="market">￥<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->price_market;?>
</span></dd>
			   <dd>商品编号：<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->sn;?>
</dd>
			   <dd class="mark">所属品牌：<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->brand;?>
</dd>
			   <dd>销 售 量：<span class="sale_num">65535 </span><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->unit;?>
</dd>
			   <dd>重　　量：<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->weight;?>
/kg<span class="gray">库存：(<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->inventory;?>
)</span></dd>
			   <dd>数　　量：<input type="text" name="num" value="1" class="num"/></dd>
			   <dd class="buy_button">
					<input class="submit" type="submit" value="" name="send">
					<a target="_blank" href="?a=user&m=addCollect&id=<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->id;?>
">
						<img border="0" title="收藏" alt="收藏" src="view/default/images/collect.gif">
					</a>
				</dd>
				
		</dl>
	<form>
	<div class="content">
		<a name="commend"></a>
		<ul class="channel">
			<li class="selected">商品详情</li>
			<li>评价列表</li>
			<li>成交记录</li>
			<li>售后服务</li>
		</ul>
		<!--商品详情-->
		<div class="c" style="display:block"><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->content;?>
</div>
		<!--评价列表-->
		<div class="c" style="display:none" >
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allCommend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<div class="commend_left">
				<p><?php echo $_smarty_tpl->tpl_vars['value']->value->user;?>
</p>
				<p class="star">
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==5) {?><span class="star">★★★★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==4) {?><span class="star">★★★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==3) {?><span class="star">★★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==2) {?><span class="star">★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==1) {?><span class="star">★</span><?php }?>
				</p>
			</div>
			
			<div class="commend_right">
				<p><em><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</em><?php echo $_smarty_tpl->tpl_vars['value']->value->content;?>
</p>
				<p class="attr"><?php echo $_smarty_tpl->tpl_vars['value']->value->attr;?>
 </p>
				<p><em><?php echo $_smarty_tpl->tpl_vars['value']->value->re_date;?>
</em><span style="color:red;">店主回复：<?php echo $_smarty_tpl->tpl_vars['value']->value->re_content;?>
</span></p>
			</div>
			<p class="re_commend"></p>
			<?php } ?>
			
			<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
		</div>
		<!--成交记录-->
		<div class="c" style="display:none">
			<table border="0" cellspacing="0" width="100%" class="record">
				<tr><th>购买者</th><th>商品名称</th><th>购买价格</th><th>购买数量</th><th>成交时间</th></tr>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allRecord']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value->user;?>
</td><td style="text-align:left;padding:0 0 0 25px;line-height:180%;"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
<br /><span style="color:#666;"><?php echo $_smarty_tpl->tpl_vars['value']->value->attr;?>
</span></td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->price;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->num;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</td></tr>
				<?php } ?>
			</table>
			<div id="page"><?php echo $_smarty_tpl->tpl_vars['recordPage']->value;?>
</div>
		</div>
		<!--售后服务-->
		<div class="c" style="display:none"><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->service;?>
</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
