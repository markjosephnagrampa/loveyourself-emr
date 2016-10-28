<!--
	Log:
		Oct 12, 2016 - Edited: Month, Day, Year of Birth
					 	- Added name fields
-->

<div class="container">
<div class="container" id="content" style ='background-color: #FFFFFF;'>
<div id="container">

    <div id = "query">
        <?php 
        $title = "I Want to Get Tested";
            echo heading($title, 1); 
        ?>
    </div>
    <div>
        <p> If you have signed-up with LoveYourself before, just enter your </p>
		<p> name and birthday in the fields below for your reference code. </p>
		<!--Edited Oct 12, 2016
			Added: error message for form checking
			-->
			<?php if(isset($error_message))
				echo '<p style="text-align:center; font-weight:bold; ">'.$error_message.'</p>';
			 ?>
    </div>
    <div>
    <div>
    <!--Edited Oct 12, 2016-->
    	<?php echo form_open(); ?>
        <!--<form method="post" action="<?php echo base_url(); ?>site/schedule_nonfirsttimer">-->
            <table class="table">
                <tr>      </tr>
                <tr>
                    <td><?php echo form_label('Name', 'name_query'); ?></td>
                    <td>:</td>
                    <!--td><?php
						$data = array(
						        'name' => 'name_query',
						        'id'   => 'name_query',
						        'maxlength'     => '50',
						        'size'          => '30',
								'placeholder'   => 'Name',
								'class'			=> 'form-control'
						);
						echo form_input($data);
						?></td-->
				<td><?php 
				$data = array(
					"name" => "firstName_query",
					"id" => "firstName_query",
					"value" => "",
					"size" => "20",
					"maxlength" => "20",
					"placeholder" => "First Name",
					"class" => "form-control",
					"required" => "true"
				);
				echo form_input($data);
				?></td>
				<td><?php 
				$data = array(
					"name" => "middleName_query",
					"id" => "middleName_query",
					"value" => "",
					"size" => "20",
					"maxlength" => "20",
					"placeholder" => "Middle Name",
					"class" => "form-control",
					"required" => "true"
						
				);
				echo form_input($data);
				?></td>
				<td><?php 
				$data = array(
					"name" => "lastName_query",
					"id" => "lastName_query",
					"value" => "",
					"size" => "20",
					"maxlength" => "20",
					"placeholder" => "Last Name",
					"class" => "form-control",
					"required" => "true"
				);
				echo form_input($data);
				?></td>
			     </tr>
                 <tr>
                    <td><?php echo form_label('Birthday', 'bday_query'); ?></td>
                    <td>:</td>
                    <!--td<?php
						$data = array(
						        'name' => 'bday_query',
						        'id'   => 'bday_query',
						        'maxlength'     => '10',
						        'size'          => '30',
								'placeholder'   => 'MM/DD/YYYY',
								'class'			=> 'form-control'
						);
						echo form_input($data);
						?></td-->
					<td>
					<!--Edited Oct 12, 2016-->
						<!--Used form_dropdown option instead-->

						<?php 
							$options = array(
						        '1'         => 'January',
						        '2'           => 'February',
						        '3'         => 'March',
						        '4'        => 'April',
						        '5'         => 'May',
						        '6'           => 'June',
						        '7'         => 'July',
						        '8'        => 'August',
						        '9'         => 'September',
						        '10'        => 'October',
						        '11'         => 'November',
						        '12'        => 'December',
							);
						echo form_dropdown('monthOfBirth_query', $options, '1',['class' => "form-control", 'id' => "monthOfBirth_query"]);
						 ?>
					<!--<select class="form-control" id="monthOfBirth_query" name="monthOfBirth_query">
						<option>January</option>
						<option>February</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>-->
				</td>
				<td>
					<select class="form-control" id="dayOfBirth_query" name="dayOfBirth_query">
						<?php
							
							for($x = 1; $x <= 31;$x++){
								echo '<option value="'.$x.'">'.$x.'</option>';
							}
						?>
						<!--<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
						<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
						<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
						<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
						<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
						<option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>	-->
					</select>
				</td>
				<td>
						<select class="form-control" id="yearOfBirth_query" name="yearOfBirth_query">
							<option>2016</option><option>2015</option><option>2014</option><option>2013</option><option>2012</option><option>2011</option>
							<option>2010</option><option>2009</option><option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option>
							<option>2000</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option>
							<option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option>
							<option>1980</option><option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option><option>1974</option><option>1973</option><option>1972</option><option>1971</option>
							<option>1970</option><option>1969</option><option>1968</option><option>1967</option><option>1966</option><option>1965</option><option>1964</option><option>1963</option><option>1962</option><option>1961</option>
							<option>1960</option><option>1959</option><option>1958</option><option>1957</option><option>1956</option><option>1955</option><option>1954</option><option>1953</option><option>1952</option><option>1951</option>
							<option>1950</option><option>1949</option><option>1948</option><option>1947</option><option>1946</option><option>1945</option><option>1944</option><option>1943</option><option>1942</option><option>1941</option>
							<option>1940</option><option>1939</option><option>1938</option><option>1937</option><option>1936</option><option>1935</option><option>1934</option><option>1933</option><option>1932</option><option>1931</option>
							<option>1930</option><option>1929</option><option>1928</option><option>1927</option><option>1926</option><option>1925</option><option>1924</option><option>1923</option><option>1922</option><option>1921</option>
						</select>
					</td>
                </tr>
                <tr>
                    <!--td colspan=4></td-->
                    <td colspan=5><?php
						$data = array(
							'name' => 'submitRefcode_query',
							'id'   => 'submitRefcode_query',
							'value' => 'Submit',
							'type' => 'submit',
							'content' => 'Search',
							'class' => 'btn btn-default',
							'formaction' => 'schedule_nonfirsttimer',
							'style' => 'float: right'
						);
						echo form_submit($data);?>
                    </td>
                </tr>
            
            </table>
            <!--Edited Oct 12, 2016-->
            <?php echo form_close(); ?>
    </div>
</div>
</div>
</div>