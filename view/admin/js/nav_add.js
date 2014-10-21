$(function(){
	$('#navForm').validate({
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
				rangelength:[2,4],
				remote:{
					url:'?a=nav&m=isExist',
					type:'post',
				},
			},
			info:{
				maxlength:200
			}
		},
		messages:{
			name:{
				required:' 导航名不得为空',
				rangelength:jQuery.format(' 导航名长度必须在{0},{1}之间'),
				remote:' 该用户名已被占用',
				
			},
			info:{
				maxlength:' 最大长度不得大于200位'
			}
		}
	})
})
