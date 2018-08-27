<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_nilai');
		$this->load->model('M_siswa');
		$this->load->model('M_laporan');
		if (!$this->session->userdata('statusLoggedFirst')) {
			redirect('auth/login','refresh');
		}
	}

	public function index()
	{
		$data['nilai'] = $this->M_laporan->getDataLaporan();
		$this->load->view('Nilai/nilai',$data);
	}

	public function add()
	{
		$data['siswa'] = $this->M_siswa->getData('tbl_siswa');
		$this->load->view('Nilai/input_nilai',$data);
	}

	public function insert()
	{
		$post = $this->input->post();
		$query = $this->M_nilai->insertNilai($post);
	}

	public function delete($id)
	{
		$query = $this->M_nilai->delete($id);
	}

	public function edit($id)
	{
		$data['siswa'] = $this->M_siswa->getData('tbl_siswa');
		$data['nilai'] = $this->M_nilai->editData($id);
		$this->load->view('Nilai/edit_nilai', $data);
	}

	public function update()
	{
		$post = $this->input->post();
		$query = $this->M_nilai->updateNilai($post);
	}

}

/* End of file Nilai.php */
/* Location: ./application/controllers/App/Nilai.php */