$(function(){
	$('#loginForm').validate({
		submitHandler:function(form){
			form.submit();			
		},
		highlight:function(element,errorclass){
			$(element).css('border','1px solid red');
			$(element).nextAll('span').html('').removeClass('succ');
		},
		unhighlight:function(element,errorclass){
			$(element).css('border','1px solid #fff');
			$(element).nextAll('span').html('&nbsp;').addClass('succ');
		},
		rules:{
			user:{
				required:true,
				rangelength:[2,20],
				remote:{
					url:'?a=admin&m=ajaxLogin',
					type:'post',
				},
			},
			pwd:{
				required:true,
				minlength:6,
				remote:{
					url:'?a=admin&m=ajaxPwd',
					data:{
						user:function(){
							return $('#user').val();
						}
					},
					type:'post',
				}
			},
			validateCode:{
				required:true,
				remote:{
					url:'?a=admin&m=ajaxCode',
					type:'post',
				}
			}
		},
		messages:{
			user:{
				required:' (*管理员用户名不得为空)',
				rangelength:jQuery.format(' (*用户名长度必须在{0},{1}之间)'),
				remote:' (*不存在此用户*)',
				
			},
			pwd:{
				required:' (*密码不得为空)',
				minlength:jQuery.format(' (*密码必须大于{0}位)'),
				remote:' (*密码错误)',
			},
			validateCode:{
				required:' (*验证码不等为空)',
				remote:' (*验证码不正确)',
			}
		}
	})
})
