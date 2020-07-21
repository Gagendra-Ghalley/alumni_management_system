<?php
class Excel_export_model extends CI_Model
{
	function fetch_data()
	{
		$this->db->order_by("loginId", "DESC");
		$this->db->where("status1", "approved");
		$query = $this->db->get("bpas_logins");
		return $query->result();
	}

	
}
