<div class="container">
    <div class ="container"  id="content" style ='background-color: #FFFFFF;'>
        <div class="row">			
             <div class=" col-md-3 col-lg-3 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad">
                <!--<div class="col-sm-3 col-sm-pull-9 sidebarStyle">-->
                    <div class="text-xs-center text-sm-left ">			
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Overview</a></li>
                            <li><a href="<?php echo base_url(); ?>site/account_profile_info"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-lock"></span>  Settings</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span>  Message</a></li>
                        </ul>
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="#"><span class="glyphicon glyphicon-off"></span>  Manage Report</a></li>
                            <li><a href="<?php echo base_url(); ?>site/user_profile"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Generate Metrics and Reports</a></li>
                            <li><a href="<?php echo base_url(); ?>site/admin_create_user"><span class="glyphicon glyphicon-list"></span> Create Account for Counselor</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Enable / Disable Counselors</a></li>
                        </ul>
                    </div>
                </div>
              <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad">
                    <h1 class="well">Registration Form</h1>
					<?php echo $this->session->flashdata('register_error'); echo $this->session->flashdata('register_success'); ?>
                        <div class="col-lg-12 well">
                           <div class="row">
                                    <form method = "post" action = "<?php echo base_url(); ?>register/create_staff">
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4 form-group">
                                                    <label>First Name</label>
                                                    <input type="text" name = "first_name" placeholder="First Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_first_name'); ?>"> <?php echo form_error('first_name'); ?>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Middle Name</label>
                                                    <input type="text" name = "middle_name" placeholder="Midle Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_middle_name'); ?>"> <?php echo form_error('middle_name'); ?>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" name = "last_name" placeholder="Last Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_last_name'); ?>"> <?php echo form_error('last_name'); ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-sm-6 form-group">
                                                        <label>Designation</label>  <?php echo form_error('profession'); ?>
                                                            <div>
                                                                <select name = "profession" class = "form-control">
                                                                    <option value="1">Administrator</option>
                                                                    <option value="2">Counselor</option>
                                                                    <option value="3">Physician</option>
                                                                    <option value="4">Nurse</option>
                                                                    <option value="5">Medical Techonlogist</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-6 form-group">
                                                        <label>Testing Facility</label>
                                                            <div>
                                                                <select name = "facility" class = "form-control">
                                                                    <option value="1">Love Yourself Anglo (Shaw Blvd., Mandaluyong City)</option>
                                                                    <option value="2">Love Yourself Uni (Taft Ave., Pasay City)</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text" name = "email_address" placeholder="Email Address" class="form-control" value = "<?php echo $this->session->flashdata('wrong_email_address'); ?>"> <?php echo form_error('email_address'); ?>
                                            </div>
                                            <div class = "row">
                                                <div class="col-sm-6 form-group">
                                                    <label for="password">Password</label>
                                                    <div>
                                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                                    </div> 
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label for="password">Confirm Password</label>
                                                    <div>
                                                        <input type="password" class="form-control" name="confirm_password" placeholder="Password">
                                                    </div> 
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                               <label>Birthday</label>                    
                                                <div class="row">
                                                    <div class="col-xs-4 col-md-4">
                                                        <select name="month_of_birth" class = "form-control">
                                                            <option value="1">Jan</option>
                                                            <option value="2">Feb</option>
                                                            <option value="3">Mar</option>
                                                            <option value="4">Apr</option>
                                                            <option value="5">May</option>
                                                            <option value="6">Jun</option>
                                                            <option value="7">Jul</option>
                                                            <option value="8">Aug</option>
                                                            <option value="9">Sep</option>
                                                            <option value="10">Oct</option>
                                                            <option value="11">Nov</option>
                                                            <option value="12">Dec</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-4 col-md-4">
                                                        <select name="day_of_birth" class = "form-control">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>                        
                                                    </div>
                                                    <div class="col-xs-4 col-md-4">
                                                        <select name="year_of_birth" class = "form-control">
                                                            <option value="1935">1935</option>
                                                            <option value="1936">1936</option>
                                                            <option value="1937">1937</option>
                                                            <option value="1938">1938</option>
                                                            <option value="1939">1939</option>
                                                            <option value="1940">1940</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1999">1999</option>
                                                            <option value="2000">2000</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2011">2014</option>
                                                            <option value="2012">2015</option>
                                                            <option value="2013">2016</option>
                                                        </select>                       
                                                    </div>
                                                </div>
                                            </div>	
                                             <div class = "row">
                                               <div class="col-sm-4 form-group">
                                                    <label>Sex </label>
                                                        <div>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="sex" value="M" id=male /> Male
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="sex" value="F" id=female /> Female
                                                            </label>
                                                        </div>
                                                </div>
                                                <div class="col-sm-8 form-group">
                                                    <label>Contact Number </label> <?php echo form_error('contact_number'); ?>
                                                        <div>
                                                            <input id="contact" name="contact_number" type="text" value = "<?php echo $this->session->flashdata('wrong_contact_number'); ?>" placeholder="Enter your contact no." class="form-control input-md"> 
                                                        </div>
                                                </div>
                                            </div>
                                            
                                            <br />
                                        
                                            <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                                                CREATE ACCOUNT </button>													
                                        </div>
                                    </form> 
                                    </div>
                        </div>
            </div>
        </div>
    </div>
</div>
<style>
.signup-btn {
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

.signup-btn:hover {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #5e7056);
  background-image: -moz-linear-gradient(top, #79bc64, #5e7056);
  background-image: -ms-linear-gradient(top, #79bc64, #5e7056);
  background-image: -o-linear-gradient(top, #79bc64, #5e7056);
  background-image: linear-gradient(to bottom, #79bc64, #5e7056);
  text-decoration: none;
}
</style>
<!--
<style>
@import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
</style>-->
