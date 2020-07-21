<?php

class Multiple_delete_model extends CI_Model
{
 function fetch_data()
 {
  $this->db->select("*");
   $this->db->where("status1","approved");
  $this->db->from("bpas_logins");
  $this->db->order_by('loginId', 'desc');

  return $this->db->get();
 }

 function delete($id)
 {
  $this->db->where('relatedUserId', $id);
  $this->db->delete('bpas_logins');
 }
}

?>