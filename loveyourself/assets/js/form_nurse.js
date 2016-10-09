function n_change(id){
	window.scrollTo(0,0);
	
	
	for(var i=1; i<=11; i++){
		
		if(i==id){
			document.getElementById("n_step"+id).style.display = "block";
			document.getElementById("n_step"+id).style.visibility = "visible";
			document.getElementById("n_page"+id).setAttribute("class", "active");
			n_disable(i);
			
			if(i == 11){
				backBtn.disabled = false;
			}
		}else{
			document.getElementById("n_step"+i).style.display = "none";
			document.getElementById("n_step"+i).style.visibility = "hidden";
			document.getElementById("n_page"+i).removeAttribute("class");
		}
	}
}

function n_disable(id){
	var allChildNodes = document.getElementById("n_step"+id).getElementsByTagName('*');

	for(var i = 0; i < allChildNodes.length; i++)
	{
	   allChildNodes[i].disabled = true;
	}
}

