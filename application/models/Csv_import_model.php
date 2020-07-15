<?php
class Csv_import_model extends CI_Model
{
 function select()//$batch_ID
 {

 	 $query= "SELECT CONCAT(p.FirstName, ' ', p.MiddleName, ' ', p.LastName) AS name, 
 		p.cid, 
 		a.name AS Agency, 
		
 		d.name AS ParentAgency, 
		m.name AS MainParentAgency,  		
		
		
		p.email as Email,
 		p.telephone as Telephone,		
 		p.gender,
 	 		
 		p.profileId,
 		p.Mobile
 		FROM user_profiles p 
 		LEFT JOIN departmentParent m ON m.departmentParent_ID= p.departmentParent_ID 	LEFT JOIN department d ON d.department_ID=p.department_ID LEFT JOIN batch a ON a.batch_ID=p.batch_ID 
		-- LEFT JOIN masterposition ON masterposition.PositionID = p.PositionTitle
		ORDER BY  p.profileId  DESC";
		// where p.batch_ID='".$batch_ID."'
 	
 		$employees = $this->db->query($query);
		return $employees;

 
  $this->db->order_by('profileId','DESC');
  $query1 = $this->db->get('user_profiles');
  // return $query;
  return $query1;
 }

 function insert($data,$data1)
 {

 	
  $this->db->insert_batch('user_profiles', $data);
  $this->db->insert_batch('login', $data1);

 }
}


