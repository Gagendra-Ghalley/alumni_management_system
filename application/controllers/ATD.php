<?php


 class ATD extends CI_Controller {
	
	protected $header;
	protected $data;
	protected $dataheader;
	
	public function __construct(){
		
		
		parent::__Construct();
		date_default_timezone_set("Asia/Thimphu");
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('Staff_model','sm');
		$this->load->model('ATD_model','atd');
		$this->load->model('Agency_model','ag');
		$this->load->model('Leave_model','lm');
		$this->load->model('Holidays','hm');
		$this->load->model('Messages_model','mm');
		$this->header['messages'] = $this->mm->getMessages();
		$this->header['unreadm']=$this->mm->getCountMessages();
		$this->dataheader['header']=$this->header;
		//$this->lm->activateOfftg();
		
		
	}
	
	public function index(){

			$data['request']=$this->db->query("SELECT * from bpas_logins where status1='approved'")->result_array();
			$data['request1']=$this->db->query("SELECT * from bpas_logins where event='Y'")->result_array();
       	$this->load->view('alumni1',$data);
       
			
		
	}
	
	
	public function login(){

			$data['request']=$this->db->query("SELECT * from bpas_logins where status1='approved'")->result_array();
			$data['request1']=$this->db->query("SELECT * from bpas_logins where event='Y'")->result_array();
       	$this->load->view('alumni1',$data);
		
	}

	public function login1(){
		
		
		
		if($this->session->userdata('logged_in')!='1'){
			$this->load->view('login');
			
		} else {
			
			$this->dashboard();
			
		}
		
	}


	public function register(){
		
		
			$this->load->view('registration');
			
		
	}

	public function event1(){
		$data['request1']=$this->db->query("SELECT * from bpas_logins where event='Y'")->result_array();
		$data['editdetail']=$this->db->query("SELECT * from event_table")->result_array();
			$this->load->view('event1',$data);
		
	}

	public function faculty(){
		
		
			$this->load->view('faculty');
		}

	public function aboutUs(){
		
		
			$this->load->view('aboutUs');
		}

		public function civil_engineering(){
		
		
			$this->load->view('civil_engineering');
		}


	public function architecture(){
		
		
			$this->load->view('architecture');
		}

	public function donate(){
		
		
			$this->load->view('donate');
		}

	// public function Forgetpassword(){
	// 	$this->load->view('Forgetpassword');
	// }


	// public function Resetpassword(){
	// 	$email = $this->input->post('email');
	// 	$result=$this->db->query("select * from bpas_user_profiles where email='".$email."'")->result_array();

	
	// 	if (count($result)>0) {
	// 		echo("success");
	// 		$tokan = rand(1000, 9999);
	// 		$this->db->query("update bpas_logins set password = '".$tokan."'' where email='".$email."'");
	// 		$message="please click on password reset <br> <a href ='".base_url('reset?tokan=').$tokan."''>Resetpass<a/>";
	// 		$this->Email($email, 'Reset password Link',$message);
	// 		// 	
	// 	}
	// 	else{
	// 		echo("not registered");
	// 		// $this->session->set_flashdata('message',"Email not registered");
	// 		// $this->load->view('Forgetpassword');
	// 	}
	// }

	// public function reset(){
	// 	echo("reset");
	// 	$email=$this->input->get('tokan');
	// 	$_SESSION['tokan']=$data['tokan'];
	// 	$this->load->view('resetpass');
	// }

//  public function registration(){//cst_team

	 	
// 	 	  		$cid=$this->input->post('relatedUserId'); 
	 	  		
  		
	 		
// 	 			$d2['s']=$this->sm->register($cid);
// 	 			$d=implode(" ", $d2);
				
		
// 				$dat['status1']='approved';
// 			$this->db->where('relatedUserId', $d);
//   			$this->db->update('bpas_logins',$dat);

//   			if($dat=='approved'){

//   			$data1['message']='<br /><br /><br /><span class="alert alert-info">You have successfully registered</span> <br /><br /><br />
// 			 	<a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
// 		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
// 		              </button>
// 		            </a>';
		        
// $this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
// 		        }
// 		        else{

// echo "<script> alert('Your CID did not match with database')</script>";

// 	$this->register();

// 		        }

	

			

        		
        	


        	
	 // }
		

public function register_validate(){

$this->form_validation->set_rules('cid','CID','required|trim|callback_validate_credentials1');
		
		
				
		if($this->form_validation->run()){
			$cid=$this->input->post('cid');
			
				$data = array (
				'cid' => $cid,
				
				
				
			);
			
			$this->session->set_userdata($data);
			
			$cid=$this->input->post('cid'); 
	 	  		
  		
	 		
	 			// $d2['s']=$this->sm->register($cid);
	 			// $d=implode(" ", $d2);
				
		
				$dat['status1']='approved';
			$this->db->where('relatedUserId', $cid);
  			$this->db->update('bpas_logins',$dat);

  			

  			$data1['message']='<br /><br /><br /><span class="alert alert-info">You have successfully registered</span> <br /><br /><br />
			 	<a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';
		        
			$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
		       
					}



		// 	elseif($this->session->userdata('logged_in')==2){
		// 	$cid=$this->input->post('cid');
			
		// 		$data = array (
		// 		'cid' => $cid,
							
		// 	);
			
		// 	$this->session->set_userdata($data);
		// 	$this->load->view('regmac');
			
			
		// } 
		
		else {
			
			
			
			 if($this->session->userdata('logged_in')!='1'){
				$this->load->view('registration');

		}


}

}

public function validate_credentials1(){
		
		
		$cid=$this->input->post('cid');
		$mac=$this->getMac();
		$result=$this->sm->can_log_in1($mac);
		
		
		switch($result){

			
			case 1 : return true;
					break;
			case 2 : $this->form_validation->set_message ('validate_credentials1','You need to login from your registered PC/Phone');
					return false;
					break;
			case 3 : $this->form_validation->set_message ('validate_credentials1','Both your mac addresses are null');
			$data = array (
				'device'=> 0,
				'logged_in' => 2,
				'macstatus'=>$mac
							
			);
			$this->session->set_userdata($data);
			return false;
					break;
			case 4 : $this->form_validation->set_message ('validate_credentials1','One of your mac addresses is null');
			$data = array (
				'device'=>1,
				'logged_in' => 2,
				'macstatus' => $mac
				
				
			);
			$this->session->set_userdata($data);
			return false;
				break;
				

				case 5 : 

			$this->db->where('relatedUserId',$this->input->post('cid'));
		    $this->db->where('status1','approved');
		   	$result = $this->db->get('bpas_logins');

		   	if($result->num_rows()==1){
				foreach($result->result() as $row){
				$this->form_validation->set_message ('validate_credentials1','*You are already registered ');
			}
		}
		else{
			$this->form_validation->set_message ('validate_credentials1','*You are not alumni of the college ');

		}
			return false;
				break;


			// case 6 : $this->form_validation->set_message ('validate_credentials1','*You are not alumni of this college');
			// return false;
			// 	break;
		} 
		
		
		
	}
	
	
	
	public function login_validate(){
		
		
		$this->form_validation->set_rules('cid','CID','required|trim|callback_validate_credentials');
		
				
		if($this->form_validation->run()){
			$cid=$this->input->post('cid');
			
				$data = array (
				'cid' => $cid,
				'logged_in' => 1
				
				
			);
			
			$this->session->set_userdata($data);
			
			redirect('ATD/dashboard');
		}   elseif($this->session->userdata('logged_in')==2){
			$cid=$this->input->post('cid');
			
				$data = array (
				'cid' => $cid,
							
			);
			
			$this->session->set_userdata($data);
			$this->load->view('regmac');
			
			
		} 
		
		else {
			
			$this->login1();
		}
		
		
	}

	
	
	public function membersearch1(){//leki
 	
		
		// $this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('membersearch3');
		$this->load->view('template/includefooter');
		
		
	}

public	function viewmember2(){//leki
  			$name=$this->input->post('name');
  			// $department=$this->input->post('department');

  			 $department= $_POST['f1'];
  		
		
  	// 	$issuance= $this->db->query("SELECT FirstName FROM bpas_user_profiles where FirstName='".$name."'")->row()->FirstName;

 		
			// $data['checkissue']=$this->db->get_where('bpas_user_profiles', array('FirstName' => $name))->result_array();
		  


  			// $issuance= $this->db->query("SELECT FirstName FROM bpas_user_profiles where FirstName='".$name."'")->row()->FirstName;


  			// $issuance1= $this->db->query("SELECT department FROM bpas_user_profiles where department='".$department."'")->row()->department;

 						//OR

  			 	$issuance=$this->sm->search1($name,$department);

  	// $issuance= $this->db->query("SELECT * FROM bpas_user_profiles where FirstName='".$name."' AND department='".$department."'")->row();//to see if there is record or not in db
  			


  			if(sizeof($issuance)>0) 
		  {

	 	$data['checkissue']=$this->db->get_where('bpas_user_profiles', array('FirstName' => $name))->result_array();
		  
		  $data1['checkissue']=$this->db->get_where('bpas_user_profiles', array('department' => $department))->result_array();
		  



		 // $this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('viewmember1',$data,$data1);
		$this->load->view('template/includefooter');
	}
	 else{
	  	 $data['message']="There is no record of Alumni";
	 			$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data);
	 // 
	   }


	   }

	public function validate_credentials(){
		
		
		$cid=$this->input->post('cid');
		$passwordmd=md5($this->input->post('password'));
		$mac=$this->getMac();
		$result=$this->sm->can_log_in($mac);
		
		
		switch($result){
			
			case 1 : return true;
					break;
			case 2 : $this->form_validation->set_message ('validate_credentials','You need to login from your registered PC/Phone');
					return false;
					break;
			case 3 : $this->form_validation->set_message ('validate_credentials','Both your mac addresses are null');
			$data = array (
				'device'=> 0,
				'logged_in' => 2,
				'macstatus'=>$mac
							
			);
			$this->session->set_userdata($data);
			return false;
					break;
			case 4 : $this->form_validation->set_message ('validate_credentials','One of your mac addresses is null');
			$data = array (
				'device'=>1,
				'logged_in' => 2,
				'macstatus' => $mac
				
				
			);
			$this->session->set_userdata($data);
			return false;
				break;
				
			case 5 : $this->form_validation->set_message ('validate_credentials','*Incorrect Username/Password');
			return false;
				break;
		} 
		
		
		
	}
	
	public function getMac(){
		
		
		$ipAddress=$_SERVER['REMOTE_ADDR'];
		$macAddr=false;

		
		$arp=`arp -n $ipAddress`;
		$lines=explode("\n", $arp);

		
		foreach($lines as $line)
		{
   			$cols=preg_split('/\s+/', trim($line));
  			if (isset($cols[1])==$ipAddress){
   				    // $macAddr=$cols[3];
					$macAddr='';
   				}
		}
		
		return $macAddr;
		
	}
	
	public function atdchangestatus() {
		
		if($this->session->userdata('logged_in')=='1') {
			
			$status=$this->input->post('status');
			$remarks=addslashes($this->input->post('statusremarks'));
			if($this->atd->userstatus($status,$remarks)){
			redirect('ATD/dashboard');
			}
			
		} else {
			
			redirect('ATD/logout');
		}
		
		
		
	}
	
	public function dashboard() { 
		
		
		if($this->session->userdata('logged_in')=='1'){
			
			if($this->getattendance()==1) {
				$this->sm->sessionInitiate();
			} else {
				$this->sm->weekendSession();

			}
			$role = $this->session->userdata('role');
			
			
			if($role=='1'){			
				$data['leavecount']=$this->atd->leaveCountAll();
				$data['latecount']=$this->atd->lateCount();
				$data['notused']=$this->atd->notUsedAll();
				$data['divisions']=$this->ag->listDivisions();
				$data['reports']=$this->atd->dailyAttendance();
				$data['supervisor']=$this->sm->getSupervisor();
				$data['pendingLeave']=$this->lm->pendingCount();
				$this->load->view('template/includeheader',$this->dataheader);
				$this->load->view('superadmin/dashboard',$data);
				$this->load->view('template/includefooter');
			} elseif ($role=='2'||$role=='7') {//Secretary
				
				$data['leavecount']=$this->atd->leaveCountAll();
				$data['latecount']=$this->atd->lateCount();
				$data['notused']=$this->atd->notUsedAll();
				$data['divisions']=$this->ag->listDivisions();
				$data['reports']=$this->atd->dailyAttendance();
				$data['supervisor']=$this->sm->getSupervisor();
				$data['pendingLeave']=$this->lm->pendingCount();
				$this->load->view('template/includeheader',$this->dataheader);
				$this->load->view('admin/dashboard',$data);
				$this->load->view('template/includefooter');
				
			} elseif($role=='3'||$role=='8'){//Director
				
				$data['leavecount']=$this->atd->leaveCountAll();
				$data['latecount']=$this->atd->lateCount();
				$data['notused']=$this->atd->notUsedAll();
				$data['divisions']=$this->ag->listDivisions();
				$data['reports']=$this->atd->dailyAttendance();
				$data['supervisor']=$this->sm->getSupervisor();
				$data['pendingLeave']=$this->lm->pendingCount();
				$this->load->view('template/includeheader',$this->dataheader);
				$this->load->view('agency/dashboard',$data);
				$this->load->view('template/includefooter');
				
			}  elseif($role=='4'||$role=='9'){//Division Heads
				// $data['request1']=$this->db->query("SELECT * from bpas_logins where event='Y'")->result_array();
				 $data['request2']=$this->db->query("SELECT * from event_table")->result_array();
				$data['eventdetail']=$this->sm->getevent();
				$cid=$this->session->userdata('cid');
				$data['user']=$this->sm->getprofilei($cid);
				$data['leavecount']=$this->atd->leaveCountAll();
				$data['latecount']=$this->atd->lateCount();
				$data['notused']=$this->atd->notUsedAll();
				$data['divisions']=$this->ag->listDivisions();
				$data['reports']=$this->atd->dailyAttendance();
				$data['supervisor']=$this->sm->getSupervisor();
				$data['pendingLeave']=$this->lm->pendingCount();
				$data['eventdetail']=$this->db->get('event_table')->result_array();
				// $data['date1']=$this->db->get('event_table')->result_array();
				// $data['eventname']=$this->db->get('event_table')->result_array();
  	
				$this->load->view('template/includeheader',$this->dataheader);
				$this->load->view('division/dashboard',$data);
				$this->load->view('template/includefooter');
			} elseif($role=='5'){//Users
				$data['leavecount']=$this->atd->leaveCountAll();
				$data['divisions']=$this->ag->listDivisions();
				$data['reports']=$this->atd->dailyAttendance();
				$data['supervisor']=$this->sm->getSupervisor();
				$this->load->view('template/includeheader',$this->dataheader);
				$this->load->view('user/dashboard',$data);
				$this->load->view('template/includefooter');
				
			} elseif ($role=='6') { //HR
				
				$data['leavecount']=$this->atd->leaveCountAll();
				$data['latecount']=$this->atd->lateCount();
				$data['notused']=$this->atd->notUsedAll();
				$data['divisions']=$this->ag->listDivisions();
				$data['reports']=$this->atd->dailyAttendance();
				$data['supervisor']=$this->sm->getSupervisor();
				$data['pendingLeave']=$this->lm->pendingCount();
				$this->load->view('template/includeheader',$this->dataheader);
				$this->load->view('superadmin/dashboard',$data);
				$this->load->view('template/includefooter');
				}
			// } elseif($role=='8'){//Offtg Director
// 				
				// $data['leavecount']=$this->am->leaveCountAll();
				// $data['latecount']=$this->am->lateCount();
				// $data['notused']=$this->am->notUsedAll();
				// $data['divisions']=$this->ag->listDivisions();
				// $data['reports']=$this->am->dailyAttendance();
				// $data['supervisor']=$this->sm->getSupervisor();
				// $data['pendingLeave']=$this->lm->pendingCount();
				// $this->load->view('agency/header');
				// $this->load->view('agency/navheader',$header);
				// $this->load->view('agency/navsidebar');
				// $this->load->view('agency/dashboard',$data);
				// $this->load->view('agency/footer');
// 				
			// } elseif($role=='9'){//Offtg Division Heads
				// $data['leavecount']=$this->am->leaveCountAll();
				// $data['latecount']=$this->am->lateCount();
				// $data['notused']=$this->am->notUsedAll();
				// $data['divisions']=$this->ag->listDivisions();
				// $data['reports']=$this->am->dailyAttendance();
				// $data['supervisor']=$this->sm->getSupervisor();
				// $data['pendingLeave']=$this->lm->pendingCount();
				// $this->load->view('division/header');
				// $this->load->view('division/navheader',$header);
				// $this->load->view('division/navsidebar');
				// $this->load->view('division/dashboard',$data);
				// $this->load->view('division/footer');
			// }
			 else {
				$data['request1']=$this->db->query("SELECT * from bpas_logins where event='Y'")->result_array();
				$cid=$this->session->userdata('cid');
				$data['user']=$this->sm->getprofilei($cid);
				$data['leavecount']=$this->atd->leaveCountAll();
				$data['latecount']=$this->atd->lateCount();
				$data['notused']=$this->atd->notUsedAll();
				$data['divisions']=$this->ag->listDivisions();
				$data['reports']=$this->atd->dailyAttendance();
				$data['supervisor']=$this->sm->getSupervisor();
				$data['pendingLeave']=$this->lm->pendingCount();


				$data['eventdetail']=$this->db->get('event_table')->result_array();
				// $data['date1']=$this->db->get('event_table')->result_array();
				// $data['eventname']=$this->db->get('event_table')->result_array();
  	

				$this->load->view('template/includeheader',$this->dataheader);
				$this->load->view('division/dashboard',$data);
				$this->load->view('template/includefooter');
			}
		} else {


			
			$this->login();
			
		}
		
	}
	
	public function monthlyatd() {
	
		if($this->session->userdata('logged_in')=='1'){
			if($this->session->userdata('role')=='5'){
				$this->load->view('template/includeheader',$this->dataheader);
				$this->load->view('user/monthlyatd');
				$this->load->view('template/includefooter');
				
			} else {
		$data['parent']=$this->ag->getParentAgencyList();
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('monthlyatd',$data);
		$this->load->view('template/includefooter');
			}
		} else $this->login();
	
	}

	public function getMonthlyAll(){
		
		if($this->session->userdata('logged_in')=='1'){
			
			$month = $this->input->post('month');
			$year = $this->input->post('year');
		if($this->session->userdata('role')!='5'){
			$cid=$this->session->userdata('cid');
			$monthlydata=$this->atd->monthreportall($month,$year);
		} else {
			$this->getMonthlyATD();
		}
   		
		$holidays=$this->hm->holidaysMonth($month,$year);
		//print_r($monthlydata);
		// $date = date('Y/m/d');
		// $month = date('m',strtotime($date));
		// $year = date('Y',strtotime($date));
		$days=$monthlydata[0][0];
		$empcount=$monthlydata[0][1];
		$startdate = "01-".$month."-".$year;
		$starttime=strtotime($startdate);
		$endtime =strtotime("+1 month", $starttime);
		$weekends = array();
		echo "<tr><th>Name";
		//echo "Agency:";
		//print_r($monthlydata);
		echo "</th>";
	
		function isWeekend($date) {
    		return (date('N', $date) >= 6);
		} 
		for($i=$starttime;$i<$endtime;$i+=86400){
	
			if(isWeekend($i)){
		
			echo "<th class='blue'>".date('d',$i)."</th>";
			$weekends[] = date('d',$i);
		} else {
			echo "<th>".date('d',$i)."</th>";
		}

		
   
		} 
		echo "</tr>";

    	for($i=1;$i<$empcount;$i++){
   			echo "<tr>";
   			echo "<td>".$monthlydata[$i][1]->name."</td>";
	
	   	for($j=1;$j<$days;$j++){
	   		
			if(in_array($j, $weekends)){
				echo "<td class='blue'> </td>";
			} else if(in_array($j,$holidays)){
				
				echo "<td class='blue'>Ho</td>";
			} else {
				
				switch($monthlydata[$i][$j]->Late) {
					
					
					case NULL : echo "<td class='red'> </td>";
								break;
					case '1'  : echo "<td class='yellow'> </td>";
								break;
					case '2'  : echo "<td class='green'> </td>";
								break;
					case '11' : echo "<td>EOL </td>";
								break;
					case '12' : echo "<td>SL </td>";
								break;
					case '13' : echo "<td>EL</td>";
								break;
					case '14' : echo "<td>CL </td>";
								break;
					case '15' : echo "<td>MaL </td>";
								break;
					case '16' : echo "<td>PaL </td>";
								break;
					case '17' : echo "<td>BL </td>";
								break;
					case '18' : echo "<td>ML </td>";
								break;
					case '19' : echo "<td>Tr </td>";
								break;
					case '20' : echo "<td>To </td>";
								break;
					case '21' : echo "<td>Me </td>";
								break;
					case '22' : echo "<td>Sem </td>";
								break;
					case '23' : echo "<td>Wo </td>";
								break;
					case '24' : echo "<td>Dep </td>";
								break;			
					default  :  echo "<td class='red'> </td>";
								break;
					
					}
					
				}
 			} 
 		echo "</tr>";
   }
  
  } else $this->login();
		
		
	}
	public function getMonthlyATD(){
	
		if($this->session->userdata('logged_in')=='1'){
			
			$month = $this->input->post('month');
			$year = $this->input->post('year');
		if($this->session->userdata('role')=='5'){
			$cid=$this->session->userdata('cid');
			$monthlydata=$this->atd->monthreportsingle($month,$year,$cid);
		} else {
		
		$agency = $this->input->post('agency');
		$monthlydata=$this->atd->monthreport($month,$year,$agency);
		}
   		
		$holidays=$this->hm->holidaysMonth($month,$year);
		//print_r($monthlydata);
		// $date = date('Y/m/d');
		// $month = date('m',strtotime($date));
		// $year = date('Y',strtotime($date));
		$days=$monthlydata[0][0];
		$empcount=$monthlydata[0][1];
		$startdate = "01-".$month."-".$year;
		$starttime=strtotime($startdate);
		$endtime =strtotime("+1 month", $starttime);
		$weekends = array();
		echo "<tr><th>Name";
		//echo "Agency:";
		//print_r($monthlydata);
		echo "</th>";
	
		function isWeekend($date) {
    		return (date('N', $date) >= 6);
		} 
		for($i=$starttime;$i<$endtime;$i+=86400){
	
			if(isWeekend($i)){
		
			echo "<th class='blue'>".date('d',$i)."</th>";
			$weekends[] = date('d',$i);
		} else {
			echo "<th>".date('d',$i)."</th>";
		}

		
   
		} 
		echo "</tr>";

    	for($i=1;$i<$empcount;$i++){
   			echo "<tr>";
   			echo "<td>".$monthlydata[$i][1]->name."</td>";
	
	   	for($j=1;$j<$days;$j++){
	   		
			if(in_array($j, $weekends)){
				echo "<td class='blue'> </td>";
			} else if(in_array($j,$holidays)){
				
				echo "<td class='blue'>Ho</td>";
			} else {
				
				switch($monthlydata[$i][$j]->Late) {
					
					
					case NULL : echo "<td class='red'> </td>";
								break;
					case '1'  : echo "<td class='yellow'> </td>";
								break;
					case '2'  : echo "<td class='green'> </td>";
								break;
					case '11' : echo "<td>EOL </td>";
								break;
					case '12' : echo "<td>SL </td>";
								break;
					case '13' : echo "<td>EL</td>";
								break;
					case '14' : echo "<td>CL </td>";
								break;
					case '15' : echo "<td>MaL </td>";
								break;
					case '16' : echo "<td>PaL </td>";
								break;
					case '17' : echo "<td>BL </td>";
								break;
					case '18' : echo "<td>ML </td>";
								break;
					case '19' : echo "<td>Tr </td>";
								break;
					case '20' : echo "<td>To </td>";
								break;
					case '21' : echo "<td>Me </td>";
								break;
					case '22' : echo "<td>Sem </td>";
								break;
					case '23' : echo "<td>Wo </td>";
								break;
					case '24' : echo "<td>Dep </td>";
								break;			
					default  :  echo "<td class='red'> </td>";
								break;
					
					}
					
				}
 			} 
 		echo "</tr>";
   }
  
  } else $this->login();
  
}
 


	public function cancelreg() {
		
		$this->session->sess_destroy();
		redirect('ATD/index');
		
	}

	public function devicereg(){
		
		$mac=$this->session->userdata('macstatus');
		$registerone=false;
		$registertwo=false;
		 if($this->session->userdata('device')==0){
			 $registerone=$this->sm->registermacone($mac);
		 } elseif($this->session->userdata('device')==1){
			 $registertwo=$this->sm->registermactwo($mac);
		 }
// 		
		if($registerone||$registertwo) {
			
			
			$data = array (
				
				'logged_in' => 1,
				
				
				
			);
			$this->session->set_userdata($data);
			//$macreg = 1;
			redirect('ATD/dashboard');
		} else {
			$this->session->sess_destroy();
			$this->load->view('macnotunique');
			
		}
		
		
	}
	
	public function divfeedchange($div){
		$decodediv = urldecode($div);
		$data = array (
				
			
			'divFeed' => $decodediv

				);
				
				$this->session->set_userdata($data);
				
				redirect('ATD/dashboard');
				
		
	}
	
	
	public function logout(){
		
		
		$this->session->sess_destroy();
		redirect('ATD/index');
	}
	
	
	
	public function getattendance() {
		
		$cid = $this->session->userdata('cid');
		// if($cid==10716002957)
		// {
			

		// 	//$date ==date("Y/m/d");
		// 	 $date1 = date("Y/m/d");
		// 	$time1 = "08:20:39am";
			
		// 	// date("h:i:sa");
		// 	//date("h:i:sa")=="08:20:39am"
		// 	 $this->atd->putAttendance1($date1,$cid);

		//  }

		//   else
		  //{
		$time = date("h:i:sa");
		$date = date("Y/m/d");
		 if(!(date('N', strtotime($date)) >=6)) {
				if(!($this->atd->checkHoliday($date))){
							if(!($this->atd->checkAttendance($date,$cid))) {
							
						if($this->atd->putAttendance($date,$cid,$time)) {
							
							$data = array (
							
							'atd_time' => $time
							
							);
							$this->session->set_userdata($data);
							return 1;
						} else {
							
							
							
						}
				
				
				} else {
					return 1;
				}
			
			} else {
				
			 	return 2;
			}
		} else return 0;
			
	// }

}
	
	public function lateToday(){
		
		if($this->session->userdata('logged_in')=='1'){
		$data['late']=$this->atd->lateOfficials();
		$header['messages'] = $this->mm->getMessages();
		$header['unreadm']=$this->mm->getCountMessages();
		// $this->load->view('superadmin/header');
		// $this->load->view('superadmin/navheader',$header);
		// $this->load->view('superadmin/navsidebar');
		$dataheader['header']=$header;
		$this->load->view('template/includeheader',$dataheader);
		$this->load->view('lateofficials',$data);
		$this->load->view('template/includefooter',$dataheader);
		
		} else $this->login();
		
	}
	
	
	
	
	
	
}
