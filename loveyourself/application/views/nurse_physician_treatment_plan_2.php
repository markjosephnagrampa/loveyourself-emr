<div class="container">  
    <div class ="container"  id="content" style ='background-color: #FFFFFF;'>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad">
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
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad" >
                      <h1 class="well">Treatment Plan</h1>
                        
                        <div class="comment-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#nurse" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Nurse</h4></a></li>
                                <li><a href="physician" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Physician</h4></a></li>
                                <li><a href="#patient-database" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Patient Database</h4></a></li>
                            </ul>            
                            <div class="tab-content">
                                <div class="tab-pane active" id="nurse">                
                                   <div class="container">
								<div class="post-comments">
									<div class="row">
										<div class="media">
											<div class="media-heading">
												  <button class="btn btn-default btn-xs" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseExample">
													<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
												  </button>
												  <span class="label label-info">1</span> Name and Date
											</div>

											<div class="panel-collapse collapse in" id="collapseOne">
												 <div class="media-body">
													<p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
														<div class="comment-meta">
															<span><a href="#"> Delete</a></span>
														</div>
												</div>
											</div>
										</div>
                                        
                                      
                                        <div class="media">
											<div class="media-heading">
												  <button class="btn btn-default btn-xs" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseExample">
													<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
												  </button>
												  <span class="label label-info">1</span> Name and Date
											</div>

											<div class="panel-collapse collapse in" id="collapseOne">
												 <div class="media-body">
													<p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
														<div class="comment-meta">
															<span><a href="#"> Delete</a></span>
														</div>
												</div>
											</div>
										</div>
                                        
                                        
									</div>
									
									 <form>
									  <div class="form-group">
										<label for="comment">Add Note: </label>
										<textarea name="comment" class="form-control" rows="3"></textarea>
									  </div>
									  <button type="submit" class="btn btn-default">Send</button>
									</form>
								</div>
							</div>		
                                        
                                    
                                <!--end comments-->
                                </div>
                                <div class="tab-pane" id="physician">
                                    <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
                                        <div class="form-group">
                                            <label for="email" class="col-sm-2 control-label">Comment</label>
                                            <div class="col-sm-10">
                                              <textarea class="form-control" name="addComment" id="addComment" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="uploadMedia" class="col-sm-2 control-label">Upload media</label>
                                            <div class="col-sm-10">                    
                                                <div class="input-group">
                                                  <div class="input-group-addon">http://</div>
                                                  <input type="text" class="form-control" name="uploadMedia" id="uploadMedia">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">                    
                                                <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Submit comment</button>
                                            </div>
                                        </div>            
                                    </form>
                                </div>
                                <div class="tab-pane" id="patient-database">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 toppad">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                              <h3 class="panel-title">NAME</h3>
                                            </div>
                                            <div class="panel-body">
                                            <div class="row">
                                                <div class=" col-md-12 col-lg-12 "> 
                                                    <table class="table table-user-information">
                                                            <tbody>
                                                                <h3>Personal Information</h3>
                                                                <tr>
                                                                    <td>Name:</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Date:</td>
                                                                    <td> 000</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Age:</td>
                                                                    <td> 22</td>
                                                                    <td>Sex:</td>
                                                                    <td> Female</td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td> </td>
                                                                    <td></td>
                                                                    <td> </td>
                                                                </tr>
                                                            </tbody>
                                                    </table>
                                                </div>     
                                            </div>
                                            <div class="row">
                                                <div class=" col-md-12 col-lg- "> 
                                                    <table class="table table-user-information">
                                                            <tbody>
                                                                 <h3>Chief Complaint</h3>
                                                                <tr>
                                                                    <td></td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    
                                                                </tr>
                                                            </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class=" col-md-12 col-lg- "> 
                                                    <table class="table table-user-information">
                                                            <tbody>
                                                                 <h3>History of Present Illness</h3>
                                                                <tr>
                                                                    <td></td>
                                                                </tr>
                                                                 <tr>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class=" col-md-12 col-lg- "> 
                                                    <table class="table table-user-information">
                                                            <tbody>
                                                                 <h3> Review of Systems</h3>
                                                                <tr>
                                                                    <td>General: </td>
                                                                    <td> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Skin/Hair/Nails: </td>
                                                                    <td> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>EENT: </td>
                                                                    <td> </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Pulmonary: </td>
                                                                    <td> </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>Cardiac: </td>
                                                                    <td> </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>Vascular: </td>
                                                                    <td> </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>EENT: </td>
                                                                    <td> </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>Gastrointestinal: </td>
                                                                    <td> </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>Muscoloskeletal: </td>
                                                                    <td> </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>Endocrine: </td>
                                                                    <td> </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>Hematopoietic: </td>
                                                                    <td> </td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>Neuropsychiatric: </td>
                                                                    <td> </td>
                                                                </tr> 
                                                                 <tr>
                                                                    <td></td>
                                                                     <td></td>
                                                                </tr>
                                                            
                                                            </tbody>
                                                    </table>
                                                </div>
                                            </div>      
                                             <div class="row">
                                                <div class=" col-md-12 col-lg- "> 
                                                    <table class="table table-user-information">
                                                            <tbody>
                                                                 <h3>Past Medical History</h3>
                                                                <tr>
                                                                    <td></td>
                                                                </tr>
                                                                 <tr>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                    </table>
                                                </div>
                                            </div>    
                                            <div class="row">
                                                <div class=" col-md-12 col-lg- "> 
                                                    <table class="table table-user-information">
                                                            <tbody>
                                                                 <h3>Allergies</h3>
                                                                <tr>
                                                                    <td></td>
                                                                </tr>
                                                                 <tr>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class=" col-md-12 col-lg- "> 
                                                    <table class="table table-user-information">
                                                            <tbody>
                                                                 <h3>Personal/Social History</h3>
                                                                <tr>
                                                                    <td></td>
                                                                </tr>
                                                                 <tr>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                             <div class="row">
                                                <div class=" col-md-12 col-lg- "> 
                                                    <table class="table table-user-information">
                                                            <tbody>
                                                                 <h3>Family History</h3>
                                                                <tr>
                                                                    <td></td>
                                                                </tr>
                                                                 <tr>
                                                                    <td></td>
                                                                </tr>
                                                            </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                </div>
            </div>
    </div>
</div>


<style>
.row {
    margin-top: 10px;
}

.panel-tabs {
    position: relative;
    bottom: 30px;
    clear:both;
    border-bottom: 1px solid transparent;
}

.panel-tabs > li {
    float: left;
    margin-bottom: -1px;
}

.panel-tabs > li > a {
    margin-right: 2px;
    margin-top: 4px;
    line-height: .85;
    border: 1px solid transparent;
    border-radius: 4px 4px 0 0;
    color: #FFFFFF;
}

.panel-tabs > li > a:hover {
    border-color: transparent;
    color: #FFFFFF;
    background-color: transparent;
}

.panel-primary>.panel-heading {
    color: #FFFFFF;
    background-color: #000000;
    border-color: #000000;
}

.panel-primary {
    border-color: #000000;
}

.panel-tabs > li.active > a,
.panel-tabs > li.active > a:hover,
.panel-tabs > li.active > a:focus {
    color: #FFFFFF;
    cursor: default;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    background-color: rgba(255,255,255, .23);
    border-bottom-color: transparent;
}

.tab-pane{
    height:300px;
    overflow-y:scroll;
}
.post-comments {
  padding-bottom: 9px;
  margin: 5px 0 5px;
}

.comments-nav {
  border-bottom: 1px solid #eee;
  margin-bottom: 5px;
}

.post-comments .comment-meta {
  border-bottom: 1px solid #eee;
  margin-bottom: 5px;
}

.post-comments .media {
  border-left: 1px dotted #000;
  border-bottom: 1px dotted #000;
  margin-bottom: 5px;
  padding-left: 30 px;
}

.post-comments .media-heading {
  font-size: 12px;
  color: grey;
}

.post-comments .comment-meta a {
  font-size: 12px;
  color: grey;
  font-weight: bolder;
  margin-right: 5px;
}
</style>
<script>
$('[data-toggle="collapse"]').on('click', function() {
    var $this = $(this),
            $parent = typeof $this.data('parent')!== 'undefined' ? $($this.data('parent')) : undefined;
    if($parent === undefined) { /* Just toggle my  */
        $this.find('.glyphicon').toggleClass('glyphicon-plus glyphicon-minus');
        return true;
    }

    /* Open element will be close if parent !== undefined */
    var currentIcon = $this.find('.glyphicon');
    currentIcon.toggleClass('glyphicon-plus glyphicon-minus');
    $parent.find('.glyphicon').not(currentIcon).removeClass('glyphicon-minus').addClass('glyphicon-plus');

});
</script>