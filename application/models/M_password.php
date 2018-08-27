<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_password extends CI_Model {

	public function getOldPassword()
	{
		$username = $this->session->userdata('username');
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('username', $username);
		$data = $this->db->get()->row();
		return $data->password;
	}
	
	public function gantiPassword($post)
	{
		$username = $this->session->userdata('username');
		$object = array('password' => $post['password_baru'] );
		$this->db->where('username', $username);
		$this->db->update('tbl_users', $object);
		echo "<script>alert('Berhasil merubah password. Silahkan login dengan password baru!');</script>";
		redirect('app/password','refresh');		
	}

}

/* End of file M_password.php */
/* Location: ./application/models/M_password.php */