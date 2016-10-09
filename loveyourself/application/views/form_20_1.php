<div class="container">
<div class="container" id="content" style ='background-color: #FFFFFF;'>
<?php echo form_open('site/submit_form');?>

<div class="step" id="step9">
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
   					'checked'       => FALSE,
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
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('Symptomatic', 'symptomatic'); ?></td>
				<td><p>Describe S/Sx:</p></td>
				<td colspan=2><?php  
					$data = array(
				        'name'          => 'description_ssx',
				        'id'            => 'description_ssx',
				        'value'         => '',
				        'maxlength'     => '50',
				        'size'          => '50',
						'class'			=> 'form-control'
					);
					echo form_input($data);
					?></td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td>&nbsp</td>
				<td colspan=3><p>World Health Organization (WHO) Staging:</p></td>
				<td><?php  
					$data = array(
				        'name'          => 'who_staging',
				        'id'            => 'who_staging',
				        'value'         => '',
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
   					'checked'       => FALSE,
   					'style'         => 'margin:10px'
				);
				echo form_radio($data);?></td>
				<td><?php echo form_label('No physician available to do staging', 'no_avail_physician'); ?></td>
			
			</tr>
			</table>
		</td>
	</tr><!--end of number 20-->
	
</table>
<?php
$data = array(
	'name' => 'submitForm20',
	'id'   => 'submitForm20',
	'value' => 'Submit Form',
	'type' => 'submit',
	'content' => 'Submit Form',
	'class' => 'btn btn-default'
);
echo form_submit($data);
?>
</div>
</div>
</div>
</div>