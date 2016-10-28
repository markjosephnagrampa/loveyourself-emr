<?php
	class Logout extends CI_Controller{
		public function index(){
			//$this->session->unset_userdata('usrname');
			$this->session->sess_destroy();
			redirect(base_url());
		}
		
		public function patient_logout(){
			$this->session->unset_userdata('visitor');
			redirect(base_url().'site');
		}
	}
?>