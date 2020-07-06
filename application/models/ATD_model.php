<?php



class ATD_model extends CI_Model {
	
	
	
	
	public function checkattendance($date, $cid) {
		
		$this->db->where('date',$date);
		$this->db->where('userid',$cid);
		
		$result = $this->db->get('bpas_attendance_log');
		
		if($result->num_rows()>=1){
			
			
			foreach($result->result() as $row){
				$atdtime=$row->atdtime;//manipulate here on timing by Sonam Tshering
				$data = array (
				
				'atd_time' => $atdtime
				
				
				);
				
				$this->session->set_userdata($data);
			}
			return true;
			
		} else {
			
			return false;
			
		}
		
		
		
	}
	
	public function checkloggedin(){
		
		if($this->session->userdata('logged_in')!='1'){
			redirect('ATD/login');
		}
	}
	
	// public function dailyAttendance() {
		
	// 	$divisionSelected = $this->session->userdata('divFeed');
	// 	   //echo "$this->session->userdata('divFeed')";
	// 	if($divisionSelected==null){
			
	// 		$divisionSelected=$this->session->userdata('divName');
	// 		$data = array (
	// 		'divFeed' => $divisionSelected
	// 		);
	// 		$this->session->set_userdata($data);
	// 		$query="SELECT 
	
	// 	CONCAT(user_profiles.FirstName,' ',user_profiles.MiddleName,' ', user_profiles.LastName) AS name, 
	// 	batch.name AS Agency,
	// 	bpas_attendance_log.atdtime,
	// 	bpas_attendance_log.status,
	// 	bpas_attendance_log.statusRemarks,
	// 	user_profiles.telephone
	// 	FROM user_profiles
	// 	LEFT JOIN bpas_attendance_log ON bpas_attendance_log.userid=user_profiles.cid  AND bpas_attendance_log.date='".date('Y/m/d')."'
	// 	LEFT JOIN batch ON batch.batch_ID=user_profiles.batch_ID
	// 	WHERE batch.name='".$this->session->userdata('divFeed')."'
	// 	ORDER BY FIELD(user_profiles.Grade,'EX1','EX2','EX3','P1','P2','P3','P4','P5','S1','S2','S3','S4','S5','SS1','SS2','SS3','SS4','O1','O2','O3','O4','GSP1','GSP2','ESP') ";

	// 	$result = $this->db->query($query);
	// 	return $result;
	// 	} elseif($divisionSelected=="All"){
			
	// 		$query="SELECT CONCAT(user_profiles.FirstName,' ',user_profiles.MiddleName,' ', user_profiles.LastName) AS name, 
	// 		batch.name AS Agency, bpas_attendance_log.atdtime, bpas_attendance_log.status,bpas_attendance_log.statusRemarks, user_profiles.telephone 
	// 		FROM user_profiles 
	// 		LEFT JOIN bpas_attendance_log ON bpas_attendance_log.userid=user_profiles.cid AND bpas_attendance_log.date='".date('Y/m/d')."' 
	// 		LEFT JOIN batch ON batch.batch_ID=user_profiles.batch_ID 
	// 		ORDER BY FIELD(user_profiles.Grade,'EX1','EX2','EX3','P1','P2','P3','P4','P5','S1','S2','S3','S4','S5','SS1','SS2','SS3','SS4','O1','O2','O3','O4','GSP1','GSP2','ESP')";

	// 	$result = $this->db->query($query);
	// 	return $result;
			
			
	// 	} else {
		
	// 	$query="SELECT 
	
	// 	CONCAT(user_profiles.FirstName,' ',user_profiles.MiddleName,' ', user_profiles.LastName) AS name, 
	// 	batch.name AS Agency,
	// 	bpas_attendance_log.atdtime,
	// 	bpas_attendance_log.status,
	// 	bpas_attendance_log.statusRemarks,
	// 	user_profiles.telephone
	// 	FROM user_profiles
	// 	LEFT JOIN bpas_attendance_log ON bpas_attendance_log.userid=user_profiles.cid  AND bpas_attendance_log.date='".date('Y/m/d')."'
	// 	LEFT JOIN batch ON batch.batch_ID=user_profiles.batch_ID
	// 	WHERE batch.name='".$this->session->userdata('divFeed')."' 
	// 	ORDER BY FIELD(user_profiles.Grade,'EX1','EX2','EX3','P1','P2','P3','P4','P5','S1','S2','S3','S4','S5','SS1','SS2','SS3','SS4','O1','O2','O3','O4','GSP1','GSP2','ESP')";
	// 	$result = $this->db->query($query);
	// 	return $result;
	// 	}
		
		
	// }
	
	
		
	/* Sonam Tshering Add file*/

	
 /*public function fileName($file_name,$divsion_name,$department_name)

	{
		/*$sql = "INSERT  INTO st_dispatch_files (file_name, div_code, dep_code ) VALUES (".$this->db->escape($file_name).", ".$this->db->escape($division_name).", ".$this->db->escape($department_name).")";
		$this->db->query($sql);
		return $sql; */
		//$sql = "INSERT  INTO st_dispatch_files (file_name, div_code, dep_code ) VALUES ($file_name ,division_name,$department_name)";
		//$this->db->query($sql);
		//return $sql;
	//}  
		public function fileName($data){
// Inserting in Table(students) of Database(college)
			//print_r($data->file_name);
$query=$this->db->insert('st_dispatch_files', $data);


//if ($this->db->affected_rows() >= 0) {
   
}


	

	
	
	
	
	
	public function putAttendance($date,$cid,$time){
		
		if(strtotime($time)>strtotime('09:00:00AM')){
		$sql = "INSERT IGNORE INTO 	bpas_attendance_log (atdtime, userid, date,Late) VALUES (".$this->db->escape($time).", ".$this->db->escape($cid).", ".$this->db->escape($date).",'1')";
		$this->db->query($sql);
		} else{
			
			$sql = "INSERT IGNORE INTO bpas_attendance_log (atdtime, userid, date,Late) VALUES (".$this->db->escape($time).", ".$this->db->escape($cid).", ".$this->db->escape($date).",'2')";
		$this->db->query($sql);
		}
		if($this->db->affected_rows()==1)
		{
			return true;
		} else return false;
		
	}
	//  public function putAttendance1($date1,$cid) {
	 	
	//  	$sql = "INSERT IGNORE INTO bpas_attendance_log (atdtime, userid, date,Late) VALUES ('08:20:39am',$cid , $date1,'2')";
	// 	$this->db->query($sql);



	// 	if($this->db->affected_rows()==1)
	// 	{
	// 		return true;
	// 	} else return false;

	// }
		

	 



	
	
	public function userstatus($decodedstatus,$remarks){
		
		//$decodedstatus = urldecode($status);
		$query = "UPDATE `bpas_attendance_log` SET `status` = '".$decodedstatus."', `statusRemarks` = '".$remarks."' WHERE `date` = '".date('Y/m/d')."' AND `userid`='".$this->session->userdata('cid')."'";
		
		if($this->db->query($query)){
					return true;
				
			
		} else return false;
		
	}
	
	public function checkholiday($date) {
			
		$this->db->where('date',$date);
		$result=$this->db->get('bpas_holidays');
		if($result->num_rows()>=1){		
			return true;
		} else return false;
	
	}
	
	
	public function monthreport($month,$year,$agency){
		
	
		$startdate="01-".$month."-".$year;
		$starttime=strtotime($startdate);
		$endtime=strtotime("+1 month",$starttime);
		$result=array();
		$i=$starttime;
		$days=1;
		for($i=$starttime;$i<$endtime;$i+=86400) {
			$e=1;
			//$days=1;
				$query=$this->db->query("SELECT CONCAT(user_profiles.FirstName,' ',user_profiles.MiddleName,' ', user_profiles.LastName) AS name, 
				batch.name AS Agency, 
				bpas_attendance_log.Late, 
				user_profiles.telephone FROM user_profiles 
				LEFT JOIN bpas_attendance_log ON bpas_attendance_log.userid=user_profiles.cid AND bpas_attendance_log.date='".date('Y/m/d',$i)."' 
				LEFT JOIN batch ON batch.batch_ID=user_profiles.batch_ID WHERE batch.batch_ID='".$agency."'
				ORDER BY user_profiles.profileId");
			
			//$result[$d]=$query;
			//return $query;
			 foreach($query->result() as $row){
				$result[$e][$days]=$row;
			 $e++;
			 }
			
			$days++;
		}
		$result[0][0]=$days;
		$result[0][1]=$e;
		return $result;
	
	}

public function monthreportall($month,$year){
		
	
		$startdate="01-".$month."-".$year;
		$starttime=strtotime($startdate);
		$endtime=strtotime("+1 month",$starttime);
		$result=array();
		$i=$starttime;
		$days=1;
		for($i=$starttime;$i<$endtime;$i+=86400) {
			$e=1;
			//$days=1;
				$query=$this->db->query("SELECT CONCAT(user_profiles.FirstName,' ',user_profiles.MiddleName,' ', user_profiles.LastName) AS name, 
				batch.name AS Agency, 
				bpas_attendance_log.Late, 
				user_profiles.telephone FROM user_profiles 
				LEFT JOIN bpas_attendance_log ON bpas_attendance_log.userid=user_profiles.cid AND bpas_attendance_log.date='".date('Y/m/d',$i)."' 
				LEFT JOIN batch ON batch.batch_ID=user_profiles.batch_ID
				ORDER BY user_profiles.profileId");
			
			//$result[$d]=$query;
			//return $query;
			 foreach($query->result() as $row){
				$result[$e][$days]=$row;
			 $e++;
			 }
			
			$days++;
		}
		$result[0][0]=$days;
		$result[0][1]=$e;
		return $result;
	
	}
public function monthreportsingle($month,$year,$cid){
		
	
		$startdate="01-".$month."-".$year;
		$starttime=strtotime($startdate);
		$endtime=strtotime("+1 month",$starttime);
		$result=array();
		$i=$starttime;
		$days=1;
		for($i=$starttime;$i<$endtime;$i+=86400) {
			$e=1;
			//$days=1;
				$query=$this->db->query("SELECT CONCAT(user_profiles.FirstName,' ',user_profiles.MiddleName,' ', user_profiles.LastName) AS name, 
				batch.name AS Agency, 
				bpas_attendance_log.Late, 
				user_profiles.telephone FROM user_profiles 
				LEFT JOIN bpas_attendance_log ON bpas_attendance_log.userid=user_profiles.cid AND bpas_attendance_log.date='".date('Y/m/d',$i)."' 
				LEFT JOIN batch ON batch.batch_ID=user_profiles.batch_ID 
				WHERE user_profiles.cid='".$cid."'");
			
			//$result[$d]=$query;
			//return $query;
			 foreach($query->result() as $row){
				$result[$e][$days]=$row;
			 $e++;
			 }
			
			$days++;
		}
		$result[0][0]=$days;
		$result[0][1]=$e;
		return $result;
	
	}
	
	public function lateCount(){
		$cid=$this->session->userdata('cid');
		$role=$this->session->userdata('role');
		
		if($role=='1'){
		$result = $this->db->query("SELECT COUNT(*) as count FROM bpas_attendance_log WHERE date='".date('Y/m/d')."' AND late='1'");
		foreach($result->result() as $row){
			
			$count = $row->count;		
			}
		} elseif($role=='2'){
			$result = $this->db->query("SELECT COUNT(*) as count FROM bpas_attendance_log WHERE date='".date('Y/m/d')."' 
			AND late='1'");
			foreach($result->result() as $row){
			
				$count = $row->count;		
			}	
			
		} elseif($role=='3'){
			$result = $this->db->query("SELECT COUNT(*) as count FROM bpas_attendance_log WHERE date='".date('Y/m/d')."' 
			AND late='1' AND userId IN ( SELECT e.cid from user_profiles e
							LEFT JOIN department p ON p.department_ID = e.department_ID
							WHERE (p.director = '".$cid."' OR p.offtg= '".$cid."'))");
			foreach($result->result() as $row){
			
				$count = $row->count;		
			}	
			
		} elseif($role=='4'){
			$result = $this->db->query("SELECT COUNT(*) as count FROM bpas_attendance_log WHERE date='".date('Y/m/d')."' 
			AND late='1' AND userId IN ( SELECT e.cid from user_profiles e 
							LEFT JOIN batch a ON a.batch_ID = e.batch_ID
							WHERE (a.chief = '".$cid."' OR a.offtg='".$cid."'))");
			foreach($result->result() as $row){
			
				$count = $row->count;		
			}	
			
		} elseif($role=='7'){
			$result = $this->db->query("SELECT COUNT(*) as count FROM bpas_attendance_log WHERE date='".date('Y/m/d')."' 
			AND late='1'");
			foreach($result->result() as $row){
			
				$count = $row->count;		
			}	
			
		} elseif($role=='8'){
					$result = $this->db->query("SELECT COUNT(*) as count FROM bpas_attendance_log WHERE date='".date('Y/m/d')."' 
			AND late='1' AND userId IN ( 							SELECT e.cid from user_profiles e
							LEFT JOIN department p ON p.department_ID = e.department_ID
							WHERE (p.director = '".$cid."' OR p.offtg='".$cid."') AND e.roleId='4' 
							UNION ALL
							SELECT e.cid from user_profiles e 
							LEFT JOIN batch a ON a.batch_ID = e.batch_ID
							WHERE (a.chief = '".$cid."' OR a.offtg='".$cid."'))");
			foreach($result->result() as $row){
			
				$count = $row->count;		
			}	
				
			
		} elseif($role=='9'){
					$result = $this->db->query("SELECT COUNT(*) as count FROM bpas_attendance_log WHERE date='".date('Y/m/d')."' 
			AND late='1' AND userId IN ( SELECT e.cid from user_profiles e 
							LEFT JOIN batch a ON a.batch_ID = e.batch_ID
							WHERE (a.chief = '".$cid."' OR a.offtg='".$cid."') )");
			foreach($result->result() as $row){
			
				$count = $row->count;		
			}	
		
		
		}
		return $count;
	
	}
	// public function lateOfficials(){
				
	// 		$cid=$this->session->userdata('cid');
	// 		$role=$this->session->userdata('role');
	// 		if($role=='1'){				
	// 		$result = $this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName,' ',e.LastName) AS Name,l.atdtime, a.name AS AgencyName, p.name AS ParentAgencyName,  FROM user_profiles e
	// 		LEFT JOIN bpas_attendance_log l ON e.cid = l.userid
	// 		LEFT JOIN batch a ON a.batch_ID = e.batch_ID
	// 		LEFT JOIN department p ON e.department_ID = p.department_ID
	// 		WHERE l.date='".date('Y/m/d')."' AND l.Late = '1'");
	// 		} 
	// 		//elseif($role=='2'|| $role=='7'){
	// 		// 		$result = $this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName,' ',e.LastName) AS Name,l.atdtime, a.name AS AgencyName, p.name AS ParentAgencyName, e.Grade, mp.Description AS PositionTitle FROM user_profiles e
	// 		// 			LEFT JOIN bpas_attendance_log l ON e.cid = l.userid
	// 		// 			LEFT JOIN batch a ON a.batch_ID = e.batch_ID
	// 		// 			LEFT JOIN department p ON e.department_ID = p.department_ID
	// 		// 			LEFT JOIN masterposition mp ON mp.PositionID = e.PositionTitle
	// 		// 			WHERE l.date='".date('Y/m/d')."' AND l.Late = '1'");
				
	// 		// // } elseif($role=='3'|| $role=='8'){
	// 		// 		$result = $this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName,' ',e.LastName) AS Name,l.atdtime, a.name AS AgencyName, p.name AS ParentAgencyName, e.Grade, mp.Description AS PositionTitle FROM user_profiles e
	// 		// 			LEFT JOIN bpas_attendance_log l ON e.cid = l.userid
	// 		// 			LEFT JOIN batch a ON a.batch_ID = e.batch_ID
	// 		// 			LEFT JOIN department p ON e.department_ID = p.department_ID
	// 		// 			LEFT JOIN masterposition mp ON mp.PositionID = e.PositionTitle
	// 		// 			WHERE l.date='".date('Y/m/d')."' AND l.Late = '1' AND l.userId IN ( SELECT e.cid from user_profiles e
	// 		// 				LEFT JOIN department p ON p.department_ID = e.department_ID
	// 		// 				WHERE (p.director = '".$cid."' OR p.offtg='".$cid."')
	// 		// 				UNION ALL
	// 		// 				SELECT e.cid from user_profiles e 
	// 		// 				LEFT JOIN batch a ON a.batch_ID = e.batch_ID
	// 		// 				WHERE (a.chief ='".$cid."' OR a.offtg='".$cid."'))");
				
	// 		// } 
	// 				elseif($role=='4' || $role=='9'){
	// 				$result = $this->db->query("SELECT CONCAT(e.FirstName, ' ',e.MiddleName,' ',e.LastName) AS Name,l.atdtime, a.name AS AgencyName, p.name AS ParentAgencyName, e mp.Descriptio AS PositionTitle FROM user_profiles e
	// 					LEFT JOIN bpas_attendance_log l ON e.cid = l.userid
	// 					LEFT JOIN batch a ON a.batch_ID = e.batch_ID
	// 					LEFT JOIN department p ON e.department_ID = p.department_ID
	// 					-
	// 					WHERE l.date='".date('Y/m/d')."' AND l.Late = '1' AND l.userId IN ( SELECT e.cid from user_profiles e 
	// 						LEFT JOIN batch a ON a.batch_ID = e.batch_ID
	// 						WHERE (a.chief = '".$cid."' OR a.offtg='".$cid."'))");
				
	// 		}
	// 		return $result;
		
	// }
	
	
	public function leaveCountAll(){
		$result = $this->db->query("SELECT COUNT(*) as count FROM bpas_attendance_log WHERE date='".date('Y/m/d')."' AND (late BETWEEN '11' AND '24')");
		foreach ($result->result() as $row){
			$count = $row->count;
		}	
			return $count;
		
	}
 // for not logging in
	// public function notUsedAll(){
	// 		 $agenciesimplemented="2698,2702,2705,2698,2707,2712,2713, 6887,6889,6890,6917,6920,6921,6922,6929,6930,6931,6934,6935,6936";
 //                        $result = $this->db->query("SELECT COUNT(*) as count FROM user_profiles p
 //                        LEFT JOIN bpas_attendance_log a ON p.cid = a.userid AND a.date='".date('Y/m/d')."' WHERE a.status='Absent' AND batch_ID IN (".$agenciesimplemented.")");
 //                        foreach ($result->result() as $row){
 //                        $count = $row->count;
 //                }
 //                        return $count;

		
	// }
// sonam tshering
	public function notUseatdall() {

	$agenciesimplemented="16,218,2614,293,3220,3665,378,410,412,414,420,439,442,443,444,445,446,460,461,463,466,5050,5733,5773";
	$result = $this->db->query("SELECT COUNT(*) as count FROM user_profiles p
                        LEFT JOIN bpas_attendance_log a ON p.cid = a.userid AND a.date='".date('Y/m/d')."' WHERE a.Late IS NULL AND batch_ID IN (".$agenciesimplemented.")");
                        foreach ($result->result() as $row){
                        $count = $row->count;
                }
                        return $count;

	
}
}
