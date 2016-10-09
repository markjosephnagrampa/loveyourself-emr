<?php
	class Logout extends CI_Controller{
		public function index(){
			//$this->session->unset_userdata('usrname');
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}
?>