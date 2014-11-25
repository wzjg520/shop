$(function(){
	//广告轮播器初始化
	$('#banner img').css('opacity',0);
	$('#banner img').eq(0).css('opacity',100);
	$('#banner ul li').eq(0).css('color','#333');
	$('#banner strong').html($('#banner img').eq(0).attr('alt'));
	
	//轮播器计数器
	var banner_index=1;
	//轮播器种类
	var banner_type=2;
	
	//手动轮播器
	$('#banner ul li').hover(function(){
		clearInterval(banner_timer);
		if($(this).css('color')!='rgb(51,51,51)' && $(this).css('color')!='#333'){
			banner(this,banner_index==0 ? $('#banner ul li').length-1 : banner_index-1);
		}
	},function(){
		banner_index=$(this).index()+1;
		banner_timer=setInterval(banner_fn,4000);
	});
	
	//自动轮播器
	var banner_timer=setInterval(banner_fn,4000);
	
	function banner(obj,prev){	
		$('#banner ul li').css('color','#999');
		$(obj).css('color','#333');
		$('#banner strong').html($('#banner img').eq($(obj).index()).attr('alt'));
		if(banner_type==1){
			$('#banner img').eq(prev).css('zIndex',1).stop().animate({
				opacity:0,
			},'slow',function(){
				$('#banner img').eq($(obj).index()).css('zIndex',2).stop().animate({
					opacity:100,
				},'slow');
			});
			
		}else if(banner_type==2){
			$('#banner img').eq(prev).css('zIndex',1).css('top','0px');
			$('#banner img').eq($(obj).index()).css('left','783px').css('zIndex',2);
			$('#banner img').eq(prev).css('opacity',100).stop().animate({
				'left':-783+'px'
			},'slow');
			$('#banner img').eq($(obj).index()).css('opacity',100).stop().animate({
				'left':0+'px',
			},'slow');	

		}
	}
	
	function banner_fn(){
		if(banner_index>=$('#banner ul li').length) banner_index=0;
		banner($('#banner ul li').get(banner_index),banner_index==0 ? $('#banner ul li').length-1 : banner_index-1);
		banner_index++;
	}
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
		}else if(e.pageX<$(this).offset().left && e.pageY>$(this).offset().top && e.pageY<$(this).offset().top+280 ){
			$(this).find('.bg_hover').css({
				'left':'-220px',
				'transition': 'all 300ms ease 0s'
			});
		}else if(e.pageX>$(this).offset().left && e.pageY>$(this).offset().top && e.pageY<$(this).offset().top+280){
			$(this).find('.bg_hover').css({
				'left':'220px',
				'transition': 'all 300ms ease 0s'
			});
		}else if(e.pageY>$(this).offset().top+280){
			$(this).find('.bg_hover').css({
				'left':'0px',
				'top':'280px',
				'transition': 'all 300ms ease 0s'
			});
		}
		
	});
	// 品牌联盟
	$('.brand').find('li').each(function(i){
		$(this).find('img').css('top',parseInt((80-$(this).find('img').height())/2))                      
    })
	$('.brand').find('li').hover(function(){
		var top_height=parseInt($(this).find('img').css('top'));
		$(this).find('img').stop().animate({
			width:120,
			top:top_height+10,
			left:-10,
		}).css({
			'zIndex':11,
			'boxShadow':'0 0 3px #000'
		})
		// $(this).css('boxShadow','0 0 3px #000');
	},function(){
		var top_height=parseInt($(this).find('img').css('top'));
		$(this).find('img').stop().animate({
			width:100,
			top:top_height-10,
			left:0
		}).css({
			'zIndex':10,
			'boxShadow':'none'
		})
		// $(this).css('boxShadow','none');
	})

});	