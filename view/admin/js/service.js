$(function(){
	$('#serviceForm').validate({
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
					url:'?a=service&m=isExist',
					type:'post',
					data:{
						ajax_id:$('#name').attr('ajax_id'),
					}
				},
			},
		},
		messages:{
			name:{
				required:' 售后服务名不得为空',
				rangelength:jQuery.format(' 售后服务名长度必须在{0},{1}之间'),
				remote:' 该售后服务名已被占用',
				
			},
		}
	})
})
