<div class="container">
<div class="container" id="content" style ='background-color: #FFFFFF;'>

<ul class="pagination">
	  <li id="c_page1" class="active"><a href="javascript:c_change('1');">Step 1</a></li>
	  <li id="c_page2"><a href="javascript:c_change('2');">Step 2</a></li>
	  <li id="c_page3"><a href="javascript:c_change('3');">Step 3</a></li>
	  <li id="c_page4"><a href="javascript:c_change('4');">Step 4</a></li>
	  <li id="c_page5"><a href="javascript:c_change('5');">Step 5</a></li>
	  <li id="c_page6"><a href="javascript:c_change('6');">Step 6</a></li>
	  <li id="c_page7"><a href="javascript:c_change('7');">Step 7</a></li>
	  <li id="c_page8"><a href="javascript:c_change('8');">Step 8</a></li>
	  <li id="c_page9"><a href="javascript:c_change('9');">Step 9</a></li>
	  <li id="c_page10"><a href="javascript:c_change('10');">Step 10</a></li>
	  <li id="c_page11"><a href="javascript:c_change('11');">Step 11</a></li>
	  
</ul>	

<?php
	$patient_id = $patient_record->patient_id;
	$philhealth_number = 'N/A';
	$no_philhealth_number = FALSE;
	if(strcmp($patient_record->philhealth_number, '0') == 0){
		$no_philhealth_number = TRUE;
	} else {
		$philhealth_number = $patient_record->philhealth_number;
	}
	
	$sex_male = FALSE;
	$sex_female = FALSE;
	if($patient_record->sex == 'M'){
		$sex_male = TRUE;
	} else {
		$sex_female = TRUE;
	}

	$nationality_filipino = FALSE;
	$nationality_others = FALSE;
	$nationality_others_specify = '';
	if($patient_record->nationality == 0){
		$nationality_filipino = TRUE;
		$nationality_others = FALSE;
	} else {
		$nationality_filipino = FALSE;
		$nationality_others = TRUE;
		$nationality_others_specify = $patient_record->nationality;
	}

	$hea_none = FALSE;
	$hea_hs = FALSE;
	$hea_voc = FALSE;
	$hea_elem = FALSE;
	$hea_college = FALSE;
	$hea_post_grad = FALSE;
	switch($patient_record->highest_educational_attainment){
		case 1: $hea_none = TRUE;
				break;
		case 2: $hea_hs = TRUE;
				break;
		case 3: $hea_voc = TRUE;
			break;
		case 4: $hea_elem = TRUE;
			break;
		case 5: $hea_college = TRUE;
			break;
		case 6: $hea_post_grad = TRUE;
			break;
		default: break;
	}

	$cs_single = FALSE;
	$cs_married = FALSE;
	$cs_separated = FALSE;
	$cs_widowed = FALSE;
	switch($patient_record->civil_status){
		case 1: $cs_single = TRUE;
			break;
		case 2: $cs_married = TRUE;
			break;
		case 3: $cs_separated = TRUE;
			break;
		case 4: $cs_widowed = TRUE;
			break;
		default: break;
	}

	$with_partner = FALSE;
	$without_partner = FALSE;
	if($patient_record->living_with_partner == 0){
		$without_partner = TRUE;	
	} else {
		$with_partner = TRUE;
	}

	$yes_pregnant = FALSE;
	$no_pregnant = FALSE;
	if($sex_female == TRUE){
		if($patient_record->presently_pregnant == 0){
			$no_pregnant = TRUE;
		} else {
			$yes_pregnant = TRUE;
		}
	}

	$current_occupation = $patient_record->current_occupation;
	$prev_occupation = $patient_record->prev_occupation;
	if(strcmp($current_occupation, '0') == 0){
		$current_occupation = 'N/A';
	} else {
		$prev_occupation = 'N/A';
	}

	$work_abroad_no = FALSE;
	$work_aborad_yes = FALSE;
	if($patient_record->work_abroad == 0){
		$work_abroad_no = TRUE;
	} else {
		$work_abroad_yes = TRUE;
	}
							
	$ship_based = FALSE;
	$land_based = FALSE;	
	if($patient_record->work_abroad_based == 0){
		$ship_based = TRUE;
	} else {
		$land_based = TRUE;
	}
							
	$country_last_work = $patient_record->work_abroad_country;
	if(strcmp($country_last_work, '0') == 0){
		$country_last_work = 'N/A';
	}

	$reason_1 = FALSE;
	$reason_2 = FALSE;
	$reason_3 = FALSE;
	$reason_4 = FALSE;
	$reason_5 = FALSE;
	$reason_6 = FALSE;
	$reason_7 = FALSE;
	$reason_8 = FALSE;
	$reason_9 = FALSE;
	$reason_10 = FALSE;
	$reason_11 = FALSE;
	$reason_12 = FALSE;
	$reason_12_specify = 'N/A';
	$reason_13 = FALSE;
	$reason_14 = FALSE;
	$reason_15 = FALSE;
	$reason_16 = FALSE;
	
	if(!empty($patient_reason)){
		if($patient_reason->mother_infected_hiv == 1) $reason_1 = TRUE;
		if($patient_reason->for_blood_transfusion == 1) $reason_2 = TRUE;
		if($patient_reason->tb_patient == 1) $reason_3 = TRUE;
		if($patient_reason->partner_infected_hiv == 1) $reason_4 = TRUE;
		if($patient_reason->know_hiv_status == 1) $reason_5 = TRUE;
		if($patient_reason->active_hepatitis == 1) $reason_6 = TRUE;
		if($patient_reason->needle_share_idu == 1) $reason_7 = TRUE;
		if($patient_reason->recheck_prev_hiv_result == 1) $reason_8 = TRUE;
		if($patient_reason->no_particular_reason == 1) $reason_9 = TRUE;
		if($patient_reason->accidental_needle_prick == 1) $reason_10 = TRUE;
		if($patient_reason->employment_local == 1) $reason_11 = TRUE;
		if($patient_reason->specify_other == 1){	
			$reason_12 = TRUE;
			$reason_12_specify = $patient_reason->specify_other;
		}
		if($patient_reason->physician_recommended == 1) $reason_13 = TRUE;
		if($patient_reason->insurance_requirement == 1) $reason_14 = TRUE;
		if($patient_reason->employment_abroad == 1) $reason_15 = TRUE;
		if($patient_reason->female_pregnant == 1) $reason_16 = TRUE;
	}
	
	$no_history = FALSE;
	$with_history = FALSE;
	if(array_key_exists('mother_hiv_infected', $mother_record)){
		if($mother_record->mother_hiv_infected == 0){
			$no_history = TRUE;
		} else {
			$with_history = TRUE;
		}
	}
	
	$no_user_history_1 = FALSE;
	$no_user_history_2 = FALSE;
	$no_user_history_3 = FALSE;
	$no_user_history_4 = FALSE;
	$no_user_history_5 = FALSE;
	$no_user_history_6 = FALSE;
	$no_user_history_7 = FALSE;
	$no_user_history_8 = FALSE;
	$yes_user_history_1 = FALSE;
	$yes_user_history_2 = FALSE;
	$yes_user_history_3 = FALSE;
	$yes_user_history_4 = FALSE;
	$yes_user_history_5 = FALSE;
	$yes_user_history_6 = FALSE;
	$yes_user_history_7 = FALSE;
	$yes_user_history_8 = FALSE;
	$year_history_1 = 'N/A';
	$year_history_2 = 'N/A';
	$year_history_3 = 'N/A';
	$year_history_4 = 'N/A';
	$year_history_5 = 'N/A';
	$year_history_6 = 'N/A';
	$year_history_7 = 'N/A';
	$year_history_8 = 'N/A';
	if(!empty($patient_history)){
		if($patient_history->had_blood_transfusion == 1){
			$yes_user_history_1 = TRUE;
			$year_history_1 = $patient_history->had_blood_transfusion_year;
		} else {
			$no_user_history_1 = TRUE;
		}
		if($patient_history->injected_drugs == 1){
			$yes_user_history_2 = TRUE;
			$year_history_2 = $patient_history->had_blood_transfusion_year;
		} else {
			$no_user_history_2 = TRUE;
		}
		if($patient_history->accidental_needle_prick == 1){
			$yes_user_history_3 = TRUE;
			$year_history_3 = $patient_history->accidental_needle_prick_year;
		} else {
			$no_user_history_3 = TRUE;
		}
		if($patient_history->sexually_transmitted_infections == 1){
			$yes_user_history_4 = TRUE;
			$year_history_4 = $patient_history->sexually_transmitted_infections_year;
		} else {
			$no_user_history_4 = TRUE;
		}
		if($patient_history->sex_female_without_condom == 1){
			$yes_user_history_5 = TRUE;
			$year_history_5 = $patient_history->sex_female_without_condom_year;
		} else {
			$no_user_history_5 = TRUE;
		}
		if($patient_history->sex_male_without_condom == 1){
			$yes_user_history_6 = TRUE;
			$year_history_6 = $patient_history->sex_male_without_condom_year;
		} else {
			$no_user_history_6 = TRUE;
		}
		if($patient_history->sex_with_prostitute == 1){
			$yes_user_history_7 = TRUE;
			$year_history_7 = $patient_history->sex_with_prostitute_year;
		} else {
			$no_user_history_7 = TRUE;
		}
		if($patient_history->sex_for_payment == 1){
			$yes_user_history_8 = TRUE;
			$year_history_8 = $patient_history->sex_for_payment_year;
		} else {
			$no_user_history_8 = TRUE;
		}
	}
	
	$num_female_partner = 0;
	$num_male_partner = 0;
	$year_last_sex_f = 'N/A';
	$year_last_sex_m = 'N/A';
	if(array_key_exists('sex_partner_female_number', $patient_record)){
		$num_female_partner = $patient_record->sex_partner_female_number;
		$num_male_partner = $patient_record->sex_partner_male_number;
		$year_last_sex_f = $patient_record->sex_partner_female_year;
		$year_last_sex_m = $patient_record->sex_partner_male_year;
	}
	
	$tested = FALSE;
	$not_tested = FALSE; 
	$month_last_tested = 'N/A';
	$year_last_tested = 'N/A';
	$testing_site = 'N/A';
	$testing_city = 'N/A';
	$positive_result = FALSE;
	$negative_result = FALSE;
	if(array_key_exists('hiv_test_before', $patient_record)){
		if($patient_record->hiv_test_before == 0){
			$not_tested = TRUE;
		} else {
			$tested = TRUE;
			$month_last_tested = $patient_record->hiv_test_before_month;
			$year_last_tested = $patient_record->hiv_test_before_year;
			$testing_site = $patient_record->hiv_test_before_facility;
			$testing_city = $patient_record->hiv_test_before_municipality_city;
			if($patient_record->hiv_test_before_result == 0){
				$negative_result = TRUE;
			} else {
				$positive_result = TRUE;
			}
		}
	}
	
	$asymptomatic = FALSE;
	$symptomatic = FALSE;
	$description_ssx = 'N/A';
	$who_staging = 'N/A';
	$no_avail_physician = FALSE;
	$counselor_name = 'N/A';
	if(!empty($counselor_record)){
		if($counselor_record->clinical_picture == 0){
			$asymptomatic = TRUE;
		} else {
			$symptomatic = TRUE;
			$description_ssx = $counselor_record->clinical_picture_ssx;
			if($counselor_record->clinical_picture_who_staging == 0){
				$no_avail_physician = TRUE;
			} else {
				$who_staging = $counselor_record->clinical_picture_who_staging;
			}
		}
		//$counselor_name = ...
	}
	
	$facility_name = 'N/A';
	$hiv_lab_code = 'N/A';
	$year_hiv_lab_code = 'N/A';
	$mailing_address = 'N/A';
	$contact_numbers = 'N/A';
	$email_address = 'N/A';
	if(!empty($testing_facility)){
		$facility_name = $testing_facility->facility_name;
		$hiv_lab_code = $testing_facility->hiv_eqas_lab_code;
		$year_hiv_lab_code = $testing_facility->hiv_eqas_last_year;
		$mailing_address = $testing_facility->mailing_address;
		$contact_numbers = $testing_facility->contact_numbers;
		$email_address = $testing_facility->email_address;
	}
	
	$medtech_name = 'N/A';
	$hiv_prof_num = 'N/A';
	$month_issued = 'N/A';
	$day_issued = 'N/A';
	$year_issued = 'N/A';
	$month_expired = 'N/A';
	$day_expired = 'N/A';
	$year_expired = 'N/A';
	$counselor_name = 'N/A';
	if(!empty($medtech_record)){
		//$medtech_name = ...
		$hiv_prof_num = $medtech_record->hiv_proficiency_number;
		$month_issued = $medtech_record->month_issued;
		$day_issued = $medtech_record->day_issued;
		$year_issued = $medtech_record->year_issued;
		$month_expired = $medtech_record->month_expired;
		$day_expired = $medtech_record->day_expired;
		$year_expired = $medtech_record->year_expired;
	}

	$saccl_labcode = 'N/A';
	$month_confirmed = 'N/A';
	$day_confirmed = 'N/A';
	$year_confirmed = 'N/A';
	$saccl_name = 'N/A';
	$western_blot = FALSE;
	$pcr_for_infants = FALSE;
	if(!empty($saccl_record	)){
		$saccl_labcode = $saccl_record->saccl_lab_code;
		$month_confirmed = $saccl_record->month_hiv_confirmed;
		$day_confirmed = $saccl_record->day_hiv_confirmed;
		$year_confirmed = $saccl_record->year_hiv_confirmed;
		//$saccl_name = ...
		if($saccl_record->saccl_test == 0){
			$western_blot = TRUE;
		} else {
			$pcr_for_infants = TRUE;
		}
	}
	

?>
<div class="c_step" id="c_step1">
	<?php
	$attributes = array('id' => 'formpatient');
	echo form_open('site/insert_record', $attributes);
	echo form_fieldset('<strong>INFORMED CONSENT FOR HIV TESTING</strong>');
	echo "<p>The Department of Health (DOH) has an existing program for the prevention and control of the Human Immunodeficiency Virus (HIV) in the Philippines.  The National Epidemiology Center (NEC) of DOH is mandated by the Republic Act 8504 to collect information which can help in planning activities which will help halt the spread of HIV and be beneficial to the people.  Your full cooperation is very important to undertake this activity.  We encourage you to answer all questions as honestly as possible. </p>";
	echo form_fieldset();
	echo "<h3>ABOUT THE TEST</h3>\n";
	echo "<strong>1. What is HIV testing?</strong>";
	echo "\n<p>An HIV test is a blood test.  It will show if you have antibodies to HIV-- the virus that causes AIDS.  A sample of blood will be taken from your arm.  If the first test (screening) is reactive, another test (confirmatory) will be done to make sure that the first test is confirmed to be positive.  A positive test means you have been infected with HIV, a negative test means you are probably not infected because it takes time for the body to produce antibodies.  If you think you have been exposed recently, you need to be re-tested after 3 - 6 months to make sure you are not infected.</p>\n";
	echo "<strong>2. Voluntary HIV testing</strong>";
	echo "\n<p>Taking an HIV test is voluntary.  Under Republic Act 8504, you cannot be tested without your knowledge and consent.  If you do not want to be tested, you have the right to refuse the test.\n</p>";
	echo "<strong>3. Confidentially of the Test Results</strong>";
	echo "<p>\nYour result is confidential.  It will only be given to you personally.</p>";
	echo form_fieldset_close();
	?>
	<!--table-->
				<tr>
			<td><?php 
				$data = array(
					'name' => 'information',
					'id' => 'information',
					'value' => 'yes',
					'checked' => TRUE,
					'disabled'=> TRUE
				);
				echo  form_checkbox($data); ?>
			</td>
			<td co-lspan=20> &nbsp&nbsp&nbsp; I was given information about HIV and HIV testing, and was given the opportunity to ask questions during pretest counseling or group test 
			<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp; information</br>
			</td>
		</tr>
		<tr>
			<td><?php 
				$data = array(
					'name' => 'agree',
					'id' => 'agree',
					'value' => 'yes',
					'checked' => TRUE,
					'disabled'=> TRUE
				);
				echo  form_checkbox($data); ?>
			</td>
			<td>&nbsp&nbsp&nbsp; I agree to be tested for HIV.</td>
		</tr>
		<br></br>
		<table class="table">
		<tr>
			<td><?php echo form_label("Name: ", "firstName"); ?></td>
				<td><?php 
				$data = array(
					"name" => "firstName",
					"id" => "firstName",
					"value" => "$patient_record->first_name",
					//"size" => "20",
					"maxlength" => "20",
					"placeholder" => "First Name",
					"class" => "form-control",
					'disabled'=> TRUE
				);
				echo form_input($data);
				?></td>
				<td><?php 
				$data = array(
					"name" => "middleName",
					"id" => "middleName",
					"value" => "$patient_record->middle_name",
					//"size" => "20",
					"maxlength" => "20",
					"placeholder" => "Middle Name",
					"class" => "form-control",
					'disabled'=> TRUE
				);
				echo form_input($data);
				?></td>
				<td><?php 
				$data = array(
					"name" => "lastName",
					"id" => "lastName",
					"value" => "$patient_record->last_name",
					//"size" => "20",
					"maxlength" => "20",
					"placeholder" => "Last Name",
					"class" => "form-control",
					'disabled'=> TRUE
				);
				echo form_input($data);
				?></td>
		</tr>
		<tr>
			<td><?php echo form_label("Date: "); ?></td>
				<td colspan=10> &nbsp;
				<?php echo date("m	/	d	/	Y");
				?>
				<!--?php
					$data = array(
					"name" => "dateOfBirth",
					"id" => "dateOfBirth",
					"value" => date("m/d/Y"),
					//"size" => "20",
					//"maxlength" => "20",
					//"placeholder" => "Middle Name",
					"class" => "form-control",
					"disabled" => TRUE
				);
				echo form_input($data);
				?-->
				</td>
			<tr>
					<td><?php echo form_label("Signature: ", "sign"); ?></td>
						<td colspan=10><?php 
						$data = array(
						"name" => "signature",
						"id" => "signature",
						"value" => "",
						"size" => "30",
						"class" => "form-control",
						"disabled" => TRUE
						);
						echo form_input($data);
						?>
					</td>			
			</tr>
		<!--/tr-->
	</table>
	<?php
	echo form_fieldset_close();		
	?>
	<ul class="pager">
	    <li class="next"><a href="javascript:c_change('2');" id="back3">Next</a></li>
	 </ul>

</div> <!-- end of step 1-->
<div class="c_step" id="c_step2">
<div class="table-responsive">
	<?php 
	echo form_fieldset('<strong>PERSONAL INFORMATION SHEET (FORM A)</strong>');
	?>
	<p>All information given will be STRICTLY CONFIDENTIAL.  Please fill out this form COMPLETELY and as honestly as possible.  Please write in CAPITAL LETTERS and CHECK the appropriate boxes.</p>
	<table class="table table-bordered"><!--start of Demographic Data Table-->
		
		<tr>
			<th colspan=2 class="form">DEMOGRAPHIC DATA</th>
		</tr>
		<tr><!--number 1-->
			<td>1</td>
			<td>
			<table>
			<tr>
			<th><?php echo form_label("PhilHealth Number", "philHealthNo"); ?> &nbsp&nbsp&nbsp;</th>
			<td><?php  $data = array(
				        'name'          => 'philHealthNo',
				        'id'            => 'philHealthNo',
				        'value'         => "$philhealth_number",
				        'maxlength'     => '12',
				        'size'          => '14',
						'class'			=> 'form-control',
						'placeholder'	=> 'XX-XXXXXXXXX-X',
						'required'		=> 'required'
				);

				echo form_input($data);
				?></td>
			<td>&nbsp&nbsp&nbsp&nbsp;</td>
			<td><?php $data = array(
					'name' => 'notEnrolled',
					'id' => 'notEnrolled',
					'value' => '',
					'checked' => "$no_philhealth_number"
				);
				echo form_checkbox($data); 
				?>
			</td>
			<td> &nbsp&nbsp;<?php 
				 $attributes = array(
					'style' => 'font-weight: normal;'
				);
				echo form_label("Not enrolled in PhilHealth", "notEnrolled", $attributes); ?></td>
			</tr>
			</table>
			</td>
		</tr><!--end of number 1-->
		<tr><!--number 2-->
			<td>2</td>
			<td> 
			<table><!-- start of content 2 table-->
			<tr><!--start of fullname-->
			<th colspan=3><p align="left"><?php echo form_label("Name", "first_Name"); ?></p></th>
			</tr><!--end of fullname-->
			<tr><!--start of row input-->
				<div class="form-group">
				<td class="form"><?php  $data = array(
				        'name'          => 'first_name',
				        'id'            => 'first_Name',
				        'value'         => "$patient_record->first_name",
				        'maxlength'     => '20',
				        'size'          => '25',
						'placeholder'   => 'First Name',
						'padding'       => '50px',
						'class'			=> 'form-control',
						'required'		=> 'required'
				);
				echo form_input($data);
				
				//echo form_error('first_name');
				?></div></td>
				<td>&nbsp;</td>
				<td><?php  $data = array(
				        'name'          => 'middle_name',
				        'id'            => 'middle_Name',
				        'value'         => "$patient_record->middle_name",
				        'maxlength'     => '20',
				        'size'          => '25',
						'placeholder'   => 'Middle Name',
						'class'			=> 'form-control',
						'required'		=> 'required'
				);
				echo form_input($data);
				//echo form_error('middle_name');
				?></td>
				<td>&nbsp;</td>
				<td><?php  $data = array(
				        'name'          => 'last_name',
				        'id'            => 'last_Name',
				        'value'         => "$patient_record->last_name",
				        'maxlength'     => '20',
				        'size'          => '25',
						'placeholder'   => 'Last Name',
						'class'			=> 'form-control',
						'required'		=> 'required'
				);
				echo form_input($data);
				//echo form_error('last_name');	
				?></td>
			</tr><!--end of row input -->
			
		</table><!-- end of content 2 table-->
	</td>
	</tr><!--end of number 2-->
		<tr>
			<td>3</td>
			<td>
				<table><!--start of content 3 table-->
				<tr><!--start of mother's name-->
			<th colspan=3><p align="left"><?php echo form_label("Mother's Name", "motherFirstName"); ?></p></th>
				</tr><!--end of mother's name-->
				<tr><!--start of input row-->
					<td class="form"><?php  $data = array(
				        'name'          => 'mother_first_name',
				        'id'            => 'motherFirstName',
				        'value'         => "$mother_record->mother_first_name",
				        'maxlength'     => '20',
				        'size'          => '25',
						'placeholder'   => 'First Name',
						'class'			=> 'form-control',
						'required'		=> 'required'
					);
					echo form_input($data);
					//echo form_error('mother_first_name');
					?></td>
					<td>&nbsp;</td>
					<td><?php  $data = array(
				        'name'          => 'mother_middle_name',
				        'id'            => 'motherMiddleName',
				        'value'         => "$mother_record->mother_middle_name",
				        'maxlength'     => '20',
				        'size'          => '25',
						'placeholder'   => 'Middle Name',
						'class'			=> 'form-control',
						'required'		=> 'required'
					);
					echo form_input($data);
					//echo form_error('mother_middle_name');
					?></td>
					<td>&nbsp;</td>
					<td><?php  $data = array(
				        'name'          => 'mother_last_name',
				        'id'            => 'motherLastName',
				        'value'         => "$mother_record->mother_last_name",
				        'maxlength'     => '20',
				        'size'          => '25',
						'placeholder'   => 'Last Name',
						'class'			=> 'form-control',
						'required'		=> 'required'
				);
				echo form_input($data);
				//echo form_error('mother_first_name');
				?></td>
				</tr><!--end of input row-->
			
				</table><!--end of content 3 table-->
			</td>
		</tr><!--end of 3-->
	</table><!--end of Demographic Data Table-->
	<?php
	echo form_fieldset_close();
	?>
</div><!--end of table-responsive-->
	<ul class="pager">
	    <li class="previous"><a href="javascript:change('1');" id="back3">Previous</a></li>
	    <li class="next"><a href="javascript:change('3');" id="back3">Next</a></li>
	 </ul>

</div><!-- end of step 2-->
	 
<div class="c_step" id="c_step3">
	<?php echo form_fieldset('<strong>PERSONAL INFORMATION SHEET (FORM A)</strong>'); ?>
<table class="table table-bordered"><!--start of unique identifier table-->
	
	<tr><th colspan=2><p>UNIQUE IDENTIFIER CODE</p></th></tr>
	<tr><!--start of number 4-->
		<td>4</td>
  	    <td>
 		   <table class="table table-bordered">
			   <tr>
			   <td><?php
  				 $attributes = array(
  					'style' => 'font-weight: normal;'
  				);
				    echo form_label("First 2 letters of mother's real name", "mother_code", $attributes); ?></td>
			   <td><?php 
    				 $attributes = array(
    					'style' => 'font-weight: normal;'
    				);
				   echo form_label("First 2 letters of father's real name", "father_code", $attributes); ?></td>
			   <td><?php 
    				 $attributes = array(
    					'style' => 'font-weight: normal;'
    				);
				   echo form_label("Birth Order", "birthOrder_code", $attributes); ?></td>
			   <td><?php 
    				 $attributes = array(
    					'style' => 'font-weight: normal;'
    				);
				   echo form_label("Month of Birth", "month_code", $attributes); ?></td>
			   <td><?php 
    				 $attributes = array(
    					'style' => 'font-weight: normal;'
    				);
				   echo form_label("Day of Birth", "day_code", $attributes); ?></td>
			   <td colspan=2><?php 
    				 $attributes = array(
    					'style' => 'font-weight: normal;'
    				);
				   echo form_label("Year of Birth", "year_code", $attributes); ?></td>
		   	   </tr>
		
				<tr>
				<td class="form"><?php 
				$data = array(
					"name" => "mother_code",
					"id" => "mother_code",
					"value" => "$patient_record->mother_index",
					"size" => "2",
					"maxlength" => "2"
				);
				echo form_input($data);
				echo form_error('mother_code');
				?>
				</td>
				<td class="form"><?php 
				$data = array(
					"name" => "father_code",
					"id" => "father_code",
					"value" => "$patient_record->father_index",
					"size" => "2",
					"maxlength" => "2"
				);
				echo form_input($data);
				echo form_error('father_code');
				?>				
				</td>
				<td class="form"><?php 
				$data = array(
					"name" => "birthOrder_code",
					"id" => "birthOrder_code",
					"value" => "$patient_record->birth_order",
					"size" => "2",
					"maxlength" => "2"
				);
				echo form_input($data);
				echo form_error('birthOrder_code');
				?></td>
				<td class="form"><?php 
				$data = array(
					"name" => "month_code",
					"id" => "month_code",
					"value" => "$patient_record->month_of_birth",
					"size" => "2",
					"maxlength" => "2"
				);
				echo form_input($data);
				echo form_error('month_code');
				?></td>
				<td class="form"><?php 
				$data = array(
					"name" => "day_code",
					"id" => "day_code",
					"value" => "$patient_record->day_of_birth",
					"size" => "2",
					"maxlength" => "2"
				);
				echo form_input($data);
				echo form_error('day_code');
				?></td>
				<td colspan=2 class="form"><?php 
				$data = array(
					"name" => "year_code",
					"id" => "year_code",
					"value" => "$patient_record->year_of_birth",
					"size" => "4",
					"maxlength" => "4"
				);
				echo form_input($data);
				echo form_error('year_code');
				?></td>
			</tr> <!--end of input 4-->
			</table>
		</td>
	</tr><!--end of number 4-->
	<tr><!--start of number 5-->
		<td>5</td>
		<td>
			<table class="table"><!--start of td table 5-->
			<tr>
				<th><?php $attributes = array(
	   						 'style' => 'font-weight: normal;'
	   				 	 );
					echo form_label('Age:', 'age', $attributes);?></th>
				<td><?php 
				$data = array(
					"name" => "age",
					"id" => "age",
					"value" => "$patient_record->age",
					"size" => "2",
					"maxlength" => "2",
					"class" => "form-control"
				);
				echo form_input($data);
				echo form_error('age');
				?>
				</td>
				<td><?php $attributes = array(
	   						 'style' => 'font-weight: normal;'
	   				 	 );
					echo form_label('Age in months', 'age_in_months', $attributes);?> (for less than 1 year old):</td>
			
				<td><?php 
				$data = array(
					"name" => "age_in_months",
					"id" => "age_in_months",
					"value" => "$patient_record->age_in_months",
					"size" => "2",
					"maxlength" => "2",
					"class" => "form-control"
					);
				echo form_input($data);
				?></td>
				<td><?php echo form_label('Sex', 'sex'); ?>(at birth):</td>
				<td><?php
				$data = array(
      			  	'name'          => 'sex',
    				'id'            => 'sex_male',
       				'value'         => 'male',
   					'checked'       => "$sex_male",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);
				echo form_error('sex');
				?>
				</td>
				<td><?php 
  					 $attributes = array(
  						 'style' => 'font-weight: normal;'
  				 	 );
					echo form_label('Male', 'sex_male', $attributes); ?></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'sex',
    				'id'            => 'sex_female',
       				'value'         => 'female',
   					'checked'       => "$sex_female",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
				</td>
				<td><?php 
  					 $attributes = array(
  						 'style' => 'font-weight: normal;'
  				 	 );
					echo form_label('Female', 'sex_female', $attributes); ?></td>
			</tr><!--end of content 5-->
		</table><!--end of td table 5-->
	</td>
	</tr><!--end of number 5-->
	<tr><!--start of number 6-->
		<td>6</td>
		<td><table class="table"><!-- start of td table 6-->
			<tr>
			<th><?php echo form_label('Permanent Address:', 'permanent_address'); ?></th>
			<td colspan=6><?php 
				$data = array(
					"name" => "permanent_address",
					"id" => "permanent_address",
					"value" => "$patient_record->permanent_address",
					"size" => "120",
					"maxlength" => "120",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				//echo form_error('permanent_address');
				?>
			</td>
			</tr>
			<tr>
			<th><?php echo form_label('Current Place of Residence:', 'current_city'); ?></th>
			<td><?php 
				$data = array(
					"name" => "current_city",
					"id" => "current_city",
					"value" => "$patient_record->residence_municipality_city",
					"size" => "30",
					"maxlength" => "30",
					"class" => "form-control",
					"placeholder" => "Municipality/City",
					"required" => "required"
				);
				echo form_input($data);
               // echo form_error('current_city');
				?>
			</td>
			<td><?php 
				$data = array(
					"name" => "current_province",
					"id" => "current_province",
					"value" => "$patient_record->residence_province",
					"size" => "30",
					"maxlength" => "30",
					"class" => "form-control",
					"placeholder" => "Province",
					"required" => "required"
				);
				echo form_input($data);
				//echo form_error('current_province');
				?>
			</td>
			</tr>
			<tr>
			<th><?php echo form_label('Place of Birth:', 'birth_city'); ?></th>
			
			<td><?php 
				$data = array(
					"name" => "birth_city",
					"id" => "birth_city",
					"value" => "$patient_record->birth_municipality_city",
					"size" => "30",
					"maxlength" => "30",
					"class" => "form-control",
					"placeholder" => "Municipality/City",
					"required" => "required"
				);
				echo form_input($data);
				//echo form_error('birth_city');
				?>
			</td>
			
			<td><?php 
				$data = array(
					"name" => "birth_province",
					"id" => "birth_province",
					"value" => "$patient_record->birth_province",
					"size" => "30",
					"maxlength" => "30",
					"class" => "form-control",
					"placeholder" => "Province",
					"required" => "required"
				);
				echo form_input($data);
				//echo form_error('birth_province');
				?>
			</td>
			</tr>
		</table><!-- end of td table 6-->
		</td>
	</tr><!--end of number 6-->
	<tr><!--start of number 7-->
		<td>7</td>
		<td><table class="table"><!--start of td table 7-->
			<tr>
			
			<th colspan=2><?php echo form_label('Contact Numbers:', 'contact_number'); ?></th>
			<td><?php 
				$data = array(
					"name" => "contact_number",
					"id" => "contact_number",
					"value" => "$patient_record->contact_numbers",
					"size" => "30",
					"maxlength" => "13",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				//echo form_error('contact_number');
				?>
			</td>
			<!-- <td>&nbsp;</td> -->
			<th><?php echo form_label('Email:', 'email'); ?></th>
			<td colspan=3><?php 
				$data = array(
					"name" => "email",
					"id" => "email",
					"value" => "$patient_record->email_address",
					"size" => "40",
					"maxlength" => "40",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				//echo form_error('email');
				?>
			</td>
			</tr>
		</table><!--end of td table 7-->
		</td>
	</tr><!--end of number 7-->
	<tr><!--start of number 8-->
		<td>8</td>
		<td><table><!--start of td table 8-->
			<tr>
			<th><?php echo form_label('Nationality:', 'nationality'); ?></th>
			<td><?php 
				$data = array(
      			  	'name'          => 'nationality',
    				'id'            => 'nationality_fil',
       				'value'         => 'Filipino',
   					'checked'       => "$nationality_filipino",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
			echo form_label('Filipino', 'nationality_fil', $attributes); ?></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'nationality',
    				'id'            => 'nationality_others_cbox',
       				'value'         => 'Others',
   					'checked'       => "$nationality_others",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td colspan=2><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
			 echo form_label('Others,', 'nationality_others_cbox', $attributes); ?></td>
			<td>&nbsp&nbsp&nbsp;<?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
			 echo form_label('please specify:', 'nationality_others', $attributes); ?></td>
			<td><?php 
				$data = array(
					"name" => "nationality",
					"id" => "nationality_others",
					"value" => "$nationality_others_specify",
					"size" => "30",
					"maxlength" => "30",
					"class" => "form-control"
				);
				echo form_input($data);
				//echo form_error('nationality');
				?></td>
			</tr>
			</table><!--end of td table 8-->
		</td>
	</tr><!--end of number 8-->
	<tr><!--start of number 9-->
		<td><p>9</p></td>
		<td><table><!--start of td table 9-->
			<tr>
			<th rowspan=2>Highest Educational Attainment:</th>
			<td><?php 
				$data = array(
      			  	'name'          => 'hea',
    				'id'            => 'hea_none',
       				'value'         => 'None',
   					'checked'       => "$hea_none",
   					'style'         => 'margin:10px',
					"required" => "required"
				);
				echo form_radio($data);
				//echo form_error('hea');
				?></td>
			<td><?php 
				
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
			echo form_label('None', 'hea_none', $attributes); ?></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'hea',
    				'id'            => 'hea_hs',
       				'value'         => 'Highschool',
   					'checked'       => "$hea_hs",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);
				?></td>
			<td><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
				
			echo form_label('Highschool', 'hea_hs', $attributes); ?></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'hea',
    				'id'            => 'hea_voc',
       				'value'         => 'Vocational',
   					'checked'       => "$hea_voc",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);
				?></td>
			<td><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
				
			echo form_label('Vocational', 'hea_voc', $attributes); ?></td>
			</tr>
			<tr>
			<td><?php 
				$data = array(
      			  	'name'          => 'hea',
    				'id'            => 'hea_elem',
       				'value'         => 'Elementary',
   					'checked'       => "$hea_elem",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
			echo form_label('Elementary', 'hea_elem', $attributes); ?></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'hea',
    				'id'            => 'hea_college',
       				'value'         => 'College',
   					'checked'       => "$hea_college",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
			echo form_label('College', 'hea_college', $attributes); ?></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'hea',
    				'id'            => 'hea_post_grad',
       				'value'         => 'Post_Graduate',
   					'checked'       => "$hea_post_grad",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
				
			echo form_label('Post-Graduate', 'hea_post_grad', $attributes); ?></td>
			</tr>
			</table><!--end of td table 9-->
		</td>
	</tr><!--end of number 9-->
	<tr><!--start of number 10-->
		<td>10</td>
		<td><table><!--start of td table 10-->
			<tr>
			<th><p>Civil Status:</p></th>
			<td><?php 
				$data = array(
      			  	'name'          => 'civil_status',
    				'id'            => 'cs_single',
       				'value'         => 'single',
   					'checked'       => "$cs_single",
   					'style'         => 'margin:10px',
					'required' => 'required'
				);
				echo form_radio($data);
				//echo form_error('civil_status');?>
			</td>
			<td><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
			echo form_label('Single', 'cs_single', $attributes); ?></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'civil_status',
    				'id'            => 'cs_married',
       				'value'         => 'married',
   					'checked'       => "$cs_married",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
			 echo form_label('Married', 'cs_married', $attributes); ?></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'civil_status',
    				'id'            => 'cs_separated',
       				'value'         => 'separated',
   					'checked'       => "$cs_separated",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
				
			 echo form_label('Separated', 'cs_separated', $attributes); ?></td>
			<td colspan=3><?php 
				$data = array(
      			  	'name'          => 'civil_status',
    				'id'            => 'cs_widowed',
       				'value'         => 'widowed',
   					'checked'       => "$cs_widowed",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
				</td>
				<td><?php 
  					 $attributes = array(
  						 'style' => 'font-weight: normal;'
  				 	 );
					
					echo form_label('Widowed', 'cs_widowed', $attributes); ?></td> 
				
			</tr>
		</table><!--end of td table 10-->
		</td>
	</tr><!--end of number 10-->
	<tr><!--start of number 11-->
		<td><p>11</p></td>
		<td><table><!--start of td table 11-->
			<tr>
			<th colspan=2><p>Are you currently living with a partner?</p></th>
			<td><?php 
				$data = array(
      			  	'name'          => 'live_in',
    				'id'            => 'live_in_no',
       				'value'         => 'no_live_in_partner',
   					'checked'       => "$without_partner",
   					'style'         => 'margin:10px',
					'required' => 'required'
				);
				echo form_radio($data);
				//echo form_error('live_in');?>
			</td>
			<td colspan=2><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
				
			echo form_label('No', 'live_in_no', $attributes); ?></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'live_in',
    				'id'            => 'live_in_yes',
       				'value'         => 'with_live_in_partner',
   					'checked'       => "$with_partner",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td colspan=2><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
				
			echo form_label('Yes', 'live_in_yes', $attributes); ?></td>
			</tr>
		  </table><!--end of td table 11-->
		</td>
	</tr><!--end of number 11-->
	<tr><!--start of number 12-->
		<td><p>12</p></td>
		<td><table class="table"><!--start of td table 12-->
			<tr>
			<th><?php echo form_label('Number of children:', 'no_of_children'); ?></th>
			<td><?php 
				$data = array(
					"name" => "no_of_children",
					"id" => "no_of_children",
					"value" => "$patient_record->number_of_children",
					"size" => "3",
					"maxlength" => "3",
					"class" => "form-control"
				);
				echo form_input($data);
				?></td>
			<th><p>Are you presently pregnant?</p></th>
			<td><p><i>(for females only)</i></p></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'presently_pregnant',
    				'id'            => 'not_presently_pregnant',
       				'value'         => 'not_presently_pregnant',
   					'checked'       => "$no_pregnant",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
			 echo form_label('No', 'not_presently_pregnant', $attributes); ?></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'presently_pregnant',
    				'id'            => 'yes_presently_pregnant',
       				'value'         => 'yes_presently_pregnant',
   					'checked'       => "$yes_pregnant",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td><?php 
			 $attributes = array(
				 'style' => 'font-weight: normal;'
		 	 );
			 echo form_label('Yes', 'yes_presently_pregnant', $attributes); ?></td>
			</tr>
		  </table><!--end of td table 12-->
		</td>
	</tr><!--end of number 12-->
</table><!--end of unique identifier table-->

<ul class="pager">
    <li class="previous"><a href="javascript:c_change('2');" id="back3">Previous</a></li>
    <li class="next"><a href="javascript:c_change('4');" id="back3">Next</a></li>
 </ul>

</div><!-- end of step 3-->
<div class="c_step" id="c_step4">
<div class="table-responsive">
	<?php echo form_fieldset('<strong>PERSONAL INFORMATION SHEET (FORM A)</strong>');?>
	<table class="table table-bordered">
		
		<tr><th colspan=2><p>EMPLOYMENT</p></th></tr>
		<tr><td><p>13</p></td>
		<td>
			<table>
				<tr>
					<th><?php echo form_label('Current Occupation', 'occupation'); ?>&nbsp </th>
					<td>(Please specify main source of income): &nbsp </td>
					<td><?php
						$data = array(
						        'name'          => 'occupation',
						        'id'            => 'occupation',
						        'value'         => "$current_occupation", //$patient_record->occupation
						        'maxlength'     => '50',
						        'size'          => '50',
								'class'			=> 'form-control',
								'required' => 'required'
						);
						echo form_input($data);
						//echo form_error('occupation');
					?>						
					</td>
				</tr>
				<tr>
					<td colspan=2><?php 
	   					 $attributes = array(
	   						 'style' => 'font-weight: normal;'
	   				 	 );
						
						echo form_label('If no current work, what was previous occupation:', 'prev_occupation', $attributes); ?>&nbsp </td>
					<td><?php
						$data = array(
						        'name' => 'prev_occupation',
						        'id'   => 'prev_occupation',
						        'value' => "$prev_occupation", //$patient_record->occupation
						        'maxlength'     => '50',
						        'size'          => '50',
								'class' 	=> 'form-control',
								'required' => 'required'
						);
						echo form_input($data, 'required');
						//echo form_error('prev_occupation');
					?>	
					</td>
				</tr>
			</table>
		</td>
		</tr>
		<tr>
			<td><p>14</p></td>
			<td>
				<table>
					<tr>
						<th colspan=2><p>Did you work overseas/abroad in the past 5 years?</p></th>
						<td>&nbsp;</td>
						<td><?php 
							$data = array(
								'name' => 'work_abroad',
								'id' => 'work_abroad_no',
								'value' => 'No',
								'checked' => "$work_abroad_no",
								'required' => 'required'
							);
							echo  form_radio($data); 
							//echo form_error('work_abroad');
							?>
						</td>
						<td><?php 
			   			 $attributes = array(
			   				 'style' => 'font-weight: normal;'
			   		 	 );
							
						echo form_label('No', 'work_abroad_no',$attributes); ?></td>
						<td>&nbsp;</td>
						<td><?php
							$data = array(
								'name' => 'work_abroad',
								'id' => 'work_abroad_yes',
								'value' => 'Yes',
								'checked' => "$work_abroad_yes"
							);
							echo  form_radio($data); ?>
						</td>
						<td><?php 
			   			 $attributes = array(
			   				 'style' => 'font-weight: normal;'
			   		 	 );
						 echo form_label('Yes', 'work_abroad_yes',$attributes); ?></td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td colspan=2>&nbsp;</td>
						<td colspan=3><?php 
			   			 $attributes = array(
			   				 'style' => 'font-weight: normal;'
			   		 	 );
						 echo form_label('If yes, when did you return from your last contract?', 'month_last_contract', $attributes); ?>&nbsp </td>
						 <td>&nbsp;</td>
						<td colspan=3>
							<select class="form-control" id="month_last_contract">
								<option>January</option>
								<option>February</option>
								<option>March</option>
								<option>April</option>
								<option>May</option>
								<option>June</option>
								<option>July</option>
								<option>August</option>
								<option>September</option>
								<option>October</option>
								<option>November</option>
								<option>December</option>
							</select>
						</td>
						<td>&nbsp;</td>
						<td>
						<select class="form-control" id="year_last_contract">
							<option>2016</option><option>2015</option><option>2014</option><option>2013</option><option>2012</option><option>2011</option>
							<option>2010</option><option>2009</option><option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option>
							<option>2000</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option>
							<option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option>
							<option>1980</option><option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option><option>1974</option><option>1973</option><option>1972</option><option>1971</option>
							<option>1970</option><option>1969</option><option>1968</option><option>1967</option><option>1966</option><option>1965</option><option>1964</option><option>1963</option><option>1962</option><option>1961</option>
							<option>1960</option><option>1959</option><option>1958</option><option>1957</option><option>1956</option><option>1955</option><option>1954</option><option>1953</option><option>1952</option><option>1951</option>
							<option>1950</option><option>1949</option><option>1948</option><option>1947</option><option>1946</option><option>1945</option><option>1944</option><option>1943</option><option>1942</option><option>1941</option>
							<option>1940</option><option>1939</option><option>1938</option><option>1937</option><option>1936</option><option>1935</option><option>1934</option><option>1933</option><option>1932</option><option>1931</option>
							<option>1930</option><option>1929</option><option>1928</option><option>1927</option><option>1926</option><option>1925</option><option>1924</option><option>1923</option><option>1922</option><option>1921</option>
						</select>
					</td>
					</tr>

					<tr>
						<td colspan=2>&nbsp;</td>
						<td><p>Where were you based?</p></td>
						<td><?php 
							$data = array(
								'name' => 'work_based',
								'id' => 'ship_based',
								'value' => 'ship',
								'checked' => "$ship_based"
							);
							echo  form_radio($data); ?></td>
						<td><?php 
		   				 $attributes = array(
		   					'style' => 'font-weight: normal;'
		   				 );
						 echo form_label('On a ship', 'ship_based',$attributes); ?></td>
						<td><?php 
							$data = array(
								'name' => 'work_based',
								'id' => 'land_based',
								'value' => 'land',
								'checked' => "$land_based"
							);
							echo  form_radio($data); ?></td>
						<td><?php 
   		   				 $attributes = array(
   		   					'style' => 'font-weight: normal;'
   		   				 );
						 echo form_label('Land', 'land_based',$attributes); ?></td>
					</tr>
					<tr><td colspan=2>&nbsp;</td>
						<td colspan=2><?php 
   		   				 $attributes = array(
   		   					'style' => 'font-weight: normal;'
   		   				 );
							echo form_label('What country did you last work in?', 'country_last_work', $attributes); ?>&nbsp;</td>
						<td colspan=3><?php
						$data = array(
						        'name' => 'country_last_work',
						        'id'   => 'country_last_work',
						        'value' => "$country_last_work",
						        'maxlength'     => '25',
						        'size'          => '25',
								'class'			=> 'form-control'
						);
						echo form_input($data);
						?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<ul class="pager">
	    <li class="previous"><a href="javascript:c_change('3');" id="back3">Previous</a></li>
	    <li class="next"><a href="javascript:c_change('5');" id="back3">Next</a></li>
	 </ul>
</div>
</div> <!-- end of step 4-->

<div class="c_step" id="c_step5">
<div class="table-responsive">
<?php 
echo form_fieldset('PERSONAL INFORMATION SHEET (FORM A)'); ?>
<table class="table table-bordered">
	<tr>
		<th colspan=2><p>REASON FOR HIV TEST</p></th>
	</tr>
	<tr>
		<td><p>15</p></td>
		<td>
			<table>
				<tr>
					<th colspan=7>Reason for HIV Testing: (check all that apply)</th>
				</tr>
				<tr><td><?php 
				$data = array(
      			  	'name'          => 'reasonmother',
    				'id'            => 'reason_1',
       				'value'         => 'mother_is_infected',
   					'checked'       => "$reason_1",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Mother is infected with HIV</p></td>
					<td><?php 
				$data = array(
      			  	'name'          => 'reasonreceived',
    				'id'            => 'reason_2',
       				'value'         => 'receive_blood_transfusion',
   					'checked'       => "$reason_2",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Received blood transfusion</p></td>
					<td><?php 
				$data = array(
      			  	'name'          => 'reasontb',
    				'id'            => 'reason_3',
       				'value'         => 'TB_patient',
   					'checked'       => "$reason_3",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td colspan=2><p>TB patient</p></td>
				</tr>
				<tr><td><?php 
				$data = array(
      			  	'name'          => 'reasonsex',
    				'id'            => 'reason_4',
       				'value'         => 'sex_partner_is_infected',
   					'checked'       => "$reason_4",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Sex partner is infected with HIV</p></td>
					<td><?php 
				$data = array(
      			  	'name'          => 'reasonwants',
    				'id'            => 'reason_5',
       				'value'         => 'wants_to_know',
   					'checked'       => "$reason_5",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Wants to know HIV status</p></td>
					<td><?php 
				$data = array(
      			  	'name'          => 'reasonactive',
    				'id'            => 'reason_6',
       				'value'         => 'active_hepaB_C',
   					'checked'       => "$reason_6",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td colspan=2><p>Active Hepatitis B/C</p></td>
				</tr>
				
				<tr><td><?php 
				$data = array(
      			  	'name'          => 'reasonshared',
    				'id'            => 'reason_7',
       				'value'         => 'share_needles_syringes',
   					'checked'       => "$reason_7",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Shared needles/syringes with IDUs</p></td>
					<td><?php 
				$data = array(
      			  	'name'          => 'reasonrecheck',
    				'id'            => 'reason_8',
       				'value'         => 'recheck_prev',
   					'checked'       => "$reason_8",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Re-check previous HIV test result</p></td>
					<td><?php 
				$data = array(
      			  	'name'          => 'reasonno',
    				'id'            => 'reason_9',
       				'value'         => 'no_reason',
   					'checked'       => "$reason_9",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td colspan=2><p>No particular reason</p></td>
				</tr>
				
				<tr><td><?php 
				$data = array(
      			  	'name'          => 'reasonaccidental',
    				'id'            => 'reason_10',
       				'value'         => 'accidental_needle_prick',
   					'checked'       => "$reason_10",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Accidental needle prick</p></td>
					<td><?php 
				$data = array(
      			  	'name'          => 'reasonemploymentlocal',
    				'id'            => 'reason_11',
       				'value'         => 'employment_local',
   					'checked'       => "$reason_11",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Employment - Local/In the Philippines</p></td>
					<td><?php 
				$data = array(
      			  	'name'          => 'reasonother',
    				'id'            => 'reason_12',
       				'value'         => 'other',
   					'checked'       => "$reason_12",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Other (pls specify): </p></td>
				<td><?php 
				$data = array(
					"name" => "reasonothertext",
					"id" => "other_reason_input",
					"value" => "$reason_12_specify",
					"maxlength" => "50",
					"size" => "30",
					"class" => "form-control"
				
				);
				echo form_input($data);
				?></td>
				</tr>
				
				<tr><td><?php 
				$data = array(
      			  	'name'          => 'reasonrecommended',
    				'id'            => 'reason_13',
       				'value'         => 'recommended',
   					'checked'       => "$reason_13",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Recommended by physician</p></td>
					<td><?php 
				$data = array(
      			  	'name'          => 'reasonemploymentoverseas',
    				'id'            => 'reason_14',
       				'value'         => 'employment_overseas',
   					'checked'       => "$reason_14",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Employment - Overseas/Abroad</p></td>
				</tr>
				
				<tr><td><?php 
				$data = array(
      			  	'name'          => 'reasonrequirement',
    				'id'            => 'reason_15',
       				'value'         => 'requirement',
   					'checked'       => "$reason_15",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Requirement for insurance</p></td>
					<td><?php 
				$data = array(
      			  	'name'          => 'reasonpregnant',
    				'id'            => 'reason_16',
       				'value'         => 'pregnant',
   					'checked'       => "$reason_16",
   					'style'         => 'margin:10px'
				);
				echo form_checkbox($data);?></td>
				<td><p>Pregnant</p></td>
					
				</tr>
			</table>
		</td>
	</tr><!--end of number 5-->
</table>
<?php echo form_fieldset_close(); ?>
</div>
	<ul class="pager">
	    <li class="previous"><a href="javascript:c_change('4');" id="back3">Previous</a></li>
	    <li class="next"><a href="javascript:c_change('6');" id="back3">Next</a></li>
	 </ul>

</div><!--end of step 5-->


<div class="c_step" id="c_step6">
<div class="table-responsive">
<?php echo form_fieldset('PERSONAL INFORMATION SHEET (FORM A)'); ?>
<table class="table table-bordered">
	<tr>
		<th colspan=2>HISTORY OF EXPOSURE</th>
	</tr>
	<tr>
			<td><p>16</p></td>
			<td><table>
			<tr>
			<th><p>Was your birth MOTHER infected with HIV when you were born?</p></th>
			<td><?php 
				$data = array(
      			  	'name'          => 'history',
    				'id'            => 'no_history',
       				'value'         => 'no_history',
   					'checked'       => "$no_history",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><?php echo form_label('No', 'no_history'); ?></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'history',
    				'id'            => 'with_history',
       				'value'         => "with_history",
   					'checked'       => "$with_history",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><?php echo form_label('Yes', 'with_history'); ?></td>
			</tr>
		</table></td>
	</tr><!-- end of number 16-->
	<tr>
		<td><p>17</p></td>
		<td><table class="table">
			<tr>
				<th colspan=6><i>Answer all. </i> Have you experienced any of the following? </th>
				<td>&nbsp</td>
				<td colspan=2>
					<p>(If yes, state the MOST RECENT year)</p>
				</td>
			</tr>
			<tr>
				<td><p>Received blood transfusion</p></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'user_history',
    				'id'            => 'no_user_history_1',
       				'value'         => 'no_rbt',
   					'checked'       => "$no_user_history_1",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('No', 'no_user_history_1'); ?></td>
				<td><td><?php 
				$data = array(
      			  	'name'          => 'user_history',
    				'id'            => 'yes_user_history_1',
       				'value'         => 'yes_rbt',
   					'checked'       => "$yes_user_history_1",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Yes', 'yes_user_history_1'); ?></td></td>
				<td>&nbsp</td>
				<td><p>If yes, what year:</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'year_of_exposure',
				        'id'            => 'year_history_1',
				        'value'         => "$year_history_1",
				        'maxlength'     => '8',
				        'size'          => '10',
						'placeholder'	=> 'YYYY',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr><!--end of row-->
			<tr>
				<td><p>Injected drugs without doctor's advice</p></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'user_history_2',
    				'id'            => 'no_user_history_2',
       				'value'         => 'no_drugs',
   					'checked'       => "$no_user_history_2",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('No', 'no_user_history_2'); ?></td>
				<td><td><?php 
				$data = array(
      			  	'name'          => 'user_history_2',
    				'id'            => 'yes_user_history_2',
       				'value'         => 'yes_drugs',
   					'checked'       => "$yes_user_history_2",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Yes', 'yes_user_history_2'); ?></td></td>
				<td>&nbsp</td>
				<td><p>If yes, what year:</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'year_of_exposure_2',
				        'id'            => 'year_history_2',
				        'value'         => "$year_history_2",
				        'maxlength'     => '8',
				        'size'          => '10',
						'placeholder'	=> 'YYYY',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr><!--end of row-->	
			<tr>
				<td><p>Accidental needle prick</p></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'user_history_3',
    				'id'            => 'no_user_history_3',
       				'value'         => 'no_needle_prick',
   					'checked'       => "$no_user_history_3",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('No', 'no_user_history_3'); ?></td>
				<td><td><?php 
				$data = array(
      			  	'name'          => 'user_history_3',
    				'id'            => 'yes_user_history_3',
       				'value'         => 'yes_needle_prick',
   					'checked'       => "$yes_user_history_3",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Yes', 'yes_user_history_3'); ?></td></td>
				<td>&nbsp</td>
				<td><p>If yes, what year:</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'year_of_exposure_3',
				        'id'            => 'year_history_3',
				        'value'         => "$year_history_3",
				        'maxlength'     => '8',
				        'size'          => '10',
						'placeholder'	=> 'YYYY',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr><!--end of row-->
			<tr>
				<td><p>Sexually transmitted infections (STI)</p></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'user_history_4',
    				'id'            => 'no_user_history_4',
       				'value'         => 'no_STI',
   					'checked'       => "$no_user_history_4",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('No', 'no_user_history_4'); ?></td>
				<td><td><?php 
				$data = array(
      			  	'name'          => 'user_history_4',
    				'id'            => 'yes_user_history_4',
       				'value'         => 'yes_STI',
   					'checked'       => "$yes_user_history_4",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Yes', 'yes_user_history_4'); ?></td></td>
				<td>&nbsp</td>
				<td><p>If yes, what year:</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'year_of_exposure_4',
				        'id'            => 'year_history_4',
				        'value'         => "$year_history_4",
				        'maxlength'     => '8',
				        'size'          => '10',
						'placeholder'	=> 'YYYY',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr><!--end of row-->
			<tr>
				<td><p>Sex with a <u>female</u> with no condom</p></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'user_history_5',
    				'id'            => 'no_user_history_5',
       				'value'         => 'no_sex_female',
   					'checked'       => "$no_user_history_5",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('No', 'no_user_history_5'); ?></td>
				<td><td><?php 
				$data = array(
      			  	'name'          => 'user_history_5',
    				'id'            => 'yes_user_history_5',
       				'value'         => 'yes_sex_female',
   					'checked'       => "$yes_user_history_5",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Yes', 'yes_user_history_5'); ?></td></td>
				<td>&nbsp</td>
				<td><p>If yes, what year:</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'year_of_exposure_5',
				        'id'            => 'year_history_5',
				        'value'         => "$year_history_5",
				        'maxlength'     => '8',
				        'size'          => '10',
						'placeholder'	=> 'YYYY',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr><!--end of row-->
			<tr>
				<td><p>Sex with a <u>male</u> with no condom</p></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'user_history_6',
    				'id'            => 'no_user_history_6',
       				'value'         => 'no_sex_male',
   					'checked'       => "$no_user_history_6",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('No', 'no_user_history_6'); ?></td>
				<td><td><?php 
				$data = array(
      			  	'name'          => 'user_history_6',
    				'id'            => 'yes_user_history_6',
       				'value'         => 'yes_sex_male',
   					'checked'       => "$yes_user_history_6",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Yes', 'yes_user_history_6'); ?></td></td>
				<td>&nbsp</td>
				<td><p>If yes, what year:</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'year_of_exposure_6',
				        'id'            => 'year_history_6',
				        'value'         => "$year_history_6",
				        'maxlength'     => '8',
				        'size'          => '10',
						'placeholder'	=> 'YYYY',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr><!--end of row-->
			<tr>
				<td><p>Sex with a person in prostitution</p></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'user_history_7',
    				'id'            => 'no_user_history_7',
       				'value'         => 'no_sex_prostitution',
   					'checked'       => "$no_user_history_7",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('No', 'no_user_history_7'); ?></td>
				<td><td><?php 
				$data = array(
      			  	'name'          => 'user_history_7',
    				'id'            => 'yes_user_history_7',
       				'value'         => 'yes_sex_prostitution',
   					'checked'       => "$yes_user_history_7",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Yes', 'yes_user_history_7'); ?></td></td>
				<td>&nbsp</td>
				<td><p>If yes, what year:</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'year_of_exposure_7',
				        'id'            => 'year_history_7',
				        'value'         => "$year_history_7",
				        'maxlength'     => '8',
				        'size'          => '10',
						'placeholder'	=> 'YYYY',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr><!--end of row-->
			<tr>
				<td><p>Regularly accept payment for sex</p></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'user_history_8',
    				'id'            => 'no_user_history_8',
       				'value'         => 'no_payment_for_sex',
   					'checked'       => "$no_user_history_8",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('No', 'no_user_history_8'); ?></td>
				<td><td><?php 
				$data = array(
      			  	'name'          => 'user_history_8',
    				'id'            => 'yes_user_history_8',
       				'value'         => 'yes_payment_for_sex',
   					'checked'       => "$yes_user_history_8",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Yes', 'yes_user_history_8'); ?></td></td>
				<td>&nbsp</td>
				<td><p>If yes, what year:</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'year_of_exposure_8',
				        'id'            => 'year_history_8',
				        'value'         => "$year_history_8",
				        'maxlength'     => '8',
				        'size'          => '10',
						'placeholder'	=> 'YYYY',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr><!--end of row-->
		</table>
		</td>
	</tr><!-- end of number 17-->
</table><!--end of history table-->
<?php echo form_fieldset_close(); ?>
</div>

	<ul class="pager">
	    <li class="previous"><a href="javascript:c_change('5');" id="back3">Previous</a></li>
	    <li class="next"><a href="javascript:c_change('7');" id="back3">Next</a></li>
	 </ul>

</div><!--end of step 6-->
<div class="c_step" id="c_step7">
<div class="table-responsive">
<?php echo form_fieldset('PERSONAL INFORMATION SHEET (FORM A)'); ?>
<table class="table table-bordered">
	<tr>
		<th colspan=2><p>SEXUAL PARTNERS</P></th>
	</tr>
	<tr>
		<td><p>18</p></td>
		<td><table class="table">
			<tr>
				<th colspan=2><i>Answer both.</i> If none, write "0" in the box.</th>
			</tr>
			<tr>
				<td><p>How many FEMALE sex partners have you ever had?</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'num_female_partner',
				        'id'            => 'num_female_partner',
				        'value'         => "$num_female_partner",
				        'maxlength'     => '5',
				        'size'          => '5',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
				<td>&nbsp</td>
				<td><p>Year of last sex with a female:</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'year_last_sex_f',
				        'id'            => 'year_last_sex_f',
				        'value'         => "$year_last_sex_f",
				        'maxlength'     => '4',
				        'size'          => '4',
						'placeholder'	=> 'YYYY',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr><!--end of row-->
			<tr>
				<td><p>How many MALE sex partners have you ever had?</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'num_male_partner',
				        'id'            => 'num_male_partner',
				        'value'         => "$num_male_partner",
				        'maxlength'     => '5',
				        'size'          => '5',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
				<td>&nbsp</td>
				<td><p>Year of last sex with a male:</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'year_last_sex_m',
				        'id'            => 'year_last_sex_m',
				        'value'         => "$year_last_sex_m",
				        'maxlength'     => '4',
				        'size'          => '4',
						'placeholder'	=> 'YYYY',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr><!--end of row-->
		</table>
		</td>
	</tr><!--end of number 18-->
</table><!--end of sexual partners table-->
</div>
	<ul class="pager">
	    <li class="previous"><a href="javascript:change('6');" id="back3">Previous</a></li>
	    <li class="next"><a href="javascript:change('8');" id="back3">Next</a></li>
	 </ul>

</div><!--end of step 7-->
<div class="c_step" id="c_step8">
<div class="table-responsive">
<?php echo form_fieldset('PERSONAL INFORMATION SHEET (FORM A)'); ?>
<table class="table table-bordered">
	<tr>
		<th colspan=2><p>HIV TESTING</p></th>
	</tr>
	<tr>
		<td><p>19</p></td>
		<td><table class="table">
			<tr>
				<th><p>Have you ever been tested for HIV before?</p></th>
			<td><?php 
				$data = array(
      			  	'name'          => 'hiv_testing',
    				'id'            => 'not_tested',
       				'value'         => 'not_tested',
   					'checked'       => "$not_tested",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><?php echo form_label('No', 'not_tested'); ?></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'hiv_testing',
    				'id'            => 'tested',
       				'value'         => 'tested',
   					'checked'       => "$tested",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><?php echo form_label('Yes', 'tested'); ?></td>
			</tr>
			<tr>
				<td colspan=2><p>If yes, when was the most recent test?</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'month_last_test',
				        'id'            => 'month_last_test',
				        'value'         => "$month_last_tested",
				        'maxlength'     => '2',
				        'size'          => '3',
						'placeholder'	=> 'MM',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
				<td colspan=2><?php  
					$data = array(
				        'name'          => 'year_last_test',
				        'id'            => 'year_last_test',
				        'value'         => "$year_last_tested",
				        'maxlength'     => '4',
				        'size'          => '4',
						'placeholder'	=> 'YYYY',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr>
		
			<tr>
				<td colspan=2><p>Which testing facility did you have the test?</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'testing_site',
				        'id'            => 'testing_site',
				        'value'         => "$testing_site",
				        'maxlength'     => '25',
				        'size'          => '25',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			
				<td colspan=2><?php  
					$data = array(
				        'name'          => 'testing_city',
				        'id'            => 'testing_city',
				        'value'         => "$testing_city",
				        'maxlength'     => '25',
				        'size'          => '25',
						'placeholder'	=> 'Municipality/City',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr>
			<tr>
				<td><p>What was the result</p></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'result_before',
    				'id'            => 'result_before_pos',
       				'value'         => 'positive',
   					'checked'       => "$positive_result",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Positive', 'result_before_pos'); ?></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'result_before',
    				'id'            => 'result_before_neg',
       				'value'         => 'negative',
   					'checked'       => "$negative_result",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Negative', 'result_before_neg'); ?></td>
			</tr>
		</table>
		</td>
	</tr><!--end of number 19-->
</table><!--end of hiv testing table-->
</div>
	<ul class="pager">
	    <li class="previous"><a href="javascript:c_change('7');" id="back3">Previous</a></li>
	    <li class="next"><a href="javascript:c_change('9');" id="back3">Next</a></li>
	 </ul>

</div><!--end of step 8-->
<div class="c_step" id="c_step9">
<div class="table-responsive">
<?php echo form_fieldset('PERSONAL INFORMATION SHEET (FORM A)'); ?>
<table class="table table-bordered">
	<tr>
		<th colspan=2><p>To be filled up by PHYSICIAN, CLINIC STAFF, or COUNSELOR only</p></th>
	</tr>
	<tr>
		<td><p>20</p></td>
		<td><table>
			<tr>
				<th colspan=2><p>Clinical Picture:</p></th>
				<td><?php 
				$data = array(
      			  	'name'          => 'clinical_pic',
    				'id'            => 'asymptomatic',
       				'value'         => 'asymptomatic',
   					'checked'       => "$asymptomatic",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Asymptomatic', 'asymptomatic'); ?></td>
			</tr>
			<tr>
				<td colspan=2>&nbsp</td>
				<td><?php 
				$data = array(
      			  	'name'          => 'clinical_pic',
    				'id'            => 'symptomatic',
       				'value'         => 'symptomatic',
   					'checked'       => "$symptomatic",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Symptomatic', 'symptomatic'); ?></td>
				<td><p>Describe S/Sx:</p></td>
				<td colspan=2><?php  
					$data = array(
				        'name'          => 'description_ssx',
				        'id'            => 'description_ssx',
				        'value'         => "$description_ssx",
				        'maxlength'     => '50',
				        'size'          => '50',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td colspan=3><p>World Health Organization (WHO) Staging:</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'who_staging',
				        'id'            => 'who_staging',
				        'value'         => "$who_staging",
				        'maxlength'     => '10',
				        'size'          => '10',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'no_avail_physician',
    				'id'            => 'no_avail_physician',
       				'value'         => 'no_avail_physician',
   					'checked'       => "$no_avail_physician",
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('No physician available to do staging', 'no_avail_physician'); ?></td>
			
			</tr>
			</table>
		</td>
	</tr><!--end of number 20-->
	
</table>
</div>
	<ul class="pager">
	    <li class="previous"><a href="javascript:change('8');" id="back3">Previous</a></li>
	    <li class="next"><a href="javascript:change('10');" id="back3">Next</a></li>
	 </ul>

</div><!--end of step 9-->

<div class="c_step" id="c_step10">
<div class="table-responsive">
<?php echo form_fieldset('PERSONAL INFORMATION SHEET (FORM A)');?>
<table class="table table-bordered">
	<thead>
		<tr><th colspan=2>To be filled by TESTING FACILITY only</th>
		</tr>
	</thead>
	<tbody>
		<tr><td><p>21</p></td>
			<td><table class="table">
			<tr>
			<th><?php echo form_label('Name of Testing Facility:', 'facility_name'); ?></th>
			<td colspan=3><?php $data = array(
              	  'name'        => 'facility_name',
           		  'id'          => 'facility_name',
            	  'value'       => "$facility_name",
          		  'maxlength'   => '50',
          		  'size'        => '50',
				  'class'		=> 'form-control'
         	   	);
				echo form_input($data);?>
				</td>
				</tr>
				<tr><th><?php echo form_label('HIV EQAS Lab Code:', 'hiv_lab_code'); ?></th>
					<td><?php $data = array(
              	  'name'        => 'hiv_lab_code',
           		  'id'          => 'hiv_lab_code',
            	  'value'       => "$hiv_lab_code",
          		  'maxlength'   => '50',
          		  'size'        => '50',
				  'class'		=> 'form-control'
         	   	);
				echo form_input($data);?></td>
				<td>&nbsp</td>
				<th><?php echo form_label('Year last participated in HIV EQAS:', 'year_hiv_lab_code'); ?></th>
					<td><?php $data = array(
              	  'name'        => 'year_hiv_lab_code',
           		  'id'          => 'year_hiv_lab_code',
            	  'value'       => "$year_hiv_lab_code",
          		  'maxlength'   => '4',
          		  'size'        => '5',
				  'class'		=> 'form-control',
				  'placeholder' => 'YYYY'
         	   	);
				echo form_input($data);?></td>
				</tr>
				<tr>
					<th><?php echo form_label('Complete Mailing Address:', 'mailing_address'); ?><p></p></th>
					<td colspan=3><?php $data = array(
              	  'name'        => 'mailing_address',
           		  'id'          => 'mailing_address',
            	  'value'       => "$mailing_address",
          		  'maxlength'   => '50',
          		  'size'        => '50',
				  'class'		=> 'form-control'
         	   	);
				echo form_input($data);?> </td>
				</tr>
				<tr><th><?php echo form_label('Contact Numbers:', 'contact_numbers'); ?><p></p></th>
					<td><?php $data = array(
              	  'name'        => 'contact_numbers',
           		  'id'          => 'contact_numbers',
            	  'value'       => "$contact_numbers",
          		  'maxlength'   => '50',
          		  'size'        => '50',
				  'class'		=> 'form-control'
         	   	);
				echo form_input($data);?></td>
				<td>&nbsp</td>
				<th><?php echo form_label('Email address:', 'email_address'); ?></th>
					<td><?php $data = array(
              	  'name'        => 'email_address',
           		  'id'          => 'email_address',
            	  'value'       => "$email_address",
          		  'maxlength'   => '50',
          		  'size'        => '50',
				  'class'		=> 'form-control'
         	   	);
				echo form_input($data);?></td>
				</tr>
			</table>
			</td>
		</tr><!--end of number 21-->
		<tr>
			<td><p>22</p></td>
			<td><table class="table">
				<tr>
					<th><?php echo form_label('Name of Medical Technologist:', 'medtech_name'); ?></th>
					<td colspan=13><?php $data = array(
              	  'name'        => 'medtech_name',
           		  'id'          => 'medtech_name',
            	  'value'       => "$medtech_name",
          		  'maxlength'   => '50',
          		  'size'        => '50',
				  'class'		=> 'form-control'
         	   	);
				echo form_input($data);?>
					</td>
				</tr>
				<tr>
					<th><?php echo form_label('HIV Proficiency Number:', 'hiv_prof_num'); ?></th>
					<td colspan=13><?php $data = array(
              	  'name'        => 'hiv_prof_num',
           		  'id'          => 'hiv_prof_num',
            	  'value'       => "$hiv_prof_num",
          		  'maxlength'   => '50',
          		  'size'        => '50',
				  'class'		=> 'form-control'
         	   	);
				echo form_input($data);?></td>
				</tr>
				<tr><th><?php echo form_label('Date Issued:', 'month_issued'); ?></th>
					<td><?php $data = array(
         			   'name'        => 'month_issued',
         			   'id'          => 'month_issued',
          			   'value'       => "$month_issued",
          			   'maxlength'   => '2',
          			   'size'        => '5',
				  	   'class'		=> 'form-control',
					   'placeholder' => 'MM'
         	   		);
					echo form_input($data);?></td>
					
					<td><?php $data = array(
	              	  'name'        => 'date_issued',
	           		  'id'          => 'date_issued',
	            	  'value'       => "$day_issued",
	          		  'maxlength'   => '2',
	          		  'size'        => '5',
					  'class'		=> 'form-control',
					  'placeholder' => 'DD'
	         	   	);
					echo form_input($data);?></td>
					
					<td><?php $data = array(
	              	  'name'        => 'year_issued',
	           		  'id'          => 'year_issued',
	            	  'value'       => "$year_issued",
	          		  'maxlength'   => '4',
	          		  'size'        => '7',
					  'class'		=> 'form-control',
					  'placeholder' => 'YYYY'
					  
	         	   	);
					echo form_input($data);?></td>
					<td>&nbsp</td>
					
					<th><?php echo form_label('Expiration Date:', 'month_expired'); ?></th>
					<td><?php $data = array(
		     			   'name'        => 'month_expired',
		       			   'id'          => 'month_expired',
		       			   'value'       => "$month_expired",
		       			   'maxlength'   => '2',
		       			   'size'        => '5',
					  	   'class'		=> 'form-control',
						   'placeholder' => 'MM'
		       	   		);
						echo form_input($data);?></td>
					
					<td><?php $data = array(
		              	  'name'        => 'date_expired',
		           		  'id'          => 'date_expired',
		            	  'value'       => "$day_expired",
		          		  'maxlength'   => '2',
		          		  'size'        => '5',
						  'class'		=> 'form-control',
						  'placeholder' => 'DD'
		         	   	);
						echo form_input($data);?></td>
					
					<td><?php $data = array(
		              	  'name'        => 'year_expired',
		          		  'id'          => 'year_expired',
		            	  'value'       => "$year_expired",
		          		  'maxlength'   => '4',
		          		  'size'        => '7',
						  'class'		=> 'form-control',
						  'placeholder' => 'YYYY'
		         	   	);
						echo form_input($data);?></td>	
					</tr>
				</table></td>		
		</tr><!--end of number 22-->
		<tr>
			<td><p>23</p></td>
			<td>
				<table>
					<tr><th><p>Name of Counselor (with signature): </p></th>
						<td><?php
							$data = array(
							              'name'        => 'counselor_name',
							              'id'          => 'counselor_name',
							              'value'       => "$counselor_name",
							              'maxlength'   => '60',
							              'size'        => '60',
							              'style'       => 'width:100%',
							            );

							echo form_input($data);
						?></td>
					</tr>
				</table>
			</td>
		</tr> <!--end of number 23-->
	</tbody>
	
</table><!--end of testing facility only table-->
<?php echo form_fieldset_close();?>
</div>

<ul class="pager">
    <li class="previous"><a href="javascript:c_change('9');" id="back3">Previous</a></li>
    <li class="next"><a href="javascript:c_change('11');" id="back3">Next</a></li>
 </ul>

</div><!--end of step 10-->
<div class="c_step" id="c_step11">
<?php echo form_fieldset('PERSONAL INFORMATION SHEET (FORM A)');?>
<table class="table table-bordered">
	<thead><tr>
		<th colspan=2><p>To be filled up by SACCL only</p></th>
	</tr></thead>
	<tbody>
		<tr>
			<td><p>24</p></td>
			<td><table class="table">
				<tr>
					<th><?php echo form_label('SACCL Laboratory Code:', 'saccl_labcode'); ?></th>
					<td><?php
						$data = array(
						              'name'        => 'saccl_labcode',
						              'id'          => 'saccl_labcode',
						              'value'       => "$saccl_labcode",
						              'maxlength'   => '10',
						              'size'        => '10',
						              'class'		=> 'form-control'
						            );

						echo form_input($data);
					?></td>
					<td>&nbsp</td>
					<th colspan=2><?php echo form_label('Date HIV Confirmed:', 'month_confirmed'); ?></th>
					<td><?php $data = array(
		     			   'name'        => 'month_confirmed',
		       			   'id'          => 'month_confirmed',
		       			   'value'       => "$month_confirmed",
		       			   'maxlength'   => '2',
		       			   'size'        => '5',
					  	   'class'		=> 'form-control',
						   'placeholder' => 'MM'
		       	   		);
						echo form_input($data);?></td>
					<td>&nbsp</td>
					<td><?php $data = array(
		              	  'name'        => 'date_confirmed',
		           		  'id'          => 'date_confirmed',
		            	  'value'       => "$day_confirmed",
		          		  'maxlength'   => '2',
		          		  'size'        => '5',
   				  	 	  'class'		=> 'form-control',
   						  'placeholder' => 'DD'
		         	   	);
						echo form_input($data);?></td>
					<td>&nbsp</td>
					<td colspan=2><?php $data = array(
		              	  'name'        => 'year_confirmed',
		          		  'id'          => 'year_confirmed',
		            	  'value'       => "$year_confirmed",
		          		  'maxlength'   => '4',
		          		  'size'        => '8',
   				  		  'class'		=> 'form-control',
   					  	  'placeholder' => 'YYYY'
		         	   	);
						echo form_input($data);?></td>
				</tr>
				<tr>
					<th><?php echo form_label('HIV Results Confirmed by:', 'confirmed_by'); ?></th>
					<td><?php $data = array(
		              	  'name'        => 'confirmed_by',
		          		  'id'          => 'confirmed_by',
		            	  'value'       => "$saccl_name",
		          		  'maxlength'   => '50',
		          		  'size'        => '50',
						  'class'		=> 'form-control'
		         	   	);
						echo form_input($data);?></td>
					<td>&nbsp</td>
					<th><p>Test:</p></th>
					<td><?php
						$data = array(
						    'name'        => 'test_type',
						    'id'          => 'western_blot',
						    'value'       => 'western_blot',
						    'checked'     => "$western_blot",
						    'style'       => 'margin:10px',
						    );
						echo form_radio($data);
					?>
					<td colspan=2><?php echo form_label('Western Blot', 'western_blot'); ?></td>
					<td><?php
						$data = array(
						    'name'        => 'test_type',
						    'id'          => 'pcr_for_infants',
						    'value'       => 'pcr_for_infants',
						    'checked'     => "$pcr_for_infants",
						    'style'       => 'margin:10px',
						    );
						echo form_radio($data);
					?>
					<td colspan=3><?php echo form_label('PCR for infants', 'pcr_for_infants'); ?></td>
				</td>
				</tr>
			</table>
			</td>
		</tr><!--end of number 24-->
		<tr><th colspan=2><p>END</p></th></tr>
	</tbody>
</table><!--end of SACCL only table-->
<?php echo form_fieldset_close('<p>PERSONAL INFORMATION SHEET (DOH-NEC FORM A 2014)</p>');?>
<ul class="pager">
    <li class="previous"><a href="javascript:c_change('10');" id="back3">Previous</a></li>
   
 </ul>

<?php 

$data = array(
	'name' => 'submitFormCounselor',
	'id'   => 'submitFormCounselor',
	'value' => 'Submit Form',
	'type' => 'submit',
	'content' => 'Submit Form',
	'class' => 'btn btn-default btn-lg'
);
echo form_button($data);
	echo form_close();?>
<?php
$data = array(
    'name' => 'generatePDFCounselor',
    'id' => 'generatePDFButton',
    'value' => 'Generate PDF',
    'type' => 'submit',
    'content' => 'Generate PDF',
	'formaction' => 'pdf',
	'class' => 'btn btn-default btn-lg'
);

echo form_button($data);
?>




</div><!--end of step 11-->






</div>
</div>