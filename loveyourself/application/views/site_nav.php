<?php if($this->session->flashdata('login_error') || $this->session->flashdata('login_prohibited')){ ?>
	<script type="text/javascript">
		$(window).load(function(){
			$('#myModal_LogIn').modal('show');
		});
	</script>
<?php } ?>
<?php if($this->session->flashdata('query_email')){ ?>
	<!--Temporary Code-->
	<script type="text/javascript">
	$(window).load(function(){
			$('#myModal_ForgotPassword').modal('show');
			// $("p").text("Hello world!");
		});
	</script>
	}
<?php } ?>

<body style = 'background-color:#E0CBA8';>
        <div class = "container">
        </div>
        <div class="container">
        <div>
            <nav class="navbar navbar-custom" role="navigation"  style="background-color: #E74D16;">
              <div class="container-fluid">
                  <div class="navbar-header">             
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">loveyourself</a>
                  </div>
                  <div class="collapse navbar-collapse navbar-right" id="mynavbar">              
                      <ul class="nav navbar-nav navbar-right">
                          <li ><a href="<?php echo base_url(); ?>site/home">HOME</a></li>
                          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">HIV TESTING <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="<?php echo base_url(); ?>site/locations">TEST LOCATIONS</a></li>
                              <li><a href="<?php echo base_url(); ?>site/tested">I WANT TO GET TESTED </a></li>
                            </ul>
                          </li>
                          <li><a href="<?php echo base_url(); ?>site/about">ABOUT US</a></li>
                          <li><a href="<?php echo base_url(); ?>site/contact">CONTACT US</a></li>
						  <?php if($this->session->userdata('usrname')) { ?>
							  <li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('usrname'); ?> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#"><i class="icon-cog"></i> Account Settings</a></li>
									<li><a href="<?php echo base_url(); ?>site/profile"><i class="icon-envelope"></i> "Account" Page</a></li>  
									<!-- CHANGE "ACCOUNT" TO USER TYPE (ADMIN, NURSE, ETC.) -->
									<li role="separator" class="divider"></li>
									<li> 
										<a href="#myModal_LogOut" data-toggle="modal" data-target="#myModal_LogOut"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a>                                   
									</li>
								</ul>
							  </li>
							  
						<div class="modal fade" id="myModal_LogOut" role="dialog">
                           <div class="vertical-alignment-helper">
                               <div class="modal-dialog vertical-align-center"> 
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header"><h4><i class="fa fa-lock"></i> Logout </h4></div>
                                                <div class="modal-body"><i class="fa fa-question-circle"></i> Are you sure you want to logout?</div>
                                                    <div class="modal-footer">
                                                        <!--<a href="javascript:;" class="btn btn-primary btn-block">Logout</a> -->
                                                        <a href="<?php echo base_url();?>logout"><button type="submit" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-off"></span> Logout</button></a>
                                                    </div>  
                                        </div>
                                    </div>
                               </div>
                              </div>
                          </div>
						  <?php } else { ?>

                         <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
						
							  <li><a href="#myModal_LogIn" data-toggle="modal" data-target="#myModal_LogIn"><span class="glyphicon glyphicon-log-in"></span> Login</a>
								<div class="modal fade" id="myModal_LogIn" role="dialog">
								<div class="modal-dialog">
								  <div class="modal-content">
									<div class="modal-header" style="padding:35px 50px;">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
									  <?php if($this->session->flashdata('login_prohibited')) echo $this->session->flashdata('login_prohibited');
											else if($this->session->flashdata('login_error')) echo $this->session->flashdata('login_error'); ?>
									</div>
									<div class="modal-body" style="padding:40px 50px;">
									  <form role="form" method="post" action="<?php echo base_url(); ?>login/user_login">
										<div class="form-group">
											
										  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
										<?php
										$usr = $this->session->flashdata('wrong_usrname');
										$data = array(
											  'name' => 'usrname',
											  'id'   => 'usrname',
											  'class'=> 'form-control',
											  'placeholder' => 'Enter username',
											  'value' => "$usr"
										);
										echo form_input($data);
										?>
										</div>
										<div class="form-group">
										  <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
										<?php
										$data = array(
											  'name' => 'psw',
											  'id'   => 'psw',
											  'class'=> 'form-control',
											  'placeholder' => 'Enter password'
										);
										echo form_password($data);
										?>
										  
										</div>
										<div id="capsWarning" class="alert alert-DANGER" style="display:none;"><strong>Caps Lock is on.</strong></div>
										<div class="checkbox">
										  <label><input type="checkbox" value="" checked>Remember me</label>
										</div>
										  <p><a href="#myModal_ForgotPassword" data-toggle="modal" data-target="#myModal_ForgotPassword">Forgot Password?</a></p>
										  <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
									  </form>
									</div>
									<div class="modal-footer">
									  <button type="submit" class="btn btn-danger btn-default pull-center" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
									  <!-- <p>Not a member? <a href="#">Sign Up</a></p>-->
									  
									</div>
								  </div> 
								</div>
								</div>
							  </li>

							  <!--Forgot Password Modal-->

								<div class="modal fade" id="myModal_ForgotPassword" role="dialog" style="display: none;">
								<div class="modal-dialog">
								  <div class="modal-content">
									<div class="modal-header" style="padding:35px 50px;">
									  <button type="button" class="close" data-dismiss="modal">&times;</button>
									  <h4><span class="glyphicon glyphicon-lock"></span> Forgot Password</h4>
									  <?php  if($this->session->flashdata('query_email_success')) echo $this->session->flashdata('query_email_success');
											 else if($this->session->flashdata('query_email_failure')) echo $this->session->flashdata('query_email_failure'); ?>
									</div>
									<div class="modal-body" style="padding:40px 50px;">
									  <form role="form" method="post" action="<?php echo base_url(); ?>login/user_forgot_password">
										<div class="form-group">
											
										  <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
										<?php
										$retype_username = $this->session->flashdata('wrong_username_in_forgot_password_modal');
										$data = array(
											  'name' => 'usrname',
											  'id'   => 'usrname',
											  'class'=> 'form-control',
											  'placeholder' => 'Enter username',
											  'value' => "$retype_username"
										);
										echo form_input($data);
										?>
										</div>
										<div class="form-group">
										  <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
										<?php
										$retype_email = $this->session->flashdata('wrong_email_in_forgot_password_modal');
										$data = array(
											  'name' => 'email',
											  'id'   => 'email',
											  'class'=> 'form-control',
											  'placeholder' => 'Enter email',
											  'value' => "$retype_email"
										);
										echo form_input($data);
										?>
										  
										</div>
										<div id="capsWarning" class="alert alert-DANGER" style="display:none;"><strong>Caps Lock is on.</strong></div>
										  <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Submit</button>
									  </form>
									</div>
									<div class="modal-footer">
									  <button type="submit" class="btn btn-danger btn-default pull-center" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
									  
									</div>
								  </div> 
								</div>
								</div>
							  

						  <?php } ?>

                      </ul>
                  </div>
              </div>
            </nav>
        </div>
    </div>

</body>
