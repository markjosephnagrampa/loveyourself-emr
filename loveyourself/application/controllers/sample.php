<?php
	class Sample extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->libraries('session');
		}
			
		public function index(){
			$this->load->view('sample_view');
		}
	}
?>