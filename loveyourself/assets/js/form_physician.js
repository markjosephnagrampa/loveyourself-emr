function d_change(id){
	window.scrollTo(0,0);
	
	for(var i=1; i<=11; i++){
		
		if(i==id){
			document.getElementById("d_step"+id).style.display = "block";
			document.getElementById("d_step"+id).style.visibility = "visible";
			document.getElementById("d_page"+id).setAttribute("class", "active");
			p_disable(i);
			
			if(i == 11){
				backBtn.disabled = false;
			}
		}else{
			document.getElementById("d_step"+i).style.display = "none";
			document.getElementById("d_step"+i).style.visibility = "hidden";
			document.getElementById("d_page"+i).removeAttribute("class");
		}
	}
}

function p_disable(id){
	var allChildNodes = document.getElementById("d_step"+id).getElementsByTagName('*');

	for(var i = 0; i < allChildNodes.length; i++)
	{
	   allChildNodes[i].disabled = true;
	}
}

