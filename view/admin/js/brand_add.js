$(function(){
	$('#addForm').validate({
		submitHandler:function(form){
			form.submit();			
		},
		highlight:function(element,errorclass){
			$(element).css('border','1px solid red');
			$(element).nextAll('span').html('').removeClass('succ');
		},
		unhighlight:function(element,errorclass){
			$(element).css('border','1px solid #333');
			$(element).nextAll('span').html('&nbsp;').addClass('succ');
		},
		rules:{
			name:{
				required:true,
				rangelength:[2,20],
				remote:{
					url:'?a=brand&m=isExist',
					type:'post',
				},
			},
			type:{
				min:1,
				
			},
			url:{
				required:true,
				url:true,
				maxlength:40,
			},
			info:{
				maxlength:200,
			},
			
		},
		messages:{
			name:{
				required:' 品牌不得为空',
				rangelength:jQuery.format(' 品牌长度必须在{0},{1}之间'),
				remote:' 该品牌已被占用',
				
			},
			type:{
				min:' 类型不得为空',
			},
			url:{
				required:' 网址不得为空',
				url:' 请输入正确的网址',
				maxlength:jQuery.format(' 网址长度不得大于{0}位')
			},
			info:{
				maxlength:jQuery.format(' 品牌信息不得大于{0}位')
			},
			
		}
	})
})
