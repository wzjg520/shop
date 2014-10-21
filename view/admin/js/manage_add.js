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
			user:{
				required:true,
				rangelength:[2,20],
				remote:{
					url:'?a=manage&m=isExist',
					type:'post',
				},
			},
			pwd:{
				required:true,
				minlength:6,
			},
			notpwd:{
				equalTo:'#pwd',
				required:true,
			},
			level:{
				range:[1,4],
			}
		},
		messages:{
			user:{
				required:' 管理员用户名不得为空',
				rangelength:jQuery.format(' 用户名长度必须在{0},{1}之间'),
				remote:' 该用户名已被占用',
				
			},
			pwd:{
				required:' 密码不得为空',
				minlength:jQuery.format(' 密码必须大于{0}位')
			},
			notpwd:{
				equalTo:' 密码确认必须和密码一致',
				required:' 确认密码不得为空',
			},
			level:{
				range:' 等级不等为空'
			}
		}
	})
})
