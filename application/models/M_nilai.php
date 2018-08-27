<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nilai extends CI_Model {

	public function insertNilai($post)
	{
		$object = array(
					'NIS'						 => $post['nis'], 
					'kelas' 					 => $post['kelas'], 
					'semester' 					 => $post['semester'], 
					'pendidikan_agama' 			 => $post['pendidikan_agama'], 
					'pendidikan_kewarganegaraan' => $post['pendidikan_kewarganegaraan'], 
					'bahasa_indonesia' 			 => $post['bahasa_indonesia'], 
					'bahasa_inggris' 			 => $post['bahasa_inggris'], 
					'matematika' 				 => $post['matematika'], 
					'ilmu_pengetahuan_alam' 	 => $post['ilmu_pengetahuan_alam'], 
					'ilmu_pengetahuan_sosial' 	 => $post['ilmu_pengetahuan_sosial'], 
					'seni_budaya' 				 => $post['seni_budaya'], 
					'penjaskes' 				 => $post['penjaskes'], 
					'tik' 						 => $post['tik'], 
					'plkj' 						 => $post['plkj'], 
					'tata_busana' 				 => $post['tata_busana'], 
					'NA' 						 => $post['na'], 
				);
		$this->db->insert('tbl_nilai', $object);
		echo "<script>alert('Berhasil menginput nilai')</script>";
		redirect('app/laporan','refresh');
	}

	public function delete($id)
	{
		$this->db->where('id_nilai', $id);
		$this->db->delete('tbl_nilai');
		echo "<script>alert('Berhasil menghapus nilai')</script>";
		redirect('app/laporan','refresh');
	}

	public function editData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_nilai');
		$this->db->where('id_nilai', $id);
		$data = $this->db->get()->result();
		return $data;
	}

	public function updateNilai($post)
	{
		$object = array(
					'NIS'						 => $post['nis'], 
					'kelas' 					 => $post['kelas'], 
					'semester' 					 => $post['semester'], 
					'pendidikan_agama' 			 => $post['pendidikan_agama'], 
					'pendidikan_kewarganegaraan' => $post['pendidikan_kewarganegaraan'], 
					'bahasa_indonesia' 			 => $post['bahasa_indonesia'], 
					'bahasa_inggris' 			 => $post['bahasa_inggris'], 
					'matematika' 				 => $post['matematika'], 
					'ilmu_pengetahuan_alam' 	 => $post['ilmu_pengetahuan_alam'], 
					'ilmu_pengetahuan_sosial' 	 => $post['ilmu_pengetahuan_sosial'], 
					'seni_budaya' 				 => $post['seni_budaya'], 
					'penjaskes' 				 => $post['penjaskes'], 
					'tik' 						 => $post['tik'], 
					'plkj' 						 => $post['plkj'], 
					'tata_busana' 				 => $post['tata_busana'], 
					'NA' 						 => $post['na'], 
				);
		$this->db->where('id_nilai', $post['id_nilai']);
		$this->db->update('tbl_nilai', $object);
		echo "<script>alert('Berhasil menginput nilai')</script>";
		redirect('app/laporan','refresh');
	}

}

/* End of file M_nilai.php */
/* Location: ./application/models/M_nilai.php */