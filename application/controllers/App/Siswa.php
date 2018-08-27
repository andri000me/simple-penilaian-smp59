<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_siswa');
		if (!$this->session->userdata('statusLoggedFirst')) {
			redirect('auth/login','refresh');
		}
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['siswa'] = $this->M_siswa->getDataSiswa();
		$this->load->view('Siswa/siswa',$data);
	}

	public function delete($id)
	{
		$query = $this->M_siswa->delete($id);
	}

	public function add()
	{
		$data['nis'] = 'NIS-'.rand(111111111,999999999);
		$this->load->view('Siswa/input_siswa',$data);
	}

	public function insert()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[tbl_users.username]');
		if ($this->form_validation->run() == FALSE) {
			echo "<script>alert('Username sudah ada!');</script>";
			redirect('app/siswa','refresh');	
		} else {
			$post = $this->input->post();
			$query = $this->M_siswa->insert($post);
		}
		
	}

	public function edit($id)
	{
		$data['siswa'] = $this->M_siswa->edit($id);
		$this->load->view('Siswa/edit_siswa', $data);
	}

	public function update()
	{
		$post = $this->input->post();
		$query = $this->M_siswa->update($post);
	}

}

/* End of file Siswa.php */
/* Location: ./application/controllers/App/Siswa.php */