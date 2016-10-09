<?php
    class Login extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('login_model');
		}
		
		public function user_forgot_password(){
			$login_rules = array(
				"usrname" => array("field" => "usrname",
									"label" => "Username",
									"rules" => "required|trim|callback_check_user"),
				"email" => array("field" => "email",
									"label" => "Email",
									"rules" => "required|valid_email")
			);
			$this->form_validation->set_rules($login_rules);
			if ($this->form_validation->run() != true) {
				$this->session->set_flashdata('wrong_username_in_forgot_password_modal', $this->input->post('usrname'));
				$this->session->set_flashdata('login_error_in_forgot_password_modal', 'Invalid username or email!');
				$this->session->set_flashdata('wrong_email_in_forgot_password_modal', $this->input->post('email'));
				redirect(base_url());
			}
			 else {
				
				$email = $this->input->post('email');

				// TEMPORARY CODE
					// Parse the username format: 01-CNS-00001
					// 00001 is the staff id, pass that value to the forgot_password function
					$username = $this->session->flashdata('tempo_login')[2];

				// FUTURE CODE (uncomment)
					/*
						$username = $this->input->post('usrname')
					*/

					if($this->login_model->verify_correct_username_email($username, $email)){
						
						$this->session->set_flashdata('query_email', 'query_email');
						$this->session->set_flashdata('query_email_success', 'query_email_success');
						redirect(base_url());
					}
					// The user's Staff_ID doesn't match with the input email
					else{
						$this->session->set_flashdata('query_email', 'query_email');
						$this->session->set_flashdata('query_email_failure', $username);
						redirect(base_url());
					}

			}

		}

        public function user_login(){
			$login_rules = array(
				"usrname" => array("field" => "usrname",
									"label" => "Username",
									"rules" => "required|trim|callback_check_user"),
				"psw" => array("field" => "psw",
									"label" => "Password",
									"rules" => "required|trim")
			);
			$this->form_validation->set_rules($login_rules);
			if ($this->form_validation->run() != true) {
				$this->session->set_flashdata('wrong_usrname', $this->input->post('usrname'));
				$this->session->set_flashdata('login_error', 'Invalid username or password!');
				//redirect(base_url());
			} else {
				$username = $this->session->flashdata('tempo_login');
				$password = $this->input->post('psw');
				if($this->login_user($username, $password)){
					$this->session->set_userdata('usrname', $this->input->post('usrname'));
					$this->session->set_userdata('staff_profession', $username[1]);
					$this->session->set_userdata('staff_id', $username[2]);
					redirect(base_url().'site/profile');
				} else {
					$this->session->set_flashdata('wrong_usrname', $this->input->post('usrname'));
					$this->session->set_flashdata('login_error', 'Invalid username or password!');
					redirect(base_url());
				}
			}
		}
		
		public function check_user($username){
			$staff_info = explode("-", $username);
			
			if(sizeof($staff_info) == 3){
				if(strlen($staff_info[0]) == 2){
					if($staff_info[0][0] == 0){
						$staff_info[0] = $staff_info[0][1];
					}
				} else {
					return FALSE;
				}

				switch($staff_info[1]){
					case 'ADM':
						$staff_info[1] = 1;
						break;
					case 'CNS':
						$staff_info[1] = 2;
						break;
					case 'NUR':
						$staff_info[1] = 3;
						break;
					case 'PHY':
						$staff_info[1] = 4;
						break;
					case 'MDT':
						$staff_info[1] = 5;
						break;
					default:
						return FALSE;
				}
				
				if(strlen($staff_info[2]) == 5){
					$staff_info[2] = str_replace('0', '', $staff_info[2]);
					if(strlen($staff_info[2]) <= 0){
						return FALSE;
					}
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
			$this->session->set_flashdata('tempo_login', $staff_info);
			return TRUE;
		}
		
		public function login_user($username, $password){
			return $this->login_model->user_verify($username, $password);
		}
		
		public function no_login(){
			$this->session->set_flashdata('login_prohibited', 'You must be logged in to access this site.');
			redirect(base_url());
		}
    }
?>