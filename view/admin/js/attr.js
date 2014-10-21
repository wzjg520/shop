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
				rangelength:[2,4],
				remote:{
					url:'?a=attr&m=isExist',
					type:'post',
				}
			},
		},
		messages:{
			name:{
				required:' 属性名不得为空',
				rangelength:jQuery.format(' 品牌长度必须在{0},{1}之间'),
				remote:' 属性名已被占用',				
			},
		}
	})
	$('#updateForm').validate({
		submitHandler:function(form){
			$(form).submit();			
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
			},
		},
		messages:{
			name:{
				required:' 属性名不得为空',
				rangelength:jQuery.format(' 品牌长度必须在{0},{1}之间'),			
			},
		}
	})
})
