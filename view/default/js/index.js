$(function(){
	// 销售排行
	$('#sale_num').find('li').mouseover(function(e){
		$(this).find('.bg_hover').css({
			'left':'0px',
			'top':'0px',
			'transition': 'all 300ms ease 0s'
		});
	})

	$('#sale_num').find('li').mouseleave(function(e) {
		if(e.pageY<$(this).offset().top){
			$(this).find('.bg_hover').css({
				'left':'0px',
				'top':'-280px',
				'transition': 'all 300ms ease 0s'
			});
		}else if(e.pageX<=$(this).offset().left && e.pageY>$(this).offset().top && e.pageY<$(this).offset().top+280 ){
			$(this).find('.bg_hover').css({
				'left':'-220px',
				'transition': 'all 300ms ease 0s'
			});
		}else if(e.pageX>$(this).offset().left && e.pageY>$(this).offset().top && e.pageY<$(this).offset().top+280){
			$(this).find('.bg_hover').css({
				'left':'220px',
				'transition': 'all 300ms ease 0s'
			});
		}else if(e.pageY>=$(this).offset().top+280){
			$(this).find('.bg_hover').css({
				'left':'0px',
				'top':'280px',
				'transition': 'all 300ms ease 0s'
			});
		}
		
	});
	//店家推荐
	$('.pro_list_two').find('dl').hover(function(){
		$(this).find('.covers').stop().show();
	},function(){
		$(this).find('.covers').stop().hide();
	})
	// 品牌联盟
	$('.brand').find('li').hover(function(){
		var top_height=parseInt($(this).find('span').css('top'));
		$(this).find('span').stop().animate({
			width:134,
			top:10,
			left:-10,
		}).css({
			'zIndex':11,
			'boxShadow':'0 0 3px #000'
		})
	},function(){
		var top_height=parseInt($(this).find('span').css('top'));
		$(this).find('span').stop().animate({
			width:115,
			top:0,
			left:0
		}).css({
			'zIndex':10,
			'boxShadow':'none'
		})
	})

});	