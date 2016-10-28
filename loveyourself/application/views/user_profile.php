<div class="container">
    <div class ="container"  id="content" style ='background-color: #FFFFFF;'>
 	<div class="row"  >			
			<div class="col-sm-9 col-sm-push-3 contentAreaStyle" id="input_refcode">
				<div> <p>  </p>  </div>
                <div class="jumbotron">
					<?php if(strpos($this->session->userdata('usrname'), 'ADM') !== false) { ?>
						<h1 style = "font-size: 50px;">A D M I N I S T R A T O R</h1>
					<?php } else if(strpos($this->session->userdata('usrname'), 'CNS')) { ?>
						<h1>C O U N S E L O R</h1>	
					<?php } else if(strpos($this->session->userdata('usrname'), 'MDT')) { ?>
						<h1>M E D I C A L</h1>
						<h1>T E C H N O L O G I S T</h1>
					<?php } else if(strpos($this->session->userdata('usrname'), 'NUR')) {?>
						<h1>N U R S E</h1>
					<?php }else { ?>
						<h1>P H Y S I C I A N</h1>
					<?php } ?>
                    <h2>      </h2>
                    <?php 
                      if($this->session->flashdata('refcode_error')){
                        echo $this->session->flashdata('refcode_error');
                      }
                     ?>
                     
                     <?php echo form_open('site/form_profile');?>
                     <div class="form-group">
                        <?php 
                        echo form_label('Reference code: &nbsp', 'ref_code');
                        $data = array(
                                      'name'        => 'ref_code',
                                      'id'          => 'ref_code_id',
                                      'value'       => '',
                                      'maxlength'   => '50',
                                      'size'        => '50',
                                      'class'		=> 'form-control',
                                      'placeholder' => 'Enter reference code',
									  'required' => 'required'
                                    );

                        echo form_input($data);
                        ?>
                    

                      <?php 
                      			// PDF Form can be viewed by Counselor, Physician, Nurse

                      		// Physicians and Nurses (1 Button)
                      		if(strpos($this->session->userdata('usrname'), 'PHY')||
                      			strpos($this->session->userdata('usrname'), 'NUR')){

                      			$data = array(
			                        'name' => 'generatePDF',
			                        'id'   => 'submit',
			                        'value' => 'View Patient Record',
			                        'type' => 'submit',
			                        'content' => 'submit',
			                        'formaction' => 'pdf',
			                        'class' => 'btn btn-default'
			                      );
			                    echo form_submit($data);
                      		}
                      		else if(strpos($this->session->userdata('usrname'), 'CNS')){
                      			
                      			 $data = array(
			                        'name' => 'submitfrom_user_profile',
			                        'id'   => 'submit',
			                        'value' => 'Complete Patient Record',
			                        'type' => 'submit',
			                        'content' => 'submit',
			                        'formaction' => 'form_profile',
			                        'class' => 'btn btn-default'
		                     	 );
		                      	echo form_submit($data);


                      			$data = array(
			                        'name' => 'generatePDF',
			                        'id'   => 'submit',
			                        'value' => 'View Patient Record',
			                        'type' => 'submit',
			                        'content' => 'submit',
			                        'formaction' => 'pdf',
			                        'class' => 'btn btn-default'
			                      );
                      			echo form_submit($data);
                      		}
                      		else if(strpos($this->session->userdata('usrname'), 'MDT')){
                      			$data = array(
			                        'name' => 'submitfrom_user_profile',
			                        'id'   => 'submit',
			                        'value' => 'Complete Patient Record',
			                        'type' => 'submit',
			                        'content' => 'submit',
			                        'formaction' => 'form_profile',
			                        'class' => 'btn btn-default'
		                     	 );
		                      	echo form_submit($data);
                      		}
                      		else if(strpos($this->session->userdata('usrname'), 'ADM')){
                      			$data = array(
			                        'name' => 'submitfrom_user_profile',
			                        'id'   => 'submit',
			                        'value' => 'View Patient Info',
			                        'type' => 'submit',
			                        'content' => 'submit',
			                        'formaction' => 'form_profile',
			                        'class' => 'btn btn-default'
		                     	 );
		                      	echo form_submit($data);
                      		}
                      	 ?>
                      	 <?php echo form_close(); ?>
                     </div> 
                
                </div>    
			</div>
			<div class="col-sm-3 col-sm-pull-9 sidebarStyle">
				<div class="text-xs-center text-sm-left ">			
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Overview</a></li>
						<li><a href="<?php echo base_url(); ?>site/account_profile_info"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-lock"></span>  Settings</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>  Message</a></li>
					</ul>
					<ul class="nav nav-pills nav-stacked">
						<?php if(strpos($this->session->userdata('usrname'), 'ADM') !== false) {?>
							<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Manage Report</a></li>
							<li><a href="<?php echo base_url(); ?>site/profile"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Generate Metrics and Reports</a></li>
							<li><a href="<?php echo base_url(); ?>site/admin_create_user "><span class="glyphicon glyphicon-list"></span> Create Account for New User</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Enable / Disable Counselors</a></li>
						<?php } else if(strpos($this->session->userdata('usrname'), 'CNS')) { ?>
							<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Manage Report</a></li>
							<li><a href="<?php echo base_url(); ?>site/profile"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Print NEC Form</a></li>
						<?php } else if(strpos($this->session->userdata('usrname'), 'MDT')) { ?>
							<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Manage Report</a></li>
							<li><a href="<?php echo base_url(); ?>site/profile"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
							<li><a href="<?php echo base_url(); ?>site/nurse_physician_treatment_plan"><span class="glyphicon glyphicon-list"></span> Treatment Plan</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Discharge Instruction</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Input Patient's Results</a></li>
						<?php } else {?>
							<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Manage Report</a></li>
							<li><a href="<?php echo base_url(); ?>site/profile"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
							<li><a href="<?php echo base_url(); ?>site/nurse_physician_treatment_plan"><span class="glyphicon glyphicon-list"></span> Treatment Plan</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Discharge Instruction</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Input Patient's Results</a></li>
						<?php }?>
                    </ul>
				</div>
			</div>			
			<div class="clearfix">
			</div>
        </div>
    </div>
</div>