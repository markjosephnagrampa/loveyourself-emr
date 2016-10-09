<?php
	class Register extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('register_model');
		}
		
		public function create_staff(){
			if($this->session->userdata('usrname')){
				$register_rules = array (
					'first_name' => array (
						'field' => 'first_name',
						'label' => 'First name',
						'rules' => 'required|trim|alpha'
					),
					'middle_name' => array (
						'field' => 'middle_name',
						'label' => 'Middle name',
						'rules' => 'required|trim|alpha'
					),
					'last_name' => array (
						'field' => 'last_name',
						'label' => 'Last name',
						'rules' => 'required|trim|alpha'
					),
					'sex' => array (
						'field' => 'sex',
						'label' => 'Sex',
						'rules' => 'required|trim|alpha'
					),
					'month_of_birth' => array (
						'field' => 'month_of_birth',
						'label' => 'Month of birth',
						'rules' => 'required|trim|numeric'
					),
					'day_of_birth' => array (
						'field' => 'day_of_birth',
						'label' => 'Day of birth',
						'rules' => 'required|trim|numeric'
					),
					'year_of_birth' => array (
						'field' => 'year_of_birth',
						'label' => 'Year of birth',
						'rules' => 'required|trim|numeric'
					),
					'email_address' => array (
						'field' => 'email_address',
						'label' => 'Email address',
						'rules' => 'required|trim|valid_email'
					),
					/*'contact_number' => array (
						'field' => 'contact_number',
						'label' => 'Contact number',
						'rules' => 'required|trim|numeric'
					),*/
					'profession' => array (
						'field' => 'profession',
						'label' => 'Profession',
						'rules' => 'required|trim|numeric'
					),
					'password' => array (
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'required|trim|alpha_numeric'
					),
					'confirm_password' => array (
						'field' => 'confirm_password',
						'label' => 'Confirm password',
						'rules' => 'required|trim|matches[password]'
					)
				);
				$this->form_validation->set_rules($register_rules);
				if ($this->form_validation->run() === FALSE) {
					$this->session->set_flashdata('wrong_first_name', $this->input->post('first_name'));
					$this->session->set_flashdata('wrong_middle_name', $this->input->post('middle_name'));
					$this->session->set_flashdata('wrong_last_name', $this->input->post('last_name'));
					$this->session->set_flashdata('wrong_email_address', $this->input->post('email_address'));
					$this->session->set_flashdata('wrong_contact_number', $this->input->post('contact_number'));
					$this->session->set_flashdata('register_error', 'Registration failed. Please fill up the form correctly.');
					redirect(base_url().'site/admin_create_user');
				} else {
					$this->register_model->register();
					$this->session->set_flashdata('register_success', 'Registration successful!');
					redirect(base_url().'site/admin_create_user');
				}
			} else {
				redirect(base_url().'login/no_login');
			}
		}
		
		public function reset_password(){
			if($this->session->userdata('usrname')){
				$reset_rules = array(
					'current_password' => array (
						'field' => 'current_password',
						'label' => 'Current assword',
						'rules' => 'required|trim|alpha_numeric|callback_check_password'
					),
					'new_password' => array (
						'field' => 'new_password',
						'label' => 'New password',
						'rules' => 'required|trim|alpha_numeric'
					),
					'confirm_password' => array (
						'field' => 'confirm_password',
						'label' => 'Confirm password',
						'rules' => 'required|trim|matches[new_password]'
					)
				);
				$this->form_validation->set_rules($reset_rules);
				if ($this->form_validation->run() === FALSE) {
					$this->session->set_flashdata('reset_error', 'Reset Password failed. Invalid password or mismatch was found.');
					redirect(base_url().'site/reset_password');
				} else {
					$this->session->set_flashdata('reset_success', 'Your password has been changed successfully!');
					redirect(base_url().'site/account_profile_info');
				}
			} else {
				redirect(base_url().'login/no_login');
			}
		}
		
		public function check_password($password){
			$username = $this->session->userdata('usrname');
			$staff_info = explode("-", $username);
			$staff_info[2] = str_replace('0', '', $staff_info[2]);
			if($this->register_model->verify_password($staff_info[2], $password)){
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}
?>