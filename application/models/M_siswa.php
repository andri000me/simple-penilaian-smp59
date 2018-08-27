<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	public function getData($table)
	{
		$data = $this->db->get($table)->result();
		return $data;
	}	

	public function getDataSiswa()
	{
		$this->db->select('user.username, user.password, user.created_at, siswa.NIS, siswa.nama, siswa.tempat_lahir, siswa.tanggal_lahir, siswa.jenis_kelamin, siswa.agama, siswa.alamat');
		$this->db->from('tbl_users as user');
		$this->db->join('tbl_siswa as siswa', 'user.username = siswa.username');
		$this->db->where('user.status', '3');
		$data = $this->db->get()->result();
		return $data;
	}

	public function delete($id)
	{
		$this->db->where('username', $id);
		$this->db->delete('tbl_users');

		$this->db->where('username', $id);
		$this->db->delete('tbl_siswa');
		echo "<script>alert('Berhasil menghapus siswa!');</script>";
		redirect('app/siswa','refresh');
	}

	public function insert($post)
	{
		$object = array(
					'username' => $post['username'],
					'password' => $post['password'],
					'status' => 3,
					'ket_status' => 'Siswa',
				);
		$this->db->insert('tbl_users', $object);

		$value = array(
					'NIS' => $post['nis'],
					'username' => $post['username'],
					'nama' => $post['nama_siswa'],
					'tempat_lahir' => $post['tempat_lahir'],
					'tanggal_lahir' => $post['tanggal_lahir'],
					'jenis_kelamin' => $post['jenis_kelamin'],
					'agama' => $post['agama'],
					'alamat' => $post['alamat'],
				);
		$this->db->insert('tbl_siswa', $value);
		echo "<script>alert('Berhasil memasukkan data sebagai siswa!');</script>";
		redirect('app/siswa','refresh');	
	}

	public function update($post)
	{
		$object = array(
					'password' => $post['password'],
					'status' => 3,
					'ket_status' => 'Siswa',
				);
		$this->db->where('username', $post['username']);
		$this->db->update('tbl_users', $object);

		$value = array(
					'NIS' => $post['nis'],
					'nama' => $post['nama_siswa'],
					'tempat_lahir' => $post['tempat_lahir'],
					'tanggal_lahir' => $post['tanggal_lahir'],
					'jenis_kelamin' => $post['jenis_kelamin'],
					'agama' => $post['agama'],
					'alamat' => $post['alamat'],
				);
		$this->db->where('username', $post['username']);
		$this->db->update('tbl_siswa', $value);
		echo "<script>alert('Berhasil merubah data!');</script>";
		redirect('app/siswa','refresh');	
	}

	public function edit($id)
	{
		$this->db->select('user.username, user.password, user.created_at, siswa.NIS, siswa.nama, siswa.tempat_lahir, siswa.tanggal_lahir, siswa.jenis_kelamin, siswa.agama, siswa.alamat');
		$this->db->from('tbl_users as user');
		$this->db->join('tbl_siswa as siswa', 'user.username = siswa.username');
		$this->db->where('user.status', '3');
		$this->db->where('user.username', $id);
		$data = $this->db->get()->result();
		return $data;
	}

}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */