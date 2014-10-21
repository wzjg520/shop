$(function(){
	$('#delivery').change(function(){		
		var url=this.options[this.selectedIndex].getAttribute('url')
		$('#url').val(url)		
	})
	var obj=$('#delivery').get(0)
	$('#url').val(obj.options[obj.selectedIndex].getAttribute('url'))
})
