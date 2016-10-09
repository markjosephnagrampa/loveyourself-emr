<?php
	echo form_open('logout');
	echo form_fieldset();
?>

<div id="content">
	<table>
		<tr>
			<td colspan="3"><h1>User Profile</h1></td>
		</tr>
		<tr>
			<td>Name</td>
			<td>:</td>
			<td><?php echo $this->session->userdata("usrname"); ?></td>
		</tr>
		<tr>
			<td>Age</td>
			<td>:</td>
			<td>19</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>:</td>
			<td>Female</td>
		</tr>
	</table>
	
	<?php
		echo form_submit('submit', 'Logout');
		echo form_fieldset_close();
		echo form_close();
	?>
</div>