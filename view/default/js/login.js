$(function(){
	$('.change').click(function(){
		$('.code').find('img').attr('src','?a=index&m=validateCode&'+Math.random());
	});
	$('#loginForm').validate({
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
			user:{
				required:true,
				rangelength:[2,20],
				remote:{
					url:'?a=user&m=ajaxLogin',
					type:'post',
				},
			},
			pwd:{
				required:true,
				minlength:6,				
			},
			validateCode:{
				required:true,
				remote:{
					url:'?a=user&m=ajaxCode',
					type:'post'
				}
			}
			
			
		},
		messages:{
			user:{
				required:' 用户名不得为空',
				rangelength:jQuery.format(' 用户名长度必须在{0},{1}之间'),
				remote:' 该用户名不存在',				
			},
			pwd:{
				required:' 密码不得为空',
				minlength:' 密码长度不得小于6位',
			},
			validateCode:{
				required:' 验证码不能为空',
				remote:' 验证码错误',
			},			
		}
	})
})
