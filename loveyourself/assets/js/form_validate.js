function empty(){
    var empty = false;
	$('input,textarea,select').filter('[required]:visible').each(function(i, requiredField){

	        if($(requiredField).val().length==0)
	        {
				var id = $(requiredField).attr('id');
				var div = $("#"+id).closest("div");
				div.addClass("has-error");
				empty = true;
				//window.location.replace("javascript:proceed('"+page+"')");   				
			}else{
				var id = $(requiredField).attr('id');
				var div = $("#"+id).closest("div");
				div.removeClass('has-error');
				div.removeClass('has-warning');
	        }

	    }); 
		return empty;
}

function one(){
	if($('#notEnrolled').prop('checked')){
		$('#philHealthNo').val('');
		$('#philHealthNo').attr('disabled',true);
		$('#philHealthNo').removeAttr('required');
		$('#philHealthNo').closest('div').removeClass('has-error');
		
	}else{
		$('#philHealthNo').attr('disabled',false);
		$('#philHealthNo').attr('required',true);
		$('#philHealthNo').closest('div').addClass('has-error');
	}
}


function five_age(){
	if($("#age").val().length != 0){
		$('#age_in_months').attr('disabled',true);
		$("#age_in_months").removeAttr('required');
		$('#age_in_months').closest('div').removeClass('has-error');
		$('#age_in_months').closest('div').removeClass('has-warning');
		$('#age_in_months').closest('div').removeClass('has-success');
	}else{
		$('#age_in_months').removeAttr('disabled');
		$('#age_in_months').closest('div').addClass('has-warning');
		$('#age_in_months').attr('required',true);
		$('#age').closest('div').removeClass('has-error');
		$('#age').closest('div').addClass('has-warning');
	}
}

function five_age_in_months(){
	if($("#age_in_months").val().length != 0){
		$('#age').attr('disabled',true);
		$("#age").removeAttr('required');
		$('#age').closest('div').removeClass('has-error');
		$('#age').closest('div').removeClass('has-warning');
		$('#age').closest('div').removeClass('has-success');
	}else{
		$('#age').removeAttr('disabled');
		$('#age').attr('required',true);
		$('#age').closest('div').addClass('has-warning');
		$('#age_in_months').closest('div').removeClass('has-error');
		$('#age_in_months').closest('div').addClass('has-warning');
	}
}

function five_sex(){
	if($("input[name=sex]:checked").val() == 'male'){
		$("input[name=presently_pregnant]").attr('disabled',true);
		$("input[name=presently_pregnant]").val(''); 
	}else{
		$("input[name=presently_pregnant]").removeAttr('disabled');
	}
}

function eight(){
	if($("input[name=nationality]:checked").val() == 'Filipino'){
		$("#nationality_others").attr('disabled',true);
		$("#nationality_others").removeAttr('required');
		$('#nationality_others').closest('div').removeClass('has-error');
		$('#nationality_others').closest('div').removeClass('has-success');
		$("#nationality_others").val('');
	}else{
		$("#nationality_others").removeAttr('disabled');
		$('#nationality_others').closest('div').addClass('has-error');
	}
}

function thirteen(){
	if($("#occupation").val().length != 0){
		$('#prev_occupation').attr('disabled',true);
		$('#prev_occupation').removeAttr('required');
		$('#prev_occupation').closest('div').removeClass('has-warning');
		$('#prev_occupation').closest('div').removeClass('has-error');
	}else{
		$('#prev_occupation').removeAttr('disabled');
		$('#prev_occupation').closest('div').addClass('has-warning');
		$('#prev_occupation').attr('required',true);
		$('#occupation').closest('div').removeClass('has-error');
		$('occupation').closest('div').addClass('has-warning');
	}
}

function thirteen_prev(){
	if($("#prev_occupation").val().length != 0){
		$('#occupation').attr('disabled',true);
		$('#occupation').removeAttr('required');
		$('#occupation').closest('div').removeClass('has-warning');
		$('#occupation').closest('div').removeClass('has-error');
		$('#prev_occupation').closest('div').removeClass('has-warning');
	}else{
		$('#occupation').removeAttr('disabled');
		$('#occupation').closest('div').addClass('has-warning');
		$('#occupation').attr('required',true);
		$('#prev_occupation').closest('div').removeClass('has-error');
		$('#prev_occupation').closest('div').addClass('has-warning');
	}
}
function fourteen(){
	if($("input[name=work_abroad]:checked").val() == "No"){
		$('#month_last_contract').attr('disabled',true);
		$('#year_last_contract').attr('disabled',true);
		$('input[name=work_based]').attr('disabled',true);
		$('input[name=country_last_work]').attr('disabled',true);
		$('#month_last_contract').removeAttr('required');
		$('#year_last_contract').removeAttr('required');
		$('input[name=work_based]').removeAttr('required');
		$('input[name=country_last_work]').removeAttr('required');
	}else{
		$('#month_last_contract').removeAttr('disabled');
		$('#year_last_contract').removeAttr('disabled');
		$('input[name=work_based]').removeAttr('disabled');
		$('input[name=country_last_work]').removeAttr('disabled');
	}
}


$(document).ready(
	
	function(){	
		if(empty){
			$(".next").addClass("disabled", true);
		}	
	
		$('input').keyup(function() {
					if(empty()){
						$(".next").addClass("disabled", true);
					}else{				
						$(".next").removeClass("disabled");
						$("#submitFormUser").removeAttr("disabled");
					}
					
		});
 		$("#notEnrolled").click(function(){
 			one();
 		});
		$("#age").focusout(function(){
			five_age();
		});
		$('#age_in_months').focusout(function(){
			five_age_in_months();
		});
		$("input[name=sex]").click(function(){
			five_sex();
		});
		$("input[name=nationality]").click(function(){
			eight();
		});
		$("#occupation").focusout(function(){
			thirteen();
		});
		$("#prev_occupation").focusout(function(){
			thirteen_prev();
		});
		$("input[name=work_abroad]").click(function(){
			fourteen();
		});

		
	}
);

