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
			info:{
				maxlength:200
			}
		},
		messages:{
			info:{
				maxlength:' 最大长度不得大于200位'
			}
		}
	})
})
