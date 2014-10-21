$(function(){
	$('input.num').keyup(function(e){
		$.ajax({
			url:'?a=cart&m=changeNum',
			data:{
				'id':$(this).attr('goodsid'),
				'num':e.target.value,
			},
			type:'post',
			success:function(text){
				if(text==1){
					location.href='?a=cart'
				}
			}
		})
		
	})
})
