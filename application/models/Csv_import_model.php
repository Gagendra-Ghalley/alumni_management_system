<?php
class Csv_import_model extends CI_Model
{
 function select()
 {

 	 $query= "SELECT CONCAT(p.FirstName, ' ', p.MiddleName, ' ', p.LastName) AS name, 
 		p.cid, 
 		a.name AS Agency, 
		p.EmpNo AS EmpNo,
 		d.name AS ParentAgency, 
		m.name AS MainParentAgency,  		
		masterposition.Description AS PositionTitle, 
		p.DateOfBirth as DOB,
		p.email as Email,
 		p.telephone as Telephone,		p.Grade as Grade,
 		p.Gender as Gender,
 		p.year, 		
 		p.profileId,
 		p.Mobile
 		FROM bpas_user_profiles p 
 		LEFT JOIN bpas_master_agencymainparent m ON m.AgencyMainParentID= p.AgencyMainParentID 	LEFT JOIN bpas_master_agencyparent d ON d.AgencyParentID=p.AgencyParentID LEFT JOIN bpas_master_agency a ON a.AgencyID=p.AgencyID 
		LEFT JOIN masterposition ON masterposition.PositionID = p.PositionTitle
 		ORDER BY  p.profileId  DESC";
 		$employees = $this->db->query($query);
		return $employees;

 
  $this->db->order_by('loginId','DESC');
  $query1 = $this->db->get('bpas_logins');
  // return $query;
  return $query1;
 }

 function insert($data,$data1)
 {
  $this->db->insert_batch('bpas_user_profiles', $data);
  $this->db->insert_batch('bpas_logins', $data1);

 }
}


