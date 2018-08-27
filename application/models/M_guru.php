<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model {

	public function getDataGuru()
	{
		$this->db->select('u.username, u.password, u.created_at, u.status, u.ket_status, g.kode_guru, g.nama_guru, g.jenis_kelamin, g.tempat_lahir, g.tanggal_lahir, g.alamat, g.created_on');
		$this->db->from('tbl_users as u');
		$this->db->join('tbl_guru as g', 'u.username = g.username');
		$this->db->where('u.status', 2);
		$data = $this->db->get()->result();
		return $data;
	}	

	public function insertData($post)
	{
		$object = array(
					'username' => $post['username'], 
					'password' => $post['password'], 
					'status' => 2, 
					'ket_status' => 'Guru' , 
				);
		$this->db->insert('tbl_users', $object);

		$value = array(
					'kode_guru' => $post['kode_guru'], 
					'username' => $post['username'], 
					'nama_guru' => $post['nama_guru'], 
					'jenis_kelamin' => $post['jenis_kelamin'], 
					'tempat_lahir' => $post['tempat_lahir'], 
					'tanggal_lahir' => $post['tanggal_lahir'], 
					'alamat' => $post['alamat'], 
				);
		$this->db->insert('tbl_guru', $value);

		echo '<script>alert("Berhasil memasukkan data users sebagai guru!");</script>';
		redirect('app/guru','refresh');
	}	

	public function delete($id)
	{
		$this->db->where('username', $id);
		$this->db->delete('tbl_users');

		$this->db->where('username', $id);
		$this->db->delete('tbl_guru');

		echo '<script>alert("Berhasil menghapus data guru!");</script>';
		redirect('app/guru','refresh');

	}

	public function edit($id)
	{
		$this->db->select('u.username, u.password, u.created_at, u.status, u.ket_status, g.kode_guru, g.nama_guru, g.jenis_kelamin, g.tempat_lahir, g.tanggal_lahir, g.alamat, g.created_on');
		$this->db->from('tbl_users as u');
		$this->db->join('tbl_guru as g', 'u.username = g.username');
		$this->db->where('u.status', 2);
		$this->db->where('u.username', $id);
		$data = $this->db->get()->result();
		return $data;
	}

	public function update($post)
	{
		$object = array(
					'password' => $post['password'], 
					'status' => 2, 
					'ket_status' => 'Guru' , 
				);
		$this->db->where('username', $post['username']);
		$this->db->update('tbl_users', $object);

		$value = array(
					'kode_guru' => $post['kode_guru'], 
					'nama_guru' => $post['nama_guru'], 
					'jenis_kelamin' => $post['jenis_kelamin'], 
					'tempat_lahir' => $post['tempat_lahir'], 
					'tanggal_lahir' => $post['tanggal_lahir'], 
					'alamat' => $post['alamat'], 
				);
		$this->db->where('username', $post['username']);
		$this->db->update('tbl_guru', $value);

		echo '<script>alert("Berhasil merubah data guru!");</script>';
		redirect('app/guru','refresh');
	}

}

/* End of file M_guru.php */
/* Location: ./application/models/M_guru.php */
