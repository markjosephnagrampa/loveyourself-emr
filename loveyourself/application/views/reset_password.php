<div class="container">
    <div class ="container"  id="content" style ='background-color: #FFFFFF;'>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad">
                <!--<div class="col-sm-3 col-sm-pull-9 sidebarStyle">-->
                    <div class="text-xs-center text-sm-left ">			
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Overview</a></li>
                            <li><a href="<?php echo base_url(); ?>site/profile"><span class="glyphicon glyphicon-home"></span>  Home</a></li> <!--romeo-->
                            <li><a href="<?php echo base_url(); ?>site/account_profile_info"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-lock"></span>  Settings</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span>  Message</a></li>
                        </ul>
                       <!-- <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Manage Report</a></li>
                            <li><a href="<?php echo base_url(); ?>site/medtech_profile"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Generate Metrics and Reports</a></li>
                            <li><a href="<?php echo base_url(); ?>site/admin_create_user "><span class="glyphicon glyphicon-list"></span> Create Account for Counselor</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Enable / Disable Counselors</a></li>
                        </ul> -->

                    </div>
                </div>	
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >
                   <form method = "post" action = "<?php echo base_url(); ?>register/reset_password">
                   <h1 class="well">Reset Password</h1>
                   <div class="jumbotron">
						<?php echo $this->session->flashdata('reset_error'); ?>
                        <div class="control-group">
                            <label for="current_password" class="control-label">Current Password</label>
                            <div class="controls">
                                <input type="password" name="current_password">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="new_password" class="control-label">New Password</label>
                            <div class="controls">
                                <input type="password" name="new_password">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="confirm_password" class="control-label">Confirm Password</label>
                            <div class="controls">
                                <input type="password" name="confirm_password">
                            </div>
                        </div>      
                    </div>
                    <div class="modal-footer">
                        <!-- romeo -->
                        <!-- display: Success -->
                        <button type = "submit" class="btn btn-lg btn-primary btn-block submit-btn" id="password_modal_save">SAVE CHANGES</button>
                    </div>
					</form>
                </div>
        </div>
    </div>
</div>

<style>
.submit-btn {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #578843);
  background-image: -moz-linear-gradient(top, #79bc64, #578843);
  background-image: -ms-linear-gradient(top, #79bc64, #578843);
  background-image: -o-linear-gradient(top, #79bc64, #578843);
  background-image: linear-gradient(to bottom, #79bc64, #578843);
  -webkit-border-radius: 4;
  -moz-border-radius: 4;
  border-radius: 4px;
  text-shadow: 0px 1px 0px #898a88;
  -webkit-box-shadow: 0px 0px 0px #a4e388;
  -moz-box-shadow: 0px 0px 0px #a4e388;
  box-shadow: 0px 0px 0px #a4e388;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #3b6e22  1px;
  text-decoration: none;
}

.submit-btn:hover {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #5e7056);
  background-image: -moz-linear-gradient(top, #79bc64, #5e7056);
  background-image: -ms-linear-gradient(top, #79bc64, #5e7056);
  background-image: -o-linear-gradient(top, #79bc64, #5e7056);
  background-image: linear-gradient(to bottom, #79bc64, #5e7056);
  text-decoration: none;
}
</style>
