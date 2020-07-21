<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registereduser_model extends CI_Model {

  function getRegisteredusers($postData=null){

      $response = array();

      ## Read value
      $draw = $postData['draw'];
      $start = $postData['start'];
      $rowperpage = $postData['length']; // Rows display per page
      $columnIndex = $postData['order'][0]['column']; // Column index
      $columnName = $postData['columns'][$columnIndex]['data']; // Column name
      $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
      $searchValue = $postData['search']['value']; // Search value

      ## Search 
      $searchQuery = "";
      if($searchValue != ''){
          $searchQuery = " (FirstName like '%".$searchValue."%' or 
                email like '%".$searchValue."%' or 
                relatedUserId like'%".$searchValue."%' ) ";
      }

    // $query= "SELECT CONCAT(p.FirstName, ' ', p.MiddleName, ' ', p.LastName) AS name, 
    // p.cid,
    // p.FirstName, 
    // p.AgencyID,
    // a.name AS Agency, 
    // p.EmpNo AS EmpNo,
    // d.name AS ParentAgency, 
    // m.name AS MainParentAgency, 
    // masterposition.Description AS PositionTitle,
    // p.DateOfBirth as DOB,
    // p.email as Email,
    // p.telephone as Telephone,
    // p.Grade as Grade,
    // p.gender,
    // p.profileId,
    // p.Mobile
    // FROM bpas_user_profiles p 
    // LEFT JOIN bpas_master_agencymainparent m ON m.AgencyMainParentID= p.AgencyMainParentID 
    // LEFT JOIN bpas_master_agencyparent d ON d.AgencyParentID=p.AgencyParentID 
    // LEFT JOIN bpas_master_agency a ON a.AgencyID=p.AgencyID 
    // LEFT JOIN masterposition ON masterposition.PositionID = p.PositionTitle
    // WHERE p.cid ='".$keyword."'";
    // $employees = $this->db->query($query);
    // return $employees;
    
  
      ## Total number of records without filtering
      $this->db->select('count(*) as allcount');
      $this->db->where('status1','approved');
      $records = $this->db->get('bpas_logins')->result();
      $totalRecords = $records[0]->allcount;

      ## Total number of record with filtering
      $this->db->select('count(*) as allcount');
      $this->db->where('status1','approved');

      if($searchQuery != '')
      $this->db->where($searchQuery);
      $records = $this->db->get('bpas_logins')->result();
      $totalRecordwithFilter = $records[0]->allcount;

      
      ## Fetch records
      $this->db->select('*');
      $this->db->where('status1','approved');

      if($searchQuery != '')
      $this->db->where($searchQuery);
      $this->db->order_by($columnName, $columnSortOrder);
      $this->db->limit($rowperpage, $start);
      $records = $this->db->get('bpas_logins')->result();

      
     
      $data = array();

      foreach($records as $record ){
         
          $data[] = array( 
               "FirstName"=>$record->FirstName,
              "relatedUserId"=>$record->relatedUserId,
              "department"=>$record->department,
              "batch"=>$record->batch,
              "date"=>$record->date,
              "email"=>$record->email
              
          ); 
      }

      ## Response
      $response = array(
          "draw" => intval($draw),
          "iTotalRecords" => $totalRecords,
          "iTotalDisplayRecords" => $totalRecordwithFilter,
          "aaData" => $data
      );

      return $response; 
  }

}


