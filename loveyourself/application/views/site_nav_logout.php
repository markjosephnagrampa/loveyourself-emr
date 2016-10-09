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
                              <li><a href="#">TEST LOCATIONS</a></li>
                              <li><a href="#">I WANT TO GET TESTED </a></li>
                            </ul>
                          </li>
                          <li><a href="<?php echo base_url(); ?>site/about">ABOUT US</a></li>
                          <li><a href="<?php echo base_url(); ?>site/contact">CONTACT US</a></li>
                          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-cog"></i> Change Password</a></li>
                                <li><a href="#"><i class="icon-envelope"></i> Account</a></li>
                                <li role="separator" class="divider"></li>
                                <li> 
                                    <a href="#myModal_LogOut" data-toggle="modal" data-target="#myModal_LogOut"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a>                                   
                                </li>
                            </ul>
                          </li>
                         <!-- <div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">  -->
                          <div class="modal fade" id="myModal_LogOut"  role="dialog">
                           <div class="vertical-alignment-helper">
                               <div class="modal-dialog vertical-align-center"> 
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header"><h4><i class="fa fa-lock"></i> Logout </h4></div>
                                                <div class="modal-body"><i class="fa fa-question-circle"></i> Are you sure you want to logout?</div>
                                                    <div class="modal-footer">
                                                        <!--<a href="javascript:;" class="btn btn-primary btn-block">Logout</a> -->
                                                        <a href="<?php echo base_url();?>site/home"><button type="submit" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-off"></span> Logout</button></a>
                                                    </div>  
                                        </div>
                                    </div>
                               </div>
                              </div>
                          </div>
                      </ul>
                  </div>
              </div>
            </nav>
        </div>
    </div>

</body>
