<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dokter extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_dokter');
	}

	public function tambah_dokter()
	{
		$this->load->view('dokter/tambah');
	}

	public function get_detail()
	{

	}

	public function add_dokter()
	{
		$config['upload_path']			= './assets/dokter'; //tempat file upload
		$config['allowed_types']		= 'jpg|png|gif' ;
		$config['max_size']				= '4096' ;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('profile_pic'))
        {
            $error = $this->upload->display_errors();
            print_r($error);
        }
        else {
        	$result = $this->upload->data();
        }

		$data = [
			"nama" 		=> $this->input->post('nama', true),
			"spesialis" => $this->input->post('spesialis', true);
			"ktp"  		=> $this->input->post('ktp', true),
			"alamat" 	=> $this->input->post('alamat', true);
			"TTL" 		=> $this->input->post('TTL', true);
			"nohp" 		=> $this->input->post('nohp', true);
			"foto"		=> 
		];

		$this->Model_dokter->insertDokter($data);
	}
}
?>