<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_guru');
		$this->load->library('form_validation');
		if (!$this->session->userdata('statusLoggedFirst')) {
			redirect('auth/login','refresh');
		}
	}

	public function index()
	{
		$data['guru'] = $this->M_guru->getDataGuru();
		$this->load->view('Guru/guru',$data);	
	}

	public function add()
	{
		$data['kode_guru'] = 'NIP-'.rand(11111111,99999999);
		$this->load->view('Guru/input_guru',$data);
	}

	public function insert()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[tbl_users.username]');
		if ($this->form_validation->run() == FALSE) {
			echo "<script>alert('Username sudah ada. Silahkan masukan yang lain !');</script>";
			redirect('app/guru/add','refresh');
		} 
		else 
		{
			$post = $this->input->post();
			$query = $this->M_guru->insertData($post);
		}
	}

	public function delete($id)
	{
		$query = $this->M_guru->delete($id);
	}

	public function edit($id)
	{
		$data['guru'] = $this->M_guru->edit($id);
		$this->load->view('Guru/edit_guru', $data);
	}

	public function update()
	{
		$post = $this->input->post();
		$query = $this->M_guru->update($post);
	}

}

/* End of file Guru.php */
/* Location: ./application/controllers/App/Guru.php */