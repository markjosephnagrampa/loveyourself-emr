<?php
	class Database_Query extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		
		public function insert() {
			$this->load->helper('url');
			$age = $this->input->post('age');
			$age_in_months = $this->input->post('age_in_months');
			$contact_number = $this->input->post('contact_number');
			$email = $this->input->post('email');
			$work_abroad = $this->input->post('work_abroad');
			$occupation = $this->input->post('occupation');
			$month_last_contract = $this->input->post('month_last_contract');
			$year_last_contract = $this->input->post('year_last_contract');
			$work_based = $this->input->post('work_based');
			$country_last_work = $this->input->post('country_last_work');
			if(strlen($age) <= 0 && strlen($age_in_months) > 0){
				$age = 0;
			} else if(strlen($age) > 0 && strlen($age_in_months) <= 0){
				$age_in_months = 0;
			}
			if(strlen($contact_number) <= 0){
				$contact_number = 0;
			}
			if(strlen($email) <= 0){
				$email = 0;
			}
			if(strlen($current_occupation) <= 0 && strlen($prev_occupation) > 0){
				$current_occupation = 0;
			} else if (strlen($current_occupation) <= 0 && strlen($prev_occupation) > 0){
				$prev_occupation = 0;
			}
			if($work_abroad == 0){
				$work_based = 0;
				$country_last_work = 0;
			}
			$patient_id = 0;
			$patient_reference_code = 0;
			
			$data = array(
				'patient_id' => $patient_id,
				'patient_reference_code' => $patient_reference_code,
				'philhealth_number' => $this->input->post('philHealthNo'),
				'first_name' => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name' => $this->input->post('last_name'),
				'mother_first_name' => $this->input->post('mother_first_name'),
				'mother_middle_name' => $this->input->post('mother_middle_name'),
				'mother_last_name' => $this->input->post('mother_last_name'),
				'mother_index' => $this->input->post('mother_code'),
				'father_index' => $this->input->post('father_code'),
				'birth_order' => $this->input->post('birthOrder_code'),
				'month_of_birth' => $this->input->post('month_code'),
				'day_of_birth' => $this->input->post('day_code'),
				'year_of_birth' => $this->input->post('year_code'),
				'age' => $age,
				'age_in_months' => $age_in_months,
				'sex' => $this->input->post('sex'),
				'permanent_address' => $this->input->post('permanent_address'),
				'residence_municipality_city' => $this->input->post('current_city'),
				'residence_province' => $this->input->post('current_province'),
				'birth_municipality_city' => $this->input->post('birth_city'),
				'birth_province' => $this->input->post('birth_province'),
				'contact_numbers' => $contact_number,
				'email_address' => $email,
				'nationality' => $this->input->post('nationality'),
				'highest_educational_attainment' => $this->input->post('hea'),
				'civil_status' => $this->input->post('civil_status'),
				'living_with_partner' => $this->input->post('live_in'),
				'presently_pregnant' => $this->input->post('presently_pregnant'),
				'current_occupation' => $current_occupation,
				'prev_occupation' => $prev_occupation,
				'work_abroad' => $this->input->post('work_abroad'),
				'work_abroad_month' => $month_last_contract,
				'work_abroad_year' => $year_last_contract,
				'work_abroad_based' => $work_based,
				'work_abroad_country' => $country_last_work
			);
			
			return $this->db->insert('visitor_record', $data);
		}
		
		public function get(){
			$query = $this->db->get_where('patient_record', array('first_name' => $this->input->post('name'), 'month_of_birth' => $this->input->post('birthdate')));
			return $query->row_array();
		}
		
		public function generate_ref_code(){
			$rand_str = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
			$reference_code = '';
			for ($i = 0; $i < 8; $i++) {
				$reference_code .= $rand_str[rand(0, strlen($rand_str) - 1)];
			}
			$query = "SELECT * FROM `patient_record` WHERE `patient_reference_code` = '".$reference_code."'";
			$result = $this->db->query($query);
			if($result->num_rows() > 0){
				$this->generate_reference_code();
			} else {
				return $reference_code;
			}
		}
		
		public function get_patient_record($patient_reference_code){
			$query = $this->db->get_where('patient_record', array('patient_reference_code' => $patient_reference_code));
			return $query->row();
		}
		
		public function get_visitor_record($patient_reference_code){
			$query = $this->db->get_where('visitor_record', array('patient_reference_code' => $patient_reference_code));
			return $query->row();
		}
				
		public function get_mother_record($patient_id){
			$query = $this->db->get_where('patient_mother_record', array('patient_id' => $patient_id));
			return $query->row();
		}
		
		public function get_reason_record($patient_id){
			$query = $this->db->get_where('patient_reason_record', array('patient_id' => $patient_id));
			return $query->row();
		}
		
		public function get_history_record($patient_id){
			$query = $this->db->get_where('patient_history_record', array('patient_id' => $patient_id));
			return $query->row();
		}
		
		public function get_counselor_record($patient_id){
			$query = $this->db->get_where('patient_counselor_record', array('patient_id' => $patient_id));
			return $query->row();
		}
		
		public function get_staff_record($staff_id){
			$query = $this->db->get_where('staff_record', array('staff_id' => $staff_id));
			return $query->row();
		}
		
		public function get_facility_record($testing_facility_id){
			$query = $this->db->get_where('testing_facility_record', array('testing_facility_id' => $testing_facility_id));
			return $query->row();
		}
		
		public function get_medtech_record($patient_id){
			$query = $this->db->get_where('patient_medtech_record', array('patient_id' => $patient_id));
			return $query->row();
		}
		
		public function get_saccl_record($patient_id){
			$query = $this->db->get_where('patient_saccl_record', array('patient_id' => $patient_id));
			return $query->row();
		}
		
		public function getPatientWithPID($patient_id){
			$query = $this->db->get_where('patient_record', array('patient_id' => $patient_id));
			return $query->row_array();
		}


		public function getPatientCounselorWithPID($patient_id){
			$query = $this->db->get_where('patient_counselor_record', array('patient_id' => $patient_id));
			return $query->row_array();
		}

		public function getPatientReasonWithPID($patient_id){
			$query = $this->db->get_where('patient_reason_record', array('patient_id' => $patient_id));
			return $query->row_array();
		}

        public function getVisitorWithRefCode($patient_reference_code){
			$query = $this->db->get_where('visitor_record', array('patient_reference_code' => $patient_reference_code));
			return $query->row_array();
		}
		public function getVisitorWithPID($patient_id){
			$query = $this->db->get_where('visitor_record', array('patient_id' => $patient_id));
			return $query->row_array();
		}
		public function getHistoryWithPID($patient_id){
			$query = $this->db->get_where('patient_history_record', array('patient_id' => $patient_id));
			return $query->row_array();
		}

		public function getMedTechWithPID($patient_id){
			$query = $this->db->get_where('patient_medtech_record', array('patient_id' => $patient_id));
			return $query->row_array();
		}
		public function getMotherWithPID($patient_id){
			$query = $this->db->get_where('patient_mother_record', array('patient_id' => $patient_id));
			return $query->row_array();
		}
		public function getSACCLWithPID($patient_id){
			$query = $this->db->get_where('patient_saccl_record', array('patient_id' => $patient_id));
			return $query->row_array();
		}
		public function getTestingFacilityWithID($testing_facility_id){
			$query = $this->db->get_where('testing_facility_record', array('testing_facility_id' => $testing_facility_id));
			return $query->row_array();
		}
		public function getVisitorPIDwithRefcode($patient_reference_code){
			$query = $this->db->get_where('visitor_record', array('patient_reference_code' => $patient_reference_code));
			$qArray = $query->row_array();

			if(empty($qArray)){
				return null;
			}
			else{
				return $qArray['patient_id'];
			}
		}
		public function getPatientPIDwithRefcode($patient_reference_code){
			$query = $this->db->get_where('patient_record', array('patient_reference_code' => $patient_reference_code));
			$qArray = $query->row_array();

			if(empty($qArray)){
				return null;
			}
			else{
				return $qArray['patient_id'];
			}
		}
		public function get_staff_record2($staff_id){
			$query = $this->db->get_where('staff_record', array('staff_id' => $staff_id));
			return $query->row_array();
		}
	}
?>