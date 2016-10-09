<script src="<?php echo base_url(); ?>scripts/doh_functions.js"></script>
<link href="<?php echo base_url(); ?>styles/style.css" type="text/css" rel="stylesheet"/>

<div id="steps">
	<br>
	<br>
	<br>
	<table class = "procedure" align = "left">
		<tr>
<th id="step1" name="steps" onClick = "change('1')">Step 1</th>
<th id="step2" name="steps" onClick = "change('2')">Step 2</th>
<th id="step3" name="steps" onClick = "change('3')">Step 3</th>
<th id="step4" name="steps" onClick = "change('4')">Step 4</th>
<th id="step5" name="steps" onClick = "change('5')">Step 5</th>
<th id="step6" name="steps" onClick = "change('6')">Step 6</th>
<th id="step7" name="steps" onClick = "change('7')">Step 7</th>
<th id="step8" name="steps" onClick = "change('8')">Step 8</th>
<th id="step9" name="steps" onClick = "change('9')">Step 9</th>
<th id="step10" name="steps" onClick = "change('10')">Step 10</th>
		</tr>
	</table>
</div>

<div class="step" id="1">
	<?php
	$this->load->helper("form");
	echo validation_errors();
	echo form_open("news/create");
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
	<table>
		<tr>
			<td><?php 
				$data = array(
					'name' => 'information',
					'id' => 'information',
					'value' => 'yes',
					'checked' => TRUE
				);
				echo  form_checkbox($data); ?>
			</td>
			<td><p>I was given information about HIV and HIV testing, and was given the opportunity to ask questions during pretest counseling or group test information</p>
			</td>
			<td><?php echo form_label("Name: ", "fullName"); ?></td>
			<td colspan=3><?php 
				$data = array(
					"name" => "fullName",
					"id" => "fullName",
					"value" => "",
					"size" => "60",
					"maxlength" => "60"
				);
				echo form_input($data);
				?></td>
		</tr>
		<tr>
			<td><?php 
				$data = array(
					'name' => 'agree',
					'id' => 'agree',
					'value' => 'yes',
					'checked' => TRUE
				);
				echo  form_checkbox($data); ?>
			</td>
			<td><p>I agree to be tested for HIV.</p>
			</td>
			<td><?php echo form_label("Signature: ", "sign"); ?></td>
			<td><?php 
				$data = array(
					"name" => "signature",
					"id" => "signature",
					"value" => "",
					"size" => "30"
				);
				echo form_input($data);
				?>
			</td>
			<td><?php echo form_label("Date: ", "date"); ?></td>
			<td><?php 
				$data = array(
					"name" => "date",
					"id" => "date",
					"value" => "",
					"size" => "20"
				);
				echo form_input($data);
				?>
			</td>
		</tr>
	</table>
	<?php
	echo form_fieldset_close();		
	?>
	<table>
		<tr><td>&nbsp</td>
			<td><p><i>proceed >>></i></p></td>
		</tr>
	</table>

</div> <!-- end of step 1-->
<div class="step" id="2">
	<?php 
	echo form_fieldset('<strong>PERSONAL INFORMATION SHEET (FORM A)</strong>');
	?>
	<p>All information given will be STRICTLY CONFIDENTIAL.  Please fill out this form COMPLETELY and as honestly as possible.  Please write in CAPITAL LETTERS and CHECK the appropriate boxes.</p>
	
	<table width=100% border=1><!--start of Demographic Data Table-->
		<tr>
			<th colspan=2 class="form">DEMOGRAPHIC DATA</th>
		</tr>
		<tr><!--number 1-->
			<td>1</td>
			<td>
			<table>
			<tr>
			<th>PhilHealth Number:</th>
			<td><?php  $data = array(
				        'name'          => 'philHealthNo',
				        'id'            => 'philHealthNo',
				        'value'         => '',
				        'maxlength'     => '12',
				        'size'          => '14'
				);

				echo form_input($data);
				?></td>
			<td><?php $data = array(
					'name' => 'notEnrolled',
					'id' => 'notEnrolled',
					'value' => '',
					'fed' => FALSE
				);
				echo form_checkbox($data); 
				?>
			</td>
			<td><p>Not enrolled in PhilHealth</p></td>
			</tr>
			</table>
			</td>
		</tr><!--end of number 1-->
		<tr><!--number 2-->
			<td>2</td>
			<td> 
			<table><!-- start of content 2 table-->
			<tr><!--start of fullname-->
			<th colspan=3><p align="left">Name (Full name)</p></th>
			</tr><!--end of fullname-->
			<tr><!--start of row input-->
				<td class="form"><?php  $data = array(
				        'name'          => 'first_name',
				        'id'            => 'firstName',
				        'value'         => '',
				        'maxlength'     => '20',
				        'size'          => '25'
				);
				echo form_input($data);
				?></td>
				<td><?php  $data = array(
				        'name'          => 'middle_name',
				        'id'            => 'middleName',
				        'value'         => '',
				        'maxlength'     => '20',
				        'size'          => '25'
				);
				echo form_input($data);
				?></td>
				<td><?php  $data = array(
				        'name'          => 'last_name',
				        'id'            => 'lastName',
				        'value'         => '',
				        'maxlength'     => '20',
				        'size'          => '25'
				);
				echo form_input($data);
				?></td>
			</tr><!--end of row input -->
			<tr><!--start of name-->
			<td>First Name</td>
			<td>Middle Name</td>
			<td>Last Name</td>
			</tr><!--end of name-->
		</table><!-- end of content 2 table-->
	</td>
	</tr><!--end of number 2-->
		<tr>
			<td>3</td>
			<td>
				<table><!--start of content 3 table-->
				<tr><!--start of mother's name-->
			<th colspan=3><p align="left">Mother's Maiden Name (Full real name)</p></th>
				</tr><!--end of mother's name-->
				<tr><!--start of input row-->
					<td class="form"><?php  $data = array(
				        'name'          => 'mother_first_name',
				        'id'            => 'motherFirstName',
				        'value'         => '',
				        'maxlength'     => '20',
				        'size'          => '25'
					);
					echo form_input($data);
					?></td>
					<td><?php  $data = array(
				        'name'          => 'mother_middle_name',
				        'id'            => 'motherMiddleName',
				        'value'         => '',
				        'maxlength'     => '20',
				        'size'          => '25'
					);
					echo form_input($data);
					?></td>
					<td><?php  $data = array(
				        'name'          => 'mother_last_name',
				        'id'            => 'motherLastName',
				        'value'         => '',
				        'maxlength'     => '20',
				        'size'          => '25'
				);
				echo form_input($data);
				?></td>
				</tr><!--end of input row-->
				<tr>
					<td>First Name</td>
					<td>Middle Name</td>
					<td>Last Name</td>
				</tr>
				</table><!--end of content 3 table-->
			</td>
		</tr><!--end of 3-->
	</table><!--end of Demographic Data Table-->
	<?php
	echo form_fieldset_close();
	?>
</div><!-- end of step 2-->
<div class="step" id="3">
	<?php echo form_fieldset('<strong>PERSONAL INFORMATION SHEET (FORM A)</strong>'); ?>
<table border=1 width=100%><!--start of unique identifier table-->
	<tr><th colspan=2><p>UNIQUE IDENTIFIER CODE</p></th></tr>
 	   
	<tr><!--start of number 4-->
		<td>4</td>
  	    <td>
 		   <table>
			   <tr>
			   <td>First 2 letters of mother's real name</td>
			   <td>First 2 letters of father's real name</td>
			   <td>Birth Order</td>
			   <td>Month of Birth</td>
			   <td>Day of Birth</td>
			   <td colspan=2>Year of Birth</td>
		   	   </tr>
		
				<tr>
				<td class="form"><?php 
				$data = array(
					"name" => "mother_code",
					"id" => "mother_code",
					"value" => "",
					"size" => "2",
					"maxlength" => "2"
				);
				echo form_input($data);
				?>
				</td>
				<td class="form"><?php 
				$data = array(
					"name" => "father_code",
					"id" => "father_code",
					"value" => "",
					"size" => "2",
					"maxlength" => "2"
				);
				echo form_input($data);
				?>				
				</td>
				<td class="form"><?php 
				$data = array(
					"name" => "birthOrder_code",
					"id" => "birthOrder_code",
					"value" => "",
					"size" => "2",
					"maxlength" => "2"
				);
				echo form_input($data);
				?></td>
				<td class="form"><?php 
				$data = array(
					"name" => "month_code",
					"id" => "month_code",
					"value" => "",
					"size" => "2",
					"maxlength" => "2"
				);
				echo form_input($data);
				?></td>
				<td class="form"><?php 
				$data = array(
					"name" => "day_code",
					"id" => "day_code",
					"value" => "",
					"size" => "2",
					"maxlength" => "2"
				);
				echo form_input($data);
				?></td>
				<td colspan=2 class="form"><?php 
				$data = array(
					"name" => "year_code",
					"id" => "year_code",
					"value" => "",
					"size" => "4",
					"maxlength" => "4"
				);
				echo form_input($data);
				?></td>
			</tr> <!--end of input 4-->
			</table>
		</td>
	</tr><!--end of number 4-->
	<tr><!--start of number 5-->
		<td>5</td>
		<td>
			<table><!--start of td table 5-->
			<tr>
				<th><p>Age:</p></th>
				<td><?php 
				$data = array(
					"name" => "age",
					"id" => "age",
					"size" => "2",
					"maxlength" => "2"
				);
				echo form_input($data);
				?>
				</td>
				<td><p><strong>Age in months </strong><i>(for less than 1 year old):</i></p></td>
				<td><?php 
				$data = array(
					"name" => "age_in_months",
					"id" => "age_in_months",
					"value" => "",
					"size" => "2",
					"maxlength" => "2"
					);
				echo form_input($data);
				?></td>
				<td><p><strong>Sex</strong><i>(at birth):</i></p>
				</td>
				<td><?php 
				$data = array(
      			  	'name'          => 'sex',
    				'id'            => 'sex_male',
       				'value'         => 'male',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
				</td>
				<td><p>Male</p></td>
				<td><?php 
				$data = array(
      			  	'name'          => 'sex',
    				'id'            => 'sex_female',
       				'value'         => 'female',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
				</td>
				<td><p>Female</p></td>
			</tr><!--end of content 5-->
		</table><!--end of td table 5-->
	</td>
	</tr><!--end of number 5-->
	<tr><!--start of number 6-->
		<td>6</td>
		<td><table><!-- start of td table 6-->
			<tr>
			<th><p>Permanent Address:</p></th>
			<td colspan=6><?php 
				$data = array(
					"name" => "permanent_address",
					"id" => "permanent_address",
					"value" => "",
					"size" => "120",
					"maxlength" => "120"
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<th colspan=2><p>Current Place of Residence:</p></th>
			<td><p>Municipality/City:</p></td>
			<td><?php 
				$data = array(
					"name" => "current_city",
					"id" => "current_city",
					"value" => "",
					"size" => "30",
					"maxlength" => "30"
				);
				echo form_input($data);
				?>
			</td>
			<td colspan=2><p>Province:</p></td>
			<td><?php 
				$data = array(
					"name" => "current_province",
					"id" => "current_province",
					"value" => "",
					"size" => "30",
					"maxlength" => "30"
				);
				echo form_input($data);
				?>
			</td>
			</tr>
			<tr>
			<th colspan=2><p>Place of Birth:</p></th>
			<td><p>Municipality/City:</p></td>
			<td><?php 
				$data = array(
					"name" => "birth_city",
					"id" => "birth_city",
					"value" => "",
					"size" => "30",
					"maxlength" => "30"
				);
				echo form_input($data);
				?>
			</td>
			<td colspan=2><p>Province:</p></td>
			<td><?php 
				$data = array(
					"name" => "birth_province",
					"id" => "birth_province",
					"value" => "",
					"size" => "30",
					"maxlength" => "30"
				);
				echo form_input($data);
				?>
			</td>
			</tr>
		</table><!-- end of td table 6-->
		</td>
	</tr><!--end of number 6-->
	<tr><!--start of number 7-->
		<td>7</td>
		<td><table><!--start of td table 7-->
			<tr>
			
			<th colspan=2><p>Contact Numbers:</p></th>
			<td><?php 
				$data = array(
					"name" => "contact_number",
					"id" => "contact_number",
					"value" => "",
					"size" => "30",
					"maxlength" => "13"
				);
				echo form_input($data);
				?>
			</td>
			<th><p>Email:</p></th>
			<td colspan=3><?php 
				$data = array(
					"name" => "email",
					"id" => "email",
					"value" => "",
					"size" => "40",
					"maxlength" => "40"
				);
				echo form_input($data);
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
			<th colspan=3>Nationality:</th>
			<td><?php 
				$data = array(
      			  	'name'          => 'nationality',
    				'id'            => 'nationality_fil',
       				'value'         => 'Filipino',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td><p>Filipino</p></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'nationality',
    				'id'            => 'nationality_others_cbox',
       				'value'         => 'Others',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td colspan=2><p>Others, please specify:</p></td>
			<td><?php 
				$data = array(
					"name" => "nationality",
					"id" => "nationality_others",
					"value" => "",
					"size" => "30",
					"maxlength" => "30"
				);
				echo form_input($data);
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
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><p>None</p></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'hea',
    				'id'            => 'hea_hs',
       				'value'         => 'Highschool',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><p>Highschool</p></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'hea',
    				'id'            => 'hea_voc',
       				'value'         => 'Vocational',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><p>Vocational</p></td>
			</tr>
			<tr>
			<td><?php 
				$data = array(
      			  	'name'          => 'hea',
    				'id'            => 'hea_elem',
       				'value'         => 'Elementary',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><p>Elementary</p></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'hea',
    				'id'            => 'hea_college',
       				'value'         => 'College',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><p>College</p></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'hea',
    				'id'            => 'hea_post_grad',
       				'value'         => 'Post_Graduate',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
			<td><p>Post-Graduate</p></td>
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
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td><p>Single</p></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'civil_status',
    				'id'            => 'cs_married',
       				'value'         => 'married',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td><p>Married</p></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'civil_status',
    				'id'            => 'cs_separated',
       				'value'         => 'separated',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td><p>Separated</p></td>
			<td colspan=3><?php 
				$data = array(
      			  	'name'          => 'civil_status',
    				'id'            => 'cs_widowed',
       				'value'         => 'widowed',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
				</td>
				<td><p>Widowed</p></td> 
				
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
    				'id'            => 'live_in',
       				'value'         => 'no_live_in_partner',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td colspan=2><p>No</p></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'live_in',
    				'id'            => 'live_in',
       				'value'         => 'with_live_in_partner',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td colspan=2><p>Yes</p></td>
			</tr>
		  </table><!--end of td table 11-->
		</td>
	</tr><!--end of number 11-->
	<tr><!--start of number 12-->
		<td><p>12</p></td>
		<td><table><!--start of td table 12-->
			<tr>
			<th><p>Number of children:</p></th>
			<td><?php 
				$data = array(
					"name" => "no_of_children",
					"id" => "no_of_children",
					"value" => "",
					"size" => "3",
					"maxlength" => "3"
				);
				echo form_input($data);
				?></td>
			<td><p><strong>Are you presently pregnant?</strong><i>(for females only)</i></p></td>
			
			<td><?php 
				$data = array(
      			  	'name'          => 'presently_pregnant',
    				'id'            => 'not_presently_pregnant',
       				'value'         => 'not_presently_pregnant',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td><p>No</p></td>
			<td><?php 
				$data = array(
      			  	'name'          => 'presently_pregnant',
    				'id'            => 'yes_presently_pregnant',
       				'value'         => 'yes_presently_pregnant',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
			</td>
			<td><p>Yes</p></td>
			</tr>
		  </table><!--end of td table 12-->
		</td>
	</tr><!--end of number 12-->
</table><!--end of unique identifier table-->
</div><!-- end of step 3-->
<div class="step" id="4">
	<?php echo form_fieldset('<strong>PERSONAL INFORMATION SHEET (FORM A)</strong>');?>
	<table border=1 width="100%">
		<tr><th colspan=2><p>EMPLOYMENT</p></th></tr>
		<tr><td><p>13</p></td>
		<td>
			<table>
				<tr>
					<th>Current Occupation &nbsp </th>
					<td>(Please specify main source of income) &nbsp </td>
					<td><?php
						$data = array(
						        'name'          => 'occupation',
						        'id'            => 'occupation',
						        'value'         => '',
						        'maxlength'     => '50',
						        'size'          => '50'
						);
						echo form_input($data);
					?>						
					</td>
				</tr>
				<tr>
					<td colspan=2><p>If no current work, what was previous occupation:</p></td>
					<td><?php
						$data = array(
						        'name' => 'prev_occupation',
						        'id'   => 'prev_occupation',
						        'value' => '',
						        'maxlength'     => '50',
						        'size'          => '50'
						);
						echo form_input($data);
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
						<th><p>Did you work overseas/abroad in the past 5 years?</p></th>
						<td><?php 
							$data = array(
								'name' => 'work_abroad',
								'id' => 'work_abroad',
								'value' => 'No',
								'checked' => FALSE
							);
							echo  form_radio($data); ?>
						</td>
						<td><p>No</p></td>
						<td><?php 
							$data = array(
								'name' => 'work_abroad',
								'id' => 'work_abroad',
								'value' => 'Yes',
								'checked' => FALSE
							);
							echo  form_radio($data); ?>
						</td>
						<td><p>Yes</p></td>
						<td>&nbsp</td>
					</tr>
					<tr>
						<td>&nbsp</td>
						<td colspan=3><p>If yes, when did you return from your last contract?</p></td>
						<td><?php
						$data = array(
						        'name' => 'month_last_contract',
						        'id'   => 'month_last_contract',
						        'value' => '',
						        'maxlength'     => '2',
						        'size'          => '2'
						);
						echo form_input($data);
						?>
						</td>
						<td><?php
						$data = array(
						        'name' => 'year_last_contract',
						        'id'   => 'year_last_contract',
						        'value' => '',
						        'maxlength'     => '4',
						        'size'          => '4'
						);
						echo form_input($data);
						?></td>
					</tr>
					<tr><td colspan=4>&nbsp</td>
						
						<td><p>Month</p></td>
						<td><p>Year</p></td>
					</tr>
					<tr>
						<td>&nbsp</td>
						<td><p>Where were you based?</p></td>
						<td><?php 
							$data = array(
								'name' => 'work_based',
								'id' => 'work_based',
								'value' => 'ship',
								'checked' => FALSE
							);
							echo  form_radio($data); ?></td>
						<td><p>On a ship</p></td>
						<td><?php 
							$data = array(
								'name' => 'work_based',
								'id' => 'work_based',
								'value' => 'land',
								'checked' => FALSE
							);
							echo  form_radio($data); ?></td>
						<td><p>Land</p></td>
					</tr>
					<tr><td>&nbsp</td>
						<td colspan=2><p>What country did you last work in?</p></td>
						<td colspan=3><?php
						$data = array(
						        'name' => 'country_last_work',
						        'id'   => 'country_last_work',
						        'value' => '',
						        'maxlength'     => '25',
						        'size'          => '25'
						);
						echo form_input($data);
						?></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<input type="submit" name="submit" value="Create news item"/>
	<?php
	//echo form_submit('submit', 'Submit');
	echo form_fieldset_close();
	echo form_close(); ?>
</div><!-- end of step 4-->