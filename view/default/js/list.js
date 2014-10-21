//檢測比較商品是否符合條件
function checkCompare(id){
	if(!checkNav(id)){
		if(confirm('不能添加非同类商品比较\n您是否要删除之前的比较商品')){
			$.ajax({
				url:'?a=compare&m=ajaxClearAll',
				method:'get',
				success:function(test){
					if(test='true'){
						alert('清理成功');
					}else{
						alert('执行出错');
					}
				}
			})
			
		}
		return false;
	}
}
//檢測是否添加別的類別的商品
function checkNav(id){
	var flag=true;
	if (document.cookie.indexOf('compare')>=0){
		var patten=/compare\[[0-9]{1,2}\]=([0-9]{1,2})/g
		var str=document.cookie
		var r='';
		while(r=patten.exec(str)){
			if(r[1] != id ){
				flag=false;
			}
		}			
	}
	return flag
}
