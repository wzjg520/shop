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
					url:'?a=delivery&m=isExist',
					type:'post',
				},
			},
			url:{
				required:true,
				url:true,
				maxlength:40,
			},
			price_in:{
				required:true,
				number:true,
			},
			price_out:{
				required:true,
				number:true,
			},
			price_add:{
				number:true,
			},
			info:{
				maxlength:200,
			},
			
		},
		messages:{
			name:{
				required:' 公司名称不得为空',
				rangelength:jQuery.format(' 公司名称长度必须在{0},{1}之间'),
				remote:' 该公司已被占用',
				
			},
			url:{
				required:' 网址不得为空',
				url:' 请输入正确的网址',
				maxlength:jQuery.format(' 网址长度不得大于{0}位')
			},
			info:{
				maxlength:jQuery.format(' 公司信息不得大于{0}位')
			},
			price_in:{
				required:' 省内起步费用不得为空',
				number:' 必须为数字',
			},
			price_out:{
				required:' 省外起步费用不得为空',
				number:' 必须为数字',
			},
			price_add:{
				number:' 必须为数字',
			},
			
		}
	})
})
