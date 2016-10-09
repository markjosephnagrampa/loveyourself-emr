			function change(id){
				window.scrollTo(0,0);
				for(var i=1; i<=11; i++){
					if(i==id){
						document.getElementById("step"+id).style.display = "block";
						document.getElementById("step"+id).style.visibility = "visible";
						document.getElementById("page"+id).setAttribute("class", "active");
						
					}else{
						document.getElementById("step"+i).style.display = "none";
						document.getElementById("step"+i).style.visibility = "hidden";
						document.getElementById("page"+i).removeAttribute("class");
					}
				}
			}