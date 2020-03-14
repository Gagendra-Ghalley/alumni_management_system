<?php



class Agency_model extends CI_Model {
	
	
	public function listDivisions() {
		
		
		$query = "SELECT bpas_master_agency.name AS Agency FROM bpas_master_agency 
LEFT JOIN bpas_master_agencyparent ON bpas_master_agencyparent.AgencyParentID = bpas_master_agency.AgencyParentID 
		WHERE bpas_master_agencyparent.name = '".$this->session->userdata('deptName')."'";
		
		$result = $this->db->query($query);
		return $result;
		
	}
	
	
	
	public function updateMainParentAgency() {
		
		
		$query ="SELECT distinct t.AgencyMainParentID, a.name FROM bpas_user_profiles t 
				LEFT JOIN masteragency a on a.AgencyID = t.AgencyMainParentID
				WHERE t.AgencyMainParentID <> '0' ";
				
		$selectresult=$this->db->query($query);
			
			
			foreach($selectresult->result() as $row){
				
				$checkquery = $this->db->query("SELECT AgencyMainParentID FROM bpas_master_agencymainparent WHERE `AgencyMainParentID` = '".$row->AgencyMainParentID."'");
				
				if($checkquery->num_rows()>0) {
					echo "Duplicate Entry".$row->AgencyMainParentID;		
															} else {
					$insertquery = "INSERT INTO bpas_master_agencymainparent (AgencyMainParentID, name) VALUES ('".$row->AgencyMainParentID."', '".$row->name."')";												
																	
					if($this->db->query($insertquery)) {
									
							return true;	
							
						
					} else return false;								
																
					}
				
			}
		
	}
	
	
	public function updateParentAgency() {
		
		
				$query= "SELECT distinct t.AgencyParentID, a.name, t.AgencyMainParentID FROM bpas_user_profiles t 
						LEFT JOIN masteragency a on a.AgencyID = t.AgencyParentID
						WHERE t.AgencyParentID <> '0' ";
						
				$selectresult=$this->db->query($query);
			
			
			foreach($selectresult->result() as $row){
				
				$checkquery = $this->db->query("SELECT AgencyParentID FROM bpas_master_agencyparent WHERE `AgencyParentID` = '".$row->AgencyParentID."'");
				
				if($checkquery->num_rows()>0) {
					echo "Duplicate Entry".$row->AgencyParentID;		
															} else {
					$insertquery = "INSERT INTO bpas_master_agencyparent (AgencyParentID, name, AgencyMainParentID) VALUES ('".$row->AgencyParentID."', '".$row->name."', '".$row->AgencyMainParentID."')";												
					
					$this->db->query($insertquery);												
					/*if($this->db->query($insertquery)) {
									
							return true;	
							
						
					} else {return false;}*/					
																
					}
				
			}
	}
	
	
	public function updateAgency() {
		
				$query = "SELECT distinct t.AgencyID, a.name,t.AgencyParentID, t.AgencyMainParentID FROM bpas_user_profiles t 
						LEFT JOIN masteragency a on a.AgencyID = t.AgencyID
						WHERE t.AgencyMainParentID <> '0'";
						
				$selectresult=$this->db->query($query);
					
			foreach($selectresult->result() as $row){
				
				$checkquery = $this->db->query("SELECT AgencyID FROM bpas_master_agency WHERE `AgencyID` = '".$row->AgencyID."'");
				
				if($checkquery->num_rows()>0) {
					echo "Duplicate Entry".$row->AgencyID;		
															} else {
					$insertquery = "INSERT INTO bpas_master_agency (AgencyID, name, AgencyParentID, AgencyMainParentID) VALUES ('".$row->AgencyID."', '".$row->name."', '".$row->AgencyParentID."', '".$row->AgencyMainParentID."')";												
																	
					$this->db->query($insertquery);							
																
					}
				
			}
				
						
	}
	
	
	
	public function updateSupervisorAgency() {
		
		$query = "SELECT DISTINCT u.AgencyID, a.Name AS Agency,u.cid, u.Grade FROM bpas_user_profiles u 
				LEFT JOIN bpas_master_agency a ON u.AgencyID = a.AgencyID
				WHERE u.Grade = 'P1'";
				$success=0;
		$chieflist = $this->db->query($query);
		foreach($chieflist->result() as $chief) {
			
			$updatechief = "UPDATE bpas_master_agency SET chief = '".$chief->cid."' WHERE bpas_master_agency.AgencyID = '".$chief->AgencyID."'";
			if($this->db->query($updatechief)){
		
						$updaterole = $this->db->query("UPDATE bpas_user_profiles SET roleId='4' WHERE cid='".$chief->cid."'");		
				
			
			}
			$success=1;
		}
		return $success;
		
	}
	
	public function updateSupervisorParentAgency() {
		
		
		$query = "SELECT DISTINCT u.AgencyParentID, a.Name AS Agency,u.cid, u.Grade FROM bpas_user_profiles u 
				LEFT JOIN bpas_master_agencyparent a ON u.AgencyParentID = a.AgencyParentID
				WHERE u.Grade = 'EX3' OR u.Grade='EX2'";
				$success=0;
		$directorlist = $this->db->query($query);
		foreach($directorlist->result() as $director) {
			
			$updatedirector = "UPDATE bpas_master_agencyparent SET director = '".$director->cid."' WHERE bpas_master_agencyparent.AgencyParentID = '".$director->AgencyParentID."'";
			if($this->db->query($updatedirector)){
						$updaterole = $this->db->query("UPDATE bpas_user_profiles SET roleId='3' WHERE cid='".$director->cid."'");		
				$success=1;
			}
			
		}
		return $success;
		
	}
	
	public function updateSupervisorMainParentAgency() {
					
				$query = "SELECT DISTINCT u.AgencyMainParentID, a.Name AS Agency,u.cid, u.Grade FROM bpas_user_profiles u 
				LEFT JOIN bpas_master_agencymainparent a ON u.AgencyMainParentID = a.AgencyMainParentID
				WHERE u.Grade = 'EX1'";
				$success=0;
		$secretarylist = $this->db->query($query);
		foreach($secretarylist->result() as $secretary) {
			
			$updatesecretary = "UPDATE bpas_master_agencymainparent SET minSecretary = '".$secretary->cid."' WHERE bpas_master_agencymainparent.AgencyMainParentID = '".$secretary->AgencyMainParentID."'";
			if($this->db->query($updatesecretary)){
				
						$updaterole = $this->db->query("UPDATE bpas_user_profiles SET roleId='2' WHERE cid='".$secretary->cid."'");		
				$success=1;
						}
			
		}	
		return $success;
				
			
		
	}
	
	public function getParentAgencyList() {
					
                $query="select distinct name, AgencyParentID from bpas_master_agencyparent";
                $parentagency=$this->db->query($query);
                return $parentagency;
      
           }
				
			public function getAgencyList() {
				
				 $parent=$this->input->post("parent");
            $query="select distinct name, AgencyID from bpas_master_agency WHERE bpas_master_agency.AgencyParentID ='$parent' ";
            $agency_info=$this->db->query($query);
            return $agency_info;
				
			}
		
	
	public function getEmployees($agency){
		
	$query= "SELECT CONCAT(p.FirstName, ' ', p.MiddleName, ' ', p.LastName) AS name, 
		p.cid AS CID, 
		a.name AS Agency, 
		p.EmpNo AS EmpNo,
		d.name AS ParentAgency, 
		m.name AS MainParentAgency, 
		masterposition.Description AS PositionTitle,
		p.DateOfBirth as DOB,
		p.email as Email,
		p.telephone as Telephone,
		p.Grade as Grade,
		p.Gender as Gender,
		p.Mobile
		FROM bpas_user_profiles p 
		LEFT JOIN bpas_master_agencymainparent m ON m.AgencyMainParentID= p.AgencyMainParentID 
		LEFT JOIN bpas_master_agencyparent d ON d.AgencyParentID=p.AgencyParentID 
		LEFT JOIN bpas_master_agency a ON a.AgencyID=p.AgencyID 
		LEFT JOIN masterposition ON masterposition.PositionID = p.PositionTitle
		WHERE p.AgencyID ='".$agency."'";
		$employees = $this->db->query($query);
		return $employees;
		
		
	}
	
	public function listFullAgencies(){
				
		$query="SELECT a.name AS AgencyName, a.AgencyId AS AgencyID, p.name AS AgencyParentName, m.name AS AgencyMainParentName, CONCAT(e.FirstName,' ',e.MiddleName,' ', e.Lastname) as Supervisor from bpas_master_agency a
					LEFT JOIN bpas_master_agencyparent p ON p.AgencyparentID = a.AgencyParentID
					LEFT JOIN bpas_master_agencymainparent m ON m.AgencyMainParentID = a.AgencyMainParentID
					LEFT JOIN bpas_user_profiles e ON e.cid = a.chief";
		$agencydetails=$this->db->query($query);
		return $agencydetails;
		
		
	}
	public function listSingleAgency($agency) {
				
			$query="SELECT a.name AS AgencyName, a.AgencyId AS AgencyID, p.name AS AgencyParentName, m.name AS AgencyMainParentName, CONCAT(e.FirstName,' ',e.MiddleName,' ', e.Lastname) as Supervisor from bpas_master_agency a
					LEFT JOIN bpas_master_agencyparent p ON p.AgencyparentID = a.AgencyParentID
					LEFT JOIN bpas_master_agencymainparent m ON m.AgencyMainParentID = a.AgencyMainParentID
					LEFT JOIN bpas_user_profiles e ON e.cid = a.chief 
					WHERE a.AgencyId='".$agency."'";
		$agencydetails=$this->db->query($query);
		return $agencydetails;
		
	}
	public function listFullParentAgencies(){
				
			$sql="SELECT a.name AS AgencyParentName, a.AgencyParentID as AgencyParentID, m.name AS AgencyMainParentName, CONCAT(e.FirstName,' ',e.MiddleName,' ', e.Lastname) as Supervisor from bpas_master_agencyparent a
					
					LEFT JOIN bpas_master_agencymainparent m ON m.AgencyMainParentID = a.AgencyMainParentID
					LEFT JOIN bpas_user_profiles e ON e.cid = a.director";
			$parentagencies=$this->db->query($sql);
			return $parentagencies;
		
	}
	
	public function listSingleParentAgency($pagency){
			$result = $this->db->query("SELECT a.name AS AgencyParentName, a.AgencyParentID as AgencyParentID, m.name AS AgencyMainParentName, CONCAT(e.FirstName,' ',e.MiddleName,' ', e.Lastname) as Supervisor from bpas_master_agencyparent a
					
					LEFT JOIN bpas_master_agencymainparent m ON m.AgencyMainParentID = a.AgencyMainParentID
					LEFT JOIN bpas_user_profiles e ON e.cid = a.director
					WHERE a.AgencyParentID='".$pagency."'");
					return $result;
		
	}
	public function listSupervisors($agency){
				
			$query = $this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName, ' ', e. Lastname) as name, e.cid AS cid, a.name AS AgencyName FROM bpas_user_profiles e
			LEFT JOIN bpas_master_agency a ON a.AgencyID = e.AgencyID 
			WHERE e.AgencyID='".$agency."' AND (e.Grade='P5' OR e.Grade='P4' OR e.Grade = 'P3' OR e.Grade = 'P2' OR e.Grade = 'P1' OR e.Grade = 'EX1' OR e.Grade = 'EX2' OR e.Grade = 'EX3')");
			return $query;
			
		
	}
	
	public function listParentSupervisors($pagency){
		
		$result=$this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName, ' ', e. Lastname) as name, e.cid AS cid, a.name AS AgencyParentName FROM bpas_user_profiles e
			LEFT JOIN bpas_master_agencyparent a ON a.AgencyParentID = e.AgencyParentID 
			WHERE a.AgencyParentID='".$pagency."' AND (e.Grade = 'P2' OR e.Grade = 'P1' OR e.Grade = 'EX1' OR e.Grade = 'EX2' OR e.Grade = 'EX3')");
			
			return $result;
			
	} 
	public function listofftgMain(){
		
		$result=$this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName, ' ', e. Lastname) as name, e.cid AS cid FROM bpas_user_profiles e
						 WHERE e.roleId='3'");
		return $result;
		
	}
	public function listofftgParent($pagency){
		
		$result=$this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName, ' ', e. Lastname) as name, e.cid AS cid FROM bpas_user_profiles e
						 WHERE e.roleId='4' AND e.AgencyParentID='".$pagency."'");
		return $result;
		
	}
	
	public function listofftgAgency($agency){
		$result=$this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName, ' ', e. Lastname) as name, e.cid AS cid FROM bpas_user_profiles e
						 WHERE e.AgencyID='".$agency."'");
		return $result;
		
	}
	public function getEmployeesKeyword($keyword){
					
				
			$query= "SELECT CONCAT(p.FirstName, ' ', p.MiddleName, ' ', p.LastName) AS name, 
		p.cid AS CID, 
		a.name AS Agency, 
		p.EmpNo AS EmpNo,
		d.name AS ParentAgency, 
		m.name AS MainParentAgency, 
		masterposition.Description AS PositionTitle,
		p.DateOfBirth as DOB,
		p.email as Email,
		p.telephone as Telephone,
		p.Grade as Grade,
		p.Gender as Gender,
		p.Mobile
		FROM bpas_user_profiles p 
		LEFT JOIN bpas_master_agencymainparent m ON m.AgencyMainParentID= p.AgencyMainParentID 
		LEFT JOIN bpas_master_agencyparent d ON d.AgencyParentID=p.AgencyParentID 
		LEFT JOIN bpas_master_agency a ON a.AgencyID=p.AgencyID 
		LEFT JOIN masterposition ON masterposition.PositionID = p.PositionTitle
		WHERE p.cid ='".$keyword."' OR p.FirstName='".$keyword."'";
		$employees = $this->db->query($query);
		return $employees;
		
	}
	
	public function updateSingleSupervisor($supervisor,$agency){
		$previoussupervisor = $this->db->query("SELECT `chief` FROM bpas_master_agency WHERE AgencyId ='".$agency."'");
		foreach($previoussupervisor->result() as $row){
				
			$this->db->query("UPDATE bpas_user_profiles SET `roleId`='5' WHERE `cid`='".$row->chief."' AND `roleId`='4'");
			if($this->db->query("UPDATE bpas_master_agency SET `chief`='".$supervisor."' WHERE AgencyID='".$agency."'")){
				$this->db->query("UPDATE bpas_user_profiles SET `roleId`='4' WHERE `cid`='".$supervisor."' AND `roleId`='5'");
				return true;
				} else return false;
		}
		
		
		
	}
	/* Sonam Tshering edit*/
	public function loadDetailsOnCid($cid){
	 $query= 
	    "SELECT p.FirstName AS FirstName,
	    p.MiddleName AS MiddleName,
		p.LastName As LastName,
		p.cid AS CID, 
		a.name AS Agency, a.AgencyID,
		p.EmpNo AS EmpNo,
		d.name AS Department, d.AgencyParentID,
		m.name AS Ministry, m.AgencyMainParentID,
		masterposition.Description AS PositionTitle,masterposition.PositionID,
		p.DateOfBirth as DOB,
		p.email as Email,
		p.telephone as Telephone,
		p.Grade as Grade,
		p.Gender as Gender,
		p.Mobile as Mobileno
		FROM bpas_user_profiles p 
		LEFT JOIN bpas_master_agencymainparent m ON m.AgencyMainParentID= p.AgencyMainParentID 
		LEFT JOIN bpas_master_agencyparent d ON d.AgencyParentID=p.AgencyParentID 
		LEFT JOIN bpas_master_agency a ON a.AgencyID=p.AgencyID 
		LEFT JOIN masterposition ON masterposition.PositionID = p.PositionTitle
		WHERE p.cid ='".$cid."' ";
		$ciddetails = $this->db->query($query)->row();
		return $ciddetails;
	}

//Sonam Tshering 
	public function Msgselect(){
				
		$query="SELECT a.letter_no AS Letter_No, a.ForwarderId AS ForwarderId, a.ForwarderName AS ForwarderName  from st_message a
					LEFT JOIN st_forward p ON p.Letter_No = a.Letter_No where a.Letter_No ='". $this->input->post('letterNo'). "'";
					
		$message=$this->db->query($query);
		return $message;
		
		
	}

	// public function tracks($letterno="")
	// {
	// 	 // die($letterno);

	
	
 //      // $query= $this->db->get_where('st_dak_details',array('dakLetterNo'=>$letterno))->row();
 //      // return $query;

	//  $query= $this->db->get_where('st_dak_details',array('dakLetterNo'=>$letterno));
 //      if ($query->num_rows() > 0) {
 //            return $query->row();
 //      } else {
 //            return array();
 //      }

      	
    

	// }



	public function tracks($letterno="")
{   
      //$query= $this->db->get_where('st_dak_details',array('dakLetterNo'=>$letterno));
      // $this->db->select('*');
      // $this->db->from('st_dak_details');
      // $this->db->like('dakLetterNo',  $letterno ); //'%l/54%'
      $query= $this->db->get_where('st_dak_details',array('dakLetterNo'=>$letterno));
      // $this->db->SUBSTRING_INDEX('dakLetterNo',  $letterno );
      //$query= $this->db->get();
      if ($query->num_rows() > 0) {
            // return $query->row();

      	foreach($query->result_array() as $row)
      		 {
      		 	if ($row['dakLetterNo']!=$letterno)
      		 	{
      		 		echo ' match not found';
      		 	}

      		 	else {
      		 		return $query->result_array();
      		 	    }
      		 }
            //return $query->result_array();
      //else { 
            //return array();
         //}
    }
}
	public function addtotrack($data="")
 {
	// $query = "SELECT * FROM st_dak_details WHERE letterno="$letterno" ";
	// 	$data['ford']=$this->db->query($query)->result_array();	
    
	$this->db->where('letter_no',$this->input->post('dakLetterNo'));
	// $this->input->post('dakLetterNo');
	// $query1= $this->db->insert('st_forward',$data);
	$query1= $this->db->insert('st_message',$data);
      return $query1;
  }

  public function forward1($data="")
   {
   	$this->db->where('letter_no',$this->input->post('letterNo'));
   	$query2=$this->db->insert('st_message',$data);
   	return $query2;
   }

public function msgtrack($data="")

{
	$query1= $this->db->insert('st_track_details_audit',$data);
      return $query1;
}

      // $query1="insert into st_forward(field names) select (field names) from st_dak_details";
// }

public function name($Rcid)


{
           

            $query=$this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName, ' ',e.Lastname) as RecieverName,  FROM bpas_user_profiles e
						 WHERE e.cid='".$Rcid."'");
		// return $query;

            if ($query->num_rows() > 0)


            {
            return $query->row();

            // echo var_dump(row());
            // return $query->result_array();

      } else {
            return array();
            // echo var_dump(array());
      }

}

       //     $ciddetails = $this->db->query($query)->row();
       //     echo $ciddetails;
		     // return $ciddetails;




// echo $param.'this inside function name';

// $data['RecieverName']=$this->db->get_where('bpas_user_profiles', array('cid' => $Rcid))->row();
// foreach($RecieverName as $Name)



		 //     $query = "SELECT DISTINCT  FirstName,MiddleName,LastName AS Name FROM bpas_user_profiles 
			// 	WHERE cid='".$param."'";
				
		 //        $names = $this->db->query($query);
		 //      foreach($names->result() as $name) {
			
			// $RecieverName = "UPDATE bpas_user_profiles  SET RecieverName = '".$name->Name."' WHERE cid = '".$param."'";

			// return $RecieverName;
			
// {
// $data['userlist']=$this->db->get_where('bpas_user_profiles',array('AgencyMainParentID' =>$this->session->userdata('ministryId'),'cid'=>$Rcid,'AgencyParentID'=>$this->session->userdata('parentID'),'AgencyID'=>$this->session->userdata('agencyID')))->result_array();



// foreach($userlist->result() as $row)

// 		 {
                                              
         
				
// 				$checkquery = $this->db->query("SELECT FirstName,MiddleName,LastName  As Name FROM bpas_user_profiles WHERE `cid` = '".$row->cid."' ");

// 				return $checkquery ;

				



//             }

// // 


function getTrackingDtls($id)
    {
     		$data = array();
            $query = $this->db->query(" SELECT FROM st_forward WHERE dakLetterNo ='".$id."' ");

            if ($query->num_rows() > 0){
                 $data = $query->row_array();
            }
           $query->free_result();
           return $data;    
    }	
 
   
    

  
  
 
 								  
		   


		
 
     

  

 





 

}
