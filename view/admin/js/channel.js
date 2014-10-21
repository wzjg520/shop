function channel(j){
	var ul = document.getElementsByTagName('dl');
	for(var i=0;i<ul.length;i++){
		ul[i].style.display='none';
	}
	ul[j].style.display='block';
	
}
