<?php

/**
* DOH HIV PERSONAL INFORMATION SHEET A
* Html to PDF php file
* @author Mark Nagrampa
*
*
*
*/
// PDF Object
    ob_start();
    session_start();

?>

<!--HTML MOCKUP-->

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <title>DOH HIV PERSONAL INFORMATION SHEET A</title>
</head>
<body style="font-family:Helvetica,sans-serif; font-size:11px;">
<!--BOX 1-->

<div style="width: 87%; height:33%; border: 3px solid black; margin:auto; margin-top:10px; padding: 0px; overflow:hidden;">
	<div class="label" style="border-bottom: 3px solid black; font-weight:bold; font-size:13px;">
		<img src="images/doh2.jpg" style="width:35px;height:30px;">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;

		
		INFORMED CONSENT FOR HIV TESTING
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;
		
		<img src="images/nec2.jpg" style="width:40px;height:30px;">
		<img src="images/A.jpg" style="width:40px;height:30px;">
	</div>

	<div style="padding:10px;">
		<p style="margin-top: 2px;">
		The Department of Health (DOH) has an existing program for the prevention and control of the Human Immunodeficiency Virus (HIV) in
		the Philippines. The National Epidemiology Center (NEC) of DOH is mandated by Republic Act 8504 to collect information which can
		help in planning activities which will help halt the spread of HIV and be beneficial to the people. Your full cooperation is very important to undertake this activity. We encourage you to answer all questions as honestly as possible.
		</p>
		<div style="padding:5px; border: 1px solid black; width:95%; margin:auto; font-size:10px;">
		<b>ABOUT THE TEST</b>
		<br>
		<p>
			<b>1. What is HIV Testing?</b><br>
			An HIV test is a blood test. It will show if you have antibodies to HIV-- the virus that causes AIDS. A sample of blood will be taken from your arm. If the first test (screening) is reactive, another test (confirmatory) will be done to make sure that the first test is confirmed to be positive. A positive test means you have been infected with HIV, a negative test means you are probably not infected because it takes time for the body to produce antibodies. If you think you have been exposed recently, you need to be re-tested after 3 - 6 months to make sure you are not infected.
		</p>
		<p>
			<b>2. Voluntary HIV testing</b><br>
			Taking an HIV test is voluntary. Under Republic Act 8504, you cannot be tested without your knowledge and consent. If you do not want to be tested, you have the right to refuse the test.
		</p>
		<p>
			<b>3. Confidentially of Test Results</b><br>
			Your test result is confidential. It will only be given to you personally.
		</p>
		</div>
		</div>
		<br>
		<div class="blue" style="background-color:#F2F2F2;">
			<table cellspacing="5">

			<tr>
				<td><img src="images/chk.jpg" style="width:10px; height:10px;"></td>
				<td> I was given information about HIV and HIV testing, <br>
											 and was given the opportunity to ask questions <br>
											during pretest counseling or group test information <br>
				</td>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Name:
					<span style="text-decoration:underline;"> <?php echo $patient_full_name; ?></span> <!--60 lines-->
				</td>
			</tr>
			<tr>
				<td><img src="images/chk.jpg" style="width:10px; height:10px;"></td>
				<td> I agree to be tested for HIV.
				</td>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Signature:
					_____________________ <!--21 lines-->
					Date:
					<span style="text-decoration:underline;"> <?php echo $date; ?></span><!--17 lines-->

				</td>
				<td>
					
				</td>
			</tr>
			
			</table>
		</div>
</div>

<!--BOX 2-->

<div style="width: 87%; height:58.5%; border: 3px solid black; margin:auto; margin-top:10px; padding: 0px; overflow:hidden;">
	<div class="label" style="border-bottom: 3px solid black; font-weight:bold; font-size:13px; text-align:center;">
		PERSONAL INFORMATION SHEET (FORM A)
	</div>
	<div class="blue" style="background-color:#D8D8D8; font-weight:bold;">
		All information given will be STRICTLY CONFIDENTIAL. Please fill out this form COMPLETELY and as honestly as possible. Please
		write in CAPITAL LETTERS and CHECK the appropriate boxes.
	</div>
	<!--DEMOGRAPHIC DATA-->
		<div class="gray" style="background-color:#5A5A5A; font-weight:bold; color:#ffffff; text-align:center;">
			DEMOGRAPHIC DATA
		</div>
		
		<!--1-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style="height: 2.5%; width: 3%; border: 1px solid black;">
						<span style="margin-top: 5px; margin-left: 5px;">1</span>
					</td>
					<td style="height: 2.5%; width: 16%; border: 1px solid black; border-right:0px;">
						<span style="margin-top: 5px;"><b>PhilHealth Number: </b></span>
					</td>
					<td style="height: 2.5%; border: 1px solid black; width:50%; border-right:0px;">
						<span style="margin-top: 5px;">
						<table style="border-collapse: collapse;">
						<tr>
							<td style="width: 7%; text-align: center;border: 1px solid black;">
								<?php echo $patient_philhealth_number[0]; ?>
							</td>
							<td style="width: 7%; text-align: center;border: 1px solid black;">
								<?php echo $patient_philhealth_number[1]; ?>
							</td>

							<td style="width: 7%; text-align: center;border-right: 1px solid black;">-</td>

							<td style="width: 7%; text-align: center;border: 1px solid black;">
								<?php echo $patient_philhealth_number[2]; ?>
							</td>
							<td style="width: 7%; text-align: center;border: 1px solid black;">
								<?php echo $patient_philhealth_number[3]; ?>
							</td>
							<td style="width: 7%; text-align: center;border: 1px solid black;">
								<?php echo $patient_philhealth_number[4]; ?>
							</td>
							<td style="width: 7%; text-align: center;border: 1px solid black;">
								<?php echo $patient_philhealth_number[5]; ?>
							</td>
							<td style="width: 7%; text-align: center;border: 1px solid black;">
								<?php echo $patient_philhealth_number[6]; ?>
							</td>
							<td style="width: 7%; text-align: center;border: 1px solid black;">
								<?php echo $patient_philhealth_number[7]; ?>
							</td>
							<td style="width: 7%; text-align: center;border: 1px solid black;">
								<?php echo $patient_philhealth_number[8]; ?>
							</td>
							<td style="width: 7%; text-align: center;border: 1px solid black;">
								<?php echo $patient_philhealth_number[9]; ?>
							</td>
							<td style="width: 7%; text-align: center;border: 1px solid black;">
								<?php echo $patient_philhealth_number[10]; ?>
							</td>

							<td style="width: 7%; text-align: center;border-right: 1px solid black;">-</td>

							<td style="width: 7%; text-align: center; border: 1px solid black;">
								<?php echo $patient_philhealth_number[11]; ?>
							</td>

						</tr>
						</table>
						</span>
					</td>
					<td style="border: 1px solid black; width: 31%; border-left: 0px;">
						<span style="margin-top: 5px;"><img src="images/<?php if(!$philhealth_number_check)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Not enrolled in PhilHealth</span>
					</td>
					
				</tr>
			</table>
		
		<!--2-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style="height: 5%; width: 3%; border: 1px solid black;">
					<span style="margin-top: 10px; margin-left: 5px;">2</span>
					</td>
					<td style="width: 97%; border: 1px solid black;">
						<table cellspacing="0">
							<tr>
								<td colspan = "3"><b>Name (Full name)</b></td>
							</tr>
							<tr>
								<td style="width: 200px;">
								<table>
								<tr>
								<td style="width: 140px; height: 7px; border: 1px solid black; text-align: center;">
									<?php echo $visitor_record['first_name']; ?>
								</td>
								</tr>
								</table>
								</td>
								<td style="width: 180px;">
								<table>
								<tr>
								<td style="width: 140px; height: 7px; border: 1px solid black; text-align: center;">
									<?php echo $visitor_record['middle_name']; ?>
								</td>
								</tr>
								</table>
								</td>
								<td style="width: 180px;">
								<table>
								<tr>
								<td style="width: 140px; height: 7px; border: 1px solid black; text-align: center;">
									<?php echo $visitor_record['last_name']; ?>
								</td>
								</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td style="width: 180px;">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									First Name
								</td>
								<td style="width: 180px;">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									Middle Name
								</td>
								<td style="width: 180px;">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									Last Name
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		<!--3-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style="height: 5%; width: 3%; border: 1px solid black;">
					<span style="margin-top: 10px; margin-left: 5px;">3</span>
					</td>
					<td style="width: 97%; border: 1px solid black;">
						<table cellspacing="0">
							<tr>
								<td colspan = "3"><b>Mother's Maiden Name (Full real name)</b></td>
							</tr>
							<tr>
								<td style="width: 180px;">
								<table>
								<tr>
								<td style="width: 140px; height: 7px; border: 1px solid black; text-align: center"> <?php echo $visitor_record['mother_first_name']; ?></td>
								</tr>
								</table>
								</td>
								<td style="width: 180px;">
								<table>
								<tr>
								<td style="width: 140px; height: 7px; border: 1px solid black;text-align: center"> <?php echo $visitor_record['mother_middle_name']; ?></td>
								</tr>
								</table>
								</td>
								<td style="width: 180px;">
								<table>
								<tr>
								<td style="width: 140px; height: 7px; border: 1px solid black; text-align: center"> <?php echo $visitor_record['mother_last_name']; ?></td>
								</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td style="width: 180px;">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									First Name
								</td>
								<td style="width: 180px;">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									Middle Name
								</td>
								<td style="width: 180px;">
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									Last Name
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
	<!--UNIQUE IDENTIFIER CODE-->
		<div class="gray" style="text-align:center;background-color:#5A5A5A; font-weight:bold; color:#ffffff;">
			UNIQUE IDENTIFIER CODE
		</div>
		<!--4-->
		<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
			
			<tr style="font-size:9px;">
				<td rowspan="2" style="height: 3%; width: 3%; border: 1px solid black;">
				<span style="margin-top: 10px; margin-left: 5px; font-size:12px;">4</span>
				</td>
				<td style="width: 16.16%; border: 1px solid black;text-align: center;">
					<span style="margin-top: 5px;">
					First 2 letters of mother's real name</span>
				</td>
				<td style="width: 16.16%;border: 1px solid black;text-align: center;">
					<span style="margin-top: 5px;">
					First 2 letters of father's real name
					</span>
				</td>
				<td style="width: 16.16%;border: 1px solid black;text-align: center;">
					<span style="margin-top: 5px;">
					Birth Order
					</span>
				</td>
				<td style="width: 16.16%;border: 1px solid black;text-align: center;">
					<span style="margin-top: 5px;">
					Month of Birth
					</span>
				</td>
				<td style="width: 16.16%;border: 1px solid black;text-align: center;">
					<span style="margin-top: 5px;">
					Day of Birth
					</span>
				</td>
				<td style="width: 16.16%;border: 1px solid black;text-align: center;">
					<span style="margin-top: 5px;">
					Year of Birth
					</span>
				</td>
			</tr>
			<!--UIC Input Boxes-->
			<tr>
				<!--Mother's Name-->
				<td style="width: 16.16%; border: 1px solid black;">
					<table cellspacing="5">
						<tr>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['mother_index'][0] ?></td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['mother_index'][1] ?></td>
						</tr>
					</table>
				</td>
				<!--Father's Name-->
				<td style="width: 16.16%; border: 1px solid black;">
					<table cellspacing="5">
						<tr>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['father_index'][0] ?></td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['father_index'][1] ?></td>
						</tr>
					</table>
				</td>
				<!--Birth Order-->
				<td style="width: 16.16%; border: 1px solid black;">
					<table cellspacing="5">
						<tr>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['birth_order'][0] ?></td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['birth_order'][1] ?></td>
						</tr>
					</table>
				</td>
				<!--Month of Birth-->
				<td style="width: 16.16%; border: 1px solid black;">
					<table cellspacing="5">
						<tr>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['month_of_birth'][0] ?></td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['month_of_birth'][1] ?></td>
						</tr>
					</table>
				</td>
				<!--Day of Birth-->
				<td style="width: 16.16%; border: 1px solid black;">
					<table cellspacing="5">
						<tr>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['day_of_birth'][0] ?></td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['day_of_birth'][1] ?></td>
						</tr>
					</table>
				</td>
				<!--Father's Name-->
				<td style="width: 16.16%; border: 1px solid black;">
					<table cellspacing="5">
						<tr>
							<td>&nbsp;</td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['year_of_birth'][0] ?></td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['year_of_birth'][1] ?></td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['year_of_birth'][2] ?></td>
							<td style="width: 10px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['year_of_birth'][3] ?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<!--5-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style="width: 3%; height: 3%; border: 1px solid black;">
						<span style="margin-top: 5px; margin-left: 5px;">5</span>
					</td>
					<td style="width:5%; height: 3%;  border: 1px solid black; border-right:0px;">
						<span style="margin-top: 5px;"><b>&nbsp;Age: </b></span>
					</td>
					<td style="width:10%; height: 3%; border: 1px solid black; border-right:0px;">
						<span style="margin-top: 5px;">
						<table style="border-collapse: collapse;">
						<tr>
							<td style="width: 10px; height:6px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['age'][0] ?></td>
							<td style="width: 10px; height:6px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['age'][1] ?></td>
						</tr>
						</table>
						</span>
					</td>
					<td style="width:35%; border: 1px solid black; border-left: 0px; border-right:0px;">
						<span style="margin-top: 5px;">
							<b>Age in months</b> 
							<i>(for less than 1 year old):</i>
						</span>
					</td>
					<td style="width:10%; height: 3%; border: 1px solid black; border-left:0px; border-right:0px;">
						<span style="margin-top: 5px;">
						<table style="border-collapse: collapse;">
						<tr>
							<td style="width: 10px; height:6px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['age_in_months'][0] ?></td>
							<td style="width: 10px; height:6px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['age_in_months'][1] ?></td>
						</tr>
						</table>
						</span>
					</td>
					<td style="width:40%; height: 3%; border: 1px solid black; border-left:0px;">
						<span style="margin-top: 5px;">
						<b>Sex</b> (at birth):
						<img src="images/<?php if(!$m_sex_at_birth_check)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Male
						<img src="images/<?php if(!$f_sex_at_birth_check)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Female

						</span>
					</td>
					
				</tr>
			</table>

			<!--6-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style="height:6%; width: 3%; border: 1px solid black;" rowspan="3">
					<span style="margin-top: 15px; margin-left: 5px;">6</span>
					</td>
					<td style="width: 97%; border: 1px solid black; border-bottom:0px;" colspan="3">
						<span style="margin-top: 2px;">
							<b>Permanent Address: </b>
							<span style="text-decoration:underline;"> <?php echo $visitor_record['permanent_address']; ?></span><!--87 lines-->
						</span>
					</td>
				</tr>
				<tr>
					<td> <span style="margin-top: 2px;"><b>&nbsp;Current Place of Residence: </b> </span>
					</td>
					<td> <span style="margin-top: 2px;">Municipality/City: <span style="text-decoration:underline;"> <?php echo $visitor_record['residence_municipality_city']; ?></span></span> <!--28 lines-->
					</td>
					<td style="border-right: 1px solid black;"> 
					<span style="margin-top: 2px;">Province: <span style="text-decoration:underline;"> <?php echo $visitor_record['residence_province']; ?></span> </span> <!--28 lines-->
					</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid black;"> <span style="margin-top: 2px;"><b>&nbsp;Place of Birth: </b> </span>
					</td>
					<td style="border-bottom: 1px solid black;"> 
					<span style="margin-top: 2px;">
					Municipality/City: <span style="text-decoration:underline;"> <?php echo $visitor_record['birth_municipality_city']; ?></span> </span>  <!--28 lines-->
					</td>
					<td style="border-right: 1px solid black; border-bottom: 1px solid black;"> <span style="margin-top: 5px;">
					Province: <span style="text-decoration:underline;"> <?php echo $visitor_record['birth_province']; ?></span> </span> <!--28 lines-->
					</td>
				</tr>
			</table>

			<!--7-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style="height: 3%; width: 3%; border: 1px solid black;">
					<span style="margin-top: 5px; margin-left: 5px;">7</span>
					</td>
					<td style="width: 97%; border: 1px solid black;">
						<span style="margin-top: 5px;">
							<b>Contact Numbers:</b>
							<span style="text-decoration:underline;"> <?php echo $visitor_record['contact_numbers']; ?></span> <!--42 lines-->
							<b>Email:</b>
							<span style="text-decoration:underline;"> <?php echo $visitor_record['email_address']; ?></span> <!--42 lines-->	
						</span>
					</td>
				</tr>
			</table>

			<!--8-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style="height: 3%; width: 3%; border: 1px solid black;">
					<span style="margin-top: 5px; margin-left: 5px;">8</span>
					</td>
					<td style="width: 97%; border: 1px solid black;">
						<span style="margin-top: 5px;">
							<b>Nationality:</b>
							<img src="images/<?php if(!$nationality_f)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Filipino 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="images/<?php if(!$nationality_check)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Others, please specify:
							<span style="text-decoration:underline;"> <?php echo $nationality; ?></span> <!--42 lines-->	
						</span>
					</td>
				</tr>
			</table>

			<!--9-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style="height:4%; width: 3%; border: 1px solid black;" rowspan="2">
					<span style="margin-top: 15px; margin-left: 5px;">9</span>
					</td>
					<td rowspan="2" style="border-bottom: 1px solid black; width:34%;">
						<span style="margin-top: 2px;">
							<b>Highest Educational Attainment: </b>
						</span>
					</td>
					<td style="width:21%;"> 
					<span style="margin-top: 2px;">
						<img src="images/<?php if(!$hea_none)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> None
					</span>
					</td>
					<td style="width:21%;"> 
					<span style="margin-top: 2px;">
						<img src="images/<?php if(!$hea_hs)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Highschool
					</span>
					</td>
					<td style="width:21%;"> 
					<span style="margin-top: 2px;">
						<img src="images/<?php if(!$hea_voc)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Vocational
					</span>
					</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid black; width:21%;"> 
					<span style="margin-top: 2px;">
						<img src="images/<?php if(!$hea_elem)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Elementary
					</span>
					</td>
					<td style="border-bottom: 1px solid black; width:21%;"> 
					<span style="margin-top: 2px;">
						<img src="images/<?php if(!$hea_coll)echo 'u'; ?>chk.jpg"style="width:10px; height:10px;"> College
					</span>
					</td>
					<td style="border-bottom: 1px solid black; width:21%;"> 
					<span style="margin-top: 2px;">
						<img src="images/<?php if(!$hea_postgrad)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Post-Graduate
					</span>
					</td>
				</tr>
				
			</table>

			<!--10-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style="height: 3%; width: 3%; border: 1px solid black;">
					<span style="margin-top: 5px; margin-left: 2px;">10</span>
					</td>
					<td style="width: 97%; border: 1px solid black;">
						<span style="margin-top: 5px;">
							<b>Civil Status:</b>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="images/<?php if(!$civstat_single)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Single 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="images/<?php if(!$civstat_married)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Married
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="images/<?php if(!$civstat_separated)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Separated
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="images/<?php if(!$civstat_widowed)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Widowed
	
						</span>
					</td>
				</tr>
			</table>

			<!--11-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style="height: 3%; width: 3%; border: 1px solid black;">
					<span style="margin-top: 5px; margin-left: 2px;">11</span>
					</td>
					<td style="width: 97%; border: 1px solid black;">
						<span style="margin-top: 5px;">
							<b>Are you currently living with a partner?</b>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="images/<?php if(!$living_with_no)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> No 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="images/<?php if(!$living_with_yes)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Yes
	
						</span>
					</td>
				</tr>
			</table>

			<!--12-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style="height: 3%; width: 3%; border: 1px solid black;">
						<span style="margin-top: 5px; margin-left: 2px;">12</span>
					</td>
					<td style="height: 3%; border: 1px solid black; border-right:0px; width:18%;">
						<span style="margin-top: 5px;"><b>&nbsp;Number of Children: </b></span>
					</td>
					<td style="height: 3%; border: 1px solid black; border-right:0px; width:20%;">
						<span style="margin-top: 5px;">
						<table style="border-collapse: collapse;">
						<tr>
							<td style="width: 10px; height:6px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['number_of_children'][0]; ?></td>
							<td style="width: 10px; height:6px; text-align: center;border: 1px solid black;"><?php echo $visitor_record['number_of_children'][1]; ?></td>
							<td style="width: 10px; height:6px; text-align: center; border: 1px solid black;"><?php echo $visitor_record['number_of_children'][2]; ?></td>

						</tr>
						</table>
						</span>
					</td>
					<td style="border: 1px solid black; border-left: 0px; border-right:0px; width:41%;">
						<span style="margin-top: 5px;"><b>Are you presently pregnant?</b><i>(for females only)</i></span>
					</td>
					<td style="border: 1px solid black; border-left: 0px; width:20%;">
						<span style="margin-top: 5px;">
						<img src="images/<?php if(!$presently_pregnant_no)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> No
						&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/<?php if(!$presently_pregnant_yes)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Yes
						</span>
					</td>
					
				</tr>
			</table>

	<!--EMPLOYMENT-->
		<div class="gray" style=" text-align: center; background-color:#5A5A5A; font-weight:bold; color:#ffffff;">
			EMPLOYMENT
		</div>

		<!--13-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style="height:4%; width: 3%; border: 1px solid black;" rowspan="2">
					<span style="margin-top: 10px; margin-left: 2px;">13</span>
					</td>
					<td style="">
						<span style="margin-top: 2px;">
							<b>Current Occupation </b> (Please specify main source of income):
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<span style="text-decoration:underline;"> <?php echo $current_occupation; ?></span> <!--52 lines-->
						</span>
					</td>
				</tr>
				<tr>
					<td style="border-bottom: 1px solid black; width: 97%;">
						
						<span style="margin-top: 2px;">
						If no current work, what was previous occupation:
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;
						<span style="text-decoration:underline;"> <?php echo $prev_occupation; ?></span> <!--52 lines-->
						</span>
					</td>
				</tr>
				
			</table>

		<!--14-->
			<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
				<tr>
					<td style=" height:11%; width: 3%; border: 1px solid black;" rowspan="5">
					<span style="margin-top: 25px; margin-left: 2px;">14</span>
					</td>
					<td style="height:1.5%;">
						<span style="margin-top: 2px;">
							<b>Did you work overseas/abroad in the past 5 years?</b>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="images/<?php if(!$work_abroad_n)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> No
							&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="images/<?php if(!$work_abroad_y)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Yes
						
						</span>
					</td>
				</tr>
				<tr>
					<td style="height:1.5%;">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						If yes, when did you return from your last contract?	
					</td>
					
					<td style="height:1.5%;">
					<table style="border-collapse: collapse;">
					<tr>
						<td style="width:10px; height:7px; text-align: center;border: 1px solid black;"><?php echo $work_abroad_month[0]; ?></td>
						<td style="width:10px; height:7px; text-align: center;border: 1px solid black;"><?php echo $work_abroad_month[1]; ?></td>

					</tr>
					</table>
					</td>

					<td style="height:1.5%;">
					<table style="border-collapse: collapse;">
					<tr>
						<td style=" width:10px; height:7px; text-align: center;border: 1px solid black;"><?php echo $work_abroad_year[0]; ?></td>
						<td style=" width:10px; height:7px; text-align: center;border: 1px solid black;"><?php echo $work_abroad_year[1]; ?></td>
						<td style=" width:10px; height:7px; text-align: center;border: 1px solid black;"><?php echo $work_abroad_year[2]; ?></td>
						<td style=" width:10px; height:7px; text-align: center;border: 1px solid black;"><?php echo $work_abroad_year[3]; ?></td>
					</tr>
					</table>
					</td>
				</tr>
				<tr>
					<td style="height:1.5%;"></td>
					<td style="font-size: 8px;height:1.5%;">&nbsp;&nbsp; Month </td>
					<td style="font-size: 8px; height:1.5%;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp; 
					Year 
					</td>
				</tr>
				<tr>
					<td style="height:1.5%;">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						Where were you based?		
					</td>
					<td style="height:1.5%;">
						<img src="images/<?php if(!$work_abroad_based_ship)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> On a ship	
					</td>
					<td style="height:1.5%;">
						<img src="images/<?php if(!$work_abroad_based_land)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Land
					</td>
					
				</tr>
				<tr>
					<td style="border-bottom: 1px solid black; height:1.5%; width:48%">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
						
					What country did you last work in?
					
					</td>
					<td style="border-bottom: 1px solid black; height:1.5%; width:48%;">
					<span style="text-decoration:underline;"> <?php echo $visitor_record['work_abroad_country']; ?></span> <!--45 lines-->	
					</td>
				</tr>
			</table>

</div>

<!--Footer-->
<div style="margin: auto; width:87%; text-align: center; font-size:9px;">
	PERSONAL INFORMATION SHEET (DOH-NEC FORM A 2014)
</div>
<br>
<br>
<br>
<br>
<br>

<!--BOX 3 Page 2: Reason for HIV Test-->
<div style="width: 87%; height:83%; border: 3px solid black; margin:auto; margin-top:10px; padding: 0px; overflow:hidden;">
	<!--REASON FOR HIV TEST-->
	<div class="gray" style="background-color:#5A5A5A; font-weight:bold; color:#ffffff; text-align:center;">
		REASON FOR HIV TEST
	</div>

	<!--15-->
	<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
	<tr>
		<td style="height:10%; width: 3%; border: 1px solid black;" rowspan="7">
		<span style="margin-top: 40px; margin-left: 2px;">15</span>
		</td>
		<td>
			<span style="margin-top: 5px;">
			<b>Reason for HIV Testing: (check all that apply)</b>
			</span>
		</td>
	</tr>
	<tr>
		<td style="width:32.31%;">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/<?php if(!$reasonmother)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Mother is infected with HIV</td>
		<td style="width:32.31%;"><img src="images/<?php if(!$reasonreceived)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Received blood transfusion</td>
		<td style="width:32.31%;"><img src="images/<?php if(!$reasontb)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > TB patient</td>
	</tr>
	<tr>
		<td style="width:32.31%;">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/<?php if(!$reasonsex)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Sex partner is infected with HIV</td>
		<td style="width:32.31%;"><img src="images/<?php if(!$reasonwants)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Wants to know HIV status</td>
		<td style="width:32.31%;"><img src="images/<?php if(!$reasonactive)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Active Hepatitis B/C</td>
	</tr>
	<tr>
		<td style="width:32.31%;">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/<?php if(!$reasonshared)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Shared needles/syringes with IDUs </td>
		<td style="width:32.31%;"><img src="images/<?php if(!$reasonrecheck)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Re-check previous HIV test result</td>
		<td style="width:32.31%;"><img src="images/<?php if(!$reasonno)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > No particular reason</td>
	</tr>
	<tr>
		<td style="width:32.31%;">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/<?php if(!$reasonaccidental)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Accidental needle prick</td>
		<td style="width:32.31%;"><img src="images/<?php if(!$reasonemploymentlocal)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Employment - Local/In the Philippines</td>
		<td style="width:32.31%;"><img src="images/<?php if(!$reasonother)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > 
			Other (pls specify):
		</td>
	</tr>
	<tr>
		<td style="width:32.31%;">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/<?php if(!$reasonrecommended)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Recommended by physician</td>
		<td style="width:32.31%;"><img src="images/<?php if(!$reasonemploymentoverseas)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Employment - Overseas/Abroad</td>

		<td style="width:32.31%;">
			<span style="text-decoration:underline;"> <?php echo $reasonothertext; ?></span> <!--30 lines-->
		</td>
	</tr>
	<tr>
		<td style="width:32.31%; border-bottom: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/<?php if(!$reasonrequirement)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Requirement for insurance</td>
		<td style="width:64.62%; border-bottom: 1px solid black;"><img src="images/<?php if(!$reasonpregnant)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Pregnant</td>
		
	</tr>
	</table>
	<!--HISTORY OF EXPOSURE-->
	<div class="gray" style="background-color:#5A5A5A; font-weight:bold; color:#ffffff; text-align:center;">
		HISTORY OF EXPOSURE
	</div>

	<!--16-->
		<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
			<tr>
				<td style="height: 3%; width: 3%; border: 1px solid black;">
				<span style="margin-top: 5px; margin-left: 2px;">16</span>
				</td>
				<td style="width: 97%; border: 1px solid black;">
					<span style="margin-top: 5px;">
						<b>Was your birth MOTHER infected with HIV when you were born?</b>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/<?php if(!$historyno)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> No 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<img src="images/<?php if(!$historyyes)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Yes

					</span>
				</td>
			</tr>
		</table>

	<!--17-->
	<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
		<tr>
			<td style="height:18%; width: 3%; border: 1px solid black;" rowspan="9">
			<span style="margin-top: 60px; margin-left: 2px;">17</span>
			</td>
			<td style="width:45%;">
				<span style="margin-top: 5px;">
				<b><i>Answer all.</i> Have you experienced any of the following?</b>
				</span>
			</td>
			<td style="width:17%;"></td>
			<td style="width:35%;">
				<span style="margin-top: 5px;">
				(If yes, state the MOST RECENT year)
				</span>
			</td>
		</tr>
		<tr>
			<td style="width:45%; ">&nbsp;&nbsp;&nbsp;&nbsp;Received blood transfusion</td>
			<td style="width:17%;"><img src="images/<?php if(!$rbtno)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/<?php if(!$rbtyes)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Yes</td>
			<td style="width:35%;">If yes, what year: <span style="text-decoration: underline;"> <?php echo $rbtyear; ?></span></td> <!--10 lines-->
		</tr>
		<tr>
			<td style="width:45%; ">&nbsp;&nbsp;&nbsp;&nbsp;Injected drugs without doctor's advice </td>
			<td style="width:17%;"><img src="images/<?php if(!$injectedno)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/<?php if(!$injectedyes)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Yes</td>
			<td style="width:35%;">If yes, what year: <span style="text-decoration: underline;"> <?php echo $injectedyear; ?></span> </td> <!--10 lines-->
		</tr>
		<tr>
			<td style="width:45%; ">&nbsp;&nbsp;&nbsp;&nbsp;Accidental needle prick </td>
			<td style="width:17%;"><img src="images/<?php if(!$npno)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/<?php if(!$npyes)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Yes</td>
			<td style="width:35%;">If yes, what year: <span style="text-decoration: underline;"> <?php echo $npyear; ?></span> </td> <!--10 lines-->
		</tr>
		<tr>
			<td style="width:45%; ">&nbsp;&nbsp;&nbsp;&nbsp;Sexually transmitted infections (STI)</td>
			<td style="width:17%;"><img src="images/<?php if(!$stino)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/<?php if(!$stiyes)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Yes</td>
			<td style="width:35%;">If yes, what year: <span style="text-decoration: underline;"> <?php echo $stiyear; ?></span> </td> <!--10 lines-->
		</tr>
		<tr>
			<td style="width:45%; ">&nbsp;&nbsp;&nbsp;&nbsp;Sex with a <u>female</u> with no condom </td>
			<td style="width:17%;"><img src="images/<?php if(!$sfno)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/<?php if(!$sfyes)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Yes</td>
			<td style="width:35%;">If yes, what year: <span style="text-decoration: underline;"> <?php echo $sfyear; ?></span> </td> <!--10 lines-->
		</tr>
		<tr>
			<td style="width:45%; ">&nbsp;&nbsp;&nbsp;&nbsp;Sex with a <u>male</u> with no condom </td>
			<td style="width:17%;"><img src="images/<?php if(!$smno)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/<?php if(!$smyes)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Yes</td>
			<td style="width:35%;">If yes, what year: <span style="text-decoration: underline;"> <?php echo $smyear; ?></span> </td> <!--10 lines-->
		</tr>
		<tr>
			<td style="width:45%; ">&nbsp;&nbsp;&nbsp;&nbsp;Sex with a person in prostitution</td>
			<td style="width:17%;"><img src="images/<?php if(!$spno)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/<?php if(!$spyes)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Yes</td>
			<td style="width:35%;">If yes, what year: <span style="text-decoration: underline;"> <?php echo $spyear; ?></span> </td> <!--10 lines-->
		</tr>
		<tr>
			<td style="width:45%; border-bottom: 1px solid black;">&nbsp;&nbsp;&nbsp;&nbsp;Regularly accept payment for sex</td>
			<td style="width:17%; border-bottom: 1px solid black;">
			<img src="images/<?php if(!$psno)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="images/<?php if(!$psyes)echo 'u'; ?>chk.jpg"" style="width:10px; height:10px;" > Yes
			</td>
			<td style="width:35%; border-bottom: 1px solid black;">If yes, what year: <span style="text-decoration: underline;"> <?php echo $psyear; ?></span> </td> <!--10 lines-->
		</tr>
		
	</table>

	<!--SEXUAL PARTNERS-->
	<div class="gray" style="background-color:#5A5A5A; font-weight:bold; color:#ffffff; text-align:center;">
		SEXUAL PARTNERS
	</div>

	<!--18-->
	<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
		<tr>
			<td style="height:6%; width: 3%; border: 1px solid black;" rowspan="3">
			<span style="margin-top: 25px; margin-left: 2px;">18</span>
			</td>
			<td style="height:2%;">
				<span style="margin-top: 5px;">
				<b><i>Answer both.</i> If none, write "0" in the box.</b>
				</span>
			</td>
		</tr>
		<tr>
			<td style="height:2%; width:42%;">&nbsp;&nbsp;&nbsp;&nbsp;How many FEMALE sex partners have you ever had? </td>
			<td style="height:2%; width:17%;">
				<table cellspacing="0">
					<tr>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $fsp[0]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $fsp[1]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $fsp[2]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $fsp[3]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $fsp[4]; ?></td>
					</tr>
				</table>
			</td>
			<td style="height:2%; width:38%;">
			&nbsp;&nbsp;Year of last sex with a female: <span style="text-decoration:underline;"><?php echo $fspyear; ?></span>
			</td> <!--10 lines-->
		</tr>
		<tr>
			<td style="height:2%; width:42%; border-bottom: 1px solid black;">
			&nbsp;&nbsp;&nbsp;
			How many MALE sex partners have you ever had? 
			</td>
			<td style="height:2%; width:17%; border-bottom: 1px solid black;">
				<table cellspacing="0">
					<tr>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $msp[0]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $msp[1]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $msp[2]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $msp[3]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $msp[4]; ?></td>
					</tr>
				</table>
			</td>
			<td style="height:2%; width:38%; border-bottom: 1px solid black;">
			&nbsp;&nbsp;Year of last sex with a male: <span style="text-decoration:underline;"><?php echo $mspyear; ?></span>
			</td> <!--12 lines-->
		</tr>
		
	</table>

	<!--HIV TESTING-->
	<div class="gray" style="background-color:#5A5A5A; font-weight:bold; color:#ffffff; text-align:center;">
		HIV TESTING
	</div>
	<!--19-->
	<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
		<tr>
			<td style="height:10%; width: 3%; border: 1px solid black;" rowspan="5">
			<span style="margin-top: 45px; margin-left: 2px;">19</span>
			</td>
			<td style="width: 35%;">
			<span style="margin-top: 5px;">
				<b>Have you ever been tested for HIV before?</b> 
			</span>
			</td>
			<td style="width: 10%;">
				<span style="margin-top: 5px;">
				<img src="images/<?php if(!$hiv_testingno)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > No
				</span>
			</td>
			<td style="width: 52%;">
				<span style="margin-top: 5px;">
				<img src="images/<?php if(!$hiv_testingyes)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;" > Yes
				</span>
			</td>
		</tr>
		<tr>
			<td style="width: 35%;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			If yes, when was the most recent test?
			</td>
			<td style="width: 10%;">
				<table cellspacing="0">
					<tr>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $month_last_test[0]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $month_last_test[1]; ?></td>
					</tr>
				</table>
			</td>
			<td style="width: 52%;">
				<table cellspacing="0">
					<tr>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $year_last_test[0]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $year_last_test[1]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $year_last_test[2]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $year_last_test[3]; ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="width: 35%;"></td>
			<td style="width: 10%; font-size: 8px;">&nbsp;&nbsp;Month</td>
			<td style="width: 52%;font-size: 8px;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;
			Year
			</td>
		</tr>
		<tr>
			<td colspan="3">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Which testing facility did you have the test? <span style="text-decoration:underline;"><?php echo $testing_site; ?> </span> <!--20 lines-->
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Municipality/City: <span style="text-decoration:underline;"><?php echo $testing_city; ?> </span> <!--20 lines-->
			</td> 
			
		</tr>
		<tr>
			<td colspan="3" style="border-bottom: 1px solid black;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			What was the result?
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="images/<?php if(!$result_before_positive)echo 'u'; ?>chk.jpg"" style="width:10px; height:10px;"> Positive
			&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="images/<?php if(!$result_before_negative)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Negative
			</td>
		</tr>
	</table>
	<!--Form Break-->
	<hr style="height: 1px;">

	<!--To be filled up by PHYSICIAN, CLINIC STAFF or COUNSELOR only-->
	<div class="gray" style="background-color:#5A5A5A; font-weight:bold; color:#ffffff; text-align:center;">
		To be filled up by PHYSICIAN, CLINIC STAFF or COUNSELOR only
	</div>
	<!--20-->
	<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
		<tr>
			<td style="height:6%; width: 3%; border: 1px solid black;" rowspan="3">
			<span style="margin-top: 25px; margin-left: 2px;">20</span>
			</td>
			<td style="width:15%;"><span style="margin-top:5px;"><b>Clinical Picture: </b></span></td>
			<td style="width:15%;"><span style="margin-top:5px;"><img src="images/<?php if(!$clinical_pic_asymp)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Asymptomatic</span></td>
			<td style="width:67%;""><span style="margin-top:5px;"></span></td>
		</tr>
		<tr>
			<td style="width:15%;"></td>
			<td style="width:15%;"><img src="images/<?php if(!$clinical_pic_symp)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Symptomatic</td>
			<td style="width:67%;">
			Describe S/Sx: 
			<span style="text-decoration:underline;"><?php echo $description_ssx; ?> </span> <!--58 lines-->
			</td> 
		</tr>
		<tr>
			<td colspan="3" style="border-bottom: 1px solid black;">
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 World Health Organization (WHO) Staging:
				 <span style="text-decoration:underline;"><?php echo $who_staging; ?> </span>  <!--15 lines-->
				 &nbsp;&nbsp;&nbsp;&nbsp;
				 <img src="images/<?php if(!$no_avail_physician)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;">
				 &nbsp;&nbsp;
				 No physician available to do staging
			</td>
		</tr>
	</table>

	<!--To be filled up by TESTING FACILITY only-->
	<div class="gray" style="background-color:#5A5A5A; font-weight:bold; color:#ffffff; text-align:center;">
		To be filled up by TESTING FACILITY only
	</div>

	<!--21-->
	<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
		<tr>
			<td style="height:8%; width: 3%; border: 1px solid black;" rowspan="4">
				<span style="margin-top: 30px; margin-left: 2px;">21</span>
			</td>
			<td colspan="4">
			<span style="margin-top:5px;">
			<b>Name of Testing Facility: </b>
			&nbsp;&nbsp;
			<span style="text-decoration:underline;"> <?php echo $testing_facility_record['facility_name']; ?></span> <!--80 lines-->
			</span>
			</td>
		</tr>
		<tr>
			<td style="width: 18%;"><b>&nbsp;HIV EQAS Lab Code: </b></td>
			<td style="width: 20%;"><span style="text-decoration:underline;"> <?php echo $testing_facility_record['hiv_eqas_lab_code']; ?></span></td> <!--20 lines-->
			<td style="width: 30.25%;"><b>Year last participated in HIV EQAS: </b></td>
			<td style="width: 28.75%;"><span style="text-decoration:underline;"> <?php echo $testing_facility_record['hiv_eqas_last_year']; ?></span></td> <!--28 lines-->
		</tr>
		<tr>
			<td colspan="4">
			<span style="margin-top:5px;">
			<b>Complete Mailing Address: </b>
			<span style="text-decoration:underline;"> <?php echo $testing_facility_record['mailing_address']; ?></span> <!--80 lines-->
			</span>
			</td>
		</tr>
		<tr>
			<td style="width: 18%; border-bottom: 1px solid black;"><b>&nbsp;Contact Numbers: </b></td>
			<td style="width: 20%; border-bottom: 1px solid black;">
			<span style="text-decoration:underline;"> <?php echo $testing_facility_record['contact_numbers']; ?></span> <!--20 lines-->
			</td> 
			<td style="border-bottom: 1px solid black;" colspan="2"><b>Email address:</b>
			<span style="text-decoration:underline;"> <?php echo $testing_facility_record['email_address']; ?></span> <!--49 lines-->
			</td>  
		</tr>
	</table>

	<!--22-->
	<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
		<tr>
			<td style="height:8%; width: 3%; border: 1px solid black;" rowspan="4">
				<span style="margin-top: 30px; margin-left: 2px;">22</span>
			</td>
			<td colspan="8">
				<span style="margin-top:5px;"><b>&nbsp;Name of Medical Technologist: </b>
				<span style="text-decoration:underline;"> <?php echo $medtech_whole_name; ?></span>
				</span>
			</td>
		</tr>
		<tr>
			<td colspan="8">
				<b>&nbsp;HIV Proficiency Number: </b>
				<span style="text-decoration:underline;"> <?php echo $medtech_hiv_proficiency_number; ?></span> <!--40 lines-->
			</td>
		</tr>
		<tr>
			<td><b>&nbsp;Date Issued: </b></td>
			<td>
				<table cellspacing="0">
					<tr>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['month_issued'][0]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['month_issued'][1]; ?></td>
					</tr>
				</table>
			</td>
			<td>
				<table cellspacing="0">
					<tr>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['day_issued'][0]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['day_issued'][1]; ?></td>
					</tr>
				</table>
			</td>
			<td>
				<table cellspacing="0">
					<tr>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['year_issued'][0]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['year_issued'][1]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['year_issued'][2]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['year_issued'][3]; ?></td>
					</tr>
				</table>
			</td>
			<td><b>Expiration Date: </b></td>
			<td>
				<table cellspacing="0">
					<tr>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['month_expired'][0]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['month_expired'][1]; ?></td>
					</tr>
				</table>
			</td>
			<td>
				<table cellspacing="0">
					<tr>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['day_expired'][0]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['day_expired'][1]; ?></td>
					</tr>
				</table>
			</td>
			<td>
				<table cellspacing="0">
					<tr>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['year_expired'][0]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['year_expired'][1]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['year_expired'][2]; ?></td>
						<td style="width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_medtech_record['year_expired'][3]; ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="width:12.125%;border-bottom: 1px solid black;"></td>
			<td style="width:8%;font-size: 8px; border-bottom: 1px solid black;">&nbsp;&nbsp; Month </td>
			<td style="width:8%;font-size: 8px; border-bottom: 1px solid black;">&nbsp;&nbsp;&nbsp; Day </td>
			<td style="width:12.125%;font-size: 8px; border-bottom: 1px solid black;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;
			 Year 
			 </td>
			<td style="width:12.125%;border-bottom: 1px solid black;"></td>
			<td style="width:8%;font-size: 8px; border-bottom: 1px solid black;">&nbsp;&nbsp; Month </td>
			<td style="width:8%;font-size: 8px; border-bottom: 1px solid black;"> &nbsp;&nbsp;&nbsp; Day </td>
			<td style="width:28.625%;font-size: 8px; border-bottom: 1px solid black;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp; 
			Year 
			</td>
		</tr>
	</table>

	<!--23-->
		<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
			<tr>
				<td style="height: 2%; width: 3%; border: 1px solid black;">
				<span style="margin-top: 5px; margin-left: 2px;">23</span>
				</td>
				<td style="width: 97%; border: 1px solid black;">
					<span style="margin-top: 5px;">
						<b>Name of Counselor (with signature): </b>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<span style="text-decoration:underline;"><?php echo $counselor_name; ?> </span> <!--70 lines-->
					</span>
				</td>
			</tr>
		</table>
	<!--To be filled up by SACCL only-->
	<div class="gray" style="background-color:#5A5A5A; font-weight:bold; color:#ffffff; text-align:center;">
			To be filled up by SACCL only
	</div>

	<!--24-->
	<table style="border-collapse:collapse; border: 1px solid black; width:100%;">
		<tr>
			<td style="height:6%; width: 3%; border: 1px solid black;" rowspan="4">
				<span style="margin-top: 30px; margin-left: 2px;">24</span>
			</td>
			<td style="width:21.32%; height:2.5%;">
				<span style="margin-top:5px;"><b>&nbsp;SACCL Laboratory Code: </b>
				</span>
			</td>
			<td style="width:22.16%; height:2.5%;">
				<table style="margin-top: 5px;" cellspacing="0">
					<tr>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['saccl_lab_code'][0]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['saccl_lab_code'][1]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['saccl_lab_code'][2]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['saccl_lab_code'][3]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['saccl_lab_code'][4]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['saccl_lab_code'][5]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['saccl_lab_code'][6]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['saccl_lab_code'][7]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['saccl_lab_code'][8]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['saccl_lab_code'][9]; ?></td>
					</tr>
				</table>
			</td>
			<td style="width:16.16%; height:2.5%;">
				<span style="margin-top:5px;"><b>Date HIV Confirmed: </b>
				</span>
			</td>
			<td style="width:8%; height:2.5%;">
				<table style="margin-top:5px;" cellspacing="0">
					<tr>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['month_hiv_confirmed'][0]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['month_hiv_confirmed'][1]; ?></td>
					</tr>
				</table>
			</td>
			<td style="width:8%; height:2.5%;">
				<table style="margin-top:5px;" cellspacing="0">
					<tr>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['day_hiv_confirmed'][0]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['day_hiv_confirmed'][1]; ?></td>
					</tr>
				</table>
			</td>
			<td style="width:21.32%; height:2.5%;">
				<table style="margin-top:5px;" cellspacing="0">
					<tr>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['year_hiv_confirmed'][0]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['year_hiv_confirmed'][1]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['year_hiv_confirmed'][2]; ?></td>
						<td style="margin-top: 5px; width: 10px; height: 7px; border: 1px solid black; text-align: center;"><?php echo $patient_saccl_record['year_hiv_confirmed'][3]; ?></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="height:1%;"></td>
			<td style="height:1%;"></td>
			<td style="height:1%;"></td>
			<td style="height:1%; font-size: 8px;">&nbsp;&nbsp; Month </td>
			<td style="height:1%; font-size: 8px;">&nbsp;&nbsp;&nbsp; Day </td>
			<td style="height:1%; font-size: 8px;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;
			Year </td>
		</tr>
		<tr>
			<td colspan="2" style="border-bottom: 1px solid black; height:2.5%;"><b>HIV Results Confirmed by: </b>
			______________________________ <!--30 lines-->
			</td>
			<td colspan="4" style="border-bottom: 1px solid black; height:2.5%;">
				<b>Test: </b>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="images/<?php if(!$saccl_test_western_blot)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> Western Blot
				&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="images/<?php if(!$saccl_test_pcr)echo 'u'; ?>chk.jpg" style="width:10px; height:10px;"> PCR for infants
			</td>
		</tr>
		
		</table>
		<div style="font-size: 8px; font-weight:bold; text-align: center;">END</div>
</div>
<!--Footer-->
<div style="margin: auto; width:87%; text-align: center; font-size:9px;">
	PERSONAL INFORMATION SHEET (DOH-NEC FORM A 2014)
</div>
<!--UIC-->
<div style="margin: auto; width:87%; text-align: center; font-size:14px;">
	UIC: <?php 
		echo $visitor_record['mother_index'][0].$visitor_record['mother_index'][1].'-'.
			 $visitor_record['father_index'][0].$visitor_record['father_index'][1].'-'.
			 $visitor_record['birth_order'][0].$visitor_record['birth_order'][1].'-'.
			 $visitor_record['month_of_birth'][0].$visitor_record['month_of_birth'][1].'-'.
			 $visitor_record['day_of_birth'][0].$visitor_record['day_of_birth'][1].'-'.
			 $visitor_record['year_of_birth'][0].$visitor_record['year_of_birth'][1].
			 $visitor_record['year_of_birth'][2].$visitor_record['year_of_birth'][3];
	 ?>
</div>

</body>
</html>

<!--PDF Generator-->

<?php

    $content = ob_get_clean();
    //TEMPORARY CODE
    
    	// For localhost
    	require_once(dirname(__FILE__).'\html2pdfv4\html2pdf.class.php');

    	// For agila
    	//require_once(dirname(__FILE__).'/html2pdfv4/html2pdf.class.php');
    try
    {
		$html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15', array('80mm', '100mm', '100mm', '100mm')); 
        $html2pdf->writeHTML($content);
		// $html2pdf->pdf->IncludeJS("print(true);"); // Print the HTML
        $html2pdf->Output('DOH Form.pdf');
        exit;
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    
?>