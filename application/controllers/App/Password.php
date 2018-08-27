<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_password');
		if (!$this->session->userdata('statusLoggedFirst')) {
			redirect('auth/login','refresh');
		}
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('Password/ganti_password');
	}

	public function update()
	{
		$this->form_validation->set_rules('password_baru', 'Password Baru', 'trim|required|min_length[7]|numeric',array('numeric'=>'Password anda harus angka!','min_length' => 'Password anda minimal harus 7 karakter!'));
		$this->form_validation->set_rules('ulangi_password_baru', 'Ulangi Password Baru', 'trim|required|matches[password_baru]',array('matches' => 'Password baru harus sama dengan Ulangi password baru!' ) );
		$post = $this->input->post();
		if ($this->form_validation->run() == FALSE) {
			$message = validation_errors();
			echo '<br>'.$message;
			echo '<a href="'.base_url('app/password').'">Back to change password</a>';
				
		} 
		else 
		{
			$password_lama = $this->M_password->getOldPassword();
			if ($password_lama == $post['password_lama'] ) {
				$query = $this->M_password->gantiPassword($post);
			}
			else
			{
				echo "<script>alert('Password lama salah!');</script>";
				redirect('app/password','refresh');
			}
		}
	}

}

/* End of file Password.php */
/* Location: ./application/controllers/App/Password.php */