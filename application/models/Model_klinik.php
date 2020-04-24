<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_klinik extends CI_Model {
		public function __construct()
		{
			$this->load->database();
		}
		
		public get_pasien(){
			$data = $this->db->get('pasien');

			return $data->result_array();
		}

		public get_recent_pasien(){
			$data = $this->db->get('');
		}
	}
?>