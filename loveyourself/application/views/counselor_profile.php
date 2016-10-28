<div class="container">
    <div class ="container"  id="content" style ='background-color: #FFFFFF;'>
 	<div class="row"  >			
			<div class="col-sm-9 col-sm-push-3 contentAreaStyle" id="input_refcode">
				<div> <p>  </p>  </div>
                <div class="jumbotron">
                     <h1>C O U N S E L O R</h1>
                    <h2>      </h2>
                     <?php 
                      if($this->session->flashdata('refcode_error')){
                        echo $this->session->flashdata('refcode_error');
                      }
                     ?>
                     
                     <?php echo form_open('site/form_profile');?>
                     <div class="form-group">
                        <?php 
                        echo form_label('Reference code: &nbsp', 'refcode_counselor');
                        $data = array(
                                      'name'        => 'ref_code',
                                      'id'          => 'refcode_counselor_view',
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
						<li><a href="<?php echo base_url(); ?>site/account_profile_info_counselor"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-lock"></span>  Settings</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-envelope"></span>  Message</a></li>
					</ul>
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Manage Report</a></li>
                        <li><a href="<?php echo base_url(); ?>site/counselor_profile"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-list"></span> Print NEC Form</a></li>
                        <!--li><a href="#"><span class="glyphicon glyphicon-list"></span> Discharge Instruction</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-list"></span> Input Patient's Results</a></li-->
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