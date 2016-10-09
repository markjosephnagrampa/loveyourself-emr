function c_change(id){
	window.scrollTo(0,0);
	
	for(var i=1; i<=11; i++){
		
		if(i==id){
			document.getElementById("c_step"+id).style.display = "block";
			document.getElementById("c_step"+id).style.visibility = "visible";
			document.getElementById("c_page"+id).setAttribute("class", "active");
			if(i == 1 || i==2 || i==3 || i==4 || i == 10 || i==11 ){
				c_disable(i);
			}
			if(i == 11){
				submitFormCounselor.disabled = false;
				generatePDFButton.disabled = false;
			}
		}else{
			document.getElementById("c_step"+i).style.display = "none";
			document.getElementById("c_step"+i).style.visibility = "hidden";
			document.getElementById("c_page"+i).removeAttribute("class");
		}
	}
}

function c_disable(id){
	var allChildNodes = document.getElementById("c_step"+id).getElementsByTagName('*');

	for(var i = 0; i < allChildNodes.length; i++)
	{
	   allChildNodes[i].disabled = true;
	}
}

