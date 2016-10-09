<?php
/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 */

    ob_start();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <title>Exemple d'auto génération de PDF</title>
    </head>
	<page style="font-size: 10pt" mL="2mm" mT="2mm" mR="2mm" mB="2mm">
    <body style="font-family: arial;
font-size:10px;
font-weight:20px;
width:720px;
>
<?php


?>
<div class=FDAwrapper style="margin-top:30px; margin-left:30px; margin-bottom:0; padding:0; width:720px;
">
   <table class=FDAheader style="border:none;
font-size: 10px;
font-weight: bold;
margin-bottom: 0;">
	 <tr>  <td id=tab1 style="width:400px;">SUSPECTED ADVERSE REACTIONS FORM v 5 (4/2012)</td> <td id=tab2>For FDA use only All reports are confidential </td></tr>
	 <tr>  <td id=tab1><i>''Saving Lives Through Vigilant Reporting''</i></td>	 <td id=tab2>AER No </td></tr>
	 <tr>  <td id=tab1><i>*FIELDS MUST BE COMPLETED </i></td>					 <td id=tab2>Date received: <div class=underline style="border-bottom: 1px solid black; height:10px; width: 150px;" type=text ></div> </td> </tr>
	</table>
	</div>
	<div class=FDAwrapper style="margin:30px; margin-top:0; margin-bottom:0; padding:0; width:720px; border:1px solid black;
">
	   <div class=greenLabel style="font-family:arial;
text-align:left;
background-color: #0C9C60;
border:1px solid black;
color:white;
font-size:10px;
padding: 2px;
padding-left:8px;
font-weight: bold;
margin-top:0;">   PATIENT'S PARTICULARS</div>  
  <div class=con style="padding-left:10px;
 width:720px;"> 
  <table style="
font-family: arial;
font-size:11px;
font-weight:20px;
border-collapse:collapse;">
  <tr><td colspan=2>
		   <b>*Patient's Name or Initials:</b> <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 200px;" type=text ></div>
		   <b>Sex:</b>     <input type=radio id=fdasexM value=male /><label>Male</label> <input type=radio id=fdasexF value=female /><label for=fdasexF>Female</label>
		   <b>Weight </b>          				<div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 60px;" type=text ></div> Kg
		   <b>Height (cm)</b>          				<div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 60px;" type=text ></div>
   </td> </tr>
		 <tr>  <td colspan=2>
		   <b>Address or Contact Number:</b>  <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 200px;" type=text ></div>
		   <b>Age:</b>    <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 60px;" type=text ></div>
		   <b>Date of Birth(mm/dd/yr)</b>      <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 100px;" type=text ></div>
		 </td>
		 </tr>
		 <tr><td>
		    <b>Medical History/Admitting Diagnosis:</b>         <div class=underline style="border-bottom: 1px solid black; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 160px;" type=text ></div>
			</td><td>
		   <b>Ethnic Group:</b>         
		   <input type=radio name=ethnicgroup id=eg1 /><label for=eg1>Filipino </label>
		   <input type=radio name=ethnicgroup id=eg2 /><label for=eg2>Chinese</label>
		   <input type=radio name=ethnicgroup  id=eg3 /><label for=eg3>Caucasian</label>
					 </td>
		   </tr>
		   <tr><td>
		   <b>Any known allergy:</b>  
			 [ ] Yes [ ] No  
				  ,Specify: <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 210px;" type=text ></div>
			</td>
			<td>
		   <b>Pregnancy Status:</b>  
					No  
		   </td>
			</tr>
			<tr><td>
		   <b>Hospital facility/if admitted:</b>
		   <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 300px;" type=text ></div>
		   </td><td> Yes  <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 80px;" type=text ></div></td> 
		  </tr>
	</table>
   </div>
		<div class=greenLabel style="font-family:arial;
text-align:left;
background-color: #0C9C60;
border:1px solid black;
color:white;
font-size:10px;
padding: 2px;
padding-left:8px;
font-weight: bold;
width: 100%;
margin-top:0;">      *DETAILS OF THE ADVERSE REACTION  </div>
   <div class=con style="padding-left:10px;  width:720px; margin:0px; padding:0px;">
		<table style="font-family: arial; font-size:10px; padding:0px;margin:0px;">
		  <tr> <td> <b>Date of Onset:</b><div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 70px;" type=text ></div>
		  [_]am [_]pm  </td>
				<td><b>Do you consider the reaction to be serious?</b> </td>
				<td style="margin-right:0px; ">[_]Yes, if yes indicate why:[_]No </td>
		 </tr> 
			<tr>  <td colspan="2" rowspan="2">
					<br/>        
					<div  name=fdaReaction style="width: 430px;
		height:200px;border:1px solid black; "><b style="font-family:times;">Describe the reaction, including pertinent laboratory data:</b> </div>
				   </td>
				   <td style="margin:0; padding:0;">
					<ul id=ulRS style="padding-left:0px;
		 margin-right:0px; margin-left:0px; 	 ">
						<li>Patient died due to reaction</li>
						<li>Involved or prolonged in-patient hospitalization</li>
						<li>Life threatening</li>
						<li>Involved persistent or significant disability</li>
						<li>Congenital anomaly in the newborn</li>
						<li>Other outcome, please give details:</li>
					</ul>
				   </td>
			</tr>
			<tr style="padding:0;"><td style="border: 1px solid bottom;"><b>Can this be due to Medication Error?</b>[_]No  <br/>
					 [_]Yes ,if yes, which type
						  <ul id=ulMe style="display:list; margin-left:60px; padding:0;">
							<li>Prescribing</li>
							<li>Transcription</li>
							<li>Dispensing</li>
							<li>Administration</li>
						  </ul>
					</td></tr>
			</table><br/>
			<table style="width:500px;
		font-family: arial;
		font-size:11px;
		font-weight:20px;
		padding:0;
		overflow:hidden; margin:0;
		">
			<tr><td>Can the adverse reaction be due to: </td> </tr>
				   <tr><td>
					<b>Product Quality Defect:</b> 
					[_]No  
					[_]Yes  ,Specify:  <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 400px;" type=text ></div>
				   </td></tr>
				   <tr><td>
					<b>Therapeutic Failure:</b> 
					 [_]No 
					 [_]Yes  
						  Specify: <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 400px;" type=text ></div>
				   </td></tr>  
			</table>   
	</div>
	<div class=con style="padding:0px;">
	   <table class=sus style=" width:720px;
margin:0px;
padding:0px; border-collapse:collapse; 
">
	   <tr class=greenLabel style="font-family:arial;
text-align:left;
background-color: #0C9C60;
border:1px solid black;
color:white;
font-size:10px;
padding: 2px;
padding-left:8px;
font-weight: bold;
width: 100%;
margin-top:0;">
	   <td style="border: 1px solid black;
margin:0; width:198px;
padding:4px;">*Suspected drug product(s)<br/>Indicate brand name</td>
		<td style="border: 1px solid black;
margin:0; 
padding:4px;">Daily Dose</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px; width:60px;">Route</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">Date<br/> started</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">Date<br/> stopped</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px; width:152px;">Reason (s) for using <br/>the product<br/> (Indication)</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">Manufacturer and <br/>Batch/Lot #</td>
		</tr>
		<tr>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">a </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">d  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">oral  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">09/10/11</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;" >10/11/12  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">  ada</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">ad </td>
		</tr>
		<tr>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">a </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">d  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">sf  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">s</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;" >qw  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">  ada</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">ad </td>
		</tr>
		<tr>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">a </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">d  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">sf  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">s</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;" >qw  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">  ada</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">ad </td>
		</tr>
		</table>  
</div>
<div class=greenLabel style="font-family:arial;
text-align:left;
background-color: #0C9C60;
color:white;
font-size:10px;
padding: 2px;
padding-left:8px;
font-weight: bold;
margin-top:0;"><i>List all other drug/s taken at the same time and/ or 3 months before. If none, check box. [_] No Other drug/s taken <br/> </i></div>
	<div class=con style="padding:0px;">
	   <table class=sus style=" width:720px;
margin:0px;
padding:0px; border-collapse:collapse; 
">
	   <tr class=greenLabel style="font-family:arial;
text-align:left;
background-color: #0C9C60;
border:1px solid black;
color:white;
font-size:10px;
padding: 2px;
padding-left:8px;
font-weight: bold;
margin-top:0;">
		<td style="border: 1px solid black;
margin:0; width:198px;
padding:4px;">Brand name of the drug</td>
		<td style="border: 1px solid black;
margin:0; 
padding:4px;">Daily Dose</td>
		<td style="border: 1px solid black;
margin:0; 
padding:4px; width:60px;">Route</td>
		<td style="border: 1px solid black;
margin:0; 
padding:4px;">Date<br/> started</td>
		<td style="border: 1px solid black;
margin:0; 
padding:4px;">Date<br/> stopped</td>
		<td style="border: 1px solid black;
margin:0; 
padding:4px; width:152px;">Reason/s for using the <br/> drug</td>
		<td style="border: 1px solid black;
margin:0; 
padding:4px;">Manufacturer and <br/> Batch & Lot No.</td>
		</tr>
				<tr>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">a </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">d  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">oral </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">09/10/11</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;" >10/11/12  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">  ada</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">ad </td>
		</tr>
						<tr>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">a </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">d  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">sf  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">s</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;" >qw  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">  ada</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">ad </td>
		</tr>
						<tr>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">a </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">d  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">sf  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">s</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;" >qw  </td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">  ada</td>
		<td style="border: 1px solid black;
margin:0;
padding:4px;">ad </td>
		</tr>
		</table>  
</div>
		<div class=greenLabel style="font-family:arial;
text-align:left;
background-color: #0C9C60;
border:1px solid black;
color:white;
font-size:10px;
padding: 2px;
padding-left:8px;
font-weight: bold;
margin-top:0;">*MANAGEMENT OF ADVERSE REACTION</div>  
<div class=con style=" padding-left:10px;
 margin:0;  width:720px;">
<table style="font-family: arial;
font-size:10px;
font-weight:20px; margin:0; padding:0;
">
    <tr>	<td colspan=2>    <b>Was treatment given?</b> [_] No [_] Yes   (If yes, please specify): <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 200px;" type=text ></div> </td></tr>
	<tr>	<td colspan=2>					Outcome:</td></tr>
	<tr>	<td>[_] Recovered (Date of recovery): <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:10px; height:14px; width: 100px;" type=text ></div>	           [_] Unrecovered </td>	<td> Other diseases: 
<div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>liver 
<div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>renal
<div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>HPN </td></tr>
	<tr>	<td>[_]Fatal (Date of death):<div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:53px; height:14px; width: 100px;" type=text ></div>	                   [_] Unknown </td>	<td>
 <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div> Diabetes
<div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>CVS 
<div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>Endocrine
<div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>Cancer </td></tr>
	<tr>	<td>			Sequela/e: (any permanent complications or injuries as a result of the ADR)</td><td> Re-challenge? [_] Yes Result
	<div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div></td></tr>
	<tr>	<td>[_]Yes (Please specify)<div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 60px;" type=text ></div>
	[_] No [_] Unknown </td><td>[_] No</td></tr>
</table>		
</div>
	   <div class=greenLabel style="font-family:arial;
text-align:left;
background-color: #0C9C60;
border:1px solid black;
color:white;
font-size:10px;
padding: 2px;
padding-left:8px;
font-weight: bold;
margin-top:0;">* REPORTER'S PARTICULARS</div>
	   <div class=con style="padding-left:10px;
 width:720px;">
	   <table class=part style="font-size:10px; margin:0; padding:0;" >
	   <tr><td id=partdiv style="border-right:1px solid black;">
		   <table class=part1>
			<tr id=tab1><td>*Printed Name of Reporter:</td><td> <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 200px;" type=text ></div> </td> </tr>  
			<tr id=tab1><td>Signature of reporter:</td><td><div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 200px;" type=text ></div></td> </tr>
			<tr id=tab1><td>Date reported (mm/dd/yr):</td><td><div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 200px;" type=text ></div></td>  </tr>
			</table>
		</td><td>
			<table class=part2>
			 <tr id=tab2><td>*Contact no:</td><td><div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 200px;" type=text ></div></td></tr>   
			<tr id=tab2>   <td>Email address:</td><td><div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 200px;" type=text ></div></td> </tr> 
			 <tr id=tab2><td>*Profession:</td><td>
			 <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>MD 
			 <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div> RPh 
			 <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>RN
			 <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>Patient
			 <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>Dentist
			 <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>other</td></tr>   
			 <tr id=tab2><td>*Facility:</td><td><div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>
			 Clinic <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>Trial site 
			 <div class=underline style="border-bottom: 1px solid black; padding:0; display:inline; margin-left:2px; margin-right:4px; height:14px; width: 20px;" type=text ></div>Other</td></tr>  
			 </table>
		</td></tr>
	    </table>
	      </div>
	</div>
<div class=FDAwrapper style="margin:30px; margin-top:20px; padding:0; width:720px;">	
   <div class=FDAfooter style="display:block; text-align:center; margin:0px;font-family:times; font-size:11;">
   	   <b style="font-size: 14px; font-family:arial; font-weight:regular;">National Pharmacovigilance Center <br/>
				  <i>''Saving Lives Through Vigilant Reporting''</i></b><br/>
				  <b>Send completed form to:</b> ADR Unit, FDA, Civic Drive, Filinvest Estate, Alabang, Muntinlupa ,1781  <br/>
				  <b>Or fax to:</b> (02) 807-85-11, c/o The ADR Unit  <b>Send sample, if any, of suspect drug for analysis </b> <br/>
				  <b>Website:</b> www.fda.gov.ph
   </div>
</div><!--FDAwrapper-->
<?php
    
        $content = ob_get_clean();
        require_once(dirname(__FILE__).'\html2pdf.class.php');
        try
        {
			$html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15', array('80mm', '100mm', '100mm', '100mm')); 
            $html2pdf->writeHTML($content);
			$html2pdf->pdf->IncludeJS("print(true);");
            $html2pdf->Output('FDAForm.pdf');
            exit;
        }
        catch(HTML2PDF_exception $e) {
            echo $e;
            exit;
        }
    
?>

</body>
</page>
</html>