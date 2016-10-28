<?php
	class Database_Query extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		
		public function insert($refcode) {
			$this->load->helper('url');
			$this->load->library("session");
			$visitor_data = $this->session->userdata('visitor');
			$philHealthNo = $visitor_data['philhealth_number'];
			$notEnrolled = $visitor_data['notEnrolled'];
			$sextemp = $visitor_data['sex'];
			$sex = "";
			$presently_pregnant = "";
			$work_abroad = 0;
			$hea = $visitor_data['hea'];
			$highest_educational_attainment = 0;
			$cv = $visitor_data['civil_status'];
			$civil_status = 0;
			$lvp =  $visitor_data['live_in'];
			$living_with_partner = 0;
			$age = $visitor_data['age'];
			$nationality =$visitor_data['nationality'];
			$age_in_months = $visitor_data['age_in_months'];
			$contact_number = $visitor_data['contact_numbers'];
			$email = $visitor_data['email_address'];
			$check_work_abroad = $visitor_data['work_abroad'];
			$occupation = $visitor_data['occupation'];
			$month_last_contract = $visitor_data['work_abroad_month'];
			$year_last_contract = $visitor_data['work_abroad_year'];
			$current_occupation = $visitor_data['occupation'];
			$prev_occupation = $visitor_data['prev_occupation'];
			$work_based = $visitor_data['work_abroad_based'];
			$country_last_work = $visitor_data['work_abroad_country'];
			$number_of_children = $visitor_data['number_of_children'];
			
			if(strlen($philHealthNo) <=0 && $notEnrolled == 0){
				$philHealthNo = 0;
			}
			if(strlen($age) <= 0 && strlen($age_in_months) > 0){
				$age = 0;
			} else if(strlen($age) > 0 && strlen($age_in_months) <= 0){
				$age_in_months = 0;
			}
			if(empty($contact_number)){
				$contact_number = 0;
			}
			if(empty($email)){
				$email = 0;
			}
			if($sextemp = "female"){
				$sex = "F";
			}else if($sextemp = "male"){
				$sex = "M";
			}
			if($hea == "None"){
				$highest_educational_attainment = 0;
			}else if($hea == "Elementary"){
				$highest_educational_attainment = 1;
			}else if($hea == "Highschool"){
				$highest_educational_attainment = 2;
			}else if($hea == "College"){
				$highest_educational_attainment = 3;
			}else if($hea == "Vocational"){
				$highest_educational_attainment = 4;
			}else if($hea == "Post_Graduate"){
				$highest_educational_attainment = 5;
			}
			if($nationality == "Others"){
				$nationality = $visitor_data['nationality_others'];
			}
			if(empty($number_of_children)){
				$number_of_children = 0;
			}
			if($cv =="single"){
				$civil_status = 1;
			}else if($cv =="married"){
				$civil_status = 2;
			}else if($cv =="separated"){
				$civil_status = 3;
			}else if($cv =="widowed"){
				$civil_status = 4;
			}
			
			if(strlen($lvp) > 0){
				if($lvp == "no_live_in_partner"){
					$living_with_partner = 0;
				}else if($lvp == "with_live_in_partner"){
					$living_with_partner = 1;
				}
			}else{
				$living_with_partner = 0;
			}
			if(empty($prev_occupation)){
				$prev_occupation = 0;
			}
			if (empty($current_occupation)){
				$current_occupation = 0;
			}
			if($check_work_abroad == "No"){
				$work_abroad = 0;
				$work_based = 0;
				$month_last_contract=0;
				$year_last_contract =0;
				$country_last_work = "NA";
			}else if($check_work_abroad == "Yes"){
				$work_abroad = 1;
				$work_based = 1;
				$month_last_contract=0; 
				$year_last_contract =0;
				if(empty($country_last_work)){
					$country_last_work ="none";
				}if($work_based == "land"){
					$work_based = 1;
				}else if( $work_based =="ship"){
					$work_based = 2;
				}
			}
			if($sex == 'male'){
				$presently_pregnant = "NA";
			}else if($sex == 'female'){
				if($visitor_data['presently_pregnant']== "yes_presently_pregnant"){
					$presently_pregnant = "yes";
				}else if($visitor_data['presently_pregnant']== "not_presently_pregnant"){
					$presently_pregnant = "no";
				}else{
					$presently_pregnant = "no";
				}
			}
			$this->db->select('patient_id');
			$this->db->from('visitor_record');
			$query = $this->db->get();
			if($query->row()){
				$last_row=$this->db->select('patient_id')->order_by('patient_id',"desc")->limit(1)->get('visitor_record')->row();
				$patient_id = $last_row->patient_id + 1;
			}else{
				$patient_id = 0;
			}
			$patient_reference_code = $refcode;
			$data = array(
				'patient_id' => $patient_id,
				'patient_reference_code' => $patient_reference_code,
				'philhealth_number' => $philHealthNo,
				'first_name' => $visitor_data['firstName'],
				'middle_name' => $visitor_data['middleName'],
				'last_name' => $visitor_data['lastName'],
				'mother_first_name' => $visitor_data['mother_first_name'],
				'mother_middle_name' => $visitor_data['mother_middle_name'],
				'mother_last_name' => $visitor_data['mother_last_name'],
				'mother_index' => $visitor_data['mother_code'],
				'father_index' => $visitor_data['father_code'],
				'birth_order' => $visitor_data['birthOrder_code'],
				'month_of_birth' => $visitor_data['month_code'],
				'day_of_birth' => $visitor_data['day_code'],
				'year_of_birth' => $visitor_data['year_code'],
				'age' => $age,
				'age_in_months' => $age_in_months,
				'sex' => $sex,
				'permanent_address' => $visitor_data['permanent_address'],
				'residence_municipality_city' => $visitor_data['current_city'],
				'residence_province' => $visitor_data['current_province'],
				'birth_municipality_city' => $visitor_data['birth_city'],
				'birth_province' => $visitor_data['birth_province'],
				'contact_numbers' => $contact_number,
				'email_address' => $email,
				'nationality' => $nationality,
				'highest_educational_attainment' => $highest_educational_attainment,
				'civil_status' => $civil_status,
				'living_with_partner' =>$living_with_partner,
				'presently_pregnant' => $presently_pregnant,
				'number_of_children'=> $number_of_children,
				'current_occupation' => $current_occupation,
				'prev_occupation' => $prev_occupation,
				'work_abroad' => $work_abroad,
				'work_abroad_month' => $month_last_contract,
				'work_abroad_year' => $year_last_contract,
				'work_abroad_based' => $work_based,
				'work_abroad_country' => $country_last_work
			);
			
			return $this->db->insert('visitor_record', $data);
		}
		public function insert_patient_reason_record() {
			$patient_id = $this->session->userdata('patient_id');
			$mother_infected_hiv = $this->input->post('reasonmother');
			$partner_infected_hiv = $this->input->post('reasonsex');
			$needle_share_idu = $this->input->post('reasonshared'); 
			$accidental_needle_prick = $this->input->post('reasonaccidental');
			$physician_recommended = $this->input->post('reasonrecommended');
			$insurance_requirement = $this->input->post('reasonrequirement');
			$for_blood_transfusion = $this->input->post('reasonreceived'); 
			$know_hiv_status = $this->input->post('reasonwants');
			$recheck_prev_hiv_result = $this->input->post('reasonrecheck');
			$employment_local = $this->input->post('reasonemploymentlocal');
			$employment_abroad = $this->input->post('reasonoverseas');
			$female_pregnant = $this->input->post('reasonpregnant');
			$tb_patient = $this->input->post('reasontb');
			$active_hepatitis =$this->input->post('reasontactive');
			$no_particular_reason= $this->input->post('reasonno');
			$specify_other = $this->input->post('reasonothertext');
			
			if($mother_infected_hiv == "mother_is_infected"){
				$mother_infected_hiv = 1;
			}else{
				$mother_infected_hiv = 0;
			}
			if($partner_infected_hiv == "sex_partner_is_infected"){
				$partner_infected_hiv = 1;
			}else{
				$partner_infected_hiv = 0;
			}
			if($needle_share_idu == "share_needles_syringes"){
				$needle_share_idu = 1;
			}else{
				$needle_share_idu = 0;
			}
			if($accidental_needle_prick == "accidental_needle_prick"){
				$accidental_needle_prick = 1;
			}else{
				$accidental_needle_prick = 0;
			}
			if($physician_recommended == "recommended"){
				$physician_recommended = 1;
			}else{
				$physician_recommended = 0;
			}
			if($insurance_requirement == "requirement"){
				$insurance_requirement = 1;
			}else{
				$insurance_requirement = 0;
			}
			if($for_blood_transfusion == "received_blood_transfusion"){
				$for_blood_transfusion = 1;
			}else{
				$for_blood_transfusion = 0;
			}
			if($know_hiv_status == "wants_to_know"){
				$know_hiv_status = 1;
			}else{
				$know_hiv_status = 0;
			}
			if($recheck_prev_hiv_result == "recheck_prev"){
				$recheck_prev_hiv_result = 1;
			}else{
				$recheck_prev_hiv_result = 0;
			}
			if($employment_local == "employment_local"){
				$employment_local = 1;
				
			}else{
				$employment_local = 0;
			}
			if($employment_abroad == "employment_overseas"){
				$employment_abroad = 1;
			}else{
				$employment_abroad = 0;
			}
			if($female_pregnant == "pregnant"){
				$female_pregnant = 1;
			}else{
				$female_pregnant = 0;
			}
			if($tb_patient == "TB_patient"){
				$tb_patient = 1;
			}else{
				$tb_patient = 0;
			}
			if($active_hepatitis == "active_hepaB_C"){
				$active_hepatitis = 1;
			}else{
				$active_hepatitis = 0;
			}
			if($no_particular_reason == "no_reason"){
				$no_particular_reason = 1;
			}else{
				$no_particular_reason = 0;
			}
			if($specify_other == "other"){
				$specify_other = 1;
			}else{
				$specify_other = 0;
			}
			$data = array(
				'patient_id' => $patient_id ,
				'mother_infected_hiv' => $mother_infected_hiv,
				'partner_infected_hiv' => $partner_infected_hiv,
				'needle_share_idu' => $needle_share_idu,
				'accidental_needle_prick' => $accidental_needle_prick,
				'physician_recommended' => $physician_recommended,
				'insurance_requirement' => $insurance_requirement,
				'for_blood_transfusion' => $for_blood_transfusion,
				'know_hiv_status' => $know_hiv_status,
				'recheck_prev_hiv_result' => $recheck_prev_hiv_result,
				'employment_local' => $employment_local,
				'employment_abroad' => $employment_abroad,
				'female_pregnant' => $female_pregnant,
				'tb_patient' => $tb_patient,
				'active_hepatitis' => $active_hepatitis,
				'no_particular_reason' => $no_particular_reason,
				'specify_other' => $specify_other,
			);
			return $this->db->insert('patient_reason_record', $data);
		}
		
		public function insert_patient_history_record() {
			$patient_id = $this->session->userdata('patient_id');
			$history = $this->input->post('history');
			$user_history = $this->input->post('user_history');
			$user_history_2 = $this->input->post('user_history_2');
			$user_history_3= $this->input->post('user_history_3');
			$user_history_4= $this->input->post('user_history_4');
			$user_history_5= $this->input->post('user_history_5');
			$user_history_6= $this->input->post('user_history_6');
			$user_history_7= $this->input->post('user_history_7');
			$user_history_8= $this->input->post('user_history_8');
			$year_of_exposure = $this->input->post('year_of_exposure');
			$year_of_exposure_2 = $this->input->post('year_of_exposure_2');
			$year_of_exposure_3 = $this->input->post('year_of_exposure_3');
			$year_of_exposure_4 = $this->input->post('year_of_exposure_4');
			$year_of_exposure_5 = $this->input->post('year_of_exposure_5');
			$year_of_exposure_6 = $this->input->post('year_of_exposure_6');
			$year_of_exposure_7 = $this->input->post('year_of_exposure_7');
			$year_of_exposure_8 = $this->input->post('year_of_exposure_8');
			
			if($history == "no_history"){
				$history = 0;
			}else{
				$history = 1;
			}
			if($user_history == "no_rbt"){
				$user_history = 0;
			}else{
				$user_history = 1;
			}
			if(empty($year_of_exposure)){
				$year_of_exposure = 0;
			}
			if($user_history_2 == "no_drugs"){
				$user_history_2 = 0;
			}else{
				$user_history_2 = 1;
			}
			if(empty($year_of_exposure_2)){
				$year_of_exposure_2 =0;
			}
			if($user_history_3 == "no_needle_prick"){
				$user_history_3 = 0;
			}else{
				$user_history_3 = 1;
			}
			if(empty($year_of_exposure_3)){
				$year_of_exposure_3 =0;
			}
			if($user_history_4 == "no_STI"){
				$user_history_4 = 0;
			}else{
				$user_history_4 = 1;
			}
			if(empty($year_of_exposure_4)){
				$year_of_exposure_4 =0;
			}
			if($user_history_5 == "no_sex_female"){
				$user_history_5 = 0;
			}else{
				$user_history_5 = 1;
			}
			if(empty($year_of_exposure_5)){
				$year_of_exposure_5 =0;
			}
			if($user_history_6 == "no_sex_male"){
				$user_history_6 = 0;
			}else{
				$user_history_6 = 1;
			}
			if(empty($year_of_exposure_6)){
				$year_of_exposure_6 =0;
			}
			if($user_history_7 == "no_sex_prostitution"){
				$user_history_7 = 0;
			}else{
				$user_history_7 = 1;
			}
			if(empty($year_of_exposure_7)){
				$year_of_exposure_7 =0;
			}
			if($user_history_8 == "no_payment_for_sex"){
				$user_history_8 = 0;
			}else{
				$user_history_8 = 1;
			}
			if(empty($year_of_exposure_8)){
				$year_of_exposure_8 =0;
			}
			$data = array(
				'patient_id' => $patient_id,
				'had_blood_transfusion' => $user_history,
				'had_blood_transfusion_year' => $year_of_exposure,
				'injected_drugs' => $user_history_2,
				'injected_drugs_year' => $year_of_exposure_2,
				'accidental_needle_prick' => $user_history_3,
				'accidental_needle_prick_year' => $year_of_exposure_3,
				'sexually_transmitted_infections' => $user_history_4,
				'sexually_transmitted_infections_year' => $year_of_exposure_4,
				'sex_female_without_condom' => $user_history_5,
				'sex_female_without_condom_year' => $year_of_exposure_5,
				'sex_male_without_condom' => $user_history_6,
				'sex_male_without_condom_year' => $year_of_exposure_6,
				'sex_with_prostitute' => $user_history_7,
				'sex_with_prostitute_year' => $year_of_exposure_7,
				'sex_for_payment'=> $user_history_8,
				'sex_for_payment_year'=> $year_of_exposure_8,
				
			);
			return $this->db->insert('patient_history_record', $data);
		}
		public function insert_patient_counselor_record(){
			$patient_id = $this->session->userdata('patient_id');
			$staff_info = explode("-", $this->session->userdata('usrname'));
			$staff_info[2] = str_replace('0', '', $staff_info[2]);
			$staff_id = $staff_info[2];
			$data=array(
				'patient_id' => $patient_id,
				'staff_id' => $staff_id,
				'clinical_picture' => $this->input->post('clinical_pic'),
				'clinical_picture_ssx' => $this->input->post('description_ssx'),
				'clinical_picture_who_staging' => $this->input->post('who_staging'),
				'hiv_screening_result' => $this->input->post('hiv_screening_result')
			);
			return $this->db->insert('patient_counselor_record', $data);
		}
		public function insert_patient_saccl_record(){
			$patient_id = $this->session->userdata('patient_id');
			$staff_info = explode("-", $this->session->userdata('usrname'));
			$staff_info[2] = str_replace('0', '', $staff_info[2]);
			$staff_id = $staff_info[2];
			$data=array(
				'patient_id' => $patient_id ,
				'staff_id' => $staff_id,
				'saccl_lab_code' => $this->input->post('saccl_labcode'),
				'month_hiv_confirmed' => $this->input->post('month_confirmed') ,
				'day_hiv_confirmed' => $this->input->post('date_confirmed'),
				'year_hiv_confirmed' => $this->input->post('year_confirmed'),
				'saccl_test' => $this->input->post('test_type'),
			);
			return $this->db->insert('patient_saccl_record', $data);
		}
		
		public function insert_testing_facility_record(){
			$testing_facility_id = 0;
			$this->db->select('testing_facility_id');
			$this->db->from('testing_facility_record');
			$query = $this->db->get();
			if($query->row()){
				$last_row=$this->db->select('testing_facility_id')->order_by('testing_facility_id',"desc")->limit(1)->get('testing_facility_record')->row();
				$testing_facility_id = $last_row->testing_facility_id + 1;
			}else{
				$testing_facility_id = 0;
			}
			$data=array(
				'testing_facility_id' => $testing_facility_id,
				'facility_name' => $this->input->post('facility_name'),
				'hiv_eqas_lab_code' => $this->input->post('hiv_lab_code'),
				'hiv_eqas_last_year' => $this->input->post('year_hiv_lab_code'),
				'mailing_address' => $this->input->post('mailing_address'),
				'contact_numbers' => $this->input->post('contact_numbers'),
				'email_address' => $this->input->post('email_address'),
			);
			return $this->db->insert('testing_facility_record', $data);
		}
		
		public function insert_patient_medtech_record(){
			$patient_id = $this->session->userdata('patient_id');
			$staff_info = explode("-", $this->session->userdata('usrname'));
			$staff_info[2] = str_replace('0', '', $staff_info[2]);
			$staff_id = $staff_info[2];
			$data=array(
				'patient_id' => $patient_id ,
				'staff_id' => $staff_id,
				'hiv_proficiency_number' => $this->input->post('hiv_prof_num'),
				'month_issued' => $this->input->post('month_issued'),
				'day_issued' => $this->input->post('date_issued'),
				'year_issued' => $this->input->post('year_issued'),
				'month_expired' => $this->input->post('month_expired'),
				'day_expired' => $this->input->post('date_expired'),
				'year_expired' => $this->input->post('year_expired'),
				'hiv_confirmatory_test' => $this->input->post('hiv_confirmatory_test'),
				'final_results' => $this->input->post('final_hiv_status'),
				'test_method_HBsAg' => $this->input->post('test_method_1'),
				'sample_results_HBsAg' =>$this->input->post('sample_results_1'),
				'interpretation_HBsAg' =>$this->input->post('interpretation_1'),
				'test_method_Sy' => $this->input->post('test_method_2'),
				'sample_results_Sy' => $this->input->post('sample_results_2'),
				'dilution_Sy' => $this->input->post('dilution_2'),
				'interpretation_Sy' => $this->input->post('interpretation_2')
			);
			return $this->db->insert('patient_medtech_record', $data);
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

		// Edited Oct 12, 2016
			// Checks if non-first-timer patient exists (Query for same name and birthday)

		public function get_non_first_timer_record($first_name,$middle_name,$last_name,$month_of_birth,$day_of_birth,$year_of_birth){
			$query = $this->db->get_where('patient_record', 
				array('first_name' => $first_name,
					 'middle_name' => $middle_name,
					 'last_name' => $last_name,
					 'month_of_birth' => $month_of_birth,
					 'day_of_birth' => $day_of_birth,
					 'year_of_birth' => $year_of_birth,
				 ));

			return $query->row_array();
		}

		// Made: Oct 12, 2016
		// Function for all database updates
		public function updateRowWhere($table, $where = array(), $data = array()) {
		    $this->db->where($where);
		    $this->db->update($table, $data);
		}
	}
?>