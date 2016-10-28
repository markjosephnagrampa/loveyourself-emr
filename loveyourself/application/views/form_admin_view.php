<div class="container">
<div class="container" id="content" style ='background-color: #FFFFFF;'>
	
<ul class="pagination">
	  <li id="c_page1" class="active"><a href="javascript:c_change('1');">Step 1</a></li>
	  <li id="c_page2"><a href="javascript:c_change('2');">Step 2</a></li>
	  <li id="c_page3"><a href="javascript:c_change('3');">Step 3</a></li>

	  
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


 ?>

<?php
echo form_open('site/submit_form');?>
<div class="c_step" id="c_step1">
	<?php
	$attributes = array('id' => 'formpatient');
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
				        'value'         => "$patient_record->philhealth_number",
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
					'checked' => FALSE
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
	    <li class="previous"><a href="javascript:c_change('1');" id="back3">Previous</a></li>
	    <li class="next"><a href="javascript:c_change('3');" id="back3">Next</a></li>
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
</table><!--end of unique identifier table-->

<ul class="pager">
    <li class="previous"><a href="javascript:c_change('2');" id="back3">Previous</a></li>
  
 </ul>
<?php
	$data = array(
	    'name' => 'backBtn',
	    'id' => 'backBtn',
	    'value' => 'Back',
	    'type' => 'submit',
	    'content' => 'Back',
	    'formaction' => 'site/profile',
		'class' => 'btn btn-primary btn-lg'
	);

echo form_submit($data);
?>
<?php
echo form_close(); ?>
</div><!-- end of step 3-->


</div>
</div>
