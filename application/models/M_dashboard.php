<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function getTotalRows($table)
	{
		$data = $this->db->get($table);
		return $data->num_rows();
	}	

}

/* End of file M_dashboard.php */
/* Location: ./application/models/M_dashboard.php */