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
									"rules" => "required|valid_email|trim")
			);
			$this->form_validation->set_rules($login_rules);
			if ($this->form_validation->run() != true) {
				$this->session->set_flashdata('Wrong_Form_Input_Forgot_Password', 1);
				$this->session->set_flashdata('login_error_in_forgot_password_modal', 1);
				$this->session->set_flashdata('wrong_username_in_forgot_password_modal', $this->input->post('usrname'));
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

						$this->session->set_flashdata('query_email_success', 1);
						$this->session->set_flashdata('email_address', $email);

						// TEMPORARY CODE
							// Reset the user's password with a random string.

							$random_password_length = rand(5,12);
							$password_key = $this->_rand_string($random_password_length);
							$new_password = $password_key;

							
							$this->load->model('database_query');
							$staff_row = $this->database_query->get_staff_record2($username);
							$staff_id = $staff_row['staff_id'];

							// Encrypt the new password
								// $salt = sha1(md5($password_key));
								// $new_password = md5($password_key.$salt);

							$query_str = "UPDATE `staff_record` SET `staff_password`='". $new_password ."'" . " WHERE `staff_id`='".$staff_id."'";
							$this->db->query($query_str);
							
						// TEMPORARY CODE
						// Email the user with the new password

							/* SOLUTION A: Use Codeigniter Library (not functioning)
							// 1. Load Library and set preferences							
							$this->load->library('email');

								/*Sendmail Protocol*/
								/*
								$config['protocol'] = 'sendmail';
								$config['smtp_host'] = 'smtp.gmail.com';
								$config['smtp_user'] = 'marknagrampa489@gmail.com';
								$config['smtp_pass'] = 'discvor489';
								*/
								/*SMTP Protocol
								$config['protocol'] = 'smtp';
								$config['smtp_host'] = 'ssl://smtp.gmail.com';
								$config['smtp_user'] = 'marknagrampa489@gmail.com';
								$config['smtp_pass'] = 'discvor489';
								$config['smtp_port'] = 587; 
							$this->email->initialize($config);


							// 2. Set email content
							$this->email->from('marknagrampa489@gmail.com','Loveyourself Dev Team');
							$this->email->subject('New Loveyourself Account Password');
							$this->email->message('Here is your new password: test');

							// 3. Send the email. Display an error upon failure
							if(!$this->email->send(false)){
	  							$error = $this->email->print_debugger();
	  							
	  							$this->session->set_flashdata('send_email_failure', $error);
							}
							*/

							// SOLUTION B: Use PHPMailer Library

							require_once(dirname(__FILE__).'\PHPMailer-master\PHPMailerAutoload.php');
							//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

							$mail             = new PHPMailer();

							//$body             = file_get_contents('contents.html');
							//$body             = eregi_replace("[\]",'',$body);
							$body = "<!DOCTYPE html>
							<html>
							<head>
								<title>Loveyourself: Forgot Password</title>
							</head>
							<body>
								Here is your temporary password: ".$new_password."
								<br>
								To edit this, simply login and reset your password. 
							</body>
							</html>";

							$mail->IsSMTP(); // telling the class to use SMTP
							$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
							                                           // 1 = errors and messages
							                                           // 2 = messages only
							$mail->SMTPAuth   = true;                  // enable SMTP authentication
							$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
							$mail->Host       = "smtp.mail.yahoo.com";      // sets GMAIL as the SMTP server
							$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
							$mail->Username   = "marknagrampa_489@yahoo.com";  // GMAIL username
							$mail->Password   = "discvor489";            // GMAIL password

							$mail->SetFrom('marknagrampa_489@yahoo.com', 'LoveYourself');

							$mail->AddReplyTo("marknagrampa_489@yahoo.com","First Last");

							$mail->Subject    = "New Loveyourself Account Password";

							$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

							$mail->MsgHTML($body);

							$address = "marknagrampa489@gmail.com";
							$mail->AddAddress($address, "John Doe");

							// $mail->AddAttachment("images/phpmailer.gif");      // attachment
							// $mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

							if(!$mail->Send()) {
							  // echo "Mailer Error: " . $mail->ErrorInfo;
							  $error = $mail->ErrorInfo;
							  $this->session->set_flashdata('send_email_failure', $error);
							} else {
							  //echo "Message sent!";
							  //$email_message = "Message sent!";
							}
							    

						redirect(base_url());
					}
					// The user's Staff_ID doesn't match with the input email
					else{
						$this->session->set_flashdata('query_email_failure', 1);
						redirect(base_url());
					}

			}

		}

		function _rand_string( $length ) {
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	
			$size = strlen( $chars );
			for( $i = 0; $i < $length; $i++ ) {
				$str .= $chars[ rand( 0, $size - 1 ) ];
			}

			return $str;
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