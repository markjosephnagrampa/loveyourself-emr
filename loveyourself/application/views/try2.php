<form method = "post" action = "<?php echo base_url(); ?>register/reset_password">
<input type = "text" name = "password" placeholder = "Password"></input><br><?php echo form_error('password'); ?>
<input type = "text" name = "new_password" placeholder = "Password"></input><br><?php echo form_error('new_password'); ?>
<input type = "text" name = "confirm_password" placeholder = "Password"></input><br><?php echo form_error('confirm_password'); ?>
<button type = "submit">Submit</button>
</form>