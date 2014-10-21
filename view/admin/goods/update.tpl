<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<form method="post" action="?a=goods&m=runUpdate&id={$oneGoods->id}" name="form" id="updateForm">
	<input type="hidden" name="prev_url" value="{$prev_url}" />
	<dl class="form">
		<dd>商品类型：<select name="nav" class="type">
					<option value="0" selected="selected">--请选择商品的类型--</option>
					{foreach from=$goodsNav key=key item=value}
									<optgroup label="{$value->name}">
									{html_options options=$value->child selected=$oneGoods->nav}
									</optgroup>
									{/foreach}
				</select> <span class="red">[必选]</span>
		</dd>
		
		<dd>商品品牌：<select name="brand" class="brand" key="{$oneGoods->brand}">
					<option value="0" selected="selected">--请选择商品的类型--</option>
					</select> <span class="red">[必选]</span>
		</dd>
		
		<dd><label for="name">商品名称：</label><input type="text" attr="{$oneGoods->attr}" attrid="{$oneGoods->nav}" id="name" name="name" value="{$oneGoods->name}" class="text"/><span class="red"> [不得为空且不得大于20位]</span></dd>
		
		<dd class="mark"><label for="sn">商品编号：</label><input update_id="{$oneGoods->id}" type="text" id="sn" name="sn" value="{$oneGoods->sn}" class="text"/><span class="red"> [不得为空且2-50字符之间]</span></dd>		
		
		<dd><label for="price_sale">销 售 价：</label><input type="text" id="price_sale" value="{$oneGoods->price_sale}" name="price_sale" class="text small"/>
			<label for="price_market">市 场 价：</label><input type="text" id="price_market" value="{$oneGoods->price_market}"  name="price_market" class="text small"/>
			<label for="price_cost">成 本 价：</label><input type="text" id="price_cost" name="price_cost" value="{$oneGoods->price_cost}"  class="text small"/>（*成本价不在前台显示）
		</dd>
		
		<dd><label for="keyword">关 键 字：</label><input type="text" id="keyword" value="{$oneGoods->keyword}"  name="keyword" class="text"/><span>（*例：秋季|纯棉|彩色；每个关键字必须用‘|’隔开）</span></dd>
		
		<dd><label for="unit">计量单位：</label><input type="text" id="unit" name="unit" value="{$oneGoods->unit}"  class="text small"/>
			<label for="weight">重　　量：</label><input type="text" id="weight" name="weight" value="{$oneGoods->weight}"  class="text small"/>（*计量单位：个、kg、件；重量：默认kg）
		</dd>
		
		<dd>上传图片：<input type="text" class="text" name="thumb"  value="{$oneGoods->thumb}" readonly="readonly"/>　<input type="button" value="选择" onclick="centerWindow(500,200)"/><img name="pic" alt="商品图片" src="{$oneGoods->thumb}" style="display:block"/> (*为保存图片完整性，最佳尺寸为：300 * 300  必须是jpg,gif,png，并且200k内)</dd>
		
		<dd><textarea class="ckeditor" id="TextArea1" name="content">{$oneGoods->content}</textarea></dd>
		
		<dd>是否上架：{html_radios options=$bool selected=$oneGoods->is_up name="is_up"}　　
			免 运 费：{html_radios options=$bool selected=$oneGoods->is_freight name="is_freight"}　　
			是否促销：{html_radios options=$bool selected=$oneGoods->is_promote name="is_promote"}	　
			是否推荐：{html_radios options=$bool selected=$oneGoods->is_recommend name="is_recommend"}	　
		</dd>
		<dd><label for="inventory">库　　存：</label><input type="text"  id="inventory" name="inventory" value="{$oneGoods->inventory}"  class="text small"/>
			<label for="warn_inventory">库存告急：</label><input type="text" id="warn_inventory" name="warn_inventory" value="{$oneGoods->warn_inventory}"  class="text small"/> （*库存达到指定数量就会在后台提醒） 
		</dd>
		<dd>
			售后服务：{html_radios name="service" options=$allService selected=$oneGoods->service}
		</dd>
		<dd><input type="submit" name="send" value="修改商品"/></dd>
	</dl>
</form>

</body>
</html>