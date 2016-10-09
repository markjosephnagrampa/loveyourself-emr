/*function proceed(id){
	window.scrollTo(0,0);
 	for(var i=1; i<=11; i++){
		if(i==id){
			document.getElementById("step"+id).style.display = "block";
			document.getElementById("step"+id).style.visibility = "visible";
			document.getElementById("page"+id).setAttribute("class", "col-xs-3 bs-wizard-step active");
					
		}else if(i<id){
			document.getElementById("step"+i).style.display = "none";
			document.getElementById("step"+i).style.visibility = "hidden";
			document.getElementById("page"+i).setAttribute("class", "col-xs-3 bs-wizard-step complete");
		}else{
			document.getElementById("step"+i).style.display = "none";
			document.getElementById("step"+i).style.visibility = "hidden";
			document.getElementById("page"+i).setAttribute("class", "col-xs-3 bs-wizard-step disabled");
		}
	}
}
*/
function isEmpty(){
    var empty = false;
	$('input,textarea,select').filter('[required]:visible').each(function(i, requiredField){

	        if($(requiredField).val().length==0)
	        {
				empty = true;			
			}

	    }); 
		return empty;
}


$( document ).ready(function() {
   
		 var i = 1;
		 var step2 = true;
		 var step3 = true;
         $(".next").click(function(){
			 
			 
		     if(i == 1){
				 //alert(i);
		 		if($(".next").hasClass('disabled')){
					//alert("disabled");
		             $(".step").hide();
		             $("#step1").show();
		 			return false;
		 		}else{
				 
		        $(".step").hide();
		        $("#step2").show();
		 		$("#page1").removeClass("active");
		 		$("#page1").addClass("complete");
		 		$("#page2").removeClass("disabled");
		 		$("#page2").addClass("active");
				if(isEmpty){
					$(".next").addClass("disabled", true);
					//step2 = false;
				}
				i++;
		 		}
		     }
		     else if(i == 2){
				// alert(i);
		 		if($(".next").hasClass('disabled')){
		             $(".step").hide();
		             $("#step2").show();
		 			return false;
		 		}else{
		         $(".step").hide();
		         $("#step3").show();
		 		$("#page2").removeClass("active");
		 		$("#page2").addClass("complete");
		 		$("#page3").removeClass("disabled");
		 		$("#page3").addClass("active");
				if(isEmpty){
					$(".next").addClass("disabled", true);
					//step3 = false;
				}
				i++;
		     	}
		 	}
		     else if(i == 3){
				// alert(i);
		 		if($(".next").hasClass('disabled')){
		             $(".step").hide();
		             $("#step3").show();
		 			return false;
		 		}else{
		         $(".step").hide();
		         $("#step4").show();
		 		$("#page3").removeClass("active");
		 		$("#page3").addClass("complete");
		 		$("#page4").removeClass("disabled");
		 		$("#page4").addClass("active");
				
   			 if(isEmpty){
   			 	$('#submitFormUser').attr('disabled',true);
   			 }else{
   			 	$('#submitFormUser').removeAttr('disabled');
   			 }
				i++;
		    	}
		 	}
			 
			
         });
         $("#prevform_2").click(function(){
             $(".step").hide();
             $("#step1").show();
 			 $("#page2").removeClass("active");
 			 $("#page2").addClass("disabled");
 			 $("#page1").removeClass("complete");
 			 $("#page1").addClass("active");
			 $(".next").removeClass("disabled");
			 i--;
		
         });
         $("#prevform_3").click(function(){
             $(".step").hide();
             $("#step2").show();
 		 	 $("#page3").removeClass("active");
 			 $("#page3").addClass("disabled");
 			 $("#page2").removeClass("complete");
 			 $("#page2").addClass("active");
			 $(".next").removeClass("disabled");
			 i--;
         });
         $("#prevform_4").click(function(){
             $(".step").hide();
             $("#step3").show();
			 $("#page4").removeClass("active");
 		     $("#page4").addClass("disabled");
 			 $("#page3").removeClass("complete");
 			 $("#page3").addClass("active");
			 $(".next").removeClass("disabled");
			 i--;
         });
		/* $("#submitFormUser").click(function(){
			 if(isEmpty){
			 	$('#submitFormUser').attr('disabled',true);
			 }else{
			 	$('#submitFormUser').removeAttr('disabled');
			 }
		 }); */
		
});
