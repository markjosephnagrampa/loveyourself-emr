<div class="container">
	<div class="container" id="content" style ='background-color: #FFFFFF;'>
		<div id="content">
			<?php 
	$title = "Contact Us";
	$attribute = array(
				//'style' => 'align: center;'
				'align' => 'center',
				'style' => 'font-weight: bold; font-size:50px; margin-bottom: 30px;',
			);
		echo heading($title, 1, $attribute); 
	?>
			
			<div class="content">
			<div class="row">
				<div class="col-md-6">
					<div class="well well-sm">
						<form class="form-horizontal" method="post">
							<fieldset>
								<legend class="text-center header" style="font-weight: bold;">We would love to hear from you!</legend>
								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<!--input id="fname" name="name" type="text" placeholder="First Name" class="form-control"-->
										<td><?php 
											$data = array(
												"name" => "cfirstName",
												"id" => "cfirstName",
												"value" => "",
												//"size" => "40",
												"maxlength" => "20",
												"placeholder" => "First Name",
												"class" => "form-control"
											);
											echo form_input($data);
										?></td>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<!--input id="lname" name="name" type="text" placeholder="Last Name" class="form-control"-->
										<td><?php 
											$data = array(
												"name" => "clastName",
												"id" => "clastName",
												"value" => "",
												//"size" => "40",
												"maxlength" => "20",
												"placeholder" => "Last Name",
												"class" => "form-control"
											);
											echo form_input($data);
										?></td>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<!--input id="email" name="email" type="text" placeholder="Email Address" class="form-control"-->
										<td><?php 
											$data = array(
												"name" => "cEmail",
												"id" => "cEmail",
												"value" => "",
												//"size" => "40",
												"maxlength" => "20",
												"placeholder" => "Email Address",
												"class" => "form-control"
											);
											echo form_input($data);
										?></td>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<!--input id="phone" name="phone" type="text" placeholder="Phone" class="form-control"-->
										<td><?php 
											$data = array(
												"name" => "cPhone",
												"id" => "cPhone",
												"value" => "",
												//"size" => "40",
												"maxlength" => "20",
												"placeholder" => "Contact Number",
												"class" => "form-control"
											);
											echo form_input($data);
										?></td>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-10 col-md-offset-1">
										<!--textarea class="form-control" id="message" name="message" placeholder="Enter your message for us here. We will get back to you within 2 business days." rows="7"></textarea-->
										<td><?php 
											$data = array(
												"name" => "cMessage",
												"id" => "cMessage",
												"value" => "",
												"rows" => "7",
												//"size" => "40",
												"maxlength" => "500",
												"placeholder" => "Enter your message for us here. We will get back to you within 2 business days.",
												"class" => "form-control"
											);
											echo form_textarea($data);
										?></td>
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-12 text-center">
										<!--button type="submit" class="btn btn-primary btn-lg">Submit</button-->
										<?php 
											//echo form_fieldset_close();
											$data = array(
												'name' => 'sendEmail',
												'id'   => 'sendEmail',
												'value' => 'Send Email',
												'type' => 'submit',
												'content' => 'Submit Email',
												'class' => 'btn btn-primary',
												'style' => 'font-size: 20px;'
											);
											echo form_button($data);
											//echo form_close();
										?>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div>
						<div class="panel panel-default">
							<legend class="text-center header" style="font-size: 25px; font-weight: bold; padding: 2px;">Our Office</legend>
							<h4 class="text-center header" style="font-weight: bold; font-size: 20px;">Address</h4>
							<div class="panel-body text-center" style="font-size: 16px;">
								
								<div>
								Loveyourself Inc. Office<br />
								Block 1 Lot 4 Rockyside Village<br />
								Bagumbayan <br/>
								1631 Taguig City <br/>
								Philippines <br/>
								#(703) 1234 1234<br />
								service@company.com<br />
								</div>
								<hr />
								<div id="map1" class="map">
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



<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>

<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

</style>