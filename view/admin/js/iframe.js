window.onload=function(){
	setSize();
	(function(){	
		window.onresize=function(){
				setSize();		
		}
	})()
}
function setSize(){
	var width=document.documentElement.clientWidth-181;
	var height=document.documentElement.clientHeight-80;
	if (height > 0) {
		document.getElementById('sidebar').style.height=height+'px';
		document.getElementById('main').style.height=height+'px';
	}
	if(width>0)document.getElementById('main').style.width=width+'px';
}
