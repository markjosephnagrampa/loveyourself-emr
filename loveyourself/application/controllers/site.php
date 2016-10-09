
<?php

/*
	To do:
	View Form Only of Patients Assigned to me
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('database_query');
	}
	public function index(){
		$this->home();
	}
	public function home(){
        $this->load->view("dependencies");
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_home");
		$this->load->view("site_footer");
	}
	public function about(){
        $this->load->view("dependencies");
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_about");
		$this->load->view("site_footer");
	}
    public function locations(){
        $this->load->view("dependencies");
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_locations");
		$this->load->view("site_footer");
    }
	public function tested(){
        $this->load->view("dependencies");
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_tested");
		$this->load->view("site_footer");
    }
	public function contact(){
        $this->load->view("dependencies");
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_contact");
		$this->load->view("site_footer");
	}
	public function form(){
        $this->load->view("dependencies");
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("content_form");
		$this->load->view("site_footer");
	}
	public function profile(){
        if($this->session->userdata('usrname')){
			$this->load->view("dependencies");
			$this->load->view("site_header");
			$this->load->view("site_nav");
			$this->load->view("user_profile");
			/*if(strpos($username, 'ADM') !== false){
				$this->load->view('admin_profile');
			} else if(strpos($username, 'NUR') !== false){
				$this->load->view('nurse_profile');
			} else if(strpos($username, 'PHY') !== false){
				$this->load->view('physician_profile');
			} else if(strpos($username, 'CNS') !== false){
				$this->load->view('counselor_profile');
			} else if(strpos($username, 'MDT') !== false){
				$this->load->view('medtech_profile');
			}*/
			$this->load->view("site_footer");
		} else {
			redirect(base_url().'login/no_login');
		}
	}
	
	public function form_profile(){
		if($this->session->userdata('usrname')){
			$this->load->helper('url');
			if ($this->database_query->getPatientPIDwithRefcode($this->input->post('ref_code'))) {
				$this->pass_form_values('patient_record');
				$this->session->set_userdata('patient_ref_code', $this->input->post('ref_code'));
			} else if($this->database_query->getVisitorPIDwithRefcode($this->input->post('ref_code'))){
				$this->pass_form_values('visitor_record');
				$this->session->set_userdata('patient_ref_code', $this->input->post('ref_code'));
			} else {
				$this->session->set_flashdata('refcode_error', 'Patient does not exist.');
				redirect(base_url().'site/profile');
			}
		} else {
			redirect(base_url().'login/no_login');
		}
	}
	
	public function pass_form_values($record){
		if($this->session->userdata('usrname')){
			$result['patient_record'] = array();
			$result['mother_record'] = array();
			if(strcmp($record, 'patient_record') == 0){
				$result['patient_record'] = $this->database_query->get_patient_record($this->input->post('ref_code'));
				$result['mother_record'] = $this->database_query->get_mother_record($result['patient_record']->patient_id);
				$result['patient_reason'] = $this->database_query->get_reason_record($result['patient_record']->patient_id);
				$result['patient_history'] = $this->database_query->get_history_record($result['patient_record']->patient_id);
				$result['counselor_record'] = $this->database_query->get_counselor_record($result['patient_record']->patient_id);
				$staff_record = $this->database_query->get_staff_record($result['counselor_record']->staff_id);
				$result['testing_facility'] = $this->database_query->get_facility_record($staff_record->testing_facility_id);
				$result['medtech_record'] = $this->database_query->get_medtech_record($result['patient_record']->patient_id);
				$result['saccl_record'] = $this->database_query->get_saccl_record($result['patient_record']->patient_id);
			} else {
				$result['patient_record'] = $this->database_query->get_visitor_record($this->input->post('ref_code'));
				$result['mother_record'] = array($result['patient_record']->mother_first_name, $result['patient_record']->mother_middle_name, $result['patient_record']->mother_last_name);
				$result['patient_reason'] = array();
				$result['patient_history'] = array();
				$result['counselor_record'] = array();
				$result['testing_facility'] = array();
				$result['medtech_record'] = array();
				$result['saccl_record'] = array();
			}
			$username = $this->session->userdata('usrname');
			if(strpos($username, 'CNS') !== false || strpos($username, 'MDT') !== false){
				$this->load->view("dependencies");
				$this->load->view("site_header");
				$this->load->view("site_nav");
				if(strpos($username, 'MDT') !== false){
					$this->load->view("form_medtech", $result);
				} else {
					$this->load->view("form_counselor_view", $result);
				}
				$this->load->view("site_footer");
			} else {
				if(strpos($username, 'ADM') !== false){
					//echo "PDF";
					$this->load->view("form_admin", $result);
				} else if(strpos($username, 'NUR') !== false || strpos($username, 'PHY') !== false){
					//echo "PDF";
					//$this->load->view("form_nurse_physician", $result);
				}
			}
		} else {
			redirect(base_url().'login/no_login');
		}
	}
	
    public function query(){
        $this->load->view("dependencies");
		$this->load->view("site_header");
		$this->load->view("site_nav");
		$this->load->view("query");
		$this->load->view("site_footer");
	}
	public function submit_form(){
        $this->load->helper('email');
        
        $login_rules = array(
                "information" => array("field" => "information",
									"label" => "",
									"rules" => "required"),
                "agree" => array("field" => "agree",
									"label" => "Agree",
									"rules" => "required"),
				"firstName" => array("field" => "firstName",
									"label" => "first Name",
									"rules" => "trim|required|alpha"),
                "middleName" => array("field" => "middleName",
									"label" => "Middle Name",
									"rules" => "trim|required|alpha"),
                "lastName" => array("field" => "lastName",
									"label" => "Last Name",
									"rules" => "trim|required|alpha"),
                "first_name" =>array("field" => "first_name",
									"label" => "First Name",
									"rules" => "trim|required|alpha"),
                "middle_name" =>array("field" => "middle_name",
									"label" => "Middle Name",
									"rules" => "trim|required|alpha"),
                "last_name" =>array("field" => "last_name",
									"label" => "Last Name",
									"rules" => "trim|required|alpha"),
                "mother_first_name" =>array("field" => "mother_first_name",
									"label" => "Mother\'s First Name",
									"rules" => "trim|required|alpha"),
                "mother_middle_name" =>array("field" => "mother_middle_name",
									"label" => "Mother\'s Middle Name",
									"rules" => "trim|required|alpha"),
                "mother_last_name" =>array("field" => "mother_last_name",
									"label" => "Mother\'s Last Name",
									"rules" => "trim|required|alpha"),
                "mother_code" => array("field" => "mother_code",
									"label" => "Mother\'s initials",
									"rules" => "trim|required|alpha"),
                "father_code" => array("field" => "father_code",
									"label" => "Father\'s initials",
									"rules" => "trim|required|alpha"),
                "birthOrder_code" => array("field" => "birthOrder_code",
									"label" => "Birth Order",
									"rules" => "trim|required|numeric"),
                "month_code" => array("field" => "month_code",
									"label" => "Month",
									"rules" => "trim|required|numeric"),
                "day_code" => array("field" => "day_code",
									"label" => "Day",
									"rules" => "trim|required|numeric"),
                "year_code" => array("field" => "year_code",
									"label" => "Year",
									"rules" => "trim|required|numeric"),
                "age" => array("field" => "age",
									"label" => "Age",
									"rules" => "trim|required|numeric"),
                "permanent_address" => array("field" => "permanent_address",
									"label" => "Permanent Address",
									"rules" => "trim|required"),
                "current_city" => array("field" => "current_city",
									"label" => "Current city",
									"rules" => "trim|required|alpha"),
                "current_province" => array("field" => "current_province",
									"label" => "Current Province",
									"rules" => "trim|required|alpha"),
                "birth_city" => array("field" => "birth_city",
									"label" => "Birth City",
									"rules" => "trim|required|alpha"),
                "birth_province" => array("field" => "birth_province",
									"label" => "Date",
									"rules" => "trim|required|alpha"),
                "occupation" => array("field" => "occupation",
									"label" => "Occupation",
									"rules" => "trim|required|alpha"),
                "sex" => array("field" => "sex",
									"label" => "Sex",
									"rules" => "required"),
                "hea" => array("field" => "hea",
									"label" => "",
									"rules" => "required"),
                "civil_status" => array("field" => "civil_status",
									"label" => "Civil Status",
									"rules" => "required"),
                "live_in" => array("field" => "live_in",
									"label" => "",
									"rules" => "required"),
                "work_abroad" => array("field" => "work_abroad",
									"label" => "",
									"rules" => "required")
			);
        $this->form_validation->set_rules($login_rules);
        if ($this->form_validation->run() === FALSE) {
			//echo "<script> alert('wtf'); </script>";
			redirect(base_url().'site/form');
			//$this->database_query->insert();
			/*$this->load->view('dependencies');
            $this->load->view('site_header');
            $this->load->view("site_nav");
            $this->load->view('content_form');
            $this->load->view('site_footer');*/
        } else{
			//echo "<script> alert('yahoo'); </script>"; 
            //$this->database_query->insert();
           
			$this->load->view("dependencies");
			$this->load->view("site_header");
			$this->load->view("site_nav");
			$this->load->view('non_first_timer_schedule');
			$this->load->view("site_footer");
        }
	}
    public function schedule_nonfirsttimer(){
		$this->load->view('dependencies');
        $this->load->view('site_header');
        $this->load->view("site_nav");
        $this->load->view('non_first_timer_schedule');
        $this->load->view('site_footer');
    }
    public function refcode_nonfirsttimer(){
		$result['reference_code'] = $this->database_query->generate_ref_code();
		$this->load->view('dependencies');
        $this->load->view('site_header');
        $this->load->view("site_nav");
        $this->load->view('non_first_timer_refcode', $result);
        $this->load->view('site_footer');
    }
	
	public function nurse_profile(){
		$this->load->view('dependencies');
        $this->load->view('site_header');
        $this->load->view("site_nav");
        $this->load->view("nurse_profile");
        $this->load->view('site_footer');
	}
	
    public function admin_profile(){
		$this->load->view('dependencies');
        $this->load->view('site_header');
        $this->load->view("site_nav");
        $this->load->view("admin_profile");
        $this->load->view('site_footer');
	}
    public function counselor_profile(){
		$this->load->view('dependencies');
        $this->load->view('site_header');
        $this->load->view("site_nav");
        $this->load->view("counselor_profile");
        $this->load->view('site_footer');
	}
    public function physician_profile(){
		$this->load->view('dependencies');
        $this->load->view('site_header');
        $this->load->view("site_nav");
        $this->load->view("physician_profile");
        $this->load->view('site_footer');
	}
    public function medtech_profile(){
		$this->load->view('dependencies');
        $this->load->view('site_header');
        $this->load->view("site_nav");
        $this->load->view("medtech_profile");
        $this->load->view('site_footer');
	}
	
	public function account_profile_info(){
		if($this->session->userdata('usrname')){
			$staff_info = explode("-", $this->session->userdata('usrname'));
			$staff_info[2] = str_replace('0', '', $staff_info[2]);
			$staff['user_info'] = $this->database_query->get_staff_record($staff_info[2]);
			$this->load->view('dependencies');
			$this->load->view('site_header');
			$this->load->view("site_nav");
			$this->load->view("account_profile_info", $staff);
			$this->load->view('site_footer');
		} else {
			redirect(base_url().'login/no_login');
		}
	}
	
	public function account_profile_info_admin(){
		$this->load->view('dependencies');
        $this->load->view('site_header');
        $this->load->view("site_nav");
        $this->load->view("account_profile_info_admin");
        $this->load->view('site_footer');
	}
    public function account_profile_info_counselor(){
		$this->load->view('dependencies');
        $this->load->view('site_header');
        $this->load->view("site_nav");
        $this->load->view("account_profile_info_counselor");
        $this->load->view('site_footer');
	}
    public function account_profile_info_nurse(){
		$this->load->view('dependencies');
        $this->load->view('site_header');
        $this->load->view("site_nav");
        $this->load->view("account_profile_info_nurse");
        $this->load->view('site_footer');
	}
    public function account_profile_info_physician(){
		$this->load->view('dependencies');
        $this->load->view('site_header');
        $this->load->view("site_nav");
        $this->load->view("account_profile_info_physician");
        $this->load->view('site_footer');
	}
    public function account_profile_info_medtech(){
		$this->load->view('dependencies');
        $this->load->view('site_header');
        $this->load->view("site_nav");
        $this->load->view("account_profile_info_medtech");
        $this->load->view('site_footer');
	}
    public function admin_create_user(){
		if($this->session->userdata('usrname')){
			$this->load->view('dependencies');
			$this->load->view('site_header');
			$this->load->view("site_nav");
			$this->load->view("admin_create_user");
			$this->load->view('site_footer');
		} else {
			redirect(base_url().'login/no_login');
		}
	}
	public function reset_password(){
		if($this->session->userdata('usrname')){
			$this->load->view('dependencies');
			$this->load->view('site_header');
			$this->load->view("site_nav");
			$this->load->view("reset_password");
			$this->load->view('site_footer');
		} else {
			redirect(base_url().'login/no_login');
		}
	}
    public function nurse_physician_treatment_plan(){
		if($this->session->userdata('usrname')){
			$this->load->view('dependencies');
			$this->load->view('site_header');
			$this->load->view("site_nav");
			$this->load->view("nurse_physician_treatment_plan");
			$this->load->view('site_footer');
		} else {
			redirect(base_url().'login/no_login');
		}
	}
    public function treatment_plan_patient_database(){
		if($this->session->userdata('usrname')){
			$this->load->view('dependencies');
			$this->load->view('site_header');
			$this->load->view("site_nav");
			$this->load->view("treatment_plan_patient_database");
			$this->load->view('site_footer');
		} else {
			redirect(base_url().'login/no_login');
		}
	}

       // PDF Code
    public function pdf(){

    	// Only load the pdf if the Patient Session ID is set.

    	if($this->session->userdata('usrname')){

    		// Initalize PDF View Variables

    			// Special

				$data['patient_full_name'] = $this->_writeULC(' ',60);

				$data['date']=date('m/d/Y');
				$data['date'] = $this->_writeULC($data['date'],18);

				$data['nationality_f'] = false;
				$data['nationality_check'] = false;
				$data['nationality'] = $this->_writeULC(' ',30);

				$data['hea_none']= false;
				$data['hea_hs']= false;
				$data['hea_voc']= false;
				$data['hea_elem']= false;
				$data['hea_coll']= false;
				$data['hea_postgrad']= false;

				$data['civstat_single']= false;
				$data['civstat_married']= false;
				$data['civstat_separated']= false;
				$data['civstat_widowed']= false;

				$data['living_with_no']= false;
				$data['living_with_yes']= false;

				// Individual Boxes
				$data['patient_philhealth_number'][0]=' ';
				$data['patient_philhealth_number'][1]=' ';
				$data['patient_philhealth_number'][2]=' ';
				$data['patient_philhealth_number'][3]=' ';
				$data['patient_philhealth_number'][4]=' ';
				$data['patient_philhealth_number'][5]=' ';
				$data['patient_philhealth_number'][6]=' ';
				$data['patient_philhealth_number'][7]=' ';
				$data['patient_philhealth_number'][8]=' ';
				$data['patient_philhealth_number'][9]=' ';
				$data['patient_philhealth_number'][10]=' ';
				$data['patient_philhealth_number'][11]=' ';

				$data['visitor_record']['mother_index'][0] = ' ';
				$data['visitor_record']['mother_index'][1] = ' ';

				$data['visitor_record']['father_index'][0] = ' ';
				$data['visitor_record']['father_index'][1] = ' ';


				$data['visitor_record']['birth_order'][0]=' ';
				$data['visitor_record']['birth_order'][1]=' ';
				$data['visitor_record']['month_of_birth'][0]=' ';
				$data['visitor_record']['month_of_birth'][1]=' ';
				$data['visitor_record']['day_of_birth'][0]=' ';
				$data['visitor_record']['day_of_birth'][1]=' ';
				$data['visitor_record']['year_of_birth'][0]=' ';
				$data['visitor_record']['year_of_birth'][1]=' ';
				$data['visitor_record']['year_of_birth'][2]=' ';
				$data['visitor_record']['year_of_birth'][3]=' ';

				$data['visitor_record']['number_of_children'][0]=' ';
				$data['visitor_record']['number_of_children'][1]=' ';
				$data['visitor_record']['number_of_children'][2]=' ';

				$data['visitor_record']['age'][0] = ' ';
				$data['visitor_record']['age'][1] = ' ';
				$data['visitor_record']['age_in_months'][0]=' ';
				$data['visitor_record']['age_in_months'][1]=' ';

				$data['work_abroad_month'][0]=' ';
				$data['work_abroad_month'][1]=' ';
				$data['work_abroad_year'][0]=' ';
				$data['work_abroad_year'][1]=' ';
				$data['work_abroad_year'][2]=' ';
				$data['work_abroad_year'][3]=' ';



				// Convert Strings to Uppercase
				$data['visitor_record']['first_name'] = ' ';
				$data['visitor_record']['middle_name'] = ' ';
				$data['visitor_record']['last_name'] = ' ';

				$data['visitor_record']['mother_first_name'] = ' ';
				$data['visitor_record']['mother_middle_name'] = ' ';
				$data['visitor_record']['mother_last_name'] = ' ';

				$data['visitor_record']['permanent_address'] = $this->_writeULC(' ',75);

				
				$data['visitor_record']['residence_municipality_city'] = $this->_writeULC(' ',30);

				$data['visitor_record']['residence_province'] = $this->_writeULC(' ',30);

				$data['visitor_record']['birth_municipality_city'] = $this->_writeULC(' ',30);

				$data['visitor_record']['birth_province'] = $this->_writeULC(' ',30);

				$data['visitor_record']['contact_numbers'] = $this->_writeULC(' ',30);
				$data['visitor_record']['email_address'] = $this->_writeULC(' ',50);

				$data['visitor_record']['work_abroad_country'] = $this->_writeULC(' ',50);



				// Checkboxes with DB Dependencies
				$data['philhealth_number_check'] = false;
				$data['m_sex_at_birth_check'] = false;
				$data['f_sex_at_birth_check'] = false;

				$data['current_occupation'] = $this->_writeULC('',50);
				$data['prev_occupation'] = $this->_writeULC('',50);

				$data['presently_pregnant_no'] = false;
				$data['presently_pregnant_yes'] = false;

				$data['work_abroad_n'] = false;
				$data['work_abroad_y'] = false;

				$data['work_abroad_based_ship'] = false;
				$data['work_abroad_based_land'] = false;

				$data['medtech_whole_name'] = $this->_writeULC(' ',70);

				$data['medtech_hiv_proficiency_number'] = $this->_writeULC(' ',40);

				$data['patient_medtech_record']['month_issued'][0] = ' ';
				$data['patient_medtech_record']['month_issued'][1] = ' ';

				$data['patient_medtech_record']['day_issued'][0] = ' ';
				$data['patient_medtech_record']['day_issued'][1] = ' ';

				$data['patient_medtech_record']['year_issued'][0] = ' ';
				$data['patient_medtech_record']['year_issued'][1] = ' ';
				$data['patient_medtech_record']['year_issued'][2] = ' ';
				$data['patient_medtech_record']['year_issued'][3] = ' ';


				$data['patient_medtech_record']['month_expired'][0] = ' ';
				$data['patient_medtech_record']['month_expired'][1] = ' ';

				$data['patient_medtech_record']['day_expired'][0] = ' ';
				$data['patient_medtech_record']['day_expired'][1] = ' ';

				$data['patient_medtech_record']['year_expired'][0] = ' ';
				$data['patient_medtech_record']['year_expired'][1] = ' ';
				$data['patient_medtech_record']['year_expired'][2] = ' ';
				$data['patient_medtech_record']['year_expired'][3] = ' ';
    		
				$data['testing_facility_record']['facility_name'] = $this->_writeULC(' ',75);
				$data['testing_facility_record']['hiv_eqas_lab_code'] = $this->_writeULC(' ',20);
				$data['testing_facility_record']['hiv_eqas_last_year'] = $this->_writeULC(' ',28);
				$data['testing_facility_record']['mailing_address'] = $this->_writeULC(' ',75);
				$data['testing_facility_record']['contact_numbers'] = $this->_writeULC(' ',16);
				$data['testing_facility_record']['email_address'] = $this->_writeULC(' ',50);
    		
				$data['patient_saccl_record']['saccl_lab_code'][0] = ' ';
				$data['patient_saccl_record']['saccl_lab_code'][1] = ' ';
				$data['patient_saccl_record']['saccl_lab_code'][2] = ' ';
				$data['patient_saccl_record']['saccl_lab_code'][3] = ' ';
				$data['patient_saccl_record']['saccl_lab_code'][4] = ' ';
				$data['patient_saccl_record']['saccl_lab_code'][5] = ' ';
				$data['patient_saccl_record']['saccl_lab_code'][6] = ' ';
				$data['patient_saccl_record']['saccl_lab_code'][7] = ' ';
				$data['patient_saccl_record']['saccl_lab_code'][8] = ' ';
				$data['patient_saccl_record']['saccl_lab_code'][9] = ' ';

				$data['patient_saccl_record']['month_hiv_confirmed'][0] = ' ';
				$data['patient_saccl_record']['month_hiv_confirmed'][1] = ' ';

				$data['patient_saccl_record']['day_hiv_confirmed'][0] = ' ';
				$data['patient_saccl_record']['day_hiv_confirmed'][1] = ' ';

				$data['patient_saccl_record']['year_hiv_confirmed'][0] = ' ';
				$data['patient_saccl_record']['year_hiv_confirmed'][1] = ' ';
				$data['patient_saccl_record']['year_hiv_confirmed'][2] = ' ';
				$data['patient_saccl_record']['year_hiv_confirmed'][3] = ' ';

				$data['saccl_test_western_blot']= false;
				$data['saccl_test_pcr']= false;
    		
				$data['reasonmother'] = false;
				$data['reasonsex'] = false;
				$data['reasonshared'] = false;
				$data['reasonaccidental'] = false;
				$data['reasonrecommended'] = false;
				$data['reasonrequirement'] = false;
				$data['reasonreceived'] = false;
				$data['reasonwants'] = false;
				$data['reasonpregnant'] = false;
				$data['reasontb'] =false;
				$data['reasonactive'] = false;
				$data['reasonno'] = false;
				$data['reasonother'] = false;
				$data['reasonrecheck'] = false;
				$data['reasonemploymentlocal'] = false;
				$data['reasonemploymentoverseas'] =false;
				$data['reasonothertext'] = $this->_writeULC(' ',20);

				$data['historyyes']=false;
				$data['historyno']=false;

				$data['rbtno']=false;
				$data['rbtyes']=false;
				$data['rbtyear']=$this->_writeULC(' ',12);
				$data['injectedno']=false;
				$data['injectedyes']=false;
				$data['injectedyear']=$this->_writeULC(' ',12);
				$data['npno']=false;
				$data['npyes']=false;
				$data['npyear']=$this->_writeULC(' ',12);
				$data['stino']=false;
				$data['stiyes']=false;
				$data['stiyear']=$this->_writeULC(' ',12);
				$data['sfno']=false;
				$data['sfyes']=false;
				$data['sfyear']=$this->_writeULC(' ',12);
				$data['smno']=false;
				$data['smyes']=false;
				$data['smyear']=$this->_writeULC(' ',12);
				$data['spno']=false;
				$data['spyes']=false;
				$data['spyear']=$this->_writeULC(' ',12);
				$data['psno']=false;
				$data['psyes']=false;
				$data['psyear']=$this->_writeULC(' ',12);
    		
				// Special

				$data['patient_full_name'] = $this->_writeULC(' ',60);

				$data['date']=date('m/d/Y');
				$data['date'] = $this->_writeULC($data['date'],18);

				$data['nationality_f'] = false;
				$data['nationality_check'] = false;
				$data['nationality'] = $this->_writeULC(' ',30);

				$data['hea_none']= false;
				$data['hea_hs']= false;
				$data['hea_voc']= false;
				$data['hea_elem']= false;
				$data['hea_coll']= false;
				$data['hea_postgrad']= false;

				$data['civstat_single']= false;
				$data['civstat_married']= false;
				$data['civstat_separated']= false;
				$data['civstat_widowed']= false;

				$data['living_with_no']= false;
				$data['living_with_yes']= false;

				// Individual Boxes
				$data['patient_philhealth_number'][0]=' ';
				$data['patient_philhealth_number'][1]=' ';
				$data['patient_philhealth_number'][2]=' ';
				$data['patient_philhealth_number'][3]=' ';
				$data['patient_philhealth_number'][4]=' ';
				$data['patient_philhealth_number'][5]=' ';
				$data['patient_philhealth_number'][6]=' ';
				$data['patient_philhealth_number'][7]=' ';
				$data['patient_philhealth_number'][8]=' ';
				$data['patient_philhealth_number'][9]=' ';
				$data['patient_philhealth_number'][10]=' ';
				$data['patient_philhealth_number'][11]=' ';

				$data['visitor_record']['mother_index'][0] = ' ';
				$data['visitor_record']['mother_index'][1] = ' ';

				$data['visitor_record']['father_index'][0] = ' ';
				$data['visitor_record']['father_index'][1] = ' ';


				$data['visitor_record']['birth_order'][0]=' ';
				$data['visitor_record']['birth_order'][1]=' ';
				$data['visitor_record']['month_of_birth'][0]=' ';
				$data['visitor_record']['month_of_birth'][1]=' ';
				$data['visitor_record']['day_of_birth'][0]=' ';
				$data['visitor_record']['day_of_birth'][1]=' ';
				$data['visitor_record']['year_of_birth'][0]=' ';
				$data['visitor_record']['year_of_birth'][1]=' ';
				$data['visitor_record']['year_of_birth'][2]=' ';
				$data['visitor_record']['year_of_birth'][3]=' ';

				$data['visitor_record']['number_of_children'][0]=' ';
				$data['visitor_record']['number_of_children'][1]=' ';
				$data['visitor_record']['number_of_children'][2]=' ';

				$data['visitor_record']['age'][0] = ' ';
				$data['visitor_record']['age'][1] = ' ';
				$data['visitor_record']['age_in_months'][0]=' ';
				$data['visitor_record']['age_in_months'][1]=' ';

				$data['work_abroad_month'][0]=' ';
				$data['work_abroad_month'][1]=' ';
				$data['work_abroad_year'][0]=' ';
				$data['work_abroad_year'][1]=' ';
				$data['work_abroad_year'][2]=' ';
				$data['work_abroad_year'][3]=' ';



				// Convert Strings to Uppercase
				$data['visitor_record']['first_name'] = ' ';
				$data['visitor_record']['middle_name'] = ' ';
				$data['visitor_record']['last_name'] = ' ';

				$data['visitor_record']['mother_first_name'] = ' ';
				$data['visitor_record']['mother_middle_name'] = ' ';
				$data['visitor_record']['mother_last_name'] = ' ';

				$data['visitor_record']['permanent_address'] = $this->_writeULC(' ',75);

				
				$data['visitor_record']['residence_municipality_city'] = $this->_writeULC(' ',30);

				$data['visitor_record']['residence_province'] = $this->_writeULC(' ',30);

				$data['visitor_record']['birth_municipality_city'] = $this->_writeULC(' ',30);

				$data['visitor_record']['birth_province'] = $this->_writeULC(' ',30);

				$data['visitor_record']['contact_numbers'] = $this->_writeULC(' ',30);
				$data['visitor_record']['email_address'] = $this->_writeULC(' ',50);

				$data['visitor_record']['work_abroad_country'] = $this->_writeULC(' ',50);



				// Checkboxes with DB Dependencies
				$data['philhealth_number_check'] = false;
				$data['m_sex_at_birth_check'] = false;
				$data['f_sex_at_birth_check'] = false;

				$data['current_occupation'] = $this->_writeULC('',50);
				$data['prev_occupation'] = $this->_writeULC('',50);

				$data['presently_pregnant_no'] = false;
				$data['presently_pregnant_yes'] = false;

				$data['work_abroad_n'] = false;
				$data['work_abroad_y'] = false;

				$data['work_abroad_based_ship'] = false;
				$data['work_abroad_based_land'] = false;

				//18.
			
				$data['fspyear']=$this->_writeULC(' ',12);
				$data['fsp'][0] = ' ';
				$data['fsp'][1] = ' ';
				$data['fsp'][2] = ' ';
				$data['fsp'][3] = ' ';
				$data['fsp'][4] = ' ';

				$data['mspyear']=$this->_writeULC(' ',12);
				$data['msp'][0] = ' ';
				$data['msp'][1] = ' ';
				$data['msp'][2] = ' ';
				$data['msp'][3] = ' ';
				$data['msp'][4] = ' ';

				//19.

				$data['hiv_testingno']=false;
				$data['hiv_testingyes']=false;
				$data['month_last_test'][0] = ' ';
				$data['month_last_test'][1] = ' '; 

				$data['year_last_test'][0] = ' ';
				$data['year_last_test'][1] = ' '; 
				$data['year_last_test'][0] = ' ';
				$data['year_last_test'][1] = ' '; 

				$data['testing_site']=$this->_writeULC(' ',25);
				$data['testing_city']=$this->_writeULC(' ',25);
				$data['result_before_positive']=false;
				$data['result_before_negative']=false;

				$data['clinical_pic_asymp']=false;
				$data['clinical_pic_symp']=false;

				$data['description_ssx']=$this->_writeULC('',50);
				$data['who_staging']=$this->_writeULC('',10);

				$data['no_avail_physician'] = false;
    		// For replacement
				$s_testing_facility_id = ($this->session->userdata('s_testing_facility_id')!== null? $this->session->userdata('s_testing_facility_id'):1);
				$data['counselor_name']=$this->_writeULC(' ',60);
				$data['confirmed_by']=$this->_writeULC(' ',60);

			

			// Query DB Tables

				if($this->input->post('generatePDF') !== null || $this->session->userdata('patient_ref_code') !== null){
					$visitorRefcode = $this->input->post('ref_code');
					$visitorPatientID = $this->database_query->getVisitorPIDwithRefcode($visitorRefcode);

					$patientRefcode = $this->input->post('ref_code');
					$patientPatientID = $this->database_query->getPatientPIDwithRefcode($patientRefcode);

					$session_patientRefcode = $this->session->userdata('patient_ref_code');
					// Keep Ref Code For Additional PDF Calls (Form Edits)
					$this->session->keep_flashdata('session_ref_code');
					
					$session_patientPatientID = $this->database_query->getPatientPIDwithRefcode($session_patientRefcode);

					$patientID = (empty($visitorPatientID)? $patientPatientID : $visitorPatientID);

					$patientID = (!empty($patientID)? $patientID : $session_patientPatientID);

					// Redirect to Profile if Patient Refcode doesn't exist
					if(empty($patientID)){
						redirect(base_url().'site/profile','auto');
					}
				}

				$data['visitor_record'] = $this->database_query->getVisitorWithPID($patientID);
				$data['patient_medtech_record'] = $this->database_query->getMedTechWithPID($patientID);
				$data['patient_mother_record'] = $this->database_query->getMotherWithPID($patientID);
				$data['patient_saccl_record'] = $this->database_query->getSACCLWithPID($patientID);
				$data['patient_record'] = $this->database_query->getPatientWithPID($patientID);
				$data['patient_history_record'] = $this->database_query->getHistoryWithPID($patientID);
				$data['patient_reason_record'] = $this->database_query->getPatientReasonWithPID($patientID);
				$data['patient_counselor_record'] = $this->database_query->getPatientCounselorWithPID($patientID);

				$data['testing_facility_record'] = $this->database_query->getTestingFacilityWithID($s_testing_facility_id);

			// Check if queried tables contain values
			 
			// 1b. Visitor Record - Not Null Query 

			if(!empty($data['visitor_record'])){

				// Parsing

				// Special
				$data['patient_full_name'] = $data['visitor_record']['first_name']. ' ' .$data['visitor_record']['middle_name']. ' ' .$data['visitor_record']['last_name'];
				$data['patient_full_name'] = $this->_writeULC($data['patient_full_name'],60);

				$data['date']=date('m/d/Y');
				$data['date'] = $this->_writeULC($data['date'],18);

				$data['nationality_f'] = (strtolower($data['visitor_record']['nationality']) == 'filipino' ? true: false);
				$data['nationality_check'] = (strtolower($data['visitor_record']['nationality']) != 'filipino' ? true: false);
				$data['nationality'] = (strtolower($data['visitor_record']['nationality']) != 'filipino' ? $this->_writeULC(strtoupper($data['visitor_record']['nationality']),30): $this->_writeULC('',30));

				$data['hea_none']= ($data['visitor_record']['highest_educational_attainment'] == 1 ? true: false);
				$data['hea_hs']= ($data['visitor_record']['highest_educational_attainment'] == 2 ? true: false);
				$data['hea_voc']= ($data['visitor_record']['highest_educational_attainment'] == 3 ? true: false);
				$data['hea_elem']= ($data['visitor_record']['highest_educational_attainment'] == 4 ? true: false);
				$data['hea_coll']= ($data['visitor_record']['highest_educational_attainment'] == 5 ? true: false);
				$data['hea_postgrad']= ($data['visitor_record']['highest_educational_attainment'] == 6 ? true: false);

				$data['civstat_single']= ($data['visitor_record']['civil_status'] == 1 ? true: false);
				$data['civstat_married']= ($data['visitor_record']['civil_status'] == 2 ? true: false);
				$data['civstat_separated']= ($data['visitor_record']['civil_status'] == 3 ? true: false);
				$data['civstat_widowed']= ($data['visitor_record']['civil_status'] == 4 ? true: false);

				$data['living_with_no']= ($data['visitor_record']['living_with_partner'] == 0 ? true: false);
				$data['living_with_yes']= ($data['visitor_record']['living_with_partner'] == 1 ? true: false);

				// Individual Boxes
				$data['patient_philhealth_number']=$this->_paddZ($data['visitor_record']['philhealth_number'],12);

				$data['visitor_record']['mother_index'] = strtoupper($data['visitor_record']['mother_index']);
				$data['visitor_record']['mother_index'] = str_split($data['visitor_record']['mother_index']);

				$data['visitor_record']['father_index'] = strtoupper($data['visitor_record']['father_index']);
				$data['visitor_record']['father_index'] = str_split($data['visitor_record']['father_index']);

				$data['visitor_record']['birth_order']=$this->_paddZ($data['visitor_record']['birth_order'],2);
				$data['visitor_record']['month_of_birth']=$this->_paddZ($data['visitor_record']['month_of_birth'],2);
				$data['visitor_record']['day_of_birth']=$this->_paddZ($data['visitor_record']['day_of_birth'],2);
				$data['visitor_record']['year_of_birth']=$this->_paddZ($data['visitor_record']['year_of_birth'],4);

				$data['visitor_record']['number_of_children']=$this->_paddZ($data['visitor_record']['number_of_children'],3);

				$data['visitor_record']['age']=$this->_paddZ($data['visitor_record']['age'],2);
				$data['visitor_record']['age_in_months']=$this->_paddZ($data['visitor_record']['age_in_months'],2);

				$data['work_abroad_month']=$this->_paddZ($data['visitor_record']['work_abroad_month'],2);
				$data['work_abroad_year']=$this->_paddZ($data['visitor_record']['work_abroad_year'],4);



				// Convert Strings to Uppercase
				$data['visitor_record']['first_name'] = strtoupper($data['visitor_record']['first_name']);
				$data['visitor_record']['middle_name'] = strtoupper($data['visitor_record']['middle_name']);
				$data['visitor_record']['last_name'] = strtoupper($data['visitor_record']['last_name']);

				$data['visitor_record']['mother_first_name'] = strtoupper($data['visitor_record']['mother_first_name']);
				$data['visitor_record']['mother_middle_name'] = strtoupper($data['visitor_record']['mother_middle_name']);
				$data['visitor_record']['mother_last_name'] = strtoupper($data['visitor_record']['mother_last_name']);

				$data['visitor_record']['permanent_address'] = strtoupper($data['visitor_record']['permanent_address']);
				$data['visitor_record']['permanent_address'] = $this->_writeULC($data['visitor_record']['permanent_address'],75);

				$data['visitor_record']['residence_municipality_city'] = strtoupper($data['visitor_record']['residence_municipality_city']);
				$data['visitor_record']['residence_municipality_city'] = $this->_writeULC($data['visitor_record']['residence_municipality_city'],30);

				$data['visitor_record']['residence_province'] = strtoupper($data['visitor_record']['residence_province']);
				$data['visitor_record']['residence_province'] = $this->_writeULC($data['visitor_record']['residence_province'],30);

				$data['visitor_record']['birth_municipality_city'] = strtoupper($data['visitor_record']['birth_municipality_city']);
				$data['visitor_record']['birth_municipality_city'] = $this->_writeULC($data['visitor_record']['birth_municipality_city'],30);

				$data['visitor_record']['birth_province'] = strtoupper($data['visitor_record']['birth_province']);
				$data['visitor_record']['birth_province'] = $this->_writeULC($data['visitor_record']['birth_province'],30);

				$data['visitor_record']['contact_numbers'] = $this->_writeULC($data['visitor_record']['contact_numbers'],30);

				$data['visitor_record']['email_address'] = strtoupper($data['visitor_record']['email_address']);
				$data['visitor_record']['email_address']=$this->_writeULC($data['visitor_record']['email_address'],50);

				$data['visitor_record']['work_abroad_country'] = strtoupper($data['visitor_record']['work_abroad_country']);
				$data['visitor_record']['work_abroad_country'] = $this->_writeULC($data['visitor_record']['work_abroad_country'],50);



				// Checkboxes with DB Dependencies
				$data['philhealth_number_check'] = ($data['visitor_record']['philhealth_number']!=='n/a' ? true : false);
				$data['m_sex_at_birth_check'] = ($data['visitor_record']['sex']=='m' ? true : false);
				$data['f_sex_at_birth_check'] = ($data['visitor_record']['sex']=='f' ? true : false);

				$data['current_occupation'] = ($data['visitor_record']['current_occupation']!=='n/a' ? $this->_writeULC(strtoupper($data['visitor_record']['current_occupation']),50): $this->_writeULC('',50));
				$data['prev_occupation'] = ($data['visitor_record']['prev_occupation']!=='n/a' ? $this->_writeULC(strtoupper($data['visitor_record']['prev_occupation']),50): $this->_writeULC('',50));

				$data['presently_pregnant_no'] = ($data['visitor_record']['presently_pregnant']=='no'  ? true : false);
				$data['presently_pregnant_yes'] = ($data['visitor_record']['presently_pregnant']=='yes'  ? true : false);

				$data['work_abroad_n'] = ($data['visitor_record']['work_abroad']=='0' ? true : false);
				$data['work_abroad_y'] = ($data['visitor_record']['work_abroad']=='1' ? true : false);

				$data['work_abroad_based_ship'] = ($data['visitor_record']['work_abroad_based']=='0' ? true : false);
				$data['work_abroad_based_land'] = ($data['visitor_record']['work_abroad_based']=='1' ? true : false);

			}

			// 2a. Patient_Medtech_Record not null
			if(!empty($data['patient_medtech_record'])){
				$data['medtech_whole_name'] = ($this->session->userdata('staff_whole_name') !==null? $this->session->userdata('staff_whole_name') :'Mary Jane Tuazon'); // FOR REPLACEMENT

				$staff_row = $this->database_query->get_staff_record2($data['patient_medtech_record']['staff_id']);
				$data['medtech_whole_name'] = (!empty($staff_row) ? $staff_row['first_name'].' '. $staff_row['middle_name'].' '. $staff_row['last_name']:
					'');

				$data['medtech_whole_name'] = strtoupper($data['medtech_whole_name']);
				$data['medtech_whole_name'] = $this->_writeULC($data['medtech_whole_name'],70);

				$data['medtech_hiv_proficiency_number'] = $data['patient_medtech_record']['hiv_proficiency_number'];
				$data['medtech_hiv_proficiency_number'] = $this->_writeULC($data['medtech_hiv_proficiency_number'],40);

				$data['patient_medtech_record']['month_issued'] = $this->_paddZ($data['patient_medtech_record']['month_issued'],2);
				$data['patient_medtech_record']['day_issued'] = $this->_paddZ($data['patient_medtech_record']['day_issued'],2);
				$data['patient_medtech_record']['year_issued'] =$this->_paddZ($data['patient_medtech_record']['year_issued'],4);

				$data['patient_medtech_record']['month_expired'] = $this->_paddZ($data['patient_medtech_record']['month_expired'],2);
				$data['patient_medtech_record']['day_expired'] = $this->_paddZ($data['patient_medtech_record']['day_expired'],2);
				$data['patient_medtech_record']['year_expired'] = $this->_paddZ($data['patient_medtech_record']['year_expired'],4);

			}

			// 3a. Testing_Facility_Record not null
			if(!empty($data['testing_facility_record'])){
				$data['testing_facility_record']['facility_name'] = strtoupper($data['testing_facility_record']['facility_name']);
				$data['testing_facility_record']['facility_name'] = $this->_writeULC($data['testing_facility_record']['facility_name'],75);

				$data['testing_facility_record']['hiv_eqas_lab_code'] = $this->_writeULC($data['testing_facility_record']['hiv_eqas_lab_code'],20);
				$data['testing_facility_record']['hiv_eqas_last_year'] = $this->_writeULC($data['testing_facility_record']['hiv_eqas_last_year'],28);

				$data['testing_facility_record']['mailing_address'] = strtoupper($data['testing_facility_record']['mailing_address']);
				$data['testing_facility_record']['mailing_address'] = $this->_writeULC($data['testing_facility_record']['mailing_address'],75);

				$data['testing_facility_record']['contact_numbers'] = $this->_writeULC($data['testing_facility_record']['contact_numbers'],16);

				$data['testing_facility_record']['email_address'] = strtoupper($data['testing_facility_record']['email_address']);
				$data['testing_facility_record']['email_address'] = $this->_writeULC($data['testing_facility_record']['email_address'],50);

			}

			// 4b. patient_saccl_record not null
			if(!empty($data['patient_saccl_record'])){

				// Check if this counselor has access to the record

				if(!($data['patient_saccl_record']['staff_id'] == $this->session->userdata('staff_id'))
					&&
					($this->session->userdata('staff_profession')==2)){

					$this->session->set_flashdata('refcode_error', 'You don\'t have access rights to this patient\'s record.');

				}


				$data['patient_saccl_record']['saccl_lab_code'] = $this->_paddZ($data['patient_saccl_record']['saccl_lab_code'],10);
				$data['patient_saccl_record']['month_hiv_confirmed'] = $this->_paddZ($data['patient_saccl_record']['month_hiv_confirmed'],2);
				$data['patient_saccl_record']['day_hiv_confirmed'] = $this->_paddZ($data['patient_saccl_record']['day_hiv_confirmed'],2);
				$data['patient_saccl_record']['year_hiv_confirmed'] = $this->_paddZ($data['patient_saccl_record']['year_hiv_confirmed'],4);

				$data['saccl_test_western_blot']= ($data['patient_saccl_record']['saccl_test'] == 0 ? true: false);
				$data['saccl_test_pcr']= ($data['patient_saccl_record']['saccl_test'] == 1 ? true: false);


			}


			// 5b. patient_reason_record not null
			if(!empty($data['patient_reason_record'])){

				$data['reasonmother'] = $data['patient_reason_record']['mother_infected_hiv'];
				$data['reasonsex'] = $data['patient_reason_record']['partner_infected_hiv'];
				$data['reasonshared'] = $data['patient_reason_record']['needle_share_idu'];
				$data['reasonaccidental'] = $data['patient_reason_record']['accidental_needle_prick'];
				$data['reasonrecommended'] = $data['patient_reason_record']['physician_recommended'];
				$data['reasonrequirement'] = $data['patient_reason_record']['insurance_requirement'];
				$data['reasonreceived'] = $data['patient_reason_record']['for_blood_transfusion'];
				$data['reasonwants'] = $data['patient_reason_record']['know_hiv_status'];
				$data['reasonpregnant'] = $data['patient_reason_record']['female_pregnant'];
				$data['reasontb'] =$data['patient_reason_record']['tb_patient'];
				$data['reasonactive'] = $data['patient_reason_record']['active_hepatitis'];
				$data['reasonno'] = $data['patient_reason_record']['no_particular_reason'];
				$data['reasonother'] = $data['patient_reason_record']['specify_other'];
				$data['reasonrecheck'] = $data['patient_reason_record']['recheck_prev_hiv_result'];
				$data['reasonemploymentlocal'] = $data['patient_reason_record']['employment_local'];
				$data['reasonemploymentoverseas'] =$data['patient_reason_record']['employment_abroad'];
				$data['reasonothertext'] = strtoupper($data['patient_reason_record']['specify_other']);
				$data['reasonothertext'] = $this->_writeULC($data['reasonothertext'],20);

			}

			if(!empty($data['patient_mother_record'])){
				//16.

				$history = $data['patient_mother_record']['mother_hiv_infected'];
				$data['historyyes']=false;
				$data['historyno']=false;
				if($history == 0){
					$data['historyyes']=false;
					$data['historyno']=true;
				}
				else if($history == 1){ 
					$data['historyyes']=true;
					$data['historyno']=false;
				}
			}

			// 7b. patient_history_record not null
			if(!empty($data['patient_history_record'])){
				//17.
					// RBT
					$data['rbtno']=false;
					$data['rbtyes']=false;


					$user_history = $data['patient_history_record']['had_blood_transfusion'];
					if($user_history == 0){
						$data['rbtno']=true;
						$data['rbtyes']=false;
						
					}
					else if($user_history == 1){ 
						$data['rbtno']=false;
						$data['rbtyes']=true;
					}

					$data['rbtyear']=($data['patient_history_record']['had_blood_transfusion_year'] != 0 ? $this->_writeULC($data['patient_history_record']['had_blood_transfusion_year'],12) : $this->_writeULC('N/A',12));

					// Injected
					$data['injectedno']=false;
					$data['injectedyes']=false;


					$user_history2 = $data['patient_history_record']['injected_drugs'];
					if($user_history2 == 0){
						$data['injectedno']=true;
						$data['injectedyes']=false;
						
					}
					else if($user_history2 == 1){ 
						$data['injectedno']=false;
						$data['injectedyes']=true;
					}

					$data['injectedyear']=($data['patient_history_record']['injected_drugs_year'] != 0 ? $this->_writeULC($data['patient_history_record']['injected_drugs_year'],12) : $this->_writeULC('N/A',12));

					// Needle Prick
					$data['npno']=false;
					$data['npyes']=false;


					$user_history3 = $data['patient_history_record']['accidental_needle_prick'];
					if($user_history3 == 0){
						$data['npno']=true;
						$data['npyes']=false;
						
					}
					else if($user_history3 == 1){ 
						$data['npno']=false;
						$data['npyes']=true;
					}

					$data['npyear']=($data['patient_history_record']['accidental_needle_prick_year'] != 0 ? $this->_writeULC($data['patient_history_record']['accidental_needle_prick_year'],12) : $this->_writeULC('N/A',12));

					// STI
					$data['stino']=false;
					$data['stiyes']=false;

					$user_history4 = $data['patient_history_record']['sexually_transmitted_infections'];
					if($user_history4 == 0){
						$data['stino']=true;
						$data['stiyes']=false;
						
					}
					else if($user_history4 == 1){ 
						$data['stino']=false;
						$data['stiyes']=true;
					}

					$data['stiyear']=($data['patient_history_record']['sexually_transmitted_infections_year'] != 0 ? $this->_writeULC($data['patient_history_record']['sexually_transmitted_infections_year'],12) : $this->_writeULC('N/A',12));

					// Sex Female
					$data['sfno']=false;
					$data['sfyes']=false;


					$user_history5 = $data['patient_history_record']['sex_female_without_condom'];
					if($user_history5 == 0){
						$data['sfno']=true;
						$data['sfyes']=false;
						
					}
					else if($user_history5 == 1){ 
						$data['sfno']=false;
						$data['sfyes']=true;
					}

					$data['sfyear']=($data['patient_history_record']['sex_female_without_condom_year'] != 0 ? $this->_writeULC($data['patient_history_record']['sex_female_without_condom_year'],12) : $this->_writeULC('N/A',12));

					// Sex Male
					$data['smno']=false;
					$data['smyes']=false;


					$user_history6 = $data['patient_history_record']['sex_male_without_condom'];
					if($user_history6 == 0){
						$data['smno']=true;
						$data['smyes']=false;
						
					}
					else if($user_history6 == 1){ 
						$data['smno']=false;
						$data['smyes']=true;
					}

					$data['smyear']= ($data['patient_history_record']['sex_male_without_condom_year'] != 0 ? $this->_writeULC($data['patient_history_record']['sex_male_without_condom_year'],12) : $this->_writeULC('N/A',12));

					// Sex Prostitute
					$data['spno']=false;
					$data['spyes']=false;


					$user_history7 = $data['patient_history_record']['sex_with_prostitute'];
					if($user_history7 == 0){
						$data['spno']=true;
						$data['spyes']=false;
						
					}
					else if($user_history7 == 1){ 
						$data['spno']=false;
						$data['spyes']=true;
					}

					$data['spyear']=($data['patient_history_record']['sex_with_prostitute_year'] != 0 ? $this->_writeULC($data['patient_history_record']['sex_with_prostitute_year'],12) : $this->_writeULC('N/A',12));

					// Payment Sex
					$data['psno']=false;
					$data['psyes']=false;


					$user_history8 = $data['patient_history_record']['sex_for_payment'];
					if($user_history8 == 0){
						$data['psno']=true;
						$data['psyes']=false;
						
					}
					else if($user_history8 == 1){ 
						$data['psno']=false;
						$data['psyes']=true;
					}

					$data['psyear']=($data['patient_history_record']['sex_for_payment_year'] != 0 ? $this->_writeULC($data['patient_history_record']['sex_for_payment_year'],12) : $this->_writeULC('N/A',12));

			}

			// 8b. patient_record not null
			if(!empty($data['patient_record']) && empty($data['visitor_record'])){

				// Special
				$data['patient_full_name'] = $data['patient_record']['first_name']. ' ' .$data['patient_record']['middle_name']. ' ' .$data['patient_record']['last_name'];
				$data['patient_full_name'] = $this->_writeULC($data['patient_full_name'],60);

				$data['date']=date('m/d/Y');
				$data['date'] = $this->_writeULC($data['date'],18);

				$data['nationality_f'] = (strtolower($data['patient_record']['nationality']) == 'filipino' ? true: false);
				$data['nationality_check'] = (strtolower($data['patient_record']['nationality']) != 'filipino' ? true: false);
				$data['nationality'] = (strtolower($data['patient_record']['nationality']) != 'filipino' ? $this->_writeULC(strtoupper($data['patient_record']['nationality']),30): $this->_writeULC('',30));

				$data['hea_none']= ($data['patient_record']['highest_educational_attainment'] == 1 ? true: false);
				$data['hea_hs']= ($data['patient_record']['highest_educational_attainment'] == 2 ? true: false);
				$data['hea_voc']= ($data['patient_record']['highest_educational_attainment'] == 3 ? true: false);
				$data['hea_elem']= ($data['patient_record']['highest_educational_attainment'] == 4 ? true: false);
				$data['hea_coll']= ($data['patient_record']['highest_educational_attainment'] == 5 ? true: false);
				$data['hea_postgrad']= ($data['patient_record']['highest_educational_attainment'] == 6 ? true: false);

				$data['civstat_single']= ($data['patient_record']['civil_status'] == 1 ? true: false);
				$data['civstat_married']= ($data['patient_record']['civil_status'] == 2 ? true: false);
				$data['civstat_separated']= ($data['patient_record']['civil_status'] == 3 ? true: false);
				$data['civstat_widowed']= ($data['patient_record']['civil_status'] == 4 ? true: false);

				$data['living_with_no']= ($data['patient_record']['living_with_partner'] == 0 ? true: false);
				$data['living_with_yes']= ($data['patient_record']['living_with_partner'] == 1 ? true: false);

				// Individual Boxes
				$data['patient_philhealth_number']=$this->_paddZ($data['patient_record']['philhealth_number'],12);

				$data['visitor_record']['mother_index'] = strtoupper($data['patient_record']['mother_index']);
				$data['visitor_record']['mother_index'] = str_split($data['visitor_record']['mother_index']);

				$data['visitor_record']['father_index'] = strtoupper($data['patient_record']['father_index']);
				$data['visitor_record']['father_index'] = str_split($data['visitor_record']['father_index']);

				$data['visitor_record']['birth_order']=$this->_paddZ($data['patient_record']['birth_order'],2);
				$data['visitor_record']['month_of_birth']=$this->_paddZ($data['patient_record']['month_of_birth'],2);
				$data['visitor_record']['day_of_birth']=$this->_paddZ($data['patient_record']['day_of_birth'],2);
				$data['visitor_record']['year_of_birth']=$this->_paddZ($data['patient_record']['year_of_birth'],4);

				$data['visitor_record']['number_of_children']=$this->_paddZ($data['patient_record']['number_of_children'],3);

				$data['visitor_record']['age']=$this->_paddZ($data['patient_record']['age'],2);
				$data['visitor_record']['age_in_months']=$this->_paddZ($data['patient_record']['age_in_months'],2);

				$data['work_abroad_month']=$this->_paddZ($data['patient_record']['work_abroad_month'],2);
				$data['work_abroad_year']=$this->_paddZ($data['patient_record']['work_abroad_year'],4);



				// Convert Strings to Uppercase
				$data['visitor_record']['first_name'] = strtoupper($data['patient_record']['first_name']);
				$data['visitor_record']['middle_name'] = strtoupper($data['patient_record']['middle_name']);
				$data['visitor_record']['last_name'] = strtoupper($data['patient_record']['last_name']);


				$data['visitor_record']['permanent_address'] = strtoupper($data['patient_record']['permanent_address']);
				$data['visitor_record']['permanent_address'] = $this->_writeULC($data['visitor_record']['permanent_address'],75);

				$data['visitor_record']['residence_municipality_city'] = strtoupper($data['patient_record']['residence_municipality_city']);
				$data['visitor_record']['residence_municipality_city'] = $this->_writeULC($data['visitor_record']['residence_municipality_city'],30);

				$data['visitor_record']['residence_province'] = strtoupper($data['patient_record']['residence_province']);
				$data['visitor_record']['residence_province'] = $this->_writeULC($data['visitor_record']['residence_province'],30);

				$data['visitor_record']['birth_municipality_city'] = strtoupper($data['patient_record']['birth_municipality_city']);
				$data['visitor_record']['birth_municipality_city'] = $this->_writeULC($data['visitor_record']['birth_municipality_city'],30);

				$data['visitor_record']['birth_province'] = strtoupper($data['patient_record']['birth_province']);
				$data['visitor_record']['birth_province'] = $this->_writeULC($data['visitor_record']['birth_province'],30);

				$data['visitor_record']['contact_numbers'] = $this->_writeULC($data['patient_record']['contact_numbers'],30);

				$data['visitor_record']['email_address'] = strtoupper($data['patient_record']['email_address']);
				$data['visitor_record']['email_address']=$this->_writeULC($data['visitor_record']['email_address'],50);

				$data['visitor_record']['work_abroad_country'] = strtoupper($data['patient_record']['work_abroad_country']);
				$data['visitor_record']['work_abroad_country'] = $this->_writeULC($data['visitor_record']['work_abroad_country'],50);



				// Checkboxes with DB Dependencies
				$data['philhealth_number_check'] = ($data['patient_record']['philhealth_number']!=='n/a' ? true : false);
				$data['m_sex_at_birth_check'] = ($data['patient_record']['sex']=='m' ? true : false);
				$data['f_sex_at_birth_check'] = ($data['patient_record']['sex']=='f' ? true : false);

				$data['current_occupation'] = ($data['patient_record']['current_occupation']!=='n/a' ? $this->_writeULC(strtoupper($data['patient_record']['current_occupation']),50): $this->_writeULC('',50));
				$data['prev_occupation'] = ($data['patient_record']['prev_occupation']!=='n/a' ? $this->_writeULC(strtoupper($data['patient_record']['prev_occupation']),50): $this->_writeULC('',50));

				$data['presently_pregnant_no'] = ($data['patient_record']['presently_pregnant']=='no'  ? true : false);
				$data['presently_pregnant_yes'] = ($data['patient_record']['presently_pregnant']=='yes'  ? true : false);

				$data['work_abroad_n'] = ($data['patient_record']['work_abroad']=='0' ? true : false);
				$data['work_abroad_y'] = ($data['patient_record']['work_abroad']=='1' ? true : false);

				$data['work_abroad_based_ship'] = ($data['patient_record']['work_abroad_based']=='0' ? true : false);
				$data['work_abroad_based_land'] = ($data['patient_record']['work_abroad_based']=='1' ? true : false);

				//18.
				$data['fspyear']=($data['patient_record']['sex_partner_female_year'] != 0 ? $this->_writeULC($data['patient_record']['sex_partner_female_year'],12) : $this->_writeULC('N/A',12));


				$data['fsp'] = $this->_paddZ($data['patient_record']['sex_partner_female_number'],5);

				$data['mspyear']=($data['patient_record']['sex_partner_male_year'] != 0 ? $this->_writeULC($data['patient_record']['sex_partner_male_year'],12) : $this->_writeULC('N/A',12));
				$data['msp'] = $this->_paddZ($data['patient_record']['sex_partner_male_number'],5);

				//19.
					
				$data['hiv_testingno']=false;
				$data['hiv_testingyes']=false;

				$hiv_testing = $data['patient_record']['hiv_test_before'];
				if($hiv_testing == 0){
					$data['hiv_testingno']=true;
					$data['hiv_testingyes']=false;
					
				}
				else if($hiv_testing == 1){ 
					$data['hiv_testingno']=false;
					$data['hiv_testingyes']=true;
				}

				
				$data['month_last_test'] = $this->_paddZ($data['patient_record']['hiv_test_before_month'],2);
				$data['year_last_test'] = $this->_paddZ($data['patient_record']['hiv_test_before_year'],4);

				$data['testing_site']=$data['patient_record']['hiv_test_before_facility'];
				$data['testing_site'] = strtoupper($data['testing_site']);
				$data['testing_site']=$this->_writeULC($data['testing_site'],25);

				$data['testing_city']=$data['patient_record']['hiv_test_before_municipality_city'];
				$data['testing_city'] = strtoupper($data['testing_city']);
				$data['testing_city']=$this->_writeULC($data['testing_city'],25);

				$data['result_before_positive']=false;
				$data['result_before_negative']=false;

				$result_before = $data['patient_record']['hiv_test_before_result'];
				if($result_before == 0){
					$data['result_before_positive']=false;
					$data['result_before_negative']=true;
					
				}
				else if($result_before == 1){ 
					$data['result_before_positive']=true;
					$data['result_before_negative']=false;
				}
			}
			else if(!empty($data['patient_record'])){
				//18.
				$data['fspyear']=($data['patient_record']['sex_partner_female_year'] !== 0 ? $this->_writeULC($data['patient_record']['sex_partner_female_year'],12) : $this->_writeULC(' ',12));
				$data['fsp'] = $this->_paddZ($data['patient_record']['sex_partner_female_number'],5);

				$data['mspyear']=($data['patient_record']['sex_partner_male_year'] !== 0 ? $this->_writeULC($data['patient_record']['sex_partner_male_year'],12) : $this->_writeULC(' ',12));
				$data['msp'] = $this->_paddZ($data['patient_record']['sex_partner_male_number'],5);

				//19.
					
				$data['hiv_testingno']=false;
				$data['hiv_testingyes']=false;

				$hiv_testing = $data['patient_record']['hiv_test_before'];
				if($hiv_testing == 0){
					$data['hiv_testingno']=true;
					$data['hiv_testingyes']=false;
					
				}
				else if($hiv_testing == 1){ 
					$data['hiv_testingno']=false;
					$data['hiv_testingyes']=true;
				}

				
				$data['month_last_test'] = $this->_paddZ($data['patient_record']['hiv_test_before_month'],2);
				$data['year_last_test'] = $this->_paddZ($data['patient_record']['hiv_test_before_year'],4);

				$data['testing_site']=$data['patient_record']['hiv_test_before_facility'];
				$data['testing_site'] = strtoupper($data['testing_site']);
				$data['testing_site']=$this->_writeULC($data['testing_site'],25);

				$data['testing_city']=$data['patient_record']['hiv_test_before_municipality_city'];
				$data['testing_city'] = strtoupper($data['testing_city']);
				$data['testing_city']=$this->_writeULC($data['testing_city'],25);

				$data['result_before_positive']=false;
				$data['result_before_negative']=false;

				$result_before = $data['patient_record']['hiv_test_before_result'];
				if($result_before == 0){
					$data['result_before_positive']=false;
					$data['result_before_negative']=true;
					
				}
				else if($result_before == 1){ 
					$data['result_before_positive']=true;
					$data['result_before_negative']=false;
				}
			}

			// 8.5b patient_mother not null
			if(!empty($data['patient_mother_record'])){
				$data['visitor_record']['mother_first_name'] = strtoupper($data['patient_mother_record']['mother_first_name']);
				$data['visitor_record']['mother_middle_name'] = strtoupper($data['patient_mother_record']['mother_middle_name']);
				$data['visitor_record']['mother_last_name'] = strtoupper($data['patient_mother_record']['mother_last_name']);
			}

			if(!empty($data['patient_counselor_record'])){
				//20.

				$data['clinical_pic_asymp']=false;
				$data['clinical_pic_symp']=false;

				$clinical_pic = $data['patient_counselor_record']['clinical_picture'];
				if($clinical_pic == 0){
					$data['clinical_pic_asymp']=true;
					$data['clinical_pic_symp']=false;
					
				}
				else if($clinical_pic == 1){ 
					$data['clinical_pic_asymp']=false;
					$data['clinical_pic_symp']=true;
				}

				
				$data['description_ssx']=$data['patient_counselor_record']['clinical_picture_ssx'];
				$data['description_ssx'] = strtoupper($data['description_ssx']);
				$data['description_ssx']=$this->_writeULC($data['description_ssx'],50);

				$data['who_staging']=$data['patient_counselor_record']['clinical_picture_who_staging'];
				$data['who_staging'] = strtoupper($data['who_staging']);
				$data['who_staging']=$this->_writeULC($data['who_staging'],10);

				$data['no_avail_physician'] = ($data['patient_counselor_record']['clinical_picture_who_staging'] !== null || $data['patient_counselor_record']['clinical_picture_who_staging'] !== 'n/a'? false: true);
			}

		// Only edit 21,22, 24 if the page came from Form_Medtech View.
    	if ($this->input->post('generatePDFButton_Medtech')==true) {

    		// 21.
    		$data['testing_facility_record']['facility_name'] = strtoupper($this->input->post('facility_name'));
    		$data['testing_facility_record']['facility_name'] = $this->_writeULC($data['testing_facility_record']['facility_name'],75);

			$data['testing_facility_record']['hiv_eqas_lab_code'] = strtoupper($this->input->post('hiv_lab_code'));
			$data['testing_facility_record']['hiv_eqas_lab_code'] = $this->_writeULC($data['testing_facility_record']['hiv_eqas_lab_code'],20);

			$data['testing_facility_record']['hiv_eqas_last_year'] = $this->_writeULC($this->input->post('year_hiv_lab_code'),28);
			$data['testing_facility_record']['mailing_address'] = strtoupper($this->input->post('mailing_address'));
    		$data['testing_facility_record']['mailing_address'] = $this->_writeULC($data['testing_facility_record']['mailing_address'],75);
			$data['testing_facility_record']['contact_numbers'] = $this->_writeULC($this->input->post('contact_numbers'),16);
			$data['testing_facility_record']['email_address'] = strtoupper($this->input->post('email_address'));
    		$data['testing_facility_record']['email_address'] = $this->_writeULC($data['testing_facility_record']['email_address'],50);

    		// 22.

    		$data['medtech_whole_name'] = strtoupper($this->input->post('medtech_name'));
    		$data['medtech_whole_name'] = $this->_writeULC($data['medtech_whole_name'],70);


    		$data['medtech_hiv_proficiency_number'] = strtoupper($this->input->post('hiv_prof_num'));
    		$data['medtech_hiv_proficiency_number'] = $this->_writeULC($data['medtech_hiv_proficiency_number'],40);

    		$data['patient_medtech_record']['month_issued'] = $this->_paddZ($this->input->post('month_issued'),2);
			$data['patient_medtech_record']['day_issued'] = $this->_paddZ($this->input->post('date_issued'),2);
			$data['patient_medtech_record']['year_issued'] =$this->_paddZ($this->input->post('year_issued'),4);
			$data['patient_medtech_record']['month_expired'] = $this->_paddZ($this->input->post('month_expired'),2);
			$data['patient_medtech_record']['day_expired'] = $this->_paddZ($this->input->post('date_expired'),2);
			$data['patient_medtech_record']['year_expired'] = $this->_paddZ($this->input->post('year_expired'),4);
    		
			// 24.


			$data['patient_saccl_record']['saccl_lab_code'] = $this->_paddZ($this->input->post('saccl_labcode'),10);
			$data['patient_saccl_record']['month_hiv_confirmed'] = $this->_paddZ($this->input->post('month_confirmed'),2);
			$data['patient_saccl_record']['day_hiv_confirmed'] = $this->_paddZ($this->input->post('date_confirmed'),2);
			$data['patient_saccl_record']['year_hiv_confirmed'] = $this->_paddZ($this->input->post('year_confirmed'),4);

			$data['saccl_test_western_blot']= ($this->input->post('test_type') == 'western_blot' ? true: false);
			$data['saccl_test_pcr']= ($this->input->post('test_type') == 'pcr_for_infants' ? true: false);

			
			$data['confirmed_by']= $this->_writeULC($this->input->post('confirmed_by'),60);


    	}

    	// Only edit 15-20, 23 if the page came from Form_Counselor View.
    	 if ($this->input->post('generatePDFCounselor')==true) {
	
			
			// Set Variables to null if query data doesn't exist

			// 5. Counselor Form
			
				// B. 15-20, 23
				$data['reasonmother'] = $this->input->post('reasonmother');
				$data['reasonsex'] = $this->input->post('reasonsex');
				$data['reasonshared'] = $this->input->post('reasonshared');
				$data['reasonaccidental'] = $this->input->post('reasonaccidental');
				$data['reasonrecommended'] = $this->input->post('reasonrecommended');
				$data['reasonrequirement'] = $this->input->post('reasonrequirement');
				$data['reasonreceived'] = $this->input->post('reasonreceived');
				$data['reasonwants'] = $this->input->post('reasonwants');
				$data['reasonpregnant'] = $this->input->post('reasonpregnant');
				$data['reasontb'] = $this->input->post('reasontb');
				$data['reasonactive'] = $this->input->post('reasonactive');
				$data['reasonno'] = $this->input->post('reasonno');
				$data['reasonother'] = $this->input->post('reasonother');
				$data['reasonrecheck'] = $this->input->post('reasonrecheck');
				$data['reasonemploymentlocal'] = $this->input->post('reasonemploymentlocal');
				$data['reasonemploymentoverseas'] = $this->input->post('reasonemploymentoverseas');
				
				$ri = $this->input->post('reasonothertext');
				$ri = strtoupper($ri);
				$ri = $this->_writeULC($ri,20);
				$data['reasonothertext'] = $ri;

				//16.

				$history = $this->input->post('history');
				$data['historyyes']=false;
				$data['historyno']=false;
				if($history == "no_history"){
					$data['historyyes']=false;
					$data['historyno']=true;
				}
				else if(!empty($history)){ 
					$data['historyyes']=true;
					$data['historyno']=false;
				}

				//17.
					// RBT
					$data['rbtno']=false;
					$data['rbtyes']=false;


					$user_history = $this->input->post('user_history');
					if($user_history == "no_rbt"){
						$data['rbtno']=true;
						$data['rbtyes']=false;
						
					}
					else if(!empty($user_history)){ 
						$data['rbtno']=false;
						$data['rbtyes']=true;
					}

					$data['rbtyear']=$this->_writeULC($this->input->post('year_of_exposure'),12);

					// Injected
					$data['injectedno']=false;
					$data['injectedyes']=false;


					$user_history2 = $this->input->post('user_history_2');
					if($user_history2 == "no_drugs"){
						$data['injectedno']=true;
						$data['injectedyes']=false;
						
					}
					else if(!empty($user_history2)){ 
						$data['injectedno']=false;
						$data['injectedyes']=true;
					}

					$data['injectedyear']=$this->_writeULC($this->input->post('year_of_exposure_2'),12);

					// Needle Prick
					$data['npno']=false;
					$data['npyes']=false;


					$user_history3 = $this->input->post('user_history_3');
					if($user_history3 == "no_needle_prick"){
						$data['npno']=true;
						$data['npyes']=false;
						
					}
					else if(!empty($user_history3)){ 
						$data['npno']=false;
						$data['npyes']=true;
					}

					$data['npyear']=$this->_writeULC($this->input->post('year_of_exposure_3'),12);

					// STI
					$data['stino']=false;
					$data['stiyes']=false;

					$user_history4 = $this->input->post('user_history_4');
					if($user_history4 == "no_STI"){
						$data['stino']=true;
						$data['stiyes']=false;
						
					}
					else if(!empty($user_history4)){ 
						$data['stino']=false;
						$data['stiyes']=true;
					}

					$data['stiyear']=$this->_writeULC($this->input->post('year_of_exposure_4'),12);

					// Sex Female
					$data['sfno']=false;
					$data['sfyes']=false;


					$user_history5 = $this->input->post('user_history_5');
					if($user_history5 == "no_sex_female"){
						$data['sfno']=true;
						$data['sfyes']=false;
						
					}
					else if(!empty($user_history5)){ 
						$data['sfno']=false;
						$data['sfyes']=true;
					}

					$data['sfyear']=$this->_writeULC($this->input->post('year_of_exposure_5'),12);

					// Sex Male
					$data['smno']=false;
					$data['smyes']=false;


					$user_history6 = $this->input->post('user_history_6');
					if($user_history6 == "no_sex_male"){
						$data['smno']=true;
						$data['smyes']=false;
						
					}
					else if(!empty($user_history6)){ 
						$data['smno']=false;
						$data['smyes']=true;
					}

					$data['smyear']=$this->_writeULC($this->input->post('year_of_exposure_6'),12);

					// Sex Prostitute
					$data['spno']=false;
					$data['spyes']=false;


					$user_history7 = $this->input->post('user_history_7');
					if($user_history7 == "no_sex_prostitution"){
						$data['spno']=true;
						$data['spyes']=false;
						
					}
					else if(!empty($user_history7)){ 
						$data['spno']=false;
						$data['spyes']=true;
					}

					$data['spyear']=$this->_writeULC($this->input->post('year_of_exposure_7'),12);

					// Payment Sex
					$data['psno']=false;
					$data['psyes']=false;


					$user_history8 = $this->input->post('user_history_8');
					if($user_history8 == "no_payment_for_sex"){
						$data['psno']=true;
						$data['psyes']=false;
						
					}
					else if(!empty($user_history8)){ 
						$data['psno']=false;
						$data['psyes']=true;
					}

					$data['psyear']=$this->_writeULC($this->input->post('year_of_exposure_8'),12);

					//18.
					$data['fsp'] =0;
					$a=$this->input->post('num_female_partner');
					if(!empty($a)) $data['fsp']=$this->input->post('num_female_partner');
					$data['fspyear']=$this->_writeULC($this->input->post('year_last_sex_f'),12);
					$data['fsp'] = $this->_paddZ($data['fsp'],5);

					$data['msp'] = 0;
					$b=$this->input->post('num_male_partner');
					if(!empty($b)) $data['msp']=$this->input->post('num_male_partner');
					$data['mspyear']=$this->_writeULC($this->input->post('year_last_sex_m'),12);
					$data['msp'] = $this->_paddZ($data['msp'],5);

					//19.
					
					$data['hiv_testingno']=false;
					$data['hiv_testingyes']=false;

					$hiv_testing = $this->input->post('hiv_testing');
					if($hiv_testing == "not_tested"){
						$data['hiv_testingno']=true;
						$data['hiv_testingyes']=false;
						
					}
					else if(!empty($hiv_testing)){ 
						$data['hiv_testingno']=false;
						$data['hiv_testingyes']=true;
					}

					$data['month_last_test'] = 0;
					$a = $this->input->post('month_last_test');
					if(!empty($a)) $data['month_last_test'] = $this->input->post('month_last_test');
					$data['month_last_test'] = $this->_paddZ($data['month_last_test'],2);

					$data['year_last_test'] = 0;
					$a = $this->input->post('year_last_test');
					if(!empty($a)) $data['year_last_test'] = $this->input->post('year_last_test');
					$data['year_last_test'] = $this->_paddZ($data['year_last_test'],4);

					$data['testing_site']=$this->input->post('testing_site');
					$data['testing_site'] = strtoupper($data['testing_site']);
					$data['testing_site']=$this->_writeULC($data['testing_site'],25);

					$data['testing_city']=$this->input->post('testing_city');
					$data['testing_city'] = strtoupper($data['testing_city']);
					$data['testing_city']=$this->_writeULC($data['testing_city'],25);

					$data['result_before_positive']=false;
					$data['result_before_negative']=false;

					$result_before = $this->input->post('result_before');
					if($result_before == "negative"){
						$data['result_before_positive']=false;
						$data['result_before_negative']=true;
						
					}
					else if(!empty($result_before)){ 
						$data['result_before_positive']=true;
						$data['result_before_negative']=false;
					}

					//20.

					$data['clinical_pic_asymp']=false;
					$data['clinical_pic_symp']=false;

					$clinical_pic = $this->input->post('clinical_pic');
					if($clinical_pic == "asymptomatic"){
						$data['clinical_pic_asymp']=true;
						$data['clinical_pic_symp']=false;
						
					}
					else if(!empty($clinical_pic)){ 
						$data['clinical_pic_asymp']=false;
						$data['clinical_pic_symp']=true;
					}

					
					$data['description_ssx']=$this->input->post('description_ssx');
					$data['description_ssx'] = strtoupper($data['description_ssx']);
					$data['description_ssx']=$this->_writeULC($data['description_ssx'],50);

					$data['who_staging']=$this->input->post('who_staging');
					$data['who_staging'] = strtoupper($data['who_staging']);
					$data['who_staging']=$this->_writeULC($data['who_staging'],10);

					$data['no_avail_physician'] = $this->input->post('no_avail_physician');

					//23.

					$data['counselor_name']=$this->_writeULC($this->input->post('counselor_name'),60);	
			}

			// Load view upon success
			$this->load->view('pdf',$data);	

		}
		// Redirect to Login on Invalid Access.
		else{
			redirect(base_url().'login/no_login');
		}
	}

	function _writeULC($str,$linelength){
    	$strlength = strlen($str);
    	$spacelength = $linelength - $strlength;
    	$retStr="";
    	if($spacelength<=0){
    		$retStr=$str;
    	}
    	else{
	    	$spacelength = $this->_intdiv($spacelength,2);
	    	
	    	for($i=0;$i<$spacelength;$i++){
	    		$retStr .= "&nbsp;";
	    	}
	    	$retStr .= $str;
	    	for($i=0;$i<$spacelength;$i++){
	    		$retStr .= "&nbsp;";
	    	}
    	}
    	return $retStr;
    }

    function _intdiv($a, $b){
    return ($a - $a % $b) / $b;
	}

	// Function 2:  Convert an integer to a fixed length string with padded 0s in front
	
	function _paddZ($num,$length){
		$array = str_split($num);
		$iterations = $length - count($array);
		for($i=0;$i<$iterations;$i++){
			$dump = array_unshift($array,"0");
		}
		return $array;
	}

}