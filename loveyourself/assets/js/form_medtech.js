function m_change(id){
	window.scrollTo(0,0);
	
	for(var i=1; i<=11; i++){
		
		if(i==id){
			document.getElementById("m_step"+id).style.display = "block";
			document.getElementById("m_step"+id).style.visibility = "visible";
			document.getElementById("m_page"+id).setAttribute("class", "active");
			if(i == 1 || i==2 || i==3){
				m_disable(i);
			}
			if(i == 11){
				submitFormCounselor.disabled = false;
				generatePDFButton.disabled = false;
			}
		}else{
			document.getElementById("m_step"+i).style.display = "none";
			document.getElementById("m_step"+i).style.visibility = "hidden";
			document.getElementById("m_page"+i).removeAttribute("class");
		}
	}
}

function m_disable(id){
	var allChildNodes = document.getElementById("m_step"+id).getElementsByTagName('*');

	for(var i = 0; i < allChildNodes.length; i++)
	{
	   allChildNodes[i].disabled = true;
	}
}

