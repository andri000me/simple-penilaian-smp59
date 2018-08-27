<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_laporan');
		if (!$this->session->userdata('statusLoggedFirst')) {
			redirect('auth/login','refresh');
		}
	}

	public function index()
	{
		$data['nilai'] = $this->M_laporan->getDataLaporan();
		$this->load->view('Laporan/laporan',$data);
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/App/Laporan.php */