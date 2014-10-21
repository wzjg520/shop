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
			type:{
				min:1,
			},
			url:{
				required:true,
				maxlength:40,
				url:true,
			},
			info:{
				maxlength:200,
			},
			
		},
		messages:{
			url:{
				required:' 网址不得为空',
				maxlength:jQuery.format(' 网址长度不得大于{0}位'),
				url:' 请输入正确的网址',
			},
			type:{
				min:' 类型不得为空',
			},
			info:{
				maxlength:jQuery.format(' 品牌信息不得大于{0}位')
			},
			
		}
	})
})
