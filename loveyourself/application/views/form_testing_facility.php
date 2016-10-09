<div id="12">
<?php echo form_fieldset('PERSONAL INFORMATION SHEET (FORM A)');?>
<table class="table table-bordered" width=100%>
	<thead>
		<tr><th colspan=2>To be filled by TESTING FACILITY only</th>
		</tr>
	</thead>
	<tbody>
		<tr><td><p>21</p></td>
			<td><table>
			<tr>
			<th><p>Name of Testing Facility:</p></th>
			<td colspan=3><?php $data = array(
              	  'name'        => 'facility_name',
           		  'id'          => 'facility_name',
            	  'value'       => '',
          		  'maxlength'   => '50',
          		  'size'        => '50',
				  'style'		=> 'width:100%'
         	   	);
				echo form_input($data);?>
				</td>
				</tr>
				<tr><th><p>HIV EQAS Lab Code:</p></th>
					<td><?php $data = array(
              	  'name'        => 'hiv_lab_code',
           		  'id'          => 'hiv_lab_code',
            	  'value'       => '',
          		  'maxlength'   => '50',
          		  'size'        => '50'
         	   	);
				echo form_input($data);?></td>
				<th><p>Year last participated in HIV EQAS:</p></th>
					<td><?php $data = array(
              	  'name'        => 'year_hiv_lab_code',
           		  'id'          => 'year_hiv_lab_code',
            	  'value'       => '',
          		  'maxlength'   => '4',
          		  'size'        => '5'
         	   	);
				echo form_input($data);?></td>
				</tr>
				<tr>
					<th><p>Complete Mailing Address:</p></th>
					<td colspan=3><?php $data = array(
              	  'name'        => 'year_hiv_lab_code',
           		  'id'          => 'year_hiv_lab_code',
            	  'value'       => '',
          		  'maxlength'   => '50',
          		  'size'        => '50',
				  'style'		=> 'width:100%'
         	   	);
				echo form_input($data);?> </td>
				</tr>
				<tr><th><p>Contact Numbers:</p></th>
					<td><?php $data = array(
              	  'name'        => 'contact_numbers',
           		  'id'          => 'contact_numbers',
            	  'value'       => '',
          		  'maxlength'   => '50',
          		  'size'        => '50'
         	   	);
				echo form_input($data);?></td>
				<th><p>Email address:</p></th>
					<td><?php $data = array(
              	  'name'        => 'email_address',
           		  'id'          => 'email_address',
            	  'value'       => '',
          		  'maxlength'   => '50',
          		  'size'        => '50'
         	   	);
				echo form_input($data);?></td>
				</tr>
			</table>
			</td>
		</tr><!--end of number 21-->
		<tr>
			<td><p>22</p></td>
			<td><table width=100%>
				<tr>
					<th><p>Name of Medical Technologist:</p></th>
					<td colspan=13><?php $data = array(
              	  'name'        => 'medtech_name',
           		  'id'          => 'medtech_name',
            	  'value'       => '',
          		  'maxlength'   => '50',
          		  'size'        => '50',
				  'style'		=> 'width:100%'
         	   	);
				echo form_input($data);?>
					</td>
				</tr>
				<tr>
					<th><p>HIV Proficiency Number:</p></th>
					<td colspan=13><?php $data = array(
              	  'name'        => 'hiv_prof_num',
           		  'id'          => 'hiv_prof_num',
            	  'value'       => '',
          		  'maxlength'   => '50',
          		  'size'        => '50',
				  'style'		=> 'width:50%'
         	   	);
				echo form_input($data);?></td>
				</tr>
				<tr><th><p>Date Issued:</p></th>
					<td><?php $data = array(
         			   'name'        => 'month_issued',
         			   'id'          => 'month_issued',
          			   'value'       => '',
          			   'maxlength'   => '2',
          			   'size'        => '2',
				  	   'style'		=> 'width:100%'
         	   		);
					echo form_input($data);?></td>
					<td>&nbsp</td>
					<td><?php $data = array(
	              	  'name'        => 'day_issued',
	           		  'id'          => 'day_issued',
	            	  'value'       => '',
	          		  'maxlength'   => '2',
	          		  'size'        => '2',
					  'style'		=> 'width:100%'
	         	   	);
					echo form_input($data);?></td>
					<td>&nbsp</td>
					<td><?php $data = array(
	              	  'name'        => 'year_issued',
	           		  'id'          => 'year_issued',
	            	  'value'       => '',
	          		  'maxlength'   => '4',
	          		  'size'        => '4',
					  'style'		=> 'width:100%'
	         	   	);
					echo form_input($data);?></td>
					<td>&nbsp</td>
					
					<th><p>Expiration Date:</p></th>
					<td><?php $data = array(
		     			   'name'        => 'month_expired',
		       			   'id'          => 'month_expired',
		       			   'value'       => '',
		       			   'maxlength'   => '2',
		       			   'size'        => '2',
					  	   'style'		=> 'width:100%'
		       	   		);
						echo form_input($data);?></td>
					<td>&nbsp</td>
					<td><?php $data = array(
		              	  'name'        => 'day_expired',
		           		  'id'          => 'day_expired',
		            	  'value'       => '',
		          		  'maxlength'   => '2',
		          		  'size'        => '2',
						  'style'		=> 'width:100%'
		         	   	);
						echo form_input($data);?></td>
					<td>&nbsp</td>
					<td><?php $data = array(
		              	  'name'        => 'year_expired',
		          		  'id'          => 'year_expired',
		            	  'value'       => '',
		          		  'maxlength'   => '4',
		          		  'size'        => '4',
						  'style'		=> 'width:100%'
		         	   	);
						echo form_input($data);?></td>	
					</tr>
				</table></td>		
		</tr><!--end of number 22-->
		<tr>
			<td><p>23</p></td>
			<td>
				<table width=100%>
					<tr><th><p>Name of Counselor (with signature): </p></th>
						<td><?php
							$data = array(
							              'name'        => 'counselor_name',
							              'id'          => 'counselor_name',
							              'value'       => '',
							              'maxlength'   => '60',
							              'size'        => '60',
							              'style'       => 'width:100%',
							            );

							echo form_input($data);
						?></td>
					</tr>
				</table>
			</td>
		</tr><!--end of number 23-->
	</tbody>
	
</table><!--end of testing facility only table-->
<?php echo form_fieldset_close();?>
</div><!--end of step 12-->
<div id="13">
<?php echo form_fieldset('PERSONAL INFORMATION SHEET (FORM A)');?>
<table class="table table-bordered" width=100%>
	<thead><tr>
		<th colspan=2><p>To be filled up by SACCL only</p></th>
	</tr></thead>
	<tbody>
		<tr>
			<td><p>24</p></td>
			<td><table>
				<tr>
					<th><p>SACCL Laboratory Code:</p></th>
					<td><?php
						$data = array(
						              'name'        => 'saccl_labcode',
						              'id'          => 'saccl_labcode',
						              'value'       => '',
						              'maxlength'   => '10',
						              'size'        => '10',
						              'style'       => 'width:100%',
						            );

						echo form_input($data);
					?></td>
					<td>&nbsp</td>
					<th colspan=2><p>Date HIV Confirmed:</p></th>
					<td><?php $data = array(
		     			   'name'        => 'month_confirmed',
		       			   'id'          => 'month_confirmed',
		       			   'value'       => '',
		       			   'maxlength'   => '2',
		       			   'size'        => '2',
					  	   'style'		=> 'width:100%'
		       	   		);
						echo form_input($data);?></td>
					<td>&nbsp</td>
					<td><?php $data = array(
		              	  'name'        => 'day_confirmed',
		           		  'id'          => 'day_confirmed',
		            	  'value'       => '',
		          		  'maxlength'   => '2',
		          		  'size'        => '2',
						  'style'		=> 'width:100%'
		         	   	);
						echo form_input($data);?></td>
					<td>&nbsp</td>
					<td><?php $data = array(
		              	  'name'        => 'year_confirmed',
		          		  'id'          => 'year_confirmed',
		            	  'value'       => '',
		          		  'maxlength'   => '4',
		          		  'size'        => '4',
						  'style'		=> 'width:100%'
		         	   	);
						echo form_input($data);?></td>
				</tr>
				<tr>
					<th><p>HIV Results Confirmed by:</p></th>
					<td><?php $data = array(
		              	  'name'        => 'confirmed_by',
		          		  'id'          => 'confirmed_by',
		            	  'value'       => '',
		          		  'maxlength'   => '50',
		          		  'size'        => '50',
						  'style'		=> 'width:100%'
		         	   	);
						echo form_input($data);?></td>
					<td>&nbsp</td>
					<th><p>Test:</p></th>
					<td><?php
						$data = array(
						    'name'        => 'test_type',
						    'id'          => 'western_blot',
						    'value'       => 'western_blot',
						    'checked'     => FALSE,
						    'style'       => 'margin:10px',
						    );
						echo form_radio($data);
					?>
					<td colspan=3><p>Western Blot</p></td>
					<td>&nbsp</td>
					<td><?php
						$data = array(
						    'name'        => 'test_type',
						    'id'          => 'pcr_for_infants',
						    'value'       => 'pcr_for_infants',
						    'checked'     => FALSE,
						    'style'       => 'margin:10px',
						    );
						echo form_radio($data);
					?>
					<td colspan=2><p>PCR for infants</p></td>
				</td>
				</tr>
			</table>
			</td>
		</tr><!--end of number 24-->
		<tr><th colspan=2><p>END</p></th></tr>
	</tbody>
</table><!--end of SACCL only table-->
<?php form_fieldset_close('<p>PERSONAL INFORMATION SHEET (DOH-NEC FORM A 2014)</p>');?>
</div><!--end of step 13-->