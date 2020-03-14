<?php


class UsermanagementController extends CI_Controller {

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
	} 
	public function loadUserDetails($param1="",$param2="",$param3=""){
		$data1['message']="";
		$data1['identifier']="";
		if($param1=="adduser" || $param2=="2"){
			$data1['ministryList']=$this->db->get('bpas_master_agencymainparent')->result_array();
			$data1['departmentList']=$this->db->get('bpas_master_agencyparent')->result_array();
			$data1['divisionList']=$this->db->get('bpas_master_agency')->result_array();
			$data1['dzongkhagList']=$this->db->get('st_dzongkhag_master')->result_array();
			$data1['bapasRole']=$this->db->get('bpas_master_roles')->result_array();
			$data1['st_dispatch_role']=$this->db->get('st_dispatch_role')->result_array();
			$data1['Description']=$this->db->get('masterposition')->result_array();
		}
		if($param2=="2"){
			$data1['userdeatils']=$this->ag->loadDetailsOnCid($param3);
			$data1['identifier']='userdetails';
		}

	  	if($param1=="role") 
		  {
		  	$data1['st_dispatch_role']=$this->db->get('st_dispatch_role')->result_array();
		  	$data1['identifier']='userdetails';

	  	}
		$this->load->view('userManagement/'.$param1,$data1);
	}
	function listusers($param1=""){
		$data1['userdeatils']=$this->db->get('bpas_user_profiles')->result_array();
		$this->load->view('userManagement/'.$param1,$data1);
	}
	function adduser(){
	/* do you need this*/	$query = "SELECT * FROM st_message WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND ReadStatus='N'";
		$data1['messages']=$this->db->query($query)->result_array();
		$data['cid']=$this->input->post('cidNum');
		$data['EmpNo']=$this->input->post('empNum');
		$data['FirstName']=$this->input->post('FirstName');
		$data['MiddleName']=$this->input->post('MiddleName');
		$data['LastName']=$this->input->post('LastName');
		$data['AgencyMainParentID']=$this->input->post('Ministry');
		$data['AgencyParentID']=$this->input->post('Department');
		$data['AgencyID']=$this->input->post('Agency');
		$data['Grade']=$this->input->post('Grade');
		$data['Gender']=$this->input->post('Gender');
		$data['PositionTitle']=$this->input->post('designation');
		$data['DateOfBirth']=$this->input->post('dob');
		$data['telephone']=$this->input->post('officePhone');
		$data['email']=$this->input->post('emailID');
		$data['DzongkhagID']=$this->input->post('dzongkhag');
		$data['Mobile']=$this->input->post('mobNum');
		$data['roleId']=$this->input->post('roleId');
		$data['disp_roleID']=$this->input->post('dispatchid');
		//$data['']=$this->input->post('password');sha1($_POST['password1']); 
		 //$data['bpas_logins']=md5($this->input->post('password'));
		$query=$this->db->insert('bpas_user_profiles', $data);
     	if($this->db->affected_rows()>0){
     		$datalogion['relatedUserId']=$this->input->post('cidNum');
     		$datalogion['password']=md5($this->input->post('cidNum'));
     		$query=$this->db->insert('bpas_logins', $datalogion);
     		$data1['message']= ' user successfully inserted';
     	}
     	else{
     		$data1['message']= 'not able to insert. please try again';
     	}
		$this->load->view('userManagement/acknowledgement',$data1);
	}

function update()
{
	
		//$query = "SELECT * FROM st_message WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND ReadStatus='N'";
		 //$data1['messages']=$this->db->query($query)->result_array();
	     $cid=$this->input->post('cidNumer');
	     //die($cid);
		$data['EmpNo']=$this->input->post('empNum');
		$data['FirstName']=$this->input->post('FirstName');
		$data['MiddleName']=$this->input->post('MiddleName');
		$data['LastName']=$this->input->post('LastName');
		$data['AgencyMainParentID']=$this->input->post('Ministry');
		$data['AgencyParentID']=$this->input->post('Department');
		$data['AgencyID']=$this->input->post('Agency');
		$data['Grade']=$this->input->post('Grade');
		$data['Gender']=$this->input->post('Gender');
		$data['PositionTitle']=$this->input->post('designation');
		$data['DateOfBirth']=$this->input->post('dob');
		$data['telephone']=$this->input->post('officePhone');
		$data['email']=$this->input->post('emailID');
		$data['DzongkhagID']=$this->input->post('dzongkhag');
		$data['Mobile']=$this->input->post('mobNum');
		$data['roleId']=$this->input->post('roleId');
		$data['disp_roleID']=$this->input->post('dispatchid');
		$data1['password']=$this->db->get('bpas_logins')->row();

		$data['password']=$this->input->post('pwd');

		$query=$this->sm->update_user($cid,$data);

		
     	if($this->db->affected_rows()>0){
     		$data1['message']= ' user successfully updated';
     	}
     	else{
     		$data1['message']= 'not able to update. please try again';
     	}
		$this->load->view('userManagement/acknowledgement',$data1);
}

	public  function loadUserRoles()
	{

		$this->load->view('edit');

	}
  public function  editRole()
  {
  	//echo "load roles";
  	$query=$this->ag->Sonam_Tshering();
  	 echo $query;

  }
 
  public function EditUser1()
  {
        $this->form_validation->set_rules('cidNum','CID','trim|required');
        if ($this->form_validation->run() == FALSE) {
            echo "error";
        }
        else{
            $cid = $this->input->post('cidNum');
            echo $cid;
		   $query=$this->ag->Sonam_Tshering($cid);

		   echo $query;
        }
    }
	function addfile(){
		$data1['message']="";
		$type=$this->input->post('savetype');
		//$query = "SELECT * FROM st_message WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND ReadStatus='N'";
		//$data1['messages']=$this->db->query($query)->result_array();
		   if($type=="initiatefile"){
			$data['div_code']=$this->input->post('division');
			$data['min_code']=$this->input->post('Ministry');
			$data['dep_code']= $this->session->userdata('deptName');
			$data['insert_date']= date("Y/m/d");
			//$data['file_name']=$this->input->post('Ministry').'/'.$this->input->post('division').'/'.$this->input->post('filename').'/'.date("Y").'/';
			$data['file_name']=$this->input->post('Ministry').'/'.$this->input->post('division').'/'.$this->input->post('filename').'/';
			$query=$this->db->insert('st_dispatch_files', $data);
		}
		else{
			$data['last_sequence_no']=$this->input->post('sequenceNo');
			$data['div_code']=$this->input->post('division');
			$data['min_Code']=$this->input->post('Ministry');
			$data['dep_code']=$this->session->userdata('deptName');
			$query=$this->db->insert('st_dispatch_sequence_no', $data);
		}
		
     	if($this->db->affected_rows()>0){
     			
     		$data1['message']= ' <br /><br /><div class="laert alert-info">&nbsp;&nbsp;&nbsp;file successfully inserted</div>';
     	}
     	else{
     		$data1['message']= 'not able to insert. please try again';
     	}
		$this->load->view('userManagement/acknowledgement',$data1);
	}

	function Dak(){
		
            $data1['ministryList']=$this->db->get('bpas_master_agencymainparent')->result_array();
			$data1['departmentList']=$this->db->get('bpas_master_agencyparent')->result_array();
			$data1['divisionList']=$this->db->get('bpas_master_agency')->result_array();
		
		$this->load->view('userManagement/dak1',$data1);

	}

	function addDaksequence(){
		
		//$query = "SELECT * FROM st_message WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND ReadStatus='N'";
		//$data1['messages']=$this->db->query($query)->result_array();
		$data['last_sequence_no']=$this->input->post('Sequenceno');
		$data['div_code']=$this->input->post('division');
		$data['min_Code']=$this->input->post('Ministry');
		//$data['dep_Code']=$this->input->post('department');
		$data['dep_code']= $this->session->userdata('deptName');

		$query=$this->db->insert('st_dak_sequence_no', $data);
		
     	if($this->db->affected_rows()>0){
     		
     		
     		$data1['message']= ' user successfully inserted';
     	}
     	else{
     		$data1['message']= 'not able to insert. please try again';
     	
                 }
		
		$this->load->view('userManagement/acknowledgement',$data1);




	

}

 public function dakgen()
{
	
        $data['message']= '';
        $data['place']=$this->db->get('st_place')->result_array();
        
       $this->load->view('add_Dak', $data);
}

function addDaks($param="")
{

	//die($this->input->post('lastweqno'));
	$FORMdata['subject']=$this->input->post('subject'); 
		$FORMdata['receieve_add']=$this->input->post('From');
		//$data['department']=$this->input->post('Agency');
		$FORMdata['created']=$this->input->post('date');
		//$data['copy_to']=implode(', ', $_POST['copy_to']);
		//$data['file_no']=$this->input->post('finalfileid');
		$FORMdata['place']=$this->input->post('place');
		$FORMdata['Remark']=$this->input->post('remarks');
		$FORMdata['dakLetterNo']=$this->input->post('lastweqno');
		//$data['department']=2;
		//$data['sent_via']=implode(', ', $_POST['sent_via']);
		//$data['Received_by']=$this->session->userdata('name'); 
		//$data['letterNo']=$this->input->post('letterNo');
		//$data['file_name']=$this->input->post('finalfilename');
		$this->db->insert('st_dak', $FORMdata); 
		//$this->db->insert('st_dispatch_table', $data1);  

		//die($this->input->post('subject').','.$this->input->post('From').','.$this->input->post('date').','.$this->input->post('place').','.$this->input->post('remarks').','.$this->input->post('lastweqno'));

		//die($param.$this->db->affected_rows());
     	if($param=='contine'){
     		$seq['st_dak_sequence_no']=$this->input->post('lastweqno');
     		$this->db->where(array('min_Code' =>$this->session->userdata('mincode'),'div_Code'=>$this->session->userdata('dipcode'),'dep_Code'=>$this->session->userdata('deptName')));
     		$this->db->update('st_dak_sequence_no',$seq);
     		$data['message']= 'Data successfully inserted';
 		 	$data['place']=$this->db->get('st_place')->result_array();
            //$data['file_name'] = $this->db->get_where('st_dispatch_files',array('min_code' =>$this->session->userdata('mincode'),'div_code'=>$this->session->userdata('dipcode'),'dep_code'=>$this->session->userdata('deptName')))->result_array();
         	$this->load->view('add_Dak', $data);
     	      }
     	else if($this->db->affected_rows()>0 && $param=='discontinue'){
     		$seq['st_dak_sequence_no']=$this->input->post('lastweqno');
     		$this->db->where(array('min_Code' =>$this->session->userdata('mincode'),'div_Code'=>$this->session->userdata('dipcode'),'dep_Code'=>$this->session->userdata('deptName')));
     		$this->db->update('st_dak_sequence_no',$seq);
     		$data1['message']= 'Data is inserted.';
     		$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
     	}
     	else{
     		$data1['message']= 'not able to insert. please try again';
     		$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
     	}
		
}

function trackadd(){
	//$data['message']="";
	//$data['dakgen']=$this->db->get('dak_mes')->result_array();
	// $this->load->view('track1');
	$data1['message']= '';
	$this->load->view('track1',$data1);

}

function trackLet(){
	//$data['message']="";
	//$data['dakgen']=$this->db->get('dak_mes')->result_array();
	// $this->load->view('track1');
	// $data1['message']= '';
	// $this->load->view('trackLet',$data1);
	echo " inside tracklet";

}


function getDaksequenceNo(){
		//echo $this->session->userdata('mincode').':'.$this->session->userdata('dipcode').':'.$this->session->userdata('deptName');
	 	$data1=$this->db->get_where('st_dak_sequence_no',array('min_Code' =>$this->session->userdata('mincode'),'div_Code'=>$this->session->userdata('dipcode'),'dep_Code'=>$this->session->userdata('deptName')))->row()->last_sequence_no;
	 	echo $data1;

}




// function forwardtrack($param='',$param2='') {
// if(sizeof($this->db->get_where('st_forward',array('letter_no' =>$param.'/'.$param2))->result_array())>0) && (!($param.'/'.$param2) )){
// 	$data1['message']= 'notallow';
// 	$this->load->view('track1',$data1);
// }
// else{
// 	$data1['name']=$this->db->get_where('bpas_user_profiles',array('AgencyMainParentID' =>$this->session->userdata('ministryId'),'AgencyParentID'=>$this->session->userdata('parentID'),'AgencyID'=>$this->session->userdata('agencyID')))->result_array();

// $data1['userdeatils']=$this->ag->tracks($param.'/'.$param2); 
// $this->load->view('userManagement/forward2', $data1);
// }

  
			



// }

//Sonam Tshering 


	function forwardtrack($param='',$param2='') {

		$finalletterno=$param.'/'.$param2;
		$ispresent=$this->db->get_where('st_dak_details',array('dakLetterNo' =>$finalletterno))->result_array();
		if(sizeof($ispresent)>0){

			$ispresent=$this->db->get_where('st_forward',array('letter_no' =>$finalletterno))->result_array();
			if(sizeof($ispresent)>0){
				$data1['message']= '<div class="col-sm-12 text-center"><div class="alert alert-danger">This leter has beed already forwarded</div></div>';
				$this->load->view('track1',$data1); 
			}
			else{
				$data1['name']=$this->db->get_where('bpas_user_profiles',array('AgencyMainParentID' =>$this->session->userdata('ministryId'),'AgencyParentID'=>$this->session->userdata('parentID'),'AgencyID'=>$this->session->userdata('agencyID')))->result_array();

			$data1['userdeatils']=$this->ag->tracks($param.'/'.$param2); 
			$this->load->view('userManagement/forward2', $data1);	
			}	

		}
		else{
			$data1['message']= '<div class="col-sm-12 text-center"><div class="alert alert-danger">Invalid letter no</div></div>';
			$this->load->view('track1',$data1); 
		}

	}

 /* ag=> agency model */

 function forwardtrack1($param='') {

		$finalletterno=$param;
		$ispresent=$this->db->get_where('st_dak_details',array('dakLetterNo' =>$finalletterno))->result_array();
		if(sizeof($ispresent)>0){

			$ispresent=$this->db->get_where('st_message',array('letter_no' =>$finalletterno))->result_array();
			if(sizeof($ispresent)>0){
				$data1['message']= '<div class="col-sm-12 text-center"><div class="alert alert-danger">This leter has beed already forwarded</div></div>';
				$this->load->view('track1',$data1); 
			}
			else{
				$data1['name']=$this->db->get_where('bpas_user_profiles',array('AgencyMainParentID' =>$this->session->userdata('ministryId'),'AgencyParentID'=>$this->session->userdata('parentID'),'AgencyID'=>$this->session->userdata('agencyID')))->result_array();

			$data1['userdeatils']=$this->ag->tracks($param); 
			$this->load->view('userManagement/forward2', $data1);	
			}	

		}
		else{
			$data1['message']= '<div class="col-sm-12 text-center"><div class="alert alert-danger">Invalid letter no</div></div>';
			$this->load->view('track1',$data1); 
		}

	}




  
}
