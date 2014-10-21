$(function(){
    if ($('#attr').val() != '') {
        attr = $('#attr').val().split(';');
        $('dd').detach('.temp')
		var type=$('#attr').attr('attr_type').split(';');
		
        $.each(attr, function(index, value){
           var temp=value.split(':');
		   var attrName=temp[0];
		   var item=temp[1].split('|');
		   var checkbox=way='';		   
		   if(type[type.length-1-index]==1){		   	
		   	way='checkbox';
		   }else{
		   	way='radio';
		   }		   
            $.each(item, function(indx, val){
				if(indx==0){
					var checked="checked";
				}else{
					var checked='';
				}
                checkbox += '<label><input '+checked+' type="'+way+'" name="attr[' + attrName + '][]" value="' + val + '"/>' + val + '</label> ';
            });
            $('<dd class="temp">' + attrName + '：' + checkbox + '</dd>').insertAfter('.mark')
        })
    }
})
