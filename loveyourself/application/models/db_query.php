<?php
	class Db_Query extends CI_Model{	
		public function __construct(){
			$this->load->database();
		}
		
		public function create() {
			$this->load->helper('url');
			$data = array(
			'sample' => $this->input->post('age'),
			);
			return $this->db->insert('sad', $data);
		}
	}
?>