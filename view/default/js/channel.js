$(function(){
	if(location.href.indexOf('commend')>0){
		$('div.c').css('display','none');
		$('div.c').eq(2).css('display','block');
	}
	$('.channel li').click(function(){
		$('.channel li').css('background-position','right');
		var index=$(this).css('background-position','right').addClass('selected').siblings('li').removeClass('selected').index()
		$('.c').css('display','none');
		$('.c').eq(index).css('display','block');
	})
})
