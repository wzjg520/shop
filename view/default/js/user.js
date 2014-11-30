$(function(){
	$('.change').click(function(){
		$('.code').find('img').attr('src','?a=index&m=validateCode&'+Math.random());
	});
	$('#updateForm').validate({
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
					url:'?a=user&m=isUpdateExist',
					type:'post',
				},
			},
			email:{
				required:true,
				email:true,
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
				remote:' 该用户名已被占用',				
			},
			email:{
				required:' 请填写邮箱',
				email:' 邮箱格式不正确',
			},
			validateCode:{
				required:' 验证码不能为空',
				remote:' 验证码错误',
			},
			
			
		}
	})
})
function centerWindow(width,height){
  	var left = (screen.width - width) / 2;
	var top = (screen.height - height) / 2 - 50;
    window.open('?a=call&m=showUptpl&type=face','上传','width='+width+',height='+height+',left='+left+',top='+top)
}