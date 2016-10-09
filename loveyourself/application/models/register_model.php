<?php
	class Register_Model extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		
		public function register(){
			$staff_exist = $this->db->get('staff_record');
			$data = array(
				'staff_id' => $staff_exist->result()[$staff_exist->num_rows()-1]->staff_id + 1,
				//testing_facility_id => $this->input->post('testing_facility'),
				'testing_facility_id' => '1',
				'first_name' => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name' => $this->input->post('last_name'),
				'sex' => $this->input->post('sex'),
				'month_of_birth' => $this->input->post('month_of_birth'),
				'day_of_birth' => $this->input->post('day_of_birth'),
				'year_of_birth' => $this->input->post('year_of_birth'),
				'email_address' => $this->input->post('email_address'),
				//'contact_number' => $this->input->post('contact_number'),
				'contact_number' => '09876543210',
				'staff_profession' => $this->input->post('profession'),
				'staff_password' => $this->input->post('password')
			);
			$register_staff = $this->db->insert('staff_record', $data);
		}
		
		public function verify_password($staff_id, $password){
			$staff_password = $this->db->get_where('staff_record', array('staff_id' => $staff_id));
			if(strcmp($staff_password->row()->staff_password, $password) == 0){
				$data = array(
					'staff_password' => $this->input->post('new_password')
				);
				$this->db->where('staff_id', $staff_id);
				$this->db->update('staff_record', $data);
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}
?>