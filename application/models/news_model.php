<?php
class news_model extends CI_Model 
{
	/*Insert*/
	function savenews($describtion)
	{

	$query="insert into post_news values('','".$describtion."')";
	$this->db->query($query);
	}

	function display_records()
	{
	$query=$this->db->query("select * from post_news");
	return $query->result();
			}

	function deleterecords($id)
	{
	$this->db->query("delete  from post_news where id='".$id."'");
	}
	
}