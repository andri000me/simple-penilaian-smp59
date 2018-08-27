<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		if (!$this->session->userdata('statusLoggedFirst')) {
			redirect('auth/login','refresh');
		}
		if ($this->session->userdata('status') == 3) {
			redirect('app/laporan','refresh');	
		}
	}

	public function index()
	{
		$data['totalGuru'] = $this->M_dashboard->getTotalRows('tbl_guru');
		$data['totalSiswa'] = $this->M_dashboard->getTotalRows('tbl_siswa');
		$data['totalMapel'] = $this->M_dashboard->getTotalRows('tbl_matapelajaran');
		$data['totalNilai'] = $this->M_dashboard->getTotalRows('tbl_nilai');
		$this->load->view('Dashboard/dashboard',$data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/App/Dashboard.php */