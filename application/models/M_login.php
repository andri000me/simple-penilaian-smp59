<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function submitLogin($post)
	{
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('username', $post['username']);
		$data = $this->db->get()->result();
		$num_rows = count($data);
		if ($num_rows > 0) {
			$this->db->select('*');
			$this->db->from('tbl_users');
			$this->db->where('username', $post['username']);
			$this->db->where('password', $post['password']);
			$this->db->limit(1);
			$dataLogin = $this->db->get()->row();
			$numRowsLogin = count($dataLogin);
			if ($numRowsLogin > 0) {

				$array = array(
					'statusLoggedFirst' => true,
					'username'			=> $dataLogin->username,
					'status'			=> $dataLogin->status,
					'ket_status'		=> $dataLogin->ket_status,
				);
				
				$this->session->set_userdata( $array );
				redirect('app/dashboard','refresh');
			}
			else
			{
				$this->session->set_flashdata('alert', 'alert alert-danger');
				$this->session->set_flashdata('msg', "The password doesn't correct. Please try again!");
				redirect('auth/login','refresh');
			}
		}

		else
		{
			$this->session->set_flashdata('alert', 'alert alert-danger');
			$this->session->set_flashdata('msg', "Username doesn't exist. Please try again!");
			redirect('auth/login','refresh');
		}
	}	

}

/* End of file M_login.php */
/* Location: ./application/models/Auth/M_login.php */
