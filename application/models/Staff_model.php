<?php



class Staff_model extends CI_Model {
	
	public function __construct() {
		
		
		
	}
	
	public function can_log_in($mac){
		
			$default="0000";
		    $this->db->where('relatedUserId',$this->input->post('cid'));
		    $this->db->where('status1','approved');
			$this->db->where('password', md5($this->input->post('password')));
			$result = $this->db->get('bpas_logins');

			// if($result->num_rows()!=1){

			// 	echo "<script> alert('You have not registered')</script>";

			// 	return 6;

			// }
			//$cid=$this->input->post('cid');
			//$passwordmd=md5($this->input->post('password'));
			//$query="SELECT * FROM `bpas_logins` WHERE `relatedUserId` = '".$cid."' AND `password`='".$passwordmd."'";
			//$result=$this->db->query($query);
			if($result->num_rows()==1){
				foreach($result->result() as $row){
				if($row->mac1==$mac || $row->mac2==$mac){
					//$this->sessionInitiate();
					return 1;
					
					
				}
				
				
				else if(($row->mac1!=$mac || $row->mac2!=$mac)&&($row->mac1!=$default && $row->mac2!=$default)){
					
					return 2;
					
					
				}
				
				else if($row->mac1==$default && $row->mac2==$default) {
					
					return 3;
					
				}
				
				else if($row->mac1=$default || $row->mac2==$default) {
					
					
					return 4;
				}
				
			}
				
			}else {
				return 5;
			}
			
		}

		
public function can_log_in1($mac){
		
			
		    $this->db->where('relatedUserId',$this->input->post('cid'));
		    $this->db->where('status1','pending');
		   	$result = $this->db->get('bpas_logins');
		   	//$this->db->where('status1', $pending);

			// if($result->num_rows()!=1){

			// 	echo "<script> alert('You have not registered')</script>";

			// 	return 6;

			// }
			//$cid=$this->input->post('cid');
			//$passwordmd=md5($this->input->post('password'));
			//$query="SELECT * FROM `bpas_logins` WHERE `relatedUserId` = '".$cid."' AND `password`='".$passwordmd."'";
			//$result=$this->db->query($query);
			if($result->num_rows()==1){
				foreach($result->result() as $row){
					if($row->mac1==$mac || $row->mac2==$mac){
					//$this->sessionInitiate();
					return 1;
					
					
				}

				
				
				else if(($row->mac1!=$mac || $row->mac2!=$mac)&&($row->mac1!=$default && $row->mac2!=$default)){
					
					return 2;
					
					
				}
				
				else if($row->mac1==$default && $row->mac2==$default) {
					
					return 3;
					
				}
				
				else if($row->mac1=$default || $row->mac2==$default) {
					
					
					return 4;
				}

				 
			
				
			}
				
			}

			else {
				

				return 5;
			}
			
		}

			public function can_log_in2($cid){
		
			
		    // $default="0000";
		    $this->db->where('relatedUserId',$this->input->post('cid'));
		    $this->db->where('event','N');
			$result=$this->db->get('bpas_logins');
			// if($result->num_rows()!=1){

			// 	echo "<script> alert('You have not registered')</script>";

			// 	return 6;

			// }
			//$cid=$this->input->post('cid');
			//$passwordmd=md5($this->input->post('password'));
			//$query="SELECT * FROM `bpas_logins` WHERE `relatedUserId` = '".$cid."' AND `password`='".$passwordmd."'";
			//$result=$this->db->query($query);
			if($result->num_rows()==1){
				// foreach($result->result() as $row){
				// if($row->mac1==$mac || $row->mac2==$mac){
				// 	//$this->sessionInitiate();
					return 1;
					
					
				}

				
				
			// 	else if(($row->mac1!=$mac || $row->mac2!=$mac)&&($row->mac1!=$default && $row->mac2!=$default)){
					
			// 		return 2;
					
					
			// 	}
				
			// 	else if($row->mac1==$default && $row->mac2==$default) {
					
			// 		return 3;
					
			// 	}
				
			// 	else if($row->mac1=$default || $row->mac2==$default) {
					
					
			// 		return 4;
			// 	}
				
			// }
				
			// }

			else {
				

				return 5;
			}
			
		}
	





 public function eventupdate($param1="",$param2="",$param3="",$param4=""){//leki

			// $param1=$event_id;
			// $param2=$eventname;
			// $param3=$date;
			// $param4=$event;

$existing_detail = $this->db->query("UPDATE event_table set eventname='".$param2."',date='".$param3."',event='".$param4."' where event_id='".$param1."'"); 


		 	

				  return $existing_detail;
	

		
	}


		 public function eventdelete($param1=""){

		 	$delete=$this->db->query("DELETE from event_table where event_id='".$param1."'");
		 	
		 echo "Successfully deleted";

}

	public function sessionInitiate() {
		
		
		$query= "SELECT CONCAT(p.FirstName, ' ', p.MiddleName, ' ', p.LastName) AS name, 
		p.cid AS CID, 
		p.agencyID AS AgencyID,
		p.agencyParentID AS ParentID,
		a.name AS Agency, 
		p.roleId ,
		p.email,
		p.telephone,
		p.mobile,
		p.disp_roleID,
		d.name AS ParentAgency,a.div_code, 
		m.name AS MainParentAgency, m.minCode, m.AgencyMainParentID,
		bpas_attendance_log.atdtime, 
		masterposition.Description AS PositionTitle, 
		bpas_attendance_log.status,
		bpas_attendance_log.statusRemarks,
		 bl.profile AS pImage
			FROM bpas_user_profiles p 
		LEFT JOIN bpas_master_agencymainparent m ON m.AgencyMainParentID= p.AgencyMainParentID 
		LEFT JOIN bpas_master_agencyparent d ON d.AgencyParentID=p.AgencyParentID 
		LEFT JOIN bpas_master_agency a ON a.AgencyID=p.AgencyID 
		LEFT JOIN bpas_attendance_log ON bpas_attendance_log.userid=p.cid
		LEFT JOIN masterposition ON masterposition.PositionID = p.PositionTitle
		LEFT JOIN bpas_logins bl ON bl.relatedUserId = p.cid
			WHERE p.cid = '".$this->session->userdata('cid')."' AND bpas_attendance_log.date = '".date("Y/m/d")."'";


				$result = $this->db->query($query);
		
			foreach ($result->result() as $row) {
			$cid = $row->CID;
			$ministryId=$row->AgencyMainParentID;
			$name = $row->name;
			$aid=$row->AgencyID;
			$parentID =$row->ParentID;
			$divName = $row->Agency;
			$deptName = $row->ParentAgency;
			$minName = $row->MainParentAgency;
			$atdtime = $row->atdtime;
			$position = $row->PositionTitle;
			$status = $row->status;
			$statusRemarks = $row->statusRemarks;
			$role = $row->roleId;
			$email=$row->email;
			$telephone =$row->telephone;
			$mobile = $row->mobile;
			$pImage = $row->pImage;
			$disp_roleID=$row->disp_roleID;
			$mincode=$row->minCode;
			$dipcode=$row->div_code;
	} 
		$data = array (
				
			'name' => $name,
			'cid'=>$cid,
			'mincode'=>$mincode,'dipcode'=>$dipcode,
			'agencyID'=>$aid,
			'parentID'=>$parentID,
			'ministryId'=>$ministryId,
			'divName' => $divName,
			'deptName' => $deptName,
			'minName' => $minName,
			'atd_time' =>$atdtime,
			'position' => $position,
			'status' => $status,
			'statusRemarks'=> $statusRemarks,
			'email'=>$email,
			'telephone'=>$telephone,
			'mobile'=>$mobile,
			'role'=>$role,
			'profileImage'=>$pImage,
			'disp_roleID'=>$disp_roleID


				);
				
				$this->session->set_userdata($data);
		
		
	}
	
	public function weekendSession() {
								$query= "SELECT CONCAT(p.FirstName, ' ', p.MiddleName, ' ', p.LastName) AS name, 
		p.cid AS CID, 
		p.AgencyParentID AS ParentID,
		p.AgencyID AS AgencyID,
		p.email,
		p.telephone,
		p.mobile,
		p.disp_roleID,
		a.name AS Agency, 
		d.name AS ParentAgency, a.div_code, 
		m.name AS MainParentAgency,  m.minCode, m.AgencyMainParentID,
		p.roleId,
		p.disp_roleID,
		masterposition.Description AS PositionTitle,
		bl.profile AS pImage
		FROM bpas_user_profiles p 
		LEFT JOIN bpas_master_agencymainparent m ON m.AgencyMainParentID= p.AgencyMainParentID 
		LEFT JOIN bpas_master_agencyparent d ON d.AgencyParentID=p.AgencyParentID 
		LEFT JOIN bpas_master_agency a ON a.AgencyID=p.AgencyID 
		LEFT JOIN masterposition ON masterposition.PositionID = p.PositionTitle
		LEFT JOIN bpas_logins bl ON bl.relatedUserId = p.cid
		
			WHERE p.cid = '".$this->session->userdata('cid')."'";

				$result = $this->db->query($query);
		
			foreach ($result->result() as $row) {
			$name = $row->name;
			$cid=$row->CID;
			$ministryId=$row->AgencyMainParentID;
			$parentID=$row->ParentID;
			$aid = $row->AgencyID;
			$divName = $row->Agency;
			$deptName = $row->ParentAgency;
			$minName = $row->MainParentAgency;
			$position = $row->PositionTitle;
			$role = $row->roleId;
			$email=$row->email;
			$telephone =$row->telephone;
			$mobile = $row->mobile;
			$status = "Holiday";
			$pImage = $row->pImage;
			$disp_roleID=$row->disp_roleID;
			$mincode=$row->minCode;
			$dipcode=$row->div_code;

			
		} 
		$data = array (
				
			'name' => $name,
			'cid'=>$cid,
			'mincode'=>$mincode,'dipcode'=>$dipcode,
			'ministryId'=>$ministryId,
			'parentID'=>$parentID,
			'agencyID'=>$aid,			
			'divName' => $divName,
			'deptName' => $deptName,
			'minName' => $minName,
			'position' => $position,
			'email'=>$email,
			'telephone'=>$telephone,
			'mobile'=>$mobile,
			'role'=>$role,
			'status' => $status,
			'profileImage'=>$pImage,
			'disp_roleID'=>$disp_roleID
				);
				
				$this->session->set_userdata($data);
						
					
				
			
		
	}
	
	
	public function checkMac($mac){
		
		
		
	}
	
	
	public function getSupervisor(){
		
		
		if($this->session->userdata('role')=='4'||$this->session->userdata('role')=='9'){
			$query = "SELECT bpas_user_profiles.cid, CONCAT(bpas_user_profiles.FirstName,' ',bpas_user_profiles.MiddleName,' ', bpas_user_profiles.LastName) AS name,
			masterposition.Description AS PositionTitle, 
			bpas_master_agencyparent.name AS Agency, 
			bpas_user_profiles.email, bpas_user_profiles.telephone 
			FROM bpas_master_agencyparent 
			LEFT JOIN bpas_user_profiles ON bpas_user_profiles.cid = bpas_master_agencyparent.director 
			LEFT JOIN masterposition ON masterposition.PositionID = bpas_user_profiles.PositionTitle 
			WHERE bpas_master_agencyparent.AgencyParentID ='".$this->session->userdata('parentID')."'";
		} elseif($this->session->userdata('role')=='3'||$this->session->userdata('role')=='8'){
			$query = "SELECT bpas_user_profiles.cid, CONCAT(bpas_user_profiles.FirstName,' ',bpas_user_profiles.MiddleName,' ', bpas_user_profiles.LastName) AS name,
			masterposition.Description AS PositionTitle, 
			bpas_master_agencymainparent.name AS Agency, 
			bpas_user_profiles.email, bpas_user_profiles.telephone 
			FROM bpas_master_agencymainparent 
			LEFT JOIN bpas_user_profiles ON bpas_user_profiles.cid = bpas_master_agencymainparent.minSecretary 
			LEFT JOIN masterposition ON masterposition.PositionID = bpas_user_profiles.PositionTitle 
			WHERE bpas_master_agencymainparent.name ='".$this->session->userdata('minName')."'";
			
		} else {
			$query = "SELECT bpas_user_profiles.cid, CONCAT(bpas_user_profiles.FirstName,' ',bpas_user_profiles.MiddleName,' ', bpas_user_profiles.LastName) AS name,
		masterposition.Description AS PositionTitle, bpas_master_agency.name AS Agency, 
		bpas_user_profiles.email, bpas_user_profiles.telephone FROM bpas_master_agency 
		LEFT JOIN bpas_user_profiles ON bpas_user_profiles.cid = bpas_master_agency.chief 
		LEFT JOIN masterposition ON masterposition.PositionID = bpas_user_profiles.PositionTitle 
		WHERE bpas_master_agency.AgencyID ='".$this->session->userdata('agencyID')."'";
		}
		
		
		$result = $this->db->query($query);
		return $result;
		
	}
	
	public function registermacone($mac){
		
		
		if($this->checkUniqueMac($mac)){
			$cid=$this->session->userdata('cid');
			if($this->db->query("UPDATE bpas_logins SET mac1='".$mac."' WHERE `relatedUserId`='".$cid."'")){
				
				return true;
			} else return false;
		} else return false;
		
		
		
	}
	
	public function registermactwo($mac){
		
		if($this->checkUniqueMac($mac)){
			$cid=$this->session->userdata('cid');
			if($this->db->query("UPDATE bpas_logins SET mac2='".$mac."' WHERE `relatedUserId`='".$cid."'")){
				
				return true;
			} else return false;
		} else return false;
		
		
		
	}
	
	public function checkUniqueMac($mac){
		
		
		$query=$this->db->query("SELECT COUNT(*) AS count FROM 	`bpas_logins` WHERE `mac1`='".$mac."' OR `mac2`='.".$mac."'");
		
		foreach($query->result() as $row){
			$count=$row->count;;
			if($count>0){
				return false;
			} 
			else {
				return true; 
			}
		} 
			
		
		
	}
	// public function register($param1=""){

		
	// 	$query=$this->db->query("SELECT relatedUserId from bpas_logins WHERE relatedUserId='".$param1."'")->row()->relatedUserId;
		

	// 	if($query==$param1){

	// 		return $query;
	// 	}

	// 	}

		
		
	



	
		public function import(){
			
			
					
			$selectsql = "SELECT e.FirstName, e.MiddleName, e.LastName, e.EmpNo, e.CityzenshipID, e.AgencyID, a.AgencyParentID, a.AgencyMainParentID, e.Grade, e.Sex, e.DateOfBirth, e.EmployeeTypeIndex, e.EmployeeStatusIndex, e.PositionID, e.EmailID  FROM temp e
					LEFT JOIN masteragency a ON a.AgencyID = e.AgencyID";
			$selectresult=$this->db->query($selectsql);
			
			
			foreach($selectresult->result() as $row){
				
				$checkquery = $this->db->query("SELECT CID FROM bpas_user_profiles WHERE `CID` = '".$row->CityzenshipID."'");
				
				if($checkquery->num_rows()>0) {
					echo "Duplicate Entry".$row->CityzenshipID;		
															}
				
				else {
			$finalquery = "INSERT INTO bpas_user_profiles (FirstName, MiddleName, LastName, EmpNo, CID, AgencyID, AgencyParentID, AgencyMainParentID, Grade, Gender, DateOfBirth, EmployeeTypeIndex, EmployeeStatus, PositionTitle, Email) 
			VALUES ('".$row->FirstName."', '".$row->MiddleName."', '".$row->LastName."', '".$row->EmpNo."', '".$row->CityzenshipID."', '".$row->AgencyID."', '".$row->AgencyParentID."', '".$row->AgencyMainParentID."', '".$row->Grade."', '".$row->Sex."', '".$row->DateOfBirth."', '".$row->EmployeeTypeIndex."', '".$row->EmployeeStatusIndex."', '".$row->PositionID."', '".$row->EmailID."')";
			/*." WHERE NOT EXISTS (
    		SELECT CID FROM bpas_user_profiles WHERE `CID` = '".$row->CityzenshipID."');";*/
				
				}
			if($this->db->query($finalquery)) {
							
				$logininsertquery = "INSERT INTO bpas_logins (relatedUserId, password, mac1, mac2, userType) VALUES ('".$row->CityzenshipID."', '".md5($row->CityzenshipID)."', '0000', '0000', '1')";
				
				$this->db->query($logininsertquery);
			}	
				
			
			}
			
		}
		
		public function addEmployee($cid) {
					
				
			
		}
		
		
		public function editFullEmployee($cid){
						
					$query = "SELECT * from bpas_user_profiles
					
					WHERE bpas_user_profiles.cid='".$cid."'";
					$employee=$this->db->query($query);
					return $employee;
					
				
			
		}

		public function editFullEmployee1($cid){
						
					$query = "SELECT * from bpas_user_profiles WHERE bpas_user_profiles.cid='".$cid."' ";
					$employee=$this->db->query($query);
					return $employee;
					
				
			
		}
	
	     public function updateEmployee($cid) {
	    	
			$query = "UPDATE bpas_user_profiles SET `FirstName`='".$this->input->post('fname')."', `MiddleName`='".$this->input->post('mname')."', `LastName`='".$this->input->post('lname')."', `AgencyID`='".$this->input->post('agencyid')."',
				`roleId`='".$this->input->post('roleId')."',
			 `AgencyParentID`='".$this->input->post('agencyparentid')."', `AgencyMainParentID`='".$this->input->post('agencymainparentid')."'
			 WHERE `cid`='".$cid."';";
			
			if($this->db->query($query)){
				
				return true;
			} else return false;
			
			
	    }
	    
	    
	    
	    
		
		public function getSadmin() {
						
				$sadmin=$this->db->query("SELECT CONCAT(p.FirstName, ' ', p.LastName) AS Name,p.cid, r.roleType, p.Grade,a.name AS Agency,p.email, ap.name AS ParentAgency 
				FROM `bpas_user_profiles` p 
				LEFT JOIN bpas_master_roles r ON p.roleId = r.roleID 
				LEFT JOIN bpas_master_agency a ON p.AgencyID = a.AgencyID 
				LEFT JOIN bpas_master_agencyparent ap ON p.AgencyParentID = ap.AgencyParentID WHERE p.roleId='1'");
				
				return $sadmin;
				
			
		}
	
	public function getAdmin() {
						
				$sadmin=$this->db->query("SELECT CONCAT(p.FirstName, ' ', p.LastName) AS Name,p.cid, r.roleType, p.Grade,a.name AS Agency,p.email, ap.name AS ParentAgency 
				FROM `bpas_user_profiles` p 
				LEFT JOIN bpas_master_roles r ON p.roleId = r.roleID 
				LEFT JOIN bpas_master_agency a ON p.AgencyID = a.AgencyID 
				LEFT JOIN bpas_master_agencyparent ap ON p.AgencyParentID = ap.AgencyParentID WHERE p.roleId='2'");
				
				return $sadmin;
				
			
		}
	public function getAgencyhead() {
						
				$sadmin=$this->db->query("SELECT CONCAT(p.FirstName, ' ', p.LastName) AS Name,p.cid, r.roleType, p.Grade,a.name AS Agency,p.email, ap.name AS ParentAgency 
				FROM `bpas_user_profiles` p 
				LEFT JOIN bpas_master_roles r ON p.roleId = r.roleID 
				LEFT JOIN bpas_master_agency a ON p.AgencyID = a.AgencyID 
				LEFT JOIN bpas_master_agencyparent ap ON p.AgencyParentID = ap.AgencyParentID WHERE p.roleId='3'");
				
				return $sadmin;
				
			
		}
	public function getDivisionhead() {
						
				$sadmin=$this->db->query("SELECT CONCAT(p.FirstName, ' ', p.LastName) AS Name,p.cid, r.roleType, p.Grade,a.name AS Agency,p.email, ap.name AS ParentAgency 
				FROM `bpas_user_profiles` p 
				LEFT JOIN bpas_master_roles r ON p.roleId = r.roleID 
				LEFT JOIN bpas_master_agency a ON p.AgencyID = a.AgencyID 
				LEFT JOIN bpas_master_agencyparent ap ON p.AgencyParentID = ap.AgencyParentID WHERE p.roleId='4'");
			// s On r.roleID=disp_roleID	
				return $sadmin;
				
			
		}
	/* Sonam Tshering */
	public function getDispatcher()
	{
		$dispatcher=$this->db->query("SELECT CONCAT(p.FirstName, ' ', p.LastName) AS Name,
			p.cid AS Cid,
			 r.roleType AS Role, 
			 p.Grade As Grade,
			 a.name AS Agency,
			 p.email As Eamil,
			 ap.name AS ParentAgency 
			FROM `bpas_user_profiles` p 
			LEFT JOIN bpas_master_roles r ON p.roleId = r.roleID 
			LEFT JOIN st_dispatch_role s On r.roleID= s.disp_roleID
			LEFT JOIN bpas_master_agency a ON p.AgencyID = a.AgencyID 
			LEFT JOIN bpas_master_agencyparent ap ON p.AgencyParentID = ap.AgencyParentID WHERE p.disp_roleID='0'");
				
			return $dispatcher; 

	}
	public function getprofile($cid){
		
		$profile = $this->db->query("SELECT CONCAT(p.FirstName, ' ',p.MiddleName, ' ', p.LastName) AS Name, bl.profile, p.cid, p.occupation, p.organization, p.office_address, p.contact_address, p.college, p.master, p.phD, p.other, p.research_paper, p.journal, p.book, p.seminar, p.training, p.workshop, p.DateOfBirth,p.Grade, p.email,p.telephone,p.Mobile,p.roleId,p.EmpNo,a.name AS Agency,ap.name AS ParentAgency,amp.name AS MainParentAgency, mp.Description AS PositionTitle FROM bpas_user_profiles p 
									LEFT JOIN bpas_logins bl ON bl.relatedUserId=p.cid
									LEFT JOIN bpas_master_agency a ON a.AgencyID=p.AgencyID
									LEFT JOIN bpas_master_agencyparent ap ON ap.AgencyParentID=p.AgencyParentID
									LEFT JOIN bpas_master_agencymainparent amp ON amp.AgencyMainParentID=p.AgencyMainParentID
									LEFT JOIN masterposition mp ON mp.PositionID = p.PositionTitle 
									WHERE p.cid='".$cid."'");
									
		return $profile;
		
	}

	public function getprofilei($cid){
		
		$profile = $this->db->query("SELECT CONCAT(p.FirstName, ' ',p.MiddleName, ' ', p.LastName) AS Name, bl.profile, p.cid, p.DateOfBirth,p.Grade, p.email,p.telephone,p.Mobile,p.roleId,p.EmpNo,a.name AS Agency,ap.name AS ParentAgency,amp.name AS MainParentAgency, mp.Description AS PositionTitle FROM bpas_user_profiles p 
									LEFT JOIN bpas_logins bl ON bl.relatedUserId=p.cid
									LEFT JOIN bpas_master_agency a ON a.AgencyID=p.AgencyID
									LEFT JOIN bpas_master_agencyparent ap ON ap.AgencyParentID=p.AgencyParentID
									LEFT JOIN bpas_master_agencymainparent amp ON amp.AgencyMainParentID=p.AgencyMainParentID
									LEFT JOIN masterposition mp ON mp.PositionID = p.PositionTitle 
									WHERE p.cid='".$cid."'");
									
		return $profile;
		
	}

	public function getprofile1($cid){

		$profile = $this->db->query("SELECT CONCAT(p.FirstName, ' ',p.MiddleName, ' ', p.LastName) AS Name, bl.profile, p.cid, p.DateOfBirth,p.Grade, p.email,p.telephone,p.Mobile,p.roleId,p.EmpNo,a.name AS Agency,ap.name AS ParentAgency,amp.name AS MainParentAgency, mp.Description AS PositionTitle FROM bpas_user_profiles p 
									LEFT JOIN bpas_logins bl ON bl.relatedUserId=p.cid
									LEFT JOIN bpas_master_agency a ON a.AgencyID=p.AgencyID
									LEFT JOIN bpas_master_agencyparent ap ON ap.AgencyParentID=p.AgencyParentID
									LEFT JOIN bpas_master_agencymainparent amp ON amp.AgencyMainParentID=p.AgencyMainParentID
									LEFT JOIN masterposition mp ON mp.PositionID = p.PositionTitle 
									WHERE p.FirstName='".$cid."'");
									
		return $profile;
		
		// $profile= $this->db->query("SELECT FirstName FROM bpas_user_profiles where FirstName='".$name."' ")->row()->FirstName;

		// die($profile);
		// // return $profile;
		
	}
	
	public function updateContact($email,$occupation,$organization){
		$cid=$this->session->userdata('cid');
			if($this->db->query("UPDATE bpas_user_profiles SET email='".$email."', occupation='".$occupation."', organization='".$organization."' WHERE cid='".$cid."'")) {
				
				return true;
			} 
			else return false;
			
		
	}
	public function updateContact1($office_address,$contact_address,$college){
		$cid=$this->session->userdata('cid');
			if($this->db->query("UPDATE bpas_user_profiles SET office_address='".$office_address."', contact_address='".$contact_address."', college='".$college."' WHERE cid='".$cid."'")) {
				
				return true;
			} 
			else return false;
			
		
	}
	public function updateContact2($master,$phD,$other){
		$cid=$this->session->userdata('cid');
			if($this->db->query("UPDATE bpas_user_profiles SET master='".$master."', phD='".$phD."', other='".$other."' WHERE cid='".$cid."'")) {
				
				return true;
			} 
			else return false;
			
		
	}
	public function updateContact3($research_paper,$journal,$book){
		$cid=$this->session->userdata('cid');
			if($this->db->query("UPDATE bpas_user_profiles SET research_paper='".$research_paper."', journal='".$journal."', book='".$book."' WHERE cid='".$cid."'")) {
				
				return true;
			} 
			else return false;
			
		
	}
	public function updateContact4($seminar,$training,$workshop){
		$cid=$this->session->userdata('cid');
			if($this->db->query("UPDATE bpas_user_profiles SET seminar='".$seminar."', training='".$training."', workshop='".$workshop."' WHERE cid='".$cid."'")) {
				
				return true;
			} 
			else return false;
			
		
	}
	
	public function changepass($new){
		$cid=$this->session->userdata('cid');
		$encrypted=md5($new);
			if($this->db->query("UPDATE bpas_logins SET password='".$encrypted."' WHERE relatedUserId='".$cid."'")) {
					return true;
				
			} else return false;
		
	}
	public function checkold($old){
			$cid=$this->session->userdata('cid');
			$encryptedold=md5($old);
			$current =$this->db->query("SELECT password FROM bpas_logins WHERE relatedUserId='".$cid."'");
			foreach($current->result() as $row){
				if($encryptedold==$row->password) {
						return true;
					
				} else return false;
			}
		
	}
	
	public function updateprofilepic($pic){
		
		$cid=$this->session->userdata('cid');
		if($this->db->query("UPDATE bpas_logins SET profile='".$pic."' WHERE relatedUserId='".$cid."'")){
			return true;
		} else return false;
		
		
	}
	/* Sonam Tshering*/

	public function update_user($cid,$data)
	{
 //$this->db->select('*');
 //$this->db->from('bpas_user_profiles');  
 $this->db->where('cid', $cid);
 $this->db->update('bpas_user_profiles',$data);
 /* function update_student_id1($id,$data){
$this->db->where('student_id', $id);
$this->db->update('students', $data);
}*/
}
	//}

}
