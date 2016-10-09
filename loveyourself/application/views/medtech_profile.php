<div class="container">
    <div class ="container"  id="content" style ='background-color: #FFFFFF;'>
 	<div class="row"  >			
			<div class="col-sm-9 col-sm-push-3 contentAreaStyle" id="input_refcode">
				<div> <p>  </p>  </div>
                <div class="jumbotron">
                     <h1>M E D I C A L</h1>
					 <h1>T E C H N O L O G I S T</h1>
                    <h2>      </h2>
                     
                     <?php echo form_open('site/form_profile');?>
                     <div class="form-group">
                        <?php 
                        echo form_label('Reference code: &nbsp', 'refcode_medtech');
                        $data = array(
                                      'name'        => 'ref_code',
                                      'id'          => 'refcode_medtech',
                                      'value'       => '',
                                      'maxlength'   => '50',
                                      'size'        => '50',
                                      'class'		=> 'form-control',
                                      'placeholder' => 'Enter reference code',
									  'required' => 'required'
                                    );

                        echo form_input($data);
                        ?>
                    </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                      <?php echo form_close(); ?>
                
                </div>    
			</div>
			<div class="col-sm-3 col-sm-pull-9 sidebarStyle">
				<div class="text-xs-center text-sm-left ">			
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Overview</a></li>
						<li><a href="<?php echo base_url(); ?>site/account_profile_info_medtech"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-lock"></span>  Settings</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>  Message</a></li>
					</ul>
					<ul class="nav nav-pills nav-stacked">
						<?php if(strpos($username, 'ADM') !== false) {?>
							<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Manage Report</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Generate Metrics and Reports</a></li>
							<li><a href="<?php echo base_url(); ?>site/admin_create_user "><span class="glyphicon glyphicon-list"></span> Create Account for New User</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Enable / Disable Counselors</a></li>
						<?php } else if(strpos($username, 'CNS') { ?>
							<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Manage Report</a></li>
							<li><a href="<?php echo base_url(); ?>site/counselor_profile"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Print NEC Form</a></li>
						<?php } else if(strpos($username, 'MDT')) { ?>
							<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Manage Report</a></li>
							<li><a href="<?php echo base_url(); ?>site/medtech_profile"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Treatment Plan</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Discharge Instruction</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Input Patient's Results</a></li>
						<?php } else {?>
							<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Manage Report</a></li>
							<li><a href="<?php echo base_url(); ?>site/nurse_profile"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Treatment Plan</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Discharge Instruction</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-list"></span> Input Patient's Results</a></li>
						<?php }?>
					</ul>
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Support</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-comment"></span>  Chat</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-earphone"></span>  Contacts</a></li>
					</ul>
				</div>
			</div>			
			<div class="clearfix">
			</div>
        </div>
    </div>
</div>