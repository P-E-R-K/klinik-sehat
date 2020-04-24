<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_klinik extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Model_dokter');
	}

	public function index()
	{

		$this->load->view('templates/header');
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}

	public function page_pasien()
	{
		$this->load->view('templates/header');
		$this->load->view('pasien/index');
		$this->load->view('templates/footer');
	}

	public function page_dokter()
	{
		$data_dokter = $this->Model_dokter->getDokter();
		$this->load->view('templates/header');
		$this->load->view('dokter/index', ['dataD' => $data_dokter]);
		$this->load->view('templates/footer');
	}

	public function page_obat()
	{
		$this->load->view('templates/header');
		$this->load->view('obat/index');
		$this->load->view('templates/footer');
	}
}
