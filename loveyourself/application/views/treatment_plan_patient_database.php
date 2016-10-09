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
                            <li><a href="<?php echo base_url(); ?>site/profile"><span class="glyphicon glyphicon-list"></span> Reference Code</a></li>
                            <li><a href="<?php echo base_url(); ?>site/nurse_physician_treatment_plan"><span class="glyphicon glyphicon-list"></span> Treatment Plan</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Discharge Instruction</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-list"></span> Input Patient's Results</a></li>
                        </ul>
                    </div>
                </div>
              <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad">
                    <h1 class="well">Create Patient Database</h1>
					<!--<?php echo $this->session->flashdata('register_error'); echo $this->session->flashdata('register_success'); ?>-->
                        <div class="col-lg-12 well">
                           <div class="row">
                                    <!--<form method = "post" action = "<?php echo base_url(); ?>register/create_staff"> -->
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-4 form-group">
                                                    <!--label>First Name</label-->
													<td><?php echo form_label("First Name ", "first_name"); ?></td>
													<td><?php 
													$data = array(
														"name" => "first_name",
														"id" => "first_name",
														"value" => "",
														//"size" => "20",
														"maxlength" => "20",
														"placeholder" => "First Name",
														"class" => "form-control"
													);
													echo form_input($data);
													echo form_error('first_name');
													?></td>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <!--label>Middle Name</label>
                                                    <input type="text" name = "middle_name" placeholder="Midle Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_middle_name'); ?>"--> <!--?php echo form_error('middle_name'); ?-->
													<td><?php echo form_label("Middle Name ", "middle_name"); ?></td>
													<td><?php 
													$data = array(
														"name" => "middle_name",
														"id" => "middle_name",
														"value" => "",
														//"size" => "20",
														"maxlength" => "20",
														"placeholder" => "Middle Name",
														"class" => "form-control"
													);
													echo form_input($data);
													echo form_error('middle_name');
													?></td>
                                                </div>
                                                <div class="col-sm-4 form-group">
                                                    <!--label>Last Name</label>
                                                    <input type="text" name = "last_name" placeholder="Last Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_last_name'); ?>"--> <!--?php echo form_error('last_name'); ?-->
													<td><?php echo form_label("Last Name ", "last_name"); ?></td>
													<td><?php 
													$data = array(
														"name" => "last_name",
														"id" => "last_name",
														"value" => "",
														//"size" => "20",
														"maxlength" => "20",
														"placeholder" => "Last Name",
														"class" => "form-control"
													);
													echo form_input($data);
													echo form_error('last_name');
													?></td>
                                                </div>
											</div>
											<div class="row">
												<div class="col-sm-4 form-group">
                                                    <!--label>Last Name</label>
                                                    <input type="text" name = "last_name" placeholder="Last Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_last_name'); ?>"--> <!--?php echo form_error('last_name'); ?-->
													<td><?php echo form_label("Date:"); ?></td>
													<br><td><?php 
															$tz = 'Asia/Manila';
															$timestamp = time();
															$dt = new DateTime("now", new DateTimeZone($tz));
															$dt->setTimestamp($timestamp);
															echo $dt->format('m	/	d	/	Y');
													?></td></br></br>
                                                </div>
												<div class="col-sm-4 form-group">
                                                    <!--label>Last Name</label>
                                                    <input type="text" name = "last_name" placeholder="Last Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_last_name'); ?>"--> <!--?php echo form_error('last_name'); ?-->
													<td><?php echo form_label("Age", "pdb_age"); ?></td>
													<td><?php 
													$data = array(
														"name" => "pdb_age",
														"id" => "pdb_age",
														"value" => "",
														//"size" => "20",
														"maxlength" => "3",
														"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													echo form_error('pdb_age');
													?></td>
                                                </div>
												<div class="col-sm-4 form-group">
                                                    <!--label>Last Name</label>
                                                    <input type="text" name = "last_name" placeholder="Last Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_last_name'); ?>"--> <!--?php echo form_error('last_name'); ?-->
													<td><?php echo form_label("Sex", "sex_db"); ?></td>
															<br><td><?php 
															$data = array(
																'name'          => 'sex_db',
																'id'            => 'sex_db_male',
																'value'         => 'male',
																'checked'       => FALSE,
																'style'         => 'margin-right: 10px;'
																//'required'		=> 'required'
															);
															echo form_radio($data);
															//echo form_error('sex');
															?>
															</td>
															<td><?php 
																 $male_attributes = array(
																	 'style' => 'font-weight: normal; margin-right: 20px; vertical-align: middle;'
																 );
																echo form_label('Male', 'sex_db_male', $male_attributes); ?></td>
															<td><?php 
															$data = array(
																'name'          => 'sex_db',
																'id'            => 'sex_db_female',
																'value'         => 'female',
																'checked'       => FALSE,
																'style'         => 'margin-right: 10px;'
															);
															echo form_radio($data);?>
															</td>
															<td><?php 
																 $attributes = array(
																	 'style' => 'font-weight: normal; vertical-align: middle;'
																 );
																echo form_label('Female', 'sex_db_female', $attributes); ?>
															</td></br>
                                                </div>
												<div class="col-sm-12 form-group">
													<td><?php echo form_label("Chief Complaint", "chief_comp"); ?></td>
													<td><?php 
													$data = array(
														"name" => "chief_comp",
														"id" => "chief_comp",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
                                            </div>
                                            <div class="form-group">
                                                    <!--label>Last Name</label>
                                                    <input type="text" name = "last_name" placeholder="Last Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_last_name'); ?>"--> <!--?php echo form_error('last_name'); ?-->
													<td><?php echo form_label("History of Present Illness", "hist_illness"); ?></td>
													<td><?php 
													$data = array(
														"name" => "hist_illness",
														"id" => "hist_illness",
														"value" => "",
														"rows" => "7",
														//"size" => "20",
														"maxlength" => "200",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_textarea($data);
													//echo form_error('pdb_age');
													?></td>
                                            </div>
											<div class="form-group">
                                                    <!--label>Last Name</label>
                                                    <input type="text" name = "last_name" placeholder="Last Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_last_name'); ?>"--> <!--?php echo form_error('last_name'); ?-->
													<td><?php echo form_label("Review of Systems"); ?></td><br />
													<td><?php echo form_label("General", "general"); ?></td>
													<td><?php 
													$data = array(
														"name" => "general",
														"id" => "general",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
											<div class="form-group">
													<td><?php echo form_label("Skin / Hair / Nails", "shn"); ?></td>
													<td><?php 
													$data = array(
														"name" => "shn",
														"id" => "shn",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
											<div class="form-group">
													<td><?php echo form_label("EENT", "eent"); ?></td>
													<td><?php 
													$data = array(
														"name" => "eent",
														"id" => "eent",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
											<div class="form-group">
													<td><?php echo form_label("Pulmonary", "pulmo"); ?></td>
													<td><?php 
													$data = array(
														"name" => "pulmo",
														"id" => "pulmo",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
											<div class="form-group">
													<td><?php echo form_label("Cardiac", "cardiac"); ?></td>
													<td><?php 
													$data = array(
														"name" => "cardiac",
														"id" => "cardiac",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
											<div class="form-group">
													<td><?php echo form_label("Vascular", "vascular"); ?></td>
													<td><?php 
													$data = array(
														"name" => "vascular",
														"id" => "vascular",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
											<div class="form-group">
													<td><?php echo form_label("Gastrointestinal", "gastro"); ?></td>
													<td><?php 
													$data = array(
														"name" => "gastro",
														"id" => "gastro",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
											<div class="form-group">
													<td><?php echo form_label("Genitourinary", "geni"); ?></td>
													<td><?php 
													$data = array(
														"name" => "geni",
														"id" => "geni",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
											<div class="form-group">
													<td><?php echo form_label("Musculoskeletal", "musculo"); ?></td>
													<td><?php 
													$data = array(
														"name" => "musculo",
														"id" => "musculo",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
											<div class="form-group">
													<td><?php echo form_label("Endocrine", "endo"); ?></td>
													<td><?php 
													$data = array(
														"name" => "endo",
														"id" => "endo",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
											<div class="form-group">
													<td><?php echo form_label("Hematopoietic", "hema"); ?></td>
													<td><?php 
													$data = array(
														"name" => "hema",
														"id" => "hema",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
											<div class="form-group">
													<td><?php echo form_label("Neuropsychiatric", "neuro"); ?></td>
													<td><?php 
													$data = array(
														"name" => "neuro",
														"id" => "neuro",
														"value" => "",
														//"size" => "20",
														"maxlength" => "50",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_input($data);
													//echo form_error('pdb_age');
													?></td></div>
											<div class="form-group">
                                                    <!--label>Last Name</label>
                                                    <input type="text" name = "last_name" placeholder="Last Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_last_name'); ?>"--> <!--?php echo form_error('last_name'); ?-->
													<td><?php echo form_label("Past Medical History", "past_histo"); ?></td>
													<td><?php 
													$data = array(
														"name" => "past_histo",
														"id" => "past_histo",
														"value" => "",
														"rows" => "7",
														//"size" => "20",
														"maxlength" => "200",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_textarea($data);
													//echo form_error('pdb_age');
													?></td>
                                            </div>
											<div class="form-group">
                                                    <!--label>Last Name</label>
                                                    <input type="text" name = "last_name" placeholder="Last Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_last_name'); ?>"--> <!--?php echo form_error('last_name'); ?-->
													<td><?php echo form_label("Allergies", "allergy"); ?></td>
													<td><?php 
													$data = array(
														"name" => "allergy",
														"id" => "allergy",
														"value" => "",
														"rows" => "7",
														//"size" => "20",
														"maxlength" => "200",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_textarea($data);
													//echo form_error('pdb_age');
													?></td>
                                            </div>
											<div class="form-group">
                                                    <!--label>Last Name</label>
                                                    <input type="text" name = "last_name" placeholder="Last Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_last_name'); ?>"--> <!--?php echo form_error('last_name'); ?-->
													<td><?php echo form_label("Personal / Social History", "per_histo"); ?></td>
													<td><?php 
													$data = array(
														"name" => "per_histo",
														"id" => "per_histo",
														"value" => "",
														"rows" => "7",
														//"size" => "20",
														"maxlength" => "200",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_textarea($data);
													//echo form_error('pdb_age');
													?></td>
                                            </div>
											<div class="form-group">
                                                    <!--label>Last Name</label>
                                                    <input type="text" name = "last_name" placeholder="Last Name" class="form-control" value = "<?php echo $this->session->flashdata('wrong_last_name'); ?>"--> <!--?php echo form_error('last_name'); ?-->
													<td><?php echo form_label("Family History", "fam_histo"); ?></td>
													<td><?php 
													$data = array(
														"name" => "fam_histo",
														"id" => "fam_histo",
														"value" => "",
														"rows" => "7",
														//"size" => "20",
														"maxlength" => "200",
														//"placeholder" => "Age",
														"class" => "form-control"
													);
													echo form_textarea($data);
													//echo form_error('pdb_age');
													?></td>
                                            </div>
                                            </div>
                                            </div>	
                                            </div>
                                            
                                            <br />
                                        
                                            <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                                                CREATE PATIENT DATABASE </button>													
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
