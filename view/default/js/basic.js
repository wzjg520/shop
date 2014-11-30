$(function(){
	//头部出现
	$(window).scroll(function(){
		var scrollTop=$(window).scrollTop();
		if(scrollTop>150){
			$('#blackHead').stop().show();
		}else{
			$('#blackHead').stop().hide();
		}	
	})
	if($(window).scrollTop()>150){
		$('#blackHead').stop().show();
	}else{
		$('#blackHead').stop().hide();
	}	
})