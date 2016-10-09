<div class="container">
    <div class ="container"  id="content" style ='background-color: #FFFFFF;'>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad">
                <!--<div class="col-sm-3 col-sm-pull-9 sidebarStyle">-->
                    <div class="text-xs-center text-sm-left ">			
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Overview</a></li>
                            <li><a href="<?php echo base_url(); ?>site/account_profile_info_medtech"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-lock"></span>  Settings</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span>  Message</a></li>
                        </ul>
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Manage Report</a></li>
                            <li><a href="<?php echo base_url(); ?>site/medtech_profile"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Generate Metrics and Reports</a></li>
                            <li><a href="<?php echo base_url(); ?>site/admin_create_user "><span class="glyphicon glyphicon-list"></span> Create Account for Counselor</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Enable / Disable Counselors</a></li>
                        </ul>
                
                    </div>
                </div>	
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >
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
                                                <td>User Type:</td>
                                                <td>Medical Technologist</td>
                                            </tr>
                                              <tr>
                                                <td>Date of Birth</td>
                                                <td>01/24/1988</td>
                                              </tr>
                                        
                                            <tr>
                                                <td>Gender</td>
                                                <td>Female</td>
                                            </tr>
                                            <tr>
                                                <td>Home Address</td>
                                                <td>Metro Manila,Philippines</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><a href="mailto:info@support.com">info@support.com</a></td>
                                            </tr>
                                            <tr>
                                                <td>Phone Number</td>
                                                <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)</td>
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

<!--<style>
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

    
</style>


<script>
$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
</script>-->