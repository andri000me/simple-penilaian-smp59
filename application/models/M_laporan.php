<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

	public function getDataLaporan()
	{
		$username = $this->session->userdata('username');
		$this->db->select('n.id_nilai,n.NIS,s.nama ,n.kelas, n.semester, n.pendidikan_agama, n.pendidikan_kewarganegaraan, n.bahasa_indonesia, n.bahasa_inggris, n.matematika, n.ilmu_pengetahuan_alam, n.ilmu_pengetahuan_sosial, n.seni_budaya, n.penjaskes, n.tik, n.plkj, n.tata_busana, n.NA');
		$this->db->from('tbl_nilai as n');
		$this->db->join('tbl_siswa as s', 'n.NIS = s.NIS');
		if ($this->session->userdata('status') == 3) {
			$this->db->where('s.username', $username);
		}
		$data = $this->db->get()->result();
		return $data;
	}	

}

/* End of file M_laporan.php */
/* Location: ./application/models/M_laporan.php */