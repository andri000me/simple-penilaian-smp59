<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelajaran extends CI_Model {

	public function getData($table)
	{
		$data = $this->db->get($table)->result();
		return $data;
	}	

	public function deleteData($id)
	{
		$this->db->where('kode_matapelajaran', $id);
		$this->db->delete('tbl_matapelajaran');
		echo "<script>alert('Data Berhasil Dihapus !');location.href='".base_url('app/pelajaran')."'</script>";
	}

	public function insertData($post)
	{
		$object = array(
					'kode_matapelajaran' => $post['kode_matapelajaran'], 
					'mata_pelajaran' 	 => $post['mata_pelajaran'], 
					'kkm' 				 => $post['kkm'], 
				);
		$this->db->insert('tbl_matapelajaran', $object);
		echo "<script>alert('Data Berhasil Dimasukkan !');location.href='".base_url('app/pelajaran')."'</script>";
	}

	public function updateData($post)
	{
		$object = array(
					'mata_pelajaran' 	 => $post['mata_pelajaran'], 
					'kkm' 				 => $post['kkm'], 
				);
		$this->db->where('kode_matapelajaran', $post['kode_matapelajaran']);
		$this->db->update('tbl_matapelajaran', $object);
		echo "<script>alert('Data Berhasil Dirubah !');location.href='".base_url('app/pelajaran')."'</script>";
	}

	public function editData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_matapelajaran');
		$this->db->where('kode_matapelajaran', $id);
		$data = $this->db->get()->row();
		$rows['kode_matapelajaran'] = $data->kode_matapelajaran; 
		$rows['mata_pelajaran'] 	= $data->mata_pelajaran; 
		$rows['kkm'] 				= $data->kkm; 
		return $rows;
	}

}

/* End of file M_pelajaran.php */
/* Location: ./application/models/M_pelajaran.php */