<div class="container">
<div class="container" id="content" style ='background-color: #FFFFFF;'>
<div id="task">
	<h1>Welcome, 
	<?php echo $this->session->userdata("usrname"); 
		  echo "!";?>
	
	</h1>
</div>
<div id="input_refcode">
	<?php echo form_open();?>
	<div class="form-group">
	    <?php 
		echo form_label('Reference code: &nbsp', 'refcode_counselor');
		$data = array(
		              'name'        => 'refcode_counselor_view',
		              'id'          => 'refcode_counselor_view',
		              'value'       => '',
		              'maxlength'   => '50',
		              'size'        => '50',
					  'class'		=> 'form-control',
					  'placeholder' => 'Enter reference code'
						  
		            );

		echo form_input($data);
		?>
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	  <?php echo form_close(); ?>
	
</div>

</div>
</div>