<form method = "post" action = "<?php echo base_url(); ?>register/create_staff">
<input type = "text" name = "first_name" value = "<?php echo $this->session->flashdata('first_name'); ?>" placeholder = "First Name"></input><?php echo form_error('first_name'); ?><br>
<input type = "text" name = "middle_name" value = "<?php echo $this->session->flashdata('middle_name'); ?>" placeholder = "Middle Name"></input><?php echo form_error('middle_name'); ?><br>
<input type = "text" name = "last_name" value = "<?php echo $this->session->flashdata('last_name'); ?>" placeholder = "Last Name"></input><?php echo form_error('last_name'); ?><br>
<input type = "text" name = "sex" value = "<?php echo $this->session->flashdata('sex'); ?>" placeholder = "Sex"></input><?php echo form_error('sex'); ?><br>
<input type = "text" name = "month_of_birth" value = "<?php echo $this->session->flashdata('month_of_birth'); ?>" placeholder = "Month of Birth"></input><?php echo form_error('month_of_birth'); ?><br>
<input type = "text" name = "day_of_birth" value = "<?php echo $this->session->flashdata('day_of_birth'); ?>" placeholder = "Day of Birth"></input><?php echo form_error('day_of_birth'); ?><br>
<input type = "text" name = "year_of_birth" value = "<?php echo $this->session->flashdata('year_of_birth'); ?>" placeholder = "Year of Birth"></input><?php echo form_error('year_of_birth'); ?><br>
<input type = "text" name = "email_address" value = "<?php echo $this->session->flashdata('email_address'); ?>" placeholder = "Email Address"></input><?php echo form_error('email_address'); ?><br>
<input type = "text" name = "contact_number" value = "<?php echo $this->session->flashdata('contact_number'); ?>" placeholder = "Contact Number"></input><?php echo form_error('contact_number'); ?><br>
<input type = "text" name = "password" placeholder = "Password"></input><?php echo form_error('password'); ?><br>
<input type = "text" name = "confirm_password" placeholder = "Confirm password"></input><?php echo form_error('confirm_password'); ?><br>
<input type = "text" name = "profession" placeholder = "Profession"></input><?php echo form_error('profession'); ?><br>
<button type = "submit">Submit</button>
</form>