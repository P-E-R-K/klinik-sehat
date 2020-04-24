<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dokter extends CI_Model {

	public function getDokter()
	{
		$data = $this->db->get('list_dokter');

		return $data->result_array();
	}

	public function insertDokter($data)
	{
		$this->db->insert('dokter', $data);
	}

}
?>