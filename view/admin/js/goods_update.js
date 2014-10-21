$(function(){
	
	changeNav($('.type').val(),$('.brand').attr('key'))
	showAttr($('#name').attr('attrid'))
	$('.type').change(function(){
		var id=$(this).val();
		changeNav(id);
		showAttr(id);		
	})
	//验证添加商品
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
			'name':{
				required:true,
				rangelength:[2,20],
			},
			'nav':{
				min:1,				
			},
			'sn':{
				required:true,
				rangelength:[2,20],
				remote:{
					url:'?a=goods&m=isUpExist',
					type:'get',
					data:{
						'id':$('#sn').attr('update_id'),
					},
				},
			},
			brand:{
				min:1,				
			},
			weight:{
				number:true,
			},
			price_sale:{
				number:true,
			},	
			price_market:{
				number:true,
			},	
			price_cost:{
				number:true,
			},
			inventory:{
				number:true,
			},
			warn_inventory:{
				number:true,
			}
					
		},
		messages:{
			'name':{
				required:' 名称不得为空！',
				rangelength:jQuery.format(' 长度必须在{0},{1}之间！'),
			},
			'nav':{
				min:' 类型不得为空！',
			},
			'sn':{
				required:' 编号不得为空！',
				rangelength:jQuery.format(' 品牌长度必须在{0},{1}之间！'),
				remote :' 编号已被占用！',
			},
			'brand':{
				min:' 请选择品牌，如果没有您需要的品牌请在该类别中创建“其他品牌”并选择”！',
			},
			'weight':{
				number:' 必须为数字！',
			},
			price_sale:{
				number:' 必须为数字！',
			},
			price_market:{
				number:' 必须为数字！',
			},
			price_cost:{
				number:' 必须为数字！',
			},
			inventory:{
				number:' 必须为数字！',
			},
			warn_inventory:{
				number:' 必须为数字！',
			}
						
		}
	})
})

function changeNav(k){
	var s=arguments[1] ? arguments[1] : '';
	$.ajax({
			url:'?a=goods&m=ajaxBrands',
			type:'get',
			data:{
				id:k,
			},
			success:function(text){
				$('.brand').get(0).options.length=1;
				if(text.length != 0){
					var json=$.parseJSON(text);
					var options=$('.brand');
					$.each(json,function(k,v){
						if(k==s){													
							options.append('<option value="'+k+'" selected="selected">'+v+'</option>');
						}else{
							options.append('<option value="'+k+'">'+v+'</option>');
						}
						
					})
				}		
			}
	})
}

function showAttr(k){
	$.ajax({
			url:'?a=goods&m=ajaxGetAttr',
			type:'get',
			data:{
				id:k,
			},
			success:function(text){
				if(text !=''){
					$json=$.parseJSON(text);
					$('dd').detach('.temp')
					$.each($json,function(index,value){
						var item=value.item.split('|'),checkbox='',attrName=value.name;
						var length=attrName.length,str='';
						if(length==2){
							for(var i=0;i<length;i++){
								str += attrName[i]+'　　';
							}							
							attrName=str.substr(0,4);
						}						
						$.each(item,function(indx,val){
							if($('#name').attr('attr').indexOf(val) != -1){
								checkbox +='<label><input type="checkbox" name="attr['+attrName+'][]" checked="checked" value="'+val+'"/>'+val+'</label> ';
							}else{
								checkbox +='<label><input type="checkbox" name="attr['+attrName+'][]" value="'+val+'"/>'+val+'</label> ';
							}		
						});
						$('<dd class="temp">'+attrName+'：'+checkbox+'</dd>').insertAfter('.mark')
					})
				}
				
			}		
	})
}
function centerWindow(width,height){
  	var left = (screen.width - width) / 2;
	var top = (screen.height - height) / 2 - 50;
    window.open('?a=call&m=showUptpl&type=ok','上传','width='+width+',height='+height+',left='+left+',top='+top)
}