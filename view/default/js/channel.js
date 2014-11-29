$(function(){
	if(location.href.indexOf('commend')>0){
		$('div.c').css('display','none');
		$('div.c').eq(2).css('display','block');
	}
	$('.channel li').click(function(){
		$('.channel li').css({
			'background-position':'right',
			'background':'none',
			'color':'#353535'
		});
		var index=$(this).css({
			'background':'#555',
			'color':'#fff',
			'borderRadius':'2px 2px 0 0'
		}).index()
		$('.c').css('display','none');
		$('.c').eq(index).css('display','block');
	})

	$('#midImg').mousemove(function(e) {
		$('#mask').show();
		$('#zoomLarge').show();
		var x = e.pageX - $(this).offset().left - $('#mask').width() / 2;
		var y = e.pageY - $(this).offset().top - $('#mask').height() / 2;

		if (x <= 0) {
			x = 0;
		} else if (x >= $('#midImg').width() - $('#mask').width()) {
			x = $('#midImg').width() - $('#mask').width();
		}
		if (y <= 0) {
			y = 0;
		} else if (y >= $('#midImg').height() - $('#mask').height()) {
			y = $('#midImg').height() - $('#mask').height();
		}
		var percentageX = x / ($('#midImg').width() - $('#mask').width());
		var percentageY = y / ($('#midImg').height() - $('#mask').height());
		console.log(percentageX+'=='+percentageY)
		$('#zoomLarge img').css({
			top: -percentageY * ($('#zoomLarge img').height() - $('#zoomLarge').height()),
			left: -percentageX * ($('#zoomLarge img').width() - $('#zoomLarge').width())
		});

		$('#mask').css({
			left: x + 'px',
			top: y + 'px'
		});
	});
	$('#midImg').mouseout(function() {
		$('#mask').hide();
		$('#zoomLarge').hide();
	});
})
