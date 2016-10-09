<div class="container">
<div class="container" id="content" style ='background-color: #FFFFFF;'>
<ul class="pagination">
	  <li id="m_page1" class="active"><a href="javascript:m_change('1');">Step 1</a></li>
	  <li id="m_page2"><a href="javascript:m_change('2');">Step 2</a></li>
	  <li id="m_page3"><a href="javascript:m_change('3');">Step 3</a></li>
 <li id="m_page4"><a href="javascript:m_change('4');">Step 4</a></li>
  <li id="m_page5"><a href="javascript:m_change('5');">Step 5</a></li>
	  
</ul>	


<?php 
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

echo form_open('site/submit_form');?>
<div class="m_step" id="m_step1">
	<?php
	$attributes = array('id' => 'formMedTechView');
	echo form_open('', $attributes);
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
			<td colspan=20> &nbsp&nbsp&nbsp; I was given information about HIV and HIV testing, and was given the opportunity to ask questions during pretest counseling or group test 
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
	    <li class="next"><a href="javascript:m_change('2');" id="back3">Next</a></li>
	 </ul>

</div> <!-- end of step 1-->
<div class="m_step" id="m_step2">
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

				echo form_hidden($data);
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
	    <li class="previous"><a href="javascript:m_change('1');" id="back3">Previous</a></li>
	    <li class="next"><a href="javascript:m_change('3');" id="back3">Next</a></li>
	 </ul>

</div><!-- end of step 2-->
	 
<div class="m_step" id="m_step3">
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
					"value" => "$patient_record->father_index",
					"value" => "",
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
	
</table><!--end of unique identifier table-->

<ul class="pager">
    <li class="previous"><a href="javascript:m_change('2');" id="back3">Previous</a></li>
	    
	<li class="next"><a href="javascript:m_change('4');" id="next4">Next</a></li>
	
  
 </ul>

</div><!-- end of step 3-->

<div id="m_step4">
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
			<td colspan=3>
				<select class="form-control" id="facility_name"
				name="facility_name">
					<option>Anglo (Shaw)</option>
					<option>Uni (Taft Ave.)</option>
				</select>
		<!--		<?php $data = array(
              	  'name'        => 'facility_name',
           		  'id'          => 'facility_name',
            	  'value'       => "$facility_name",
          		  'maxlength'   => '50',
          		  'size'        => '50',
				  'class'		=> 'form-control'
         	   	);
				echo form_input($data);?>-->
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
	<!--	<tr>
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
		</tr> --> <!--end of number 23-->
	</tbody>
	
</table><!--end of testing facility only table-->
<?php echo form_fieldset_close();?>
</div>
	<ul class="pager">
	    <li class="previous"><a href="javascript:m_change('3');" id="back3">Previous</a></li>
	    <li class="next"><a href="javascript:m_change('5');" id="back3">Next</a></li>
	 </ul>

</div><!--end of step 4(10)-->
<div id="m_step5">
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
<?php 

echo form_fieldset_close('<p>PERSONAL INFORMATION SHEET (DOH-NEC FORM A 2014)</p>');
?>
<ul class="pager">
    <li class="previous"><a href="javascript:m_change('4');" id="back3">Previous</a></li>
  
 </ul>
<?php
$data = array(
	'name' => 'submitFormMedtech',
	'id'   => 'submitFormMedtech',
	'value' => 'Submit Form',
	'type' => 'submit',
	'content' => 'Submit Form',
	'class' => 'btn btn-default btn-lg'
);
echo form_submit($data);

echo form_close(); 
?>

</div><!--end of step 5(11)-->

</div>
</div>