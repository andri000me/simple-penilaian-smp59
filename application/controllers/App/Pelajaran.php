<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelajaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pelajaran');
		if (!$this->session->userdata('statusLoggedFirst')) {
			redirect('auth/login','refresh');
		}
	}

	public function index()
	{
		$data['mapel'] = $this->M_pelajaran->getData('tbl_matapelajaran');
		$this->load->view('Pelajaran/pelajaran',$data);
	}

	public function add()
	{
		$data['kode_matapelajaran'] = 'MP-'.rand(11111,99999);
		$this->load->view('Pelajaran/form_add',$data);
	}

	public function delete($id)
	{
		$query = $this->M_pelajaran->deleteData($id);
	}

	public function insert()
	{
		$post = $this->input->post();
		$query = $this->M_pelajaran->insertData($post);
	}

	public function update()
	{
		$post = $this->input->post();
		$query = $this->M_pelajaran->updateData($post);
	}

	public function edit($id)
	{
		$data = $this->M_pelajaran->editData($id);
		$this->load->view('Pelajaran/form_edit', $data);
	}

}

/* End of file Pelajaran.php */
/* Location: ./application/controllers/App/Pelajaran.php */