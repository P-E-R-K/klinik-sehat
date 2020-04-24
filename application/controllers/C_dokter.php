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

		$this->upload->add_dokter('profile_pic');

		$data_dokter = $this->Model_dokter->getDoktor();
	}
}
?>