<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>ihuahua商城项目</title>
<style>
	body{
		background: #f3f3f3;
	}
	#list{
		width:700px;
		padding:20px;
		background: #fff;
		margin:60px auto 0;
	}
	#list h2{
		margin:0;
		font-weight: normal;
		font-size: 26px;
	}
	#list p.short_line{
	    	width:52px;
	    	height: 3px;
	    	background: red;
	    	margin:10px 0 20px 0;
	}
	#list dl{
		overflow: hidden;
	}
	#list dt{
		float: left;
		padding:0 10px 0 40px;
	}
	#list dd{
		padding-top:40px;
	}
</style>
</head>
<body>
<div id="list" class="error">
	<h2>错误 -- 提示页</h2><p class="short_line"></p>
	<dl>
		<dt><img src="view/default/images/error_cry.gif" alt="" /></dt>
		<dd>
			{foreach from=$message key=key item=value}
				<p>{$key+1}.{$value}</p>
			{/foreach}
			<p><a href="{$prev_url}">[返回]</a></p>
		</dd>
	</dl>	
</div>
</body>
</html>