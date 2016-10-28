<?php

/**
* Printable PDF file w/ Refcode
*
* @author Mark Nagrampa
*
*
*
*/
// PDF Object
    ob_start();
    session_start();

    // Temporary refcode
    //$refcode = "1122AABB";

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
	<title>LoveYourself Reference Code</title>
</head>
<body style="font-family:Helvetica,sans-serif;">
	<div style="width: 87%; height:33%; border: 1px solid black; margin:auto; margin-top:10px; padding: 0px; overflow:hidden;">
		<!--<h1>LoveYourself Reference Code</h1>-->
		<div style="border-bottom: 1px solid black; height:50px;">
			<img src="images/logo_jpg.jpg"; style="width:218.75px; height:47px;">
		</div>

		<div style="padding:10px;">
		
			<h2 style="text-align:center; margin-top:5px; margin-bottom:0px;">Reference Code</h2>
			<p style="margin-top:30px;">Thank you for taking the time to fill out this form. Rest assured that all information you shared is kept confidential.</p>

			<p style="font-size: 20px; margin-top: 0px; margin-bottom:12px;">
				Please keep this code: <span style="font-weight: bold; font-size: 25px;"><?php echo $reference_code; ?></span> for reference.
			</p>
			It will be used to process your information once you visit a LoveYourself Clinic.
			<p style="margin-top:40px;">
				Regards,
				<br>
				LoveYourself Dev Team
			</p>
		</div>
		<!--<p><span style="margin:auto;">Hi! Here is your reference code: <strong>ABCDEFGH</strong> </span></p>
		<p><span style="margin:auto;">Please keep this document for processing once you visit a LoveYourself clinic.</span></p>-->
		
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
        $html2pdf->Output('Reference Code.pdf');
        exit;
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    
?>