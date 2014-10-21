$(function(){
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
