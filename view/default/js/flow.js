$(function(){
	showDelivery($('.delivery:checked'))
	showPay($('.pay_way:checked'))
	$('.delivery').click(function(){
		showDelivery($(this))
	})
	$('.pay_way').click(function(){
		showPay($(this));
	})
	
})
function showDelivery(e){
	var result,
		price,
		start=e.val(),
		weight=e.attr('weight'),
		add=e.attr('add')
		if(weight>10 && add != 0){
			result=start+' + ('+weight+' - 10)' +' * '+add+' = ';
			price=(weight-10)*add+start
			result +=price
		}else if(weight<10 || add==0){
			result=price=start
		}
	$('.show_delivery').html(result);
	$('.price_delivery').html(price+'元');
	$('#total').find('strong').eq(1).html(price);
	totalPrice();
}
function showPay(e){
	var pay=e.val(),payWay=e.attr('title');
		$('.price_pay').html(pay+'元')
		$('#total').find('strong').last().html(pay);	
		$('.pay').val(payWay);
		totalPrice();
}

function totalPrice(){
	var price=0;
	$('#total strong').each(function(i){
		price +=Number($(this).html())
	})
	$('.price').html(price)
	$('.form_price').val(price)
}









