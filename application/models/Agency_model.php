<?php



class Agency_model extends CI_Model {
	
	
	public function listDivisions() {
		
		
		$query = "SELECT batch.name AS Agency FROM batch 
LEFT JOIN department ON department.department_ID = batch.department_ID 
		WHERE department.name = '".$this->session->userdata('deptName')."'";
		
		$result = $this->db->query($query);
		return $result;
		
	}
	
	
	
	public function updateMainParentAgency() {
		
		
		$query ="SELECT distinct t.departmentParent_ID, a.name FROM user_profiles t 
				LEFT JOIN masteragency a on a.batch_ID = t.departmentParent_ID
				WHERE t.departmentParent_ID <> '0' ";
				
		$selectresult=$this->db->query($query);
			
			
			foreach($selectresult->result() as $row){
				
				$checkquery = $this->db->query("SELECT departmentParent_ID FROM departmentParent WHERE `departmentParent_ID` = '".$row->departmentParent_ID."'");
				
				if($checkquery->num_rows()>0) {
					echo "Duplicate Entry".$row->departmentParent_ID;		
															} else {
					$insertquery = "INSERT INTO departmentParent (departmentParent_ID, name) VALUES ('".$row->departmentParent_ID."', '".$row->name."')";												
																	
					if($this->db->query($insertquery)) {
									
							return true;	
							
						
					} else return false;								
																
					}
				
			}
		
	}
	
	
	public function updateParentAgency() {
		
		
				$query= "SELECT distinct t.department_ID, a.name, t.departmentParent_ID FROM user_profiles t 
						LEFT JOIN masteragency a on a.batch_ID = t.department_ID
						WHERE t.department_ID <> '0' ";
						
				$selectresult=$this->db->query($query);
			
			
			foreach($selectresult->result() as $row){
				
				$checkquery = $this->db->query("SELECT department_ID FROM department WHERE `department_ID` = '".$row->department_ID."'");
				
				if($checkquery->num_rows()>0) {
					echo "Duplicate Entry".$row->department_ID;		
															} else {
					$insertquery = "INSERT INTO department (department_ID, name, departmentParent_ID) VALUES ('".$row->department_ID."', '".$row->name."', '".$row->departmentParent_ID."')";												
					
					$this->db->query($insertquery);												
					/*if($this->db->query($insertquery)) {
									
							return true;	
							
						
					} else {return false;}*/					
																
					}
				
			}
	}
	
	
	public function updateAgency() {
		
				$query = "SELECT distinct t.batch_ID, a.name,t.department_ID, t.departmentParent_ID FROM user_profiles t 
						LEFT JOIN masteragency a on a.batch_ID = t.batch_ID
						WHERE t.departmentParent_ID <> '0'";
						
				$selectresult=$this->db->query($query);
					
			foreach($selectresult->result() as $row){
				
				$checkquery = $this->db->query("SELECT batch_ID FROM batch WHERE `batch_ID` = '".$row->batch_ID."'");
				
				if($checkquery->num_rows()>0) {
					echo "Duplicate Entry".$row->batch_ID;		
															} else {
					$insertquery = "INSERT INTO batch (batch_ID, name, department_ID, departmentParent_ID) VALUES ('".$row->batch_ID."', '".$row->name."', '".$row->department_ID."', '".$row->departmentParent_ID."')";												
																	
					$this->db->query($insertquery);							
																
					}
				
			}
				
						
	}
	
	
	
	public function updateSupervisorAgency() {
		
		$query = "SELECT DISTINCT u.batch_ID, a.Name AS Agency,u.cid, u.Grade FROM user_profiles u 
				LEFT JOIN batch a ON u.batch_ID = a.batch_ID
				WHERE u.Grade = 'P1'";
				$success=0;
		$chieflist = $this->db->query($query);
		foreach($chieflist->result() as $chief) {
			
			$updatechief = "UPDATE batch SET chief = '".$chief->cid."' WHERE batch.batch_ID = '".$chief->batch_ID."'";
			if($this->db->query($updatechief)){
		
						$updaterole = $this->db->query("UPDATE user_profiles SET roleId='4' WHERE cid='".$chief->cid."'");		
				
			
			}
			$success=1;
		}
		return $success;
		
	}
	
	public function updateSupervisorParentAgency() {
		
		
		$query = "SELECT DISTINCT u.department_ID, a.Name AS Agency,u.cid, u.Grade FROM user_profiles u 
				LEFT JOIN department a ON u.department_ID = a.department_ID
				WHERE u.Grade = 'EX3' OR u.Grade='EX2'";
				$success=0;
		$directorlist = $this->db->query($query);
		foreach($directorlist->result() as $director) {
			
			$updatedirector = "UPDATE department SET director = '".$director->cid."' WHERE department.department_ID = '".$director->department_ID."'";
			if($this->db->query($updatedirector)){
						$updaterole = $this->db->query("UPDATE user_profiles SET roleId='3' WHERE cid='".$director->cid."'");		
				$success=1;
			}
			
		}
		return $success;
		
	}
	
	public function updateSupervisorMainParentAgency() {
					
				$query = "SELECT DISTINCT u.departmentParent_ID, a.Name AS Agency,u.cid, u.Grade FROM user_profiles u 
				LEFT JOIN departmentParent a ON u.departmentParent_ID = a.departmentParent_ID
				WHERE u.Grade = 'EX1'";
				$success=0;
		$secretarylist = $this->db->query($query);
		foreach($secretarylist->result() as $secretary) {
			
			$updatesecretary = "UPDATE departmentParent SET minSecretary = '".$secretary->cid."' WHERE departmentParent.departmentParent_ID = '".$secretary->departmentParent_ID."'";
			if($this->db->query($updatesecretary)){
				
						$updaterole = $this->db->query("UPDATE user_profiles SET roleId='2' WHERE cid='".$secretary->cid."'");		
				$success=1;
						}
			
		}	
		return $success;
				
			
		
	}
	
	public function yearofgraduation() {//Tamang (Pulling the dropdown lists for year of graduation and department)
					
                $query="select distinct name, department_ID from department";
                $parentagency=$this->db->query($query);
                return $parentagency;
      
           }
				
			public function getAgencyList() {
				
				 $parent=$this->input->post("parent");
            $query="select distinct name, batch_ID from batch WHERE batch.department_ID ='$parent' ";
            $agency_info=$this->db->query($query);
            return $agency_info;
				
			}
		
		
	
	public function getEmployees($agency){
		
	$query= "SELECT CONCAT(p.FirstName, ' ', p.MiddleName, ' ', p.LastName) AS name, 
		p.cid,
		p.batch_ID, 
		a.name AS Agency, 
		
		d.name AS ParentAgency, 
		m.name AS MainParentAgency, 
		
		
		p.email as Email,
		p.telephone as Telephone,
		
		p.gender,
		p.profileId,
		p.Mobile
		FROM user_profiles p 
		LEFT JOIN departmentParent m ON m.departmentParent_ID= p.departmentParent_ID 
		LEFT JOIN department d ON d.department_ID=p.department_ID 
		LEFT JOIN batch a ON a.batch_ID=p.batch_ID 
		
		WHERE p.batch_ID ='".$agency."'";
		$employees = $this->db->query($query);
		return $employees;
		
		
	}
	public function getEmployees1($agency){
		
	$query= "SELECT  
		 
		a.name AS Agency,
		a.batch_ID
		
		FROM batch a 
		
		WHERE a.batch_ID ='".$agency."'";
		$employees = $this->db->query($query);
		return $employees;
		
		
	}

	public function getEmployees2($agency){
		
	$query= "SELECT  
		 
		d.name AS ParentAgency,
		d.department_ID
		
		FROM department d 
		
		WHERE d.department_ID ='".$agency."'";
		$employees = $this->db->query($query);
		return $employees;
		
		
	}
	public function listFullAgencies(){
				
		$query="SELECT a.name AS AgencyName, a.batch_ID AS batch_ID, p.name AS AgencyParentName, m.name AS AgencyMainParentName, CONCAT(e.FirstName,' ',e.MiddleName,' ', e.Lastname) as Supervisor from batch a
					LEFT JOIN department p ON p.department_ID = a.department_ID
					LEFT JOIN departmentParent m ON m.departmentParent_ID = a.departmentParent_ID
					LEFT JOIN user_profiles e ON e.cid = a.chief";
		$agencydetails=$this->db->query($query);
		return $agencydetails;
		
		
	}
	public function listSingleAgency($agency) {
				
			$query="SELECT a.name AS AgencyName, a.batch_ID AS batch_ID, p.name AS AgencyParentName, m.name AS AgencyMainParentName, CONCAT(e.FirstName,' ',e.MiddleName,' ', e.Lastname) as Supervisor from batch a
					LEFT JOIN department p ON p.department_ID = a.department_ID
					LEFT JOIN batch m ON m.departmentParent_ID = a.departmentParent_ID
					LEFT JOIN user_profiles e ON e.cid = a.chief 
					WHERE a.batch_ID='".$agency."'";
		$agencydetails=$this->db->query($query);
		return $agencydetails;
		
	}
	public function listFullParentAgencies(){
				
			$sql="SELECT a.name AS AgencyParentName, a.department_ID as department_ID, m.name AS AgencyMainParentName, CONCAT(e.FirstName,' ',e.MiddleName,' ', e.Lastname) as Supervisor from department a
					
					LEFT JOIN departmentParent m ON m.departmentParent_ID = a.departmentParent_ID
					LEFT JOIN user_profiles e ON e.cid = a.director";
			$parentagencies=$this->db->query($sql);
			return $parentagencies;
		
	}
	
	public function listSingleParentAgency($pagency){
			$result = $this->db->query("SELECT a.name AS AgencyParentName, a.department_ID as department_ID, m.name AS AgencyMainParentName, CONCAT(e.FirstName,' ',e.MiddleName,' ', e.Lastname) as Supervisor from department a
					
					LEFT JOIN departmentParent m ON m.departmentParent_ID = a.departmentParent_ID
					LEFT JOIN user_profiles e ON e.cid = a.director
					WHERE a.department_ID='".$pagency."'");
					return $result;
		
	}
	public function listSupervisors($agency){
				
			$query = $this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName, ' ', e. Lastname) as name, e.cid AS cid, a.name AS AgencyName FROM user_profiles e
			LEFT JOIN batch a ON a.batch_ID = e.batch_ID 
			WHERE e.batch_ID='".$agency."' AND (e.Grade='P5' OR e.Grade='P4' OR e.Grade = 'P3' OR e.Grade = 'P2' OR e.Grade = 'P1' OR e.Grade = 'EX1' OR e.Grade = 'EX2' OR e.Grade = 'EX3')");
			return $query;
			
		
	}
	
	public function listParentSupervisors($pagency){
		
		$result=$this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName, ' ', e. Lastname) as name, e.cid AS cid, a.name AS AgencyParentName FROM user_profiles e
			LEFT JOIN department a ON a.department_ID = e.department_ID 
			WHERE a.department_ID='".$pagency."' AND (e.Grade = 'P2' OR e.Grade = 'P1' OR e.Grade = 'EX1' OR e.Grade = 'EX2' OR e.Grade = 'EX3')");
			
			return $result;
			
	} 
	public function listofftgMain(){
		
		$result=$this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName, ' ', e. Lastname) as name, e.cid AS cid FROM user_profiles e
						 WHERE e.roleId='3'");
		return $result;
		
	}
	public function listofftgParent($pagency){
		
		$result=$this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName, ' ', e. Lastname) as name, e.cid AS cid FROM user_profiles e
						 WHERE e.roleId='4' AND e.department_ID='".$pagency."'");
		return $result;
		
	}
	
	public function listofftgAgency($agency){
		$result=$this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName, ' ', e. Lastname) as name, e.cid AS cid FROM user_profiles e
						 WHERE e.batch_ID='".$agency."'");
		return $result;
		
	}
	public function getEmployeesKeyword($keyword){
					
				
			$query= "SELECT CONCAT(p.FirstName, ' ', p.MiddleName, ' ', p.LastName) AS name, 
		p.cid,
		p.batch_ID, 
		a.name AS Agency, 
		
		d.name AS ParentAgency, 
		m.name AS MainParentAgency, 
		
		
		p.email as Email,
		p.telephone as Telephone,
		
		p.gender,
		p.profileId,
		p.Mobile
		FROM user_profiles p 
		LEFT JOIN departmentParent m ON m.departmentParent_ID= p.departmentParent_ID 
		LEFT JOIN department d ON d.department_ID=p.department_ID 
		LEFT JOIN batch a ON a.batch_ID=p.batch_ID 
		
		WHERE p.cid ='".$keyword."'";
		$employees = $this->db->query($query);
		return $employees;
		
	}
	

	
	public function updateSingleSupervisor($supervisor,$agency){
		$previoussupervisor = $this->db->query("SELECT `chief` FROM batch WHERE batch_ID ='".$agency."'");
		foreach($previoussupervisor->result() as $row){
				
			$this->db->query("UPDATE user_profiles SET `roleId`='5' WHERE `cid`='".$row->chief."' AND `roleId`='4'");
			if($this->db->query("UPDATE batch SET `chief`='".$supervisor."' WHERE batch_ID='".$agency."'")){
				$this->db->query("UPDATE user_profiles SET `roleId`='4' WHERE `cid`='".$supervisor."' AND `roleId`='5'");
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
		a.name AS Agency, a.batch_ID,
		
		d.name AS Department, d.department_ID,
		m.departmentParent_ID,
		
		p.email as Email,
		p.telephone as Telephone,
		
		p.Gender as Gender,
		p.Mobile as Mobileno
		FROM user_profiles p 
		LEFT JOIN departmentParent m ON m.departmentParent_ID= p.departmentParent_ID 
		LEFT JOIN department d ON d.department_ID=p.department_ID 
		LEFT JOIN batch a ON a.batch_ID=p.batch_ID 
		
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
      		 		echo ' match  found';
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
           

            $query=$this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName, ' ',e.Lastname) as RecieverName,  FROM user_profiles e
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

// $data['RecieverName']=$this->db->get_where('user_profiles', array('cid' => $Rcid))->row();
// foreach($RecieverName as $Name)



		 //     $query = "SELECT DISTINCT  FirstName,MiddleName,LastName AS Name FROM user_profiles 
			// 	WHERE cid='".$param."'";
				
		 //        $names = $this->db->query($query);
		 //      foreach($names->result() as $name) {
			
			// $RecieverName = "UPDATE user_profiles  SET RecieverName = '".$name->Name."' WHERE cid = '".$param."'";

			// return $RecieverName;
			
// {
// $data['userlist']=$this->db->get_where('user_profiles',array('departmentParent_ID' =>$this->session->userdata('ministryId'),'cid'=>$Rcid,'department_ID'=>$this->session->userdata('parentID'),'batch_ID'=>$this->session->userdata('batch_ID')))->result_array();



// foreach($userlist->result() as $row)

// 		 {
                                              
         
				
// 				$checkquery = $this->db->query("SELECT FirstName,MiddleName,LastName  As Name FROM user_profiles WHERE `cid` = '".$row->cid."' ");

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
