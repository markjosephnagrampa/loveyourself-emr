<?php
	class Login_Model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		
		public function user_verify($username, $password){
				$query_staff_id = "SELECT * FROM `staff_record` WHERE `staff_id` = '".$username[2]."'";
				$result_staff_id = $this->db->query($query_staff_id);
				if($result_staff_id->row()){
					$staff_record = $result_staff_id->row();
					if(strcmp($staff_record->testing_facility_id, $username[0]) == 0){
						if(strcmp($staff_record->staff_profession, $username[1]) == 0){
							if(strcmp($staff_record->staff_password, $password) == 0){
								return TRUE;
							} else {
								return FALSE;
							}
						} else {
							return FALSE;
						}
					} else {
						return FALSE;
					}
				} else {
					return FALSE;
				}
		}

		public function verify_correct_username_email($username, $email){
			$query = "SELECT * FROM `staff_record` WHERE `staff_id` = '".$username."'". " AND `email_address` = '".$email."'";
			$result = $this->db->query($query);
			if(!empty($result->row())){
				// User with proper email exists
				// Redirect back to login page, show another modal, show a message, 
				// your new password has been sent to your email 

				return TRUE;
			}
			else{
				return FALSE;
			}
		}
	}
?>