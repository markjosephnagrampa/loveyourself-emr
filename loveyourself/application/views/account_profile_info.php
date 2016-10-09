<div class="container">
    <div class ="container"  id="content" style ='background-color: #FFFFFF;'>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad">
                
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
								<li><a href="#"><span class="glyphicon glyphicon-list"></span> Treatment Plan</a></li>
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
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad">
                    
					<?php echo $this->session->flashdata('reset_success'); ?>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                          <h3 class="panel-title">NAME</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> 
                                </div>
                                <div class=" col-md-9 col-lg-9 "> 
                                    <table class="table table-user-information">
                                            <tbody>
                                                <tr>
                                                    <td>Name:</td>
                                                    <td><?php echo $user_info->first_name.' '.$user_info->middle_name.' '.$user_info->last_name; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Designation:</td>
                                                    <td><?php if($user_info->staff_id == 1) { echo 'ADMIN'; } 
													else if ($user_info->staff_id == 2) { echo 'COUNSELOR'; } 
													else if($user_info->staff_id == 3) { echo 'NURSE'; }
													else if($user_info->staff_id == 4) { echo 'PHYSICIAN'; }
													else { echo 'MEDTECH'; } ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Testing Facility:</td>
                                                    <td><?php if($user_info->testing_facility_id == 1){ echo 'Love Yourself Anglo (Shaw Blvd., Mandaluyong City)'; }
														else { echo 'Love Yourself Uni (Taft Ave., Pasay City)';} ?></td>
                                                </tr>
                                               <tr>
                                                    <td>Email</td>
                                                    <td><a href="mailto:info@support.com"><?php echo $user_info->email_address; ?></a></td>
                                                </tr>
                                                  <tr>
                                                    <td>Birthay</td>
                                                    <td><?php echo $user_info->month_of_birth.'/'.$user_info->day_of_birth.'/'.$user_info->year_of_birth; ?></td>
                                                  </tr>

                                                <tr>
                                                    <td>Sex</td>
                                                    <td><?php echo $user_info->sex; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Contact Number</td>
                                                    <td><?php echo $user_info->contact_number; ?></td>
                                                </tr>
                                            </tbody>
                                          </table>
                                        <a href="<?php echo base_url(); ?>site/reset_password" class="btn btn-primary">Reset Password</a>
                                      <a href="#" class="btn btn-primary">Edit Profile</a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                                <span class="pull-right">
                                            
                                    <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>

                                    <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>