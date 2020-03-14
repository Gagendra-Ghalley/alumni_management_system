<?php
class St_useradd_Model extends CI_Model {
	function_construct(){
		parent::__construct();
	}
	public function insertdetails($table,$data){
		$query=$this->db->insert($table, $data);
	}

}
?>