<div class="container">
<div class="container" id="content" style ='background-color: #FFFFFF;'>
	
<div class="row bs-wizard" style="border-bottom:0;" id="start">
                
     <div class="col-xs-3 bs-wizard-step active" id="page1">
     <div class="text-center bs-wizard-stepnum">Step 1</div>
     <div class="progress"><div class="progress-bar"></div></div>
     <a href="#" class="bs-wizard-dot"></a>
     <div class="bs-wizard-info text-center"></div>
     </div>
               
     <div class="col-xs-3 bs-wizard-step disabled" id="page2">
     <div class="text-center bs-wizard-stepnum">Step 2</div>
     <div class="progress"><div class="progress-bar"></div></div>
     <a href="#" class="bs-wizard-dot"></a>
     <div class="bs-wizard-info text-center"> </div>
     </div>
               
    <div class="col-xs-3 bs-wizard-step disabled" id="page3">
    <div class="text-center bs-wizard-stepnum">Step 3</div>
    <div class="progress"><div class="progress-bar"></div></div>
    <a href="#" class="bs-wizard-dot"></a>
    <div class="bs-wizard-info text-center"> </div>
    </div>
                
    <div class="col-xs-3 bs-wizard-step disabled" id="page4">
    <div class="text-center bs-wizard-stepnum">Step 4</div>
    <div class="progress"><div class="progress-bar"></div></div>
    <a href="#" class="bs-wizard-dot"></a>
    <div class="bs-wizard-info text-center">  </div>
    </div>
</div>
<!--<ul class="progressbar">
	  <li id="page1" class="active">Step 1</li>
	  <li id="page2">Step 2</li>
	  <li id="page3">Step 3</li>
	  <li id="page4">Step 4</li>
</ul>	 -->

<div class="step" id="step1">
	<?php
	$attributes = array('id' => 'formpatient');
	echo form_open('site/submit_form', $attributes);
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
					'value' => '1',
					'checked' => TRUE,
					'required' => 'required'
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
					'value' => '1',
					'checked' => TRUE,
					'required' => 'required'
				);
				echo  form_checkbox($data); ?>
			</td>
			<td>&nbsp&nbsp&nbsp; I agree to be tested for HIV.</td>
		</tr>
		<br></br>
		<table class="table">
		<tr>
			<td>
				
				<?php echo form_label("Name: ", "firstName"); ?></td>
				<td>
				<div class="form-group has-error">	
				<?php 
				$data = array(
					"name" => "firstName",
					"id" => "firstName",
					"value" => set_value('firstName', ''),
					//"size" => "20",
					"maxlength" => "20",
					"placeholder" => "First Name",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				?></div></td>
				<td>
				<div class="form-group has-error">	
				<?php 
				$data = array(
					"name" => "middleName",
					"id" => "middleName",
					"value" => "",
					//"size" => "20",
					"maxlength" => "20",
					"placeholder" => "Middle Name",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				?>
				</div>
				</td>
				<td>
				<div class="form-group has-error">	
				<?php 
				$data = array(
					"name" => "lastName",
					"id" => "lastName",
					"value" => "",
					//"size" => "20",
					"maxlength" => "20",
					"placeholder" => "Last Name",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				?>
			</div>
				</td>
		</tr>
		<tr>
			<td><?php echo form_label("Date: "); ?></td>
				<td colspan=10> &nbsp;
				<?php
					$tz = 'Asia/Manila';
					$timestamp = time();
					$dt = new DateTime("now", new DateTimeZone($tz));
					$dt->setTimestamp($timestamp);
					echo $dt->format('m	/	d	/	Y');
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
	    <li class="next"><a href="#start" id="nextform_1">Next</a></li>
	 </ul>

</div> <!-- end of step 1-->
<div class="step" id="step2">
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
			<td>
				<div class="form-group has-error">
				<?php  $data = array(
				        'name'          => 'philHealthNo',
				        'id'            => 'philHealthNo',
				        'value'         => '',
				        'maxlength'     => '12',
				        'size'          => '14',
						'class'			=> 'form-control',
						'placeholder'	=> 'XX-XXXXXXXXX-X',
						'required'  	=> 'required'
				);

				echo form_input($data);
				?>
				</div>
				</td>
			<td>&nbsp&nbsp&nbsp&nbsp;</td>
			
			<td id="check">
				<?php $data = array(
					'name' => 'notEnrolled',
					'id' => 'notEnrolled',
					'value' => '0',
					'checked' => FALSE
				);
				echo form_checkbox($data); 
				?>
				
			 &nbsp&nbsp;
				
				<?php 
				 $attributes = array(
					'style' => 'font-weight: normal;'
				);
				echo form_label("Not enrolled in PhilHealth", "notEnrolled", $attributes); ?>
			
			</td>
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
				
				<td class="form">
				<div class="form-group">
					<?php  $data = array(
				        'name'          => 'first_name',
				        'id'            => 'first_Name',
				        'value'         => '',
				        'maxlength'     => '20',
				        'size'          => '25',
						'placeholder'   => 'First Name',
						'padding'       => '50px',
						'class'			=> 'form-control'
				);
				echo form_input($data);
				
				//echo form_error('first_name');
				?></div></td>
				<td>&nbsp;</td>
				<td>
				<div class="form-group">	
				<?php  $data = array(
				        'name'          => 'middle_name',
				        'id'            => 'middle_Name',
				        'value'         => '',
				        'maxlength'     => '20',
				        'size'          => '25',
						'placeholder'   => 'Middle Name',
						'class'			=> 'form-control'
				);
				echo form_input($data);
				//echo form_error('middle_name');
				?></div></td>
				<td>&nbsp;</td>
				<td>
				<div class="form-group">
				<?php  $data = array(
				        'name'          => 'last_name',
				        'id'            => 'last_Name',
				        'value'         => '',
				        'maxlength'     => '20',
				        'size'          => '25',
						'placeholder'   => 'Last Name',
						'class'			=> 'form-control'
				);
				echo form_input($data);
				//echo form_error('last_name');	
				?>
			</div></td>
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
				<td class="form">
					<div class="form-group has-error">
					<?php  $data = array(
				        'name'          => 'mother_first_name',
				        'id'            => 'motherFirstName',
				        'value'         => '',
				        'maxlength'     => '20',
				        'size'          => '25',
						'placeholder'   => 'First Name',
						'class'			=> 'form-control',
						'required'		=> 'required'
					);
					echo form_input($data);
					//echo form_error('mother_first_name');
					?>
				</div></td>
					<td>&nbsp;</td>
					<td>
					<div class="form-group has-error">
					<?php  $data = array(
				        'name'          => 'mother_middle_name',
				        'id'            => 'motherMiddleName',
				        'value'         => '',
				        'maxlength'     => '20',
				        'size'          => '25',
						'placeholder'   => 'Middle Name',
						'class'			=> 'form-control',
						'required'		=> 'required'
					);
					echo form_input($data);
					//echo form_error('mother_middle_name');
					?></div></td>
					<td>&nbsp;</td>
					<td>
					<div class="form-group has-error">
					<?php  $data = array(
				        'name'          => 'mother_last_name',
				        'id'            => 'motherLastName',
				        'value'         => '',
				        'maxlength'     => '20',
				        'size'          => '25',
						'placeholder'   => 'Last Name',
						'class'			=> 'form-control',
						'required'		=> 'required'
				);
				echo form_input($data);
				//echo form_error('mother_first_name');
				?>
			</div></td>
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
	    <li class="previous"><a href="#start" id="prevform_2">Previous</a></li>
	    <li class="next"><a href="#start" id="nextform_2">Next</a></li>
	 </ul>

</div><!-- end of step 2-->
	 
<div class="step" id="step3">
<div class="table-responsive">
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
				<td class="form">
				<div class="form-group has-error">
				<?php 
				$data = array(
					"name" => "mother_code",
					"id" => "mother_code",
					"value" => "",
					"size" => "2",
					"maxlength" => "2",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				echo form_error('mother_code');
				?></div>
				</td>
				<td class="form">
				<div class="form-group has-error">
				<?php 
				$data = array(
					"name" => "father_code",
					"id" => "father_code",
					"value" => "",
					"size" => "2",
					"maxlength" => "2",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				echo form_error('father_code');
				?></div>			
				</td>
				<td class="form">
				<div class="form-group has-error">
				<?php 
				$data = array(
					"name" => "birthOrder_code",
					"id" => "birthOrder_code",
					"value" => "",
					"size" => "2",
					"maxlength" => "2",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				echo form_error('birthOrder_code');
				?></div></td>
				<td class="form">
				<div class="form-group has-error">
				<?php 
				$data = array(
					"name" => "month_code",
					"id" => "month_code",
					"value" => "",
					"size" => "2",
					"maxlength" => "2",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				echo form_error('month_code');
				?></div></td>
				<td class="form">
				<div class="form-group has-error">
				<?php 
				$data = array(
					"name" => "day_code",
					"id" => "day_code",
					"value" => "",
					"size" => "2",
					"maxlength" => "2",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				echo form_error('day_code');
				?></div></td>
				<td colspan=2 class="form">
				<div class="form-group has-error">
				<?php 
				$data = array(
					"name" => "year_code",
					"id" => "year_code",
					"value" => "",
					"size" => "4",
					"maxlength" => "4",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				echo form_error('year_code');
				?></div></td>
			</tr> <!--end of input 4-->
			</table>
		</td>
	</tr><!--end of number 4-->
	<tr><!--start of number 5-->
		<td>5</td>
		<td>
			<table class="table"><!--start of td table 5-->
			<tr>
				<td>
				<div class="form-group has-warning form-inline">	
				<?php $attributes = array(
	   						 'style' => 'font-weight: normal;'
	   				  );
					  echo form_label('Age:', 'age', $attributes);
				
				$data = array(
					"name" => "age",
					"id" => "age",
					"value" => "",
					"size" => "2",
					"maxlength" => "2",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				echo form_error('age');
				?></div>
				</td>
				<td>
				<div class="form-group has-warning form-inline">
				<?php $attributes = array(
	   						 'style' => 'font-weight: normal;'
	   				 	 );
				echo form_label('Age in months', 'age_in_months', $attributes);?> (for less than 1 year old):
				
			
				<?php 
				$data = array(
					"name" => "age_in_months",
					"id" => "age_in_months",
					"value" => "",
					"size" => "2",
					"maxlength" => "2",
					"class" => "form-control"
					);
				echo form_input($data);
				?>
				</div>
				</td>
				<div class="form-group has-error">
				<td>
				<?php echo form_label('Sex', 'sex'); ?>(at birth):</td>
				
				<td><?php 
				$data = array(
      			  	'name'          => 'sex',
    				'id'            => 'sex_male',
       				'value'         => 'male',
   					'checked'       => FALSE,
   					'style'         => 'margin:10px',
					'required'		=> 'required'
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
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?>
				</td>
				<td><?php 
  					 $attributes = array(
  						 'style' => 'font-weight: normal;'
  				 	 );
					echo form_label('Female', 'sex_female', $attributes); ?>
				</td></div>
			</tr><!--end of content 5-->
		</table><!--end of td table 5-->
	</td>
	</tr><!--end of number 5-->
	<tr><!--start of number 6-->
		<td>6</td>
		<td><table class="table"><!-- start of td table 6-->
			<tr>
			<td colspan=6>
			<div class="form-group form-inline has-error">
			<?php echo form_label('Permanent Address:', 'permanent_address'); ?>
			<?php 
				$data = array(
					"name" => "permanent_address",
					"id" => "permanent_address",
					"value" => "",
					"size" => "120",
					"maxlength" => "120",
					"class" => "form-control",
					"required" => "required"
				);
				echo form_input($data);
				//echo form_error('permanent_address');
				?></div>
			</td>
			</tr>
			<tr>
			<th>	
			<?php echo form_label('Current Place of Residence:', 'current_city'); ?></th>
			<td>
			<div class="form-group has-error">
			<?php 
				$data = array(
					"name" => "current_city",
					"id" => "current_city",
					"value" => "",
					"size" => "30",
					"maxlength" => "30",
					"class" => "form-control",
					"placeholder" => "Municipality/City",
					"required" => "required"
				);
				echo form_input($data);
               // echo form_error('current_city');
				?></div>
			</td>
			<td>
			<div class="form-group has-error">
			<?php 
				$data = array(
					"name" => "current_province",
					"id" => "current_province",
					"value" => "",
					"size" => "30",
					"maxlength" => "30",
					"class" => "form-control",
					"placeholder" => "Province",
					"required" => "required"
				);
				echo form_input($data);
				//echo form_error('current_province');
				?></div>
			</td>
			</tr>
			<tr>
			<th><?php echo form_label('Place of Birth:', 'birth_city'); ?></th>
			
			<td>
			<div class="form-group has-error">
			<?php 
				$data = array(
					"name" => "birth_city",
					"id" => "birth_city",
					"value" => "",
					"size" => "30",
					"maxlength" => "30",
					"class" => "form-control",
					"placeholder" => "Municipality/City",
					"required" => "required"
				);
				echo form_input($data);
				//echo form_error('birth_city');
				?></div>
			</td>
			
			<td>
			<div class="form-group has-error">
			<?php 
				$data = array(
					"name" => "birth_province",
					"id" => "birth_province",
					"value" => "",
					"size" => "30",
					"maxlength" => "30",
					"class" => "form-control",
					"placeholder" => "Province",
					"required" => "required"
				);
				echo form_input($data);
				//echo form_error('birth_province');
				?></div>
			</td>
			</tr>
		</table><!-- end of td table 6-->
		</td>
	</tr><!--end of number 6-->
	<tr><!--start of number 7-->
		<td>7</td>
		<td><table><!--start of td table 7-->
			<tr>
			<td>
			<div class="form-group form-inline">	
			<?php echo form_label('Contact Numbers:', 'contact_number'); ?>
			<?php 
				$data = array(
					"name" => "contact_number",
					"id" => "contact_number",
					"value" => "",
					"size" => "30",
					"maxlength" => "13",
					"class" => "form-control"
				);
				echo form_input($data);
				//echo form_error('contact_number');
				?>
			</div>
			</td>
			<td>&nbsp;</td>
			<td>
			<div class="form-group form-inline">
			<?php echo form_label('Email:', 'email');
			
				$data = array(
					"name" => "email",
					"id" => "email",
					"value" => "",
					"size" => "40",
					"maxlength" => "40",
					"class" => "form-control"
				);
				echo form_input($data);
				//echo form_error('email');
				?>
			</div>
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
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
			<td>
				<div class="form group">
				<?php 
				$data = array(
					"name" => "nationality",
					"id" => "nationality_others",
					"value" => "",
					"size" => "30",
					"maxlength" => "30",
					"class" => "form-control",
					"disabled" => TRUE
				);
				echo form_input($data);
				//echo form_error('nationality');
				?></div></td>
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
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
					"value" => "",
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
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
</div><!--end of table-responsive-->
<ul class="pager">
    <li class="previous"><a href="#start" id="prevform_3">Previous</a></li>
    <li class="next"><a href="#start" id="nextform_3">Next</a></li>
 </ul>

</div><!-- end of step 3-->
<div class="step" id="step4">
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
					<td>
						<div class="form-group has-warning">
						<?php
						$data = array(
						        'name'          => 'occupation',
						        'id'            => 'occupation',
						        'value'         => '',
						        'maxlength'     => '50',
						        'size'          => '50',
								'class'			=> 'form-control',
								'required' => 'required'
						);
						echo form_input($data);
						//echo form_error('occupation');
					?>	
					</div>					
					</td>
				
				</tr>
				<tr>
					<td colspan=2>
					<?php 
	   					 $attributes = array(
	   						 'style' => 'font-weight: normal;'
	   				 	 );
						
						echo form_label('If no current work, what was previous occupation:', 'prev_occupation', $attributes); ?>&nbsp</td>
						<td>
						<div class="form-group has-warning">
						<?php
						$data = array(
						        'name' => 'prev_occupation',
						        'id'   => 'prev_occupation',
						        'value' => '',
						        'maxlength'     => '50',
						        'size'          => '50',
								'class' 	=> 'form-control',
								'required' => 'required'
						);
						echo form_input($data, 'required');
						//echo form_error('prev_occupation');
					?>	
					</div>
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
								'checked' => FALSE
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
								'checked' => FALSE
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
								'checked' => FALSE
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
								'checked' => FALSE
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
						        'value' => '',
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
	
</div>
	<ul class="pager">
	    <li class="previous"><a href="#start" id="prevform_4">Previous</a></li>
	 </ul>

	<?php 
	echo form_fieldset_close();
	$data = array(
		'name' => 'submitFormUser',
		'id'   => 'submitFormUser',
		'value' => 'Submit Form',
		'type' => 'submit',
		'content' => 'Submit Form',
		'class' => 'btn btn-default'
	);
	echo form_button($data);
	echo form_close();
	 ?>
</div> <!-- end of step 4-->
			
</div>
</div>
