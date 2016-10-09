function a_change(id){
	window.scrollTo(0,0);
	
	for(var i=1; i<=3; i++){
		backadminBtn.disabled = false;
		if(i==id){
			document.getElementById("a_step"+id).style.display = "block";
			document.getElementById("a_step"+id).style.visibility = "visible";
			document.getElementById("a_page"+id).setAttribute("class", "active");
			a_disable(i);
			if(id ==3){
			
			}
			
		}else{
			document.getElementById("a_step"+i).style.display = "none";
			document.getElementById("a_step"+i).style.visibility = "hidden";
			document.getElementById("a_page"+i).removeAttribute("class");
		}
		
	}
}

function a_disable(id){
	var allChildNodes = document.getElementById("a_step"+id).getElementsByTagName('*');

	for(var i = 0; i < allChildNodes.length; i++)
	{
	   allChildNodes[i].disabled = true;
	}
}

