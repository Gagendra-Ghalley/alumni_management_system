
<?php


class Settings extends CI_Controller { 
	
	protected $header;
	protected $data;
	protected $dataheader;
	protected $role;
	
	public function __construct() { 
	
	parent::__Construct();
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
	$this->load->model('Staff_model','sm');
	$this->load->model('Agency_model','ag');
	$this->load->model('Holidays','hm');
	$this->load->model('Messages_model','mm');
	$this->load->model('ATD_model','atd');
	$this->header['messages'] = $this->mm->getMessages();
	$this->header['unreadm']=$this->mm->getCountMessages();
	$this->dataheader['header']=$this->header;
	$this->role=$this->session->userdata('role');
	$this->atd->checkloggedin();
	}
	
	
	public function viewUsers() {
		
		$data['parent']=$this->ag->getParentAgencyList();
		$this->load->view('template/includeheader',$this->dataheader);
		// if($this->role!='1') {
		// $this->load->view('viewusers',$data);
		// } else {
			// $this->load->view('norights');
		// }
		$this->load->view('viewusers',$data);
		$this->load->view('template/includefooter');
	}

public function viewUsers1() {
		
		$data['parent']=$this->ag->getParentAgencyList();
		$this->load->view('template/includeheader',$this->dataheader);
		
		$this->load->view('viewusers1',$data);
		$this->load->view('template/includefooter');
	}

public function viewUsers2() {
		
		$data['parent']=$this->ag->getParentAgencyList();
		$this->load->view('template/includeheader',$this->dataheader);
		
		$this->load->view('viewusers2',$data);
		$this->load->view('template/includefooter');
	}




	public function Profilepassword(){
		$cid=$this->session->userdata('cid');
		$data['user']=$this->sm->getprofile($cid);
		
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('profileapassword',$data);
		$this->load->view('template/includefooter');



	}

	public function updateDetail(){
		$cid=$this->session->userdata('cid');
		$data['user']=$this->sm->getprofile($cid);
		
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('profileaddDetails',$data);
		$this->load->view('template/includefooter');



	}
	



	 public function registration(){//cst_team

	 
	 	  		$cid=$this->input->post('relatedUserId'); 

	 		
	 		$data['item']=$this->sm->register($cid);

        	$dat['status1']='approved';
        	// $dat['forwardStatus']='Y';
		 	
	        if($dat=="approved"){
			$data1['message']='<br /><br /><br /><span class="alert alert-info">You have successfully registered</span> <br /><br /><br />
			 	<a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';


		            $this->db->where ('relatedUserId', $cid );
  					$this->db->update('bpas_logins',$dat);
  					$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);

        }
        else{
			$data1['message']='<br /><br /><br /><span class="alert alert-danger">You cannot register </span><br /><br /><br /><a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';

		            $this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
        }
        
		
   
        
	 }


	 public function event_validate($param1=""){//leki



	  		
  		// $eventid=$this->input->post('event_id');
  		$num1=$this->input->post('cid'); //leki
  	
	 		
	 			 $d2['event1']=$this->sm->eventjoin($param1,$num1);
	 			// $d=implode(" ", $d2);
				
		
			$this->db->where('event_id', $param1);//leki
  			$this->db->update('event_table',$d2);

  			

  			$data1['message']='<br /><br /><br /><span class="alert alert-info">You have successfully Joined the event</span> <br /><br /><br />
			 	<a href="'.base_url().'index.php/Settings/dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';
		        $this->load->view('template/includeheader',$this->dataheader);
		
			$this->load->view('template/includefooter');
			$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
		       
					}

		
		


public function event_cancel($param1=""){

// $eventid=$this->input->post('event_id');
  		$num1=$this->input->post('cid'); //leki
  	
	 		
	 			 $d2['event1']=$this->sm->eventcancel($param1,$num1);
	 			// $d=implode(" ", $d2);
				
		
			$this->db->where('event_id', $param1);//leki
  			$this->db->update('event_table',$d2);

  			

  			$data1['message']='<br /><br /><br /><span class="alert alert-info">You have successfully cancelled the event</span> <br /><br /><br />
			 	<a href="'.base_url().'index.php/Settings/dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';
		    $this->load->view('template/includeheader',$this->dataheader);
		
			$this->load->view('template/includefooter');
			$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
		       
					}




public function validate_credentials2(){
		
		
		$cid=$this->input->post('cid');
		$result=$this->sm->can_log_in2($cid);
		
		
		switch($result){
			
			case 1 : return true;
					break;
			// case 2 : $this->form_validation->set_message ('validate_credentials2','You need to login from your registered PC/Phone');
			// 		return false;
			// 		break;
			// case 3 : $this->form_validation->set_message ('validate_credentials2','Both your mac addresses are null');
			// $data = array (
			// 	'device'=> 0,
			// 	'logged_in' => 2,
			// 	'macstatus'=>$mac
							
			// );
			// $this->session->set_userdata($data);
			// return false;
			// 		break;
			// case 4 : $this->form_validation->set_message ('validate_credentials2','One of your mac addresses is null');
			// $data = array (
			// 	'device'=>1,
			// 	'logged_in' => 2,
			// 	'macstatus' => $mac
				
				
			// );
			// $this->session->set_userdata($data);
			// return false;
			// 	break;
				
			case 5 : $this->form_validation->set_message ('validate_credentials2','You cannot do it twice');
			return false;
				break;
		} 
		
		
		
	}
	
		
	
	public function agencyFromParent() {
		
		 $parent=$this->input->post('parent');
                $query=$this->ag->getAgencyList();
	        echo "<option class='searchdropdown' value='#'>Select Year</option>";
                foreach($query->result() as $row)
                { 
                 echo "<option class='searchdropdown' value='".$row->AgencyID."'>".$row->name."</option>";
                }
		
	}


	public function agencyFromParent1() {//Tamang
		
		 $parent=$this->input->post('parent');
                $query=$this->ag->getAgencyList();
	        echo "<option class='searchdropdown' value='#'>Select Year</option>";
                foreach($query->result() as $row)
                { 
                 echo "<option class='searchdropdown' value='".$row->AgencyID."'>".$row->name."</option>";
                }
		
	}



	public function agencyFromParent2() {//Tamang(Editing and Deleting year of graduation)
		
		 $parent=$this->input->post('parent');
                $query=$this->ag->getAgencyList();
	        echo "<option class='searchdropdown' value='#'>Select Year</option>";
                foreach($query->result() as $row)
                { 
                 echo "<option class='searchdropdown' value='".$row->AgencyID."'>".$row->name."</option>";
                }
		
	}
	//sonamm Tshering
	public function dakgen()
{
	
        $data['message']= '';
        $data['place']=$this->db->get('st_place')->result_array();
        $data['seqNo']=$this->db->get_where('st_dak_sequence_no',array('min_Code' =>$this->session->userdata('mincode'),'div_Code'=>$this->session->userdata('dipcode'),'dep_Code'=>$this->session->userdata('deptName')))->row()->last_sequence_no;
        
       $this->load->view('add_Dak', $data);
}
//sonam Tshering
function getDaksequenceNo(){
		//echo $this->session->userdata('mincode').':'.$this->session->userdata('dipcode').':'.$this->session->userdata('deptName');
	 	$data1=$this->db->get_where('st_dak_sequence_no',array('min_Code' =>$this->session->userdata('mincode'),'div_Code'=>$this->session->userdata('dipcode'),'dep_Code'=>$this->session->userdata('deptName')))->row()->last_sequence_no;
	 	echo $data1;

}
//sonam Tshering
function addDak($param="")
{

	//die($this->input->post('lastweqno'));
	    $data['subject']=$this->input->post('subject'); 
		$data['receieve_add']=$this->input->post('From');
		//$data['department']=$this->input->post('Agency');
		$data['created']=$this->input->post('date');
		$data['copy_to']=implode(', ', $_POST['copy_to']);
		//$data['file_no']=$this->input->post('finalfileid');
		$data['place']=$this->input->post('place');
		$data['remarks']=$this->input->post('remarks');
		//$data['department']=2;
		//$data['sent_via']=implode(', ', $_POST['sent_via']);
		$data['Recieved_by']=$this->session->userdata('name'); 
		$data['letterNo']=$this->input->post('letterNo');
		//$data['file_name']=$this->input->post('finalfilename');
		$query=$this->db->insert('st_dak', $data); 
		//die($query);

		//die($param.$this->db->affected_rows());
     	if($param=='contine')
     	                      {
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
     		$data1['message']= 'Data is inserted with dak no:';
     		$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
     	}
     	else{
     		$data1['message']= 'not able to insert. please try again';
     		$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
     	}
		
}

	
	public function search() {//Tamang(using CID and to delete blank data )
		
		
			//$this->pagination->initialize($config);
    	$keyword = $this->input->post('search');
		$query=$this->ag->getEmployeesKeyword($keyword);
		$counter=1;
		foreach($query->result() as $row){
			
		echo "<tr>";
		echo "<td>$counter</td>";
		echo "<td><a href='".base_url()."index.php/Settings/editFullEmployee/$row->cid/'>$row->name<i class='fa fa-edit'></i></td>";
		
		echo "<td>$row->cid</td>";
		// echo "<td>$row->Agency</td>";
		echo "<td>$row->ParentAgency</td>";
		// echo "<td>$row->MainParentAgency</td>";
		// echo "<td>$row->PositionTitle</td>";
		// echo "<td>$row->Grade</td>";
		// echo "<td>$row->Gender</td>";
		echo "<td>$row->gender</td>";
		echo "<td>$row->Agency</td>";
	     echo" <td>Delete</td>"
	     ;
		 
		if($counter==1 ){
	     echo" <td><a href='".base_url()."index.php/Settings/editFullEmployee6/$row->AgencyID/'>DeleteAll</button></a>"
	     ;
		}
		
		echo "</tr>";
		$counter++;
		
		}

		
		
	}

	
	
	public function getAgencyEmployees() {//Tamang(Managing user )
		
		
		$this->load->library('pagination');

		$config['base_url'] = base_url().'/index.php/Settings/getAgencyEmployees/';
		
		
		$this->pagination->initialize($config);
    	$agency = $this->input->post('agency');
		$query = $this->ag->getEmployees($agency);
		$num_rows=$query->num_rows();
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 10;
		echo $this->pagination->create_links();

		$counter=1;
		foreach($query->result() as $row){
			
		echo "<tr>";
		echo "<td>$counter</td>";
		echo "<td><a href='".base_url()."index.php/Settings/editFullEmployee/$row->cid/'>$row->name</a><i class='fa fa-edit'></i></td>";
		// echo "<td>$row->EmpNo</td>";
		echo "<td>$row->cid</td>";
		// echo "<td>$row->Agency</td>";
		echo "<td>$row->ParentAgency</td>";
		// echo "<td>$row->MainParentAgency</td>";
		// echo "<td>$row->PositionTitle</td>";
		// echo "<td>$row->Grade</td>";
		// echo "<td>$row->Gender</td>";
		echo "<td>$row->gender</td>";
		echo "<td>$row->Agency</td>";
	     echo" <td><a href='".base_url()."index.php/Settings/editFullEmployee1/$row->cid/'>Delete</a></td>"
	     ;





	     if($counter==1){
	     echo" <td><a href='".base_url()."index.php/Settings/editFullEmployee6/$row->AgencyID/'>DeleteAll</a></td>"
	     ;
		}
		echo "</tr>";
		$counter++;



		 

		}
		

	
		
	}

	public function getAgencyEmployees2() {//Tamang(For view in year of graduation)
		
		
		$this->load->library('pagination');

		$config['base_url'] = base_url().'/index.php/Settings/getAgencyEmployees2/';
		
		
		$this->pagination->initialize($config);
    	$agency = $this->input->post('agency');
		$query = $this->ag->getEmployees1($agency);
		$num_rows=$query->num_rows();
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 10;
		echo $this->pagination->create_links();
		$counter=1;
		foreach($query->result() as $row){
			
		echo "<tr>";
		echo "<td>$counter</td>";
		echo "<td><a href='".base_url()."index.php/Settings/editFullEmployee3/$row->AgencyID/'>$row->AgencyID</a><i class='fa fa-edit'></i></td>";
		echo "<td>$row->Agency</td>";
	     echo" <td><a href='".base_url()."index.php/Settings/editFullEmployee2/$row->AgencyID/'>Delete</a></td>"
	     ;
	     
		
		echo "</tr>";
		$counter++;



		 

		}
		

	
		
	}

	public function getAgencyEmployees3() {//Tamang(For view in department )
		
		
		$this->load->library('pagination');

		$config['base_url'] = base_url().'/index.php/Settings/getAgencyEmployees3/';
		
		
		$this->pagination->initialize($config);
    	$agency = $this->input->post('parent');
		$query = $this->ag->getEmployees2($agency);
		$num_rows=$query->num_rows();
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 10;
		echo $this->pagination->create_links();
		$counter=1;
		foreach($query->result() as $row){
			
		echo "<tr>";
		echo "<td>$counter</td>";
		echo "<td><a href='".base_url()."index.php/Settings/editFullEmployee5/$row->AgencyParentID'>$row->AgencyParentID</a><i class='fa fa-edit'></i></td>";
		echo "<td>$row->ParentAgency</td>";
	     echo" <td><a href='".base_url()."index.php/Settings/editFullEmployee4/$row->AgencyParentID/'>Delete</a></td>"
	     ;
	     
		
		echo "</tr>";
		$counter++;



		 

		}
		

	
		
	}
	public function getAgencyEmployees1() {
		
		
		$this->load->library('pagination');

		$config['base_url'] = base_url().'/index.php/Settings/getAgencyEmployees/';
		
		
		$this->pagination->initialize($config);
    	$agency = $this->input->post('agency');
		$query = $this->ag->getEmployees($agency);
		$num_rows=$query->num_rows();
		$config['total_rows'] = $num_rows;
		$config['per_page'] = 10;
		echo $this->pagination->create_links();
		$counter=1;
		foreach($query->result() as $row){
			
		echo "<tr>";
		echo "<td>$counter</td>";
		echo "<td><a href='".base_url()."index.php/Settings/editFullEmployee/$row->cid/'>$row->name</td>";
		// echo "<td>$row->EmpNo</td>";
		echo "<td>$row->cid</td>";
		// echo "<td>$row->Agency</td>";
		echo "<td>$row->ParentAgency</td>";
		// echo "<td>$row->MainParentAgency</td>";
		// echo "<td>$row->PositionTitle</td>";
		// echo "<td>$row->Grade</td>";
		// echo "<td>$row->Gender</td>";
		echo "<td>$row->Email</td>";
		echo "<td>$row->Agency</td>";
	     echo" <td><a href='".base_url()."index.php/Settings/editFullEmployee1/$row->cid/'>Delete</a></td>"
	     ;
	     
		
		echo "</tr>";
		$counter++;



		 

		}
		

	
		
	}
	public function bulkimport(){
		
		
		$this->sm->import();	
		
	}
	
	

	public function updateMainParentAgency() {
		
		$this->ag->updateMainParentAgency();
		
	}
	public function updateParentAgency() {
		
		$this->ag->updateParentAgency();
		
	}
	public function updateAgency() {
		
		$this->ag->updateAgency();
		
	}
	
	public function updateSupervisorAgency() {
		
		if($this->ag->updateSupervisorAgency()=='1'){
				echo "Update success";
			
		} else echo "Update failed";
		
		
	}
	
	public function updateSupervisorAgencyParent() {
		
		if($this->ag->updateSupervisorParentAgency()=='1'){
				
			echo "directors successfully updated";	
		}
		else echo "failed";
		
	}
	
	public function updateSupervisorAgencyMainParent(){
		
		if($this->ag->updateSupervisorMainParentAgency()=='1'){
			
			echo "secretary successfully updated";
		}
			else echo "failed";
	}
	
public function updateEmployee($cid) {
		
		$this->form_validation->set_rules('fname','Fname','required|trim');
		// $this->form_validation->set_rules('mname','Mname','trim');
		// $this->form_validation->set_rules('lname','Lname','trim');
		$this->form_validation->set_rules('roleId','roleId','required|trim');
		$this->form_validation->set_rules('gender','gender','trim');
		$this->form_validation->set_rules('agencyid','Agency','required|trim');
		$this->form_validation->set_rules('agencyparentid','AgencyParent','required|trim');
		// $this->form_validation->set_rules('agencymainparentid','AgencyMainParent','required|trim');
		
		
		if($this->form_validation->run()){
			$echo="form success";
		if($this->sm->updateEmployee($cid)) {
			
			$data['statusupdate']="Success";
			$this->editFullEmployee($cid);
			
			
		}

			
			
		} else {
			echo "form error";
			echo validation_errors();
			$this->editFullEmployee($cid);
		}
		
	}

	public function updateEmployee1($cid) {
		
		
		// $this->form_validation->set_rules('agencyid','Agency','required|trim');
		$this->form_validation->set_rules('agencyparentid','AgencyParent','required|trim');
	
		
		
		if($this->form_validation->run()){
			$echo="form success";
		if($this->sm->updateEmployee1($cid)) {
			
			$data['statusupdate']="Success";
			$this->editFullEmployee3($cid);
			
			
		}

			
			
		} else {
			echo "form error";
			echo validation_errors();
			$this->editFullEmployee3($cid);
		}
		
	}

	public function updateEmployee2($cid) {
		
		
		// $this->form_validation->set_rules('agencyid','Agency','required|trim');
		$this->form_validation->set_rules('agencyparentid','AgencyParent','required|trim');
	
		
		
		if($this->form_validation->run()){
			$echo="form success";
		if($this->sm->updateEmployee2($cid)) {
			
			$data['statusupdate']="Success";
			$this->editFullEmployee5($cid);
			
			
		}

			
			
		} else {
			echo "form error";
			echo validation_errors();
			$this->editFullEmployee5($cid);
		}
		
	}
	public function editFullEmployee($cid){
			
		
					$data['employee']=$this->sm->editFullEmployee($cid);
					$this->load->view('template/includeheader',$this->dataheader);
				    $this->load->view('editfullemployee',$data);
				    $this->load->view('template/includefooter');
			
		
	}
	public function editFullEmployee1($cid){
			
		
					$data['employee']=$this->sm->editFullEmployee1($cid);
					$this->load->view('template/includeheader',$this->dataheader);
				    $this->load->view('editfullemployee1',$data);
				    $this->load->view('template/includefooter');
			
		
	}

	public function editFullEmployee2($cid){//Tamang (for deleting year of graduation) 
			
		
					$data['employee']=$this->sm->editFullEmployee2($cid);
					$this->load->view('template/includeheader',$this->dataheader);
				    $this->load->view('editfullemployee2',$data);
				    $this->load->view('template/includefooter');
			
		
	}

	public function editFullEmployee3($cid){//(Tamang for editing the year of graduation)
			
		
					$data['employee']=$this->sm->editFullEmployee3($cid);
					$this->load->view('template/includeheader',$this->dataheader);
				    $this->load->view('editfullemployee3',$data);
				    $this->load->view('template/includefooter');
			
		
	}

	public function editFullEmployee4($cid){//Tamang (for deleting the department)
			
		
					$data['employee']=$this->sm->editFullEmployee4($cid);
					$this->load->view('template/includeheader',$this->dataheader);
				    $this->load->view('editfullemployee4',$data);
				    $this->load->view('template/includefooter');
			
		
	}
public function editFullEmployee5($cid){//Tamang (view for editing the department)
			
		
					$data['employee']=$this->sm->editFullEmployee5($cid);
					$this->load->view('template/includeheader',$this->dataheader);
				    $this->load->view('editfullemployee5',$data);
				    $this->load->view('template/includefooter');
			
		
	}
	public function editFullEmployee6($AgencyID){//Tamang (view for editing the department)
			
		
					$data['employee']=$this->sm->editFullEmployee6($AgencyID);
					$this->load->view('template/includeheader',$this->dataheader);
				    $this->load->view('editfullemployee6',$data);
				    $this->load->view('template/includefooter');
	}

	public function assignAgencies() {
		
		$data['agencies']=$this->ag->listFullAgencies();
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('assignagencies',$data);
		$this->load->view('template/includefooter');
		
	}
	
	public function assignParentAgencies(){
		
		$data['parentagencies']=$this->ag->listFullParentAgencies();
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('assignparentagencies',$data);
		$this->load->view('template/includefooter');
	}
	
	public function singleParentAgencyUpdate($pagency){
		
		
		$data['pagency']=$this->ag->listSingleParentAgency($pagency);
		$data['supervisors']=$this->ag->listParentSupervisors($pagency);
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('singleparentagencyupdate',$data);
		$this->load->view('template/includefooter');
		
	}
	public function singleAgencyUpdate($agency) {
		
		$data['agency']=$this->ag->listSingleAgency($agency);
		$data['supervisors']=$this->ag->listSupervisors($agency);
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('singleagencyupdate',$data);
		$this->load->view('template/includefooter');
		
		
	}
	
	
	public function addHoliday(){
		
		$this->form_validation->set_rules('holidayname','HolidayName','trim|required');
		$this->form_validation->set_rules('startdate','StartDate','trim|required');
		$this->form_validation->set_rules('enddate','EndDate','trim|required');
		
		if($this->form_validation->run()){
			
			$name=addslashes($this->input->post('holidayname'));
			$startdate=strtotime($this->input->post('startdate'));
			$enddate=strtotime($this->input->post('enddate'));
			
			$this->hm->insertHoliday($startdate,$enddate,$name);
			$this->viewHolidays();
			
		} else {
			$this->viewHolidays();
		}
		
	}
	public function viewHolidays(){
		
		$data['holidays']=$this->hm->listHolidays();
		$this->load->view('template/includedheader',$this->dataheader);
		if($this->session->userdata('role')=='1'){
			$this->load->view('superadmin/viewholidays',$data); } else{
		$this->load->view('viewholidays',$data);}
		$this->load->view('template/includedfooter');
		
	}
	/* Sonam Tshering ods */
	
	public function view_ods_dashboard(){
		//$data['messages']=$this->db->get_where('st_message',array('RecieverId' =>$this->session->userdata('cid'),'ReadStatus'=>'N'))->result_array();
		$query = "SELECT * FROM st_message WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND ReadStatus='N'";
		$data['messages']=$this->db->query($query)->result_array();
		$this->load->view('template',$data); 
 	}

 	public function dashboard(){
 		//$data['request1']=$this->db->query("SELECT * from bpas_logins where event='Y'")->result_array();
 		$cid=$this->session->userdata('cid');
		$data['user']=$this->sm->getprofilei($cid);
	$data['editdetail']=$this->sm->sortevent();
				$data['eventdetail']=$this->sm->getevent();
		//$data['request2']=$this->db->query("SELECT * from event_table")->result_array();
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('division/dashboard',$data);
		$this->load->view('template/includefooter');
 	}
/* Sonam Tshering*/
 	public function absent(){
 		
 		$result['absent_detail']='';

 		  $agenciesimplemented="16,218,2614,293,3220,3665,378,410,412,414,420,439,442,443,444,445,446,460,461,463,466,5050,5733,5773";

              // $result['absent_count'] = $this->db->query("SELECT COUNT(*) as count FROM bpas_user_profiles p
              // LEFT JOIN bpas_attendance_log a ON p.cid = a.userid AND a.date='".date('Y/m/d')."' WHERE a.Late IS NULL AND AgencyID IN (".$agenciesimplemented.")");  

                $result['absent_detail'] = $this->db->query("SELECT* FROM bpas_user_profiles p
                        LEFT JOIN bpas_attendance_log a ON p.cid = a.userid WHERE a.Late IS NULL AND AgencyID IN (".$agenciesimplemented.")")->result_array();

                // $result['late'] = $this->db->query("SELECT* FROM bpas_user_profiles p
                //         LEFT JOIN bpas_attendance_log a ON p.cid = a.$cid AND a.date='".date('Y/m/d')."' WHERE a.Late > 9 AND AgencyID IN (".$agenciesimplemented.")")->result_array();




            
                        $this->load->view('userManagement/absentee',$result);



                   
      //$this->load->view('absent_view');
 	 }

 	 public function singleabsent()
 	   {
 	   	$this->load->view('userManagement/absent_view');
 	   }
       //Sonam Tshering
 	   public function absentSingle($param1="",$param2="")
 	   {

 	   	//echo  $parma1 ;
      $result['absent_detail']='';  
      $agenciesimplemented="16,218,2614,293,3220,3665,378,410,412,414,420,439,442,443,444,445,446,460,461,463,466,5050,5733,5773"; 
       $result['absent_detail'] = $this->db->query("SELECT* FROM bpas_user_profiles p
                       LEFT JOIN bpas_attendance_log a ON p.cid =a.userid  AND p.cid='".$param1."'  WHERE a.Late IS NULL AND AgencyID IN (".$agenciesimplemented.")")->result_array();

       $this->load->view('userManagement/absent1',$result);
         }
 
 	 // }
  /* sonam Tshering ods */
	public function view_dispatch()
	 {
	 	$data['message']= '';
        $data['place']=$this->db->get('st_place')->result_array();
        $data['file_name'] = $this->db->get_where('st_dispatch_files',array('min_code' =>$this->session->userdata('mincode'),'div_code'=>$this->session->userdata('dipcode'),'dep_code'=>$this->session->userdata('deptName')))->result_array();
        $data['seq_Disp']=$this->db->get_where('st_dispatch_sequence_no',array('min_Code' =>$this->session->userdata('mincode'),'div_Code'=>$this->session->userdata('dipcode'),'dep_Code'=>$this->session->userdata('deptName')))->row()->last_sequence_no;
         $this->load->view('add_dispatch', $data);
	 	
	 }

	 /*  Sonam Tshering  add dispatch */
	 function getsequenceNo(){
	 	$data1['seq_Disp']=$this->db->get_where('st_dispatch_sequence_no',array('min_Code' =>$this->session->userdata('mincode'),'div_Code'=>$this->session->userdata('dipcode'),'dep_Code'=>$this->session->userdata('deptName')))->row()->last_sequence_no;
	 	if($data1!=null && $data1!=""){
	 		//echo $data1;
	 		 $arr = $data1;
            $var =implode(',',$arr);
           echo $var+1;
	 		//echo " good";

	 	}
	 	else{
	 		echo "Sorry";
	 	}
	 }
	 function add($param="", $param1=""){
	 	//die('sdfsdf:'.implode(', ', $_POST['copy_to']));
  $dir="";
  $data1['copy_to']="";

		if($param=='add')
		 {
		$data1['subject']=$this->input->post('subject'); 
		$data1['dispatch_addr']=$this->input->post('address_to');   
		$data1['department']=$this->input->post('agency'); 
		$data1['created']=$this->input->post('date'); 
		$a=$this->input->post('copy_to');
		$data1['copy_to']=implode(',', (array) $a);
		//var_dump($this->input->post('copy_to'));
		 //$data1['copy_to']=implode(',',$this->input->post('copy_to'));

		//$data1['copy_to']=implode(', ', ($this->input->post('copy_to')));
		
		//$data1['copy_to']=implode(', ', $_POST['copy_to']);
	    //if(!empty($this->input->post('copy_to')))
	    	 //{
	    	 	// $data1['copy_to']=implode(', ', $_POST['copy_to']);
	    	 	//$data1['copy_to']=implode(', ', ($this->input->post('copy_to'));
	    	 //}

		$data1['file_no']=$this->input->post('finalfileid');
		$data1['Place']=$this->input->post('place'); 
		$data1['remarks']=$this->input->post('remarks');
		if(!empty($_FILES["attachment"]["name"])){
			$year=date('Y');
			$month=date('m');
			$day=date('d');
			//die('/Applications/XAMPP/xamppfiles/htdocs/uploads/'.$year.'/'.$month.'/'.$day.'/');
			$dir='/Applications/XAMPP/xamppfiles/htdocs/uploads/'.$year.'/'.$month.'/'.$day.'/';  
			if (!file_exists($dir))  {
				mkdir($dir, 0777, true);
			}
            move_uploaded_file($_FILES['attachment']['tmp_name'],$dir.$_FILES["attachment"]["name"]);//move_uploaded_file(file,newlocation) or file_path, moved_path)
            $data1['attachment']=$dir.$_FILES["attachment"]["name"];
        }
		   
		   //$data1['email_address']=implode(',',$_POST['sent_via_email']);
		       
		       	if(isset($_POST['sent_via_email']) && !empty($_POST['sent_via_email']))
		       	 {
		       	$config = array(
                 'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
                 'smtp_host' =>  'smtp.gmail.com', 
                 'smtp_port' => 465,
                 'smtp_user' => 'rightwinger29@gmail.com',
                 'smtp_crypto' => 'tls',
                 'smtp_pass' => 'Karchung@2019',
                 'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
                 'mailtype' => 'html', //plaintext 'text' mails or 'html'
                 'smtp_timeout' => '4', //in seconds
                 'charset' => 'iso-8859-1',
                 'wordwrap' => 'TRUE',
                 'newline'=> 'rn'
    // 
               );
		  //Email content
 $htmlContent = '<h1>Sending email via SMTP server . The rightwinger29@gmail is an personal email accout of Sonam Tshering created especially  for test purpose of email configuration. Thank you </h1>';
// $htmlContent .=$dir;
//$htmlContent .= '<p>This email has sent via SMTP server from  MoEA DISPATCH SYSTEM to test purpose.  </p>';

       $this->email->initialize($config);
       $this->load->library('email',$config);
       $this->email->message($htmlContent);
        
        $from = $this->config->item('smtp_user');
        $data2['email_address']=implode(',',$_POST['sent_via_email']);
        $to = $data2['email_address'];

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        //$this->email->attach($dir);
        //$this->email->cc($cc);
         //}

               if ($this->email->send()) {
                    echo 'Your Email has successfully been sent successfully via dispatched system.';
                 } else {
                           show_error($this->email->print_debugger());
                            }
                   }
		    
		    


		//$data['department']=2;

		$data1['sent_via']=implode(', ', $_POST['sent_via']);
		$data1['dispatch_by']=$this->session->userdata('name');
		$data1['file_name']=$this->input->post('finalfilename');
		$data1['Dispatch_no']=$this->input->post('lastweqno');
		$data1['Department_name']=$this->session->userdata('deptName');
		$data1['Division']=$this->session->userdata('dipcode');
		 $this->db->insert('st_dispatch_table', $data1);  
		

		   }
 
      if($this->db->affected_rows()>0) {

        
		//die('this is before insert'.$param) ;
		 //$sonam=$this->db->insert('st_dispatch_table', $data1); 
        $seq['last_sequence_no']=$this->input->post('lastweqno');
     		$this->db->where(array('min_Code' =>$this->session->userdata('mincode'),'div_Code'=>$this->session->userdata('dipcode'),'dep_Code'=>$this->session->userdata('deptName')));
     		$this->db->update('st_dispatch_sequence_no',$seq);
     		$data1['message']= 'Successfully Dispatch .';
     		$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
     	}
     	else{
     		
     		$data1['message']= 'not able to insert. please try again';
     		$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
     		 }

     		}


		
		//die($param.$this->db->affected_rows());
     	//if($this->db->affected_rows()>0 && $param=='contine')
     		//die('ggggg');
 //     		$seq['last_sequence_no']=$this->input->post('lastweqno');
 //     		$this->db->where(array('min_Code' =>$this->session->userdata('mincode'),'div_Code'=>$this->session->userdata('dipcode'),'dep_Code'=>$this->session->userdata('deptName')));
 //     		$this->db->update('st_dispatch_sequence_no',$seq);
 //     		$data['message']= 'Data successfully inserted';
 // 		 	$data['place']=$this->db->get('st_place')->result_array();
 //            $data['file_name'] = $this->db->get_where('st_dispatch_files',array('min_code' =>$this->session->userdata('mincode'),'div_code'=>$this->session->userdata('dipcode'),'dep_code'=>$this->session->userdata('deptName')))->result_array();
 //         	$this->load->view('add_dispatch', $data);
 //     	}
 //     	//else 
 //     	if($this->db->affected_rows()>0 && $param=='discontinue'){
     		
 //     		$seq['last_sequence_no']=$this->input->post('lastweqno');
 //     		$this->db->where(array('min_Code' =>$this->session->userdata('mincode'),'div_Code'=>$this->session->userdata('dipcode'),'dep_Code'=>$this->session->userdata('deptName')));
 //     		$this->db->update('st_dispatch_sequence_no',$seq);
 //     		$data1['message']= 'Data is inserted.';
 //     		$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
 //     	}
 //     	else{
 //     		die('sdfsdfsdfsdfsdfsd');
 //     		$data1['message']= 'not able to insert. please try again';
 //     		$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
 //     	}
		
             

	// }
     		//sonam Tshering


     function trackDispatch($param="")	
      {
      	$this->load->view('trackDispatch1');
      }	
                                  
    function addDaks($param="")
{

	//die($this->input->post('lastweqno'));
	    $FORMdata['subject']=$this->input->post('subject'); 
		$FORMdata['From']=$this->input->post('From');
		//$data['department']=$this->input->post('Agency');
		$FORMdata['created']=$this->input->post('date');
		//$data['copy_to']=implode(', ', $_POST['copy_to']);
		//$data['file_no']=$this->input->post('finalfileid');
		$FORMdata['place']=$this->input->post('place');
		$FORMdata['Remark']=$this->input->post('remarks');
		$FORMdata['dakLetterNo']=$this->input->post('lastweqno');
		$FORMdata['RletterNo']=$this->input->post('RletterNo');  
		$FORMdata['Recieved_by']=$this->input->post('Recieved_by');
		if(!empty($_FILES["letterAttachment"]["name"])){
			$year=date('Y');
			$month=date('m');
			$day=date('d');
			//die('/Applications/XAMPP/xamppfiles/htdocs/uploads/'.$year.'/'.$month.'/'.$day.'/');
			$dir='/Applications/XAMPP/xamppfiles/htdocs/uploads/'.$year.'/'.$month.'/'.$day.'/';  
			if (!file_exists($dir))  {
				mkdir($dir, 0777, true);
			}
            move_uploaded_file($_FILES['letterAttachment']['tmp_name'],$dir.$_FILES["letterAttachment"]["name"]);
            $FORMdata['Attachment']=$dir.$_FILES["letterAttachment"]["name"];
        }
		//$data['department']=2;
		//$data['sent_via']=implode(', ', $_POST['sent_via']);
		//$data['Received_by']=$this->session->userdata('name'); 
		//$data['letterNo']=$this->input->post('letterNo');
		//$data['file_name']=$this->input->post('finalfilename');
		$this->db->insert('st_dak_details', $FORMdata); 
     	if($param=='contine'){
     		$seq['last_sequence_no']=$this->input->post('lastweqnotoupdate');
     		$this->db->where(array('min_Code' =>$this->session->userdata('mincode'),'div_Code'=>$this->session->userdata('dipcode'),'dep_Code'=>$this->session->userdata('deptName')));

     		$this->db->update('st_dak_sequence_no',$seq);
     		$data['message']= 'Data successfully inserted';
 		 	$data['place']=$this->db->get('st_place')->result_array();
            //$data['file_name'] = $this->db->get_where('st_dispatch_files',array('min_code' =>$this->session->userdata('mincode'),'div_code'=>$this->session->userdata('dipcode'),'dep_code'=>$this->session->userdata('deptName')))->result_array();
         	$this->load->view('add_Dak', $data);
     	      }
     	else if($param=='discontinue'){
     		//die($this->input->post('lastweqnotoupdate').','.$this->session->userdata('mincode').','.$this->session->userdata('dipcode').','.$this->session->userdata('deptName'));
     		$seq['last_sequence_no']=$this->input->post('lastweqnotoupdate');
     		$this->db->where(array('min_Code' =>$this->session->userdata('mincode'),'div_Code'=>$this->session->userdata('dipcode'),'dep_Code'=>$this->session->userdata('deptName')));

     		$this->db->update('st_dak_sequence_no',$seq);

     		$data1['message']= '<br ><span class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 alert alert-info text-center">Data is  sucessfully inserted with  dak no: <b>'.$this->input->post('lastweqno').'</b></span>';
     		$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
     	}
     	else{
     		$data1['message']= 'not able to insert. please try again';
     		$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);
     	}
		
}
/* Sonam Tshering*/
   public function add_files($param1="")
    {
    	

		$data['message']=$param1;
		$data['ministryList']=$this->db->get('bpas_master_agencymainparent')->result_array();
		$data['division']=$this->db->get('bpas_master_agency')->result_array();
		$data['departmentList']=$this->db->get('bpas_master_agencyparent')->result_array();
		$data['slNo']=$this->db->get('st_dispatch_sequence_no')->row()->last_sequence_no;
    	//$data['file']=$this->atd->fileName($file_name,$division_name,$department_name);

    	//Transfering data to Model
    	//$this->atd->fileName($data);
    	$this->load->view('addfile',$data);
    	//$data['message'] = 'Data Inserted Successfully';
    }
/* Sonam Tshering */
    public function intp()
     {
     	$data1['file_name']=$this->input->post('fileName');
     	$data1['div_code']=$this->session->userdata('divName');    //$this->input->post('divName');
     	$data1['dep_code']=$this->session->userdata('deptName');
     //$this->input->post('deptName');
     	$this->atd->fileName($data1);
     	if($this->db->affected_rows()>0){

     		
     		$data['message']= 'successfully inserted';
     	}
     	else{
     		$data['message']= 'not able to insert. please try agin';
     	}

     	$this->load->view('addfile',$data);



    	
     }
    /* Sonam Tshering */ 
public function recieve_letter()
{
 $this->load->view('reciept');

}
/*Sonam Tshering */

public function forwardletter() {
	$query = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND completeStatus='N'";
		$data['messages1']=$this->db->query($query)->result_array();
		$this->load->view('template',$data); 
 	}


public function reciept()

{
	$data[' subject']=$this->input->post('subject');
	$data['letter_no']=$this->input->post('letter_no');
	$data['agency']=$this->input->post('agency');
	$data[' forward_to']=$this->input->post('');
}



	
	public function updateSingleSupervisor() {
		
		$supervisor = $this->input->post('supervisor');
		$agency = $this->input->post('agency');
		
		if($this->ag->updateSingleSupervisor($supervisor,$agency)){
			
			echo "1";
		} 
	}	
	public function viewRoles() {
		
		$data['sadmins']=$this->sm->getSadmin();
		$data['admins']=$this->sm->getAdmin();
		$data['agencyheads']=$this->sm->getAgencyhead();
		$data['divisionheads']=$this->sm->getDivisionhead();
		
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('superadmin/viewroles',$data);
		$this->load->view('template/includefooter');
		
	}
	
	public function profile(){
		
		$cid=$this->session->userdata('cid');
		$data['user']=$this->sm->getprofile($cid);
		
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('profile',$data);
		$this->load->view('template/includefooter');
		
		
	}

	public function profilei(){
		
		$cid=$this->session->userdata('cid');
		$data['user']=$this->sm->getprofilei($cid);
		
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('profile',$data);
		$this->load->view('template/includefooter');
		
	}

	public function Editprofile(){
		
		$cid=$this->session->userdata('cid');
		$data['user']=$this->sm->getprofile($cid);
		
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('Editprofile',$data);
		$this->load->view('template/includefooter');
		
		
	}
	

	

	public function membersearch(){//leki
 	
		
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('membersearch2');
		$this->load->view('template/includefooter');
		
		
	}

	public function membersearch1(){//Tamang
 	
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->model("csv_import_model");
		$data['data'] = $this->csv_import_model->select();
		$this->load->view("csv_import", $data);
		$this->load->view('template/includefooter');
		
		
	}
public function membersearch2(){//Tamang
 	
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view("deleteuser");
		$this->load->view('template/includefooter');
		
		
	}

	

	public function membersearch3(){//Tamang
 	
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->model("main_model");  
           $data["fetch_data"] = $this->main_model->fetch_data(); 
          $data['request']=$this->db->get('bpas_master_agencyparent')->result_array();
          $data['request1']=$this->db->get('bpas_master_agency')->result_array();
          $this->load->view("main_view", $data);  
		$this->load->view('template/includefooter');
		
		
	}
	public function membersearch5(){//Tamang
 	
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->model("main_model");  
           $data["fetch_data"] = $this->main_model->fetch_data(); 
         
          $this->load->view("main_view1", $data);  
		$this->load->view('template/includefooter');
		
		
	}
	public function membersearch6(){//Tamang
 	
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->model("main_model");  
           $data["fetch_data"] = $this->main_model->fetch_data(); 
         $data['request']=$this->db->get('bpas_master_agencyparent')->result_array();
		$this->load->view("main_view2", $data);  
		$this->load->view('template/includefooter');
		
		
	}



	

	public function student_detail(){
 	
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->model("main_model");  
           $data["fetch_data"] = $this->main_model->fetch_data(); 
          
          $this->load->view("student_detail", $data);  
		$this->load->view('template/includefooter');
		
		
	}

	public function membersearch4(){//Tamang
 	
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->model("main_model");  
           $data["fetch_data"] = $this->main_model->fetch_data1();
          $this->load->view("main_view");  
		$this->load->view('template/includefooter');
		
		
	}


	public function form_validation1()  
    { //Tamang 
           //echo 'OK';  
           // $this->load->library('form_validation');  
    	$this->form_validation->set_rules("cid", "cid", 'required|numeric');
           $this->form_validation->set_rules("FirstName", "FirstName", 'required'); 
           $this->form_validation->set_rules("gender", "gender", 'required|alpha');
          
           $this->form_validation->set_rules("parent", "parent", 'required|numeric');
           $this->form_validation->set_rules("agency", "agency", 

           	'required|numeric');
            
           if($this->form_validation->run())  
           {  
                //true  
                $this->load->model("main_model");  
                $data = array(  
                	"cid"     =>$this->input->post("cid"),
                     "FirstName"     =>$this->input->post("FirstName"),  
                                           "gender"     =>$this->input->post("gender"),
                     "AgencyParentID"     =>$this->input->post("parent"),
                     "AgencyID"     =>$this->input->post("agency")  
                         
                );  
               
                 $data1 = array(  
                	"relatedUserId"     =>$this->input->post("cid"),
                	"AgencyParentID"     =>$this->input->post("parent"),
                     "AgencyID"     =>$this->input->post("agency"),
                    "password"   => md5($this->input->post("cid"))
            );
              
                if($this->input->post("insert"))  
                {  
                     $this->main_model->insert_data($data,$data1);  
                     redirect(base_url() . "index.php/Settings/inserted");  
                }  
           }  
           else  
           {  
                //false  
                $this->membersearch3();

           }  
      }  
public function form_validation2() //Tamang (adding new department and department_id)  
    {  
           //echo 'OK';  
           // $this->load->library('form_validation');  
    	$this->form_validation->set_rules("cid", "cid", 'required|numeric');
           $this->form_validation->set_rules("FirstName", "FirstName", 'required'); 
           
            
           if($this->form_validation->run())  
           {  
                //true  
                $this->load->model("main_model");  
                $data = array(  
                	"AgencyParentID"     =>$this->input->post("cid"),
                     "name"     =>$this->input->post("FirstName"),  
                    
                         
                );  
               
                
              
                if($this->input->post("insert"))  
                {  
                     $this->main_model->insert_data1($data);  
                     redirect(base_url() . "index.php/Settings/inserted1");  
                }  
           }  
           else  
           {  
                //false  
                $this->membersearch5();  
           }  
      } 

      public function form_validation3(){//Tamang
	

			$this->form_validation->set_rules("item", "item", 'required|numeric');
           $this->form_validation->set_rules("quantity", "quantity", 'required'); 
           $this->form_validation->set_rules("quantity1", "quantity1", 'required|numeric');
            
            
            
    	
            
           if($this->form_validation->run())  
           { 

                 
                $this->load->model("main_model");  
                $data = array(  
                	"AgencyParentID"     =>$this->input->post("item"),
                     "name"     =>$this->input->post("quantity"),
                     "AgencyID"     =>$this->input->post("quantity1"),    
                    
                         
                );  
               
                
         
              
                if($this->input->post("insert"))  
                {  

                     $this->main_model->insert_data2($data);  
                     redirect(base_url() . "index.php/Settings/inserted2");  
                }
               }  
               else  
           {  
                //false  
                $this->membersearch6();  
           }  
           
          
      } 
	 

     
      public function inserted()  
      { //Tamang 
           $this->membersearch3();  
      }  
       public function inserted1()  
      {  //Tamang
           $this->membersearch5();  
      }  
      public function inserted2()  
      {  //Tamang
           $this->membersearch6();  
      }  
     public function delete_data(){//Tamang 
           $this->load->view('template/includeheader',$this->dataheader);
			$id = $this->uri->segment(3); 
			$this->load->model("main_model");  
           $this->main_model->delete_data($id);  
           redirect(base_url() ."index.php/Settings/deleted");  
           $this->load->view('template/includefooter');
      }  
      public function deleted()  
      {  //Tamang
      	 
      	redirect(base_url() ."index.php/Settings/viewUsers");  
          
	 }

	 public function delete_data1(){//Tamang(Deleting the year of graduation)  
           $this->load->view('template/includeheader',$this->dataheader);
			$id = $this->uri->segment(3); 
			$this->load->model("main_model");  
           $this->main_model->delete_data1($id);  
           redirect(base_url() ."index.php/Settings/deleted1");  
           $this->load->view('template/includefooter');
      }  
      public function deleted1()  
      {  //Tamang
      	 
      	redirect(base_url() ."index.php/Settings/viewUsers1");  
          
	 }

	 public function delete_data2(){//Tamang(Deleting the year of graduation)  
           $this->load->view('template/includeheader',$this->dataheader);
			$id = $this->uri->segment(3); 
			$this->load->model("main_model");  
           $this->main_model->delete_data2($id);  
           redirect(base_url() ."index.php/Settings/deleted2");  
           $this->load->view('template/includefooter');
      }  
      public function deleted2()  
      {  //Tamang
      	 
      	redirect(base_url() ."index.php/Settings/viewUsers2");  
          
	 }

	  public function delete_data3(){//Tamang(Deleting the year of graduation)  
           $this->load->view('template/includeheader',$this->dataheader);
			$id = $this->uri->segment(3); 
			$this->load->model("main_model");  
           $this->main_model->delete_data3($id);  
           redirect(base_url() ."index.php/Settings/deleted3");  
           $this->load->view('template/includefooter');
      }  
      public function deleted3()  
      {  //Tamang
      	 
      	redirect(base_url() ."index.php/Settings/viewUsers");  
          
	 }
   //    public function update_data(){  
   //    	$this->load->view('template/includeheader',$this->dataheader);
	 	// $user_id = $this->uri->segment(3);  
   //         $this->load->model("main_model");  
   //         $data["user_data"] = $this->main_model->fetch_single_data($user_id);  
   //         $data["fetch_data"] = $this->main_model->fetch_data();  
   //         $this->load->view("main_view", $data); 
   //         $this->load->view('template/includefooter'); 
   //    }  

  
      // public function updated()  
      // {  
      //      $this->membersearch3();  
      // } 

    //   public function fetch_data1(){  
    //   	$this->load->view('template/includeheader',$this->dataheader);
	  	// $this->load->model("main_model");  
    //             $data = array(  
                      
    //                  "course"          =>$this->input->post("course"),  
    //                  "year"     =>$this->input->post("year")  
                         
    //             );  
    //         $user_id = $this->uri->segment(3);  
    //        $this->load->model("main_model");  
    //        $data["user_data"] = $this->main_model->fetch_single_data1($user_id); 
    //        $data1["fetch_data"] = $this->main_model->fetch_data1($data);  
    //        $this->load->view("main_view", $data1); 
    //        $this->load->view('template/includefooter'); 
    //   }   
    public function updated1()  
      {  //Tamang
           $this->membersearch4();  
      }  
   



		public	function viewmember1(){//leki
		
  			$name=$this->input->post('name');
  			// $department=$this->input->post('department');

  			 $department= $_POST['f1'];
  		
		
  	// 	$issuance= $this->db->query("SELECT FirstName FROM bpas_user_profiles where FirstName='".$name."'")->row()->FirstName;

 		
			// $data['checkissue']=$this->db->get_where('bpas_user_profiles', array('FirstName' => $name))->result_array();
		  


  			// $issuance= $this->db->query("SELECT FirstName FROM bpas_user_profiles where FirstName='".$name."'")->row()->FirstName;


  			// $issuance1= $this->db->query("SELECT department FROM bpas_user_profiles where department='".$department."'")->row()->department;

 						//OR

  	$issuance=$this->sm->search1($name,$department);//to see if there is record or not in db
  			


  			if(sizeof($issuance)>0) 
		  {

	 	$data['checkissue']=$this->db->get_where('bpas_user_profiles', array('FirstName' => $name))->result_array();
		  
		  $data1['checkissue']=$this->db->get_where('bpas_user_profiles', array('department' => $department))->result_array();
		  



		 $this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('viewmember',$data,$data1);
		$this->load->view('template/includefooter');
	}
	 else{
	  	 $data['message']="There is no record of Alumni";
	 			$this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data);
	 // 
	   }


	   }


	   public function addevents(){//leki
	   	if($this->session->userdata('logged_in')=='1'){
	   		//$query['editdetail']=$this->db->get('event_table')->result_array();
	   		$data['editdetail']=$this->sm->getevent();
	   	$this->load->view('template/includeheader',$this->dataheader);
				$this->load->view('superadmin/add_events',$data);
				$this->load->view('template/includefooter');
			}
	
	 }
function addevent1($param1=""){//leki
	
	 	$this->form_validation->set_rules('event','startdate','enddate','required');	

  		$data1=$this->input->post('event'); 
  		$data2=$this->input->post('event1'); 
  		$data3=$this->input->post('date'); 

  		
  		$data['getdetail']=$this->sm->getevent($param1);

		$config['upload_path'] = "./assets/img/event/";
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']     = '1000';
		$config['max_width'] = '8000';
		$config['max_height'] = '5000';
		$config['overwrite'] = true;
		$config['file_name'] = $param1;
		//$pic=$config['file_name'];
		$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload('image')){
			
			$data['error']=$this->upload->display_errors();
				
			
		} else {
			
			$filedata = $this->upload->data();
			
			// $this->db->insert('event_table', $data); 
			$pic=$filedata['raw_name'].$filedata['file_ext'];
			$data['image']=$pic;
			$data['success_msg']="Successfully uploaded";
			if($this->sm->updateeventpic($pic,$param1,$data1,$data2,$data3)) {
					
				$query['editdetail']=$this->db->get('event_table')->result_array();
				redirect('Settings/viewevent');//direct superadmin and viewing page doesnt work ,have to go settings
				
			}
			$this->load->view('template/includeheader',$this->dataheader);
			$this->load->view('edit_event',$data);
			$this->load->view('template/includefooter');
		}

  	}
  		

  		 public function addevents2(){//leki
	   	if($this->session->userdata('logged_in')=='1'){
	   		//$query['editdetail']=$this->db->get('event_table')->result_array();
	   		$data['editdetail']=$this->sm->getevent();
	   	$this->load->view('template/includeheader',$this->dataheader);
				$this->load->view('superadmin/add_events2',$data);
				$this->load->view('template/includefooter');
			}
	
	 }
 
 public function viewevent(){//leki
 	$data['editdetail']=$this->sm->getevent();
 	//$data['editdetail']=$this->db->get('event_table')->result_array();//pulls all from db
  		//$data['user']=$this->sm->getprofile($cid);
  		$this->load->view('template/includeheader',$this->dataheader);
  		$this->load->view('superadmin/edit_event',$data);
  		$this->load->view('template/includefooter');
  	


 }
  	public function editevent($param1=""){//leki
  			// $data=$_POST["edit"]; 
  			
		// $data=$this->input->post("edit");
		// die($data);
		// $data12['edit']=$_POST['edit'];
		// $data9['issue1']=implode(' ', $_POST['issue1']);
		// $d9=implode(" ",$data9);
		

//$d3= $_POST['edit'];
//$d3=$this->input->post('edit');

// $data12['event']=implode(', ', $_POST['edit']);
// 		$data4=implode(" ",$data12);

$this->db->where('event_id',$param1);
$query['editdetail']=$this->db->get('event_table')->result_array();
$data['user']=$this->sm->editevent($param1);

 // $d=implode(" ", $query);
// die($d);
$this->load->view('template/includeheader',$this->dataheader);
$this->load->view('superadmin/update_event',$query);
$this->load->view('template/includefooter');
  	} 



  	public function updateevent($param1=""){//leki
  		$d1=$this->input->post("editname");
		$d2=$this->input->post("editdate");
		$d3=$this->input->post("editevent");
		//$d4=$this->input->post("image");
		 
$data['getdetail']=$this->sm->getevent($param1);

		
		$config['upload_path'] = "./assets/img/event/";
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']     = '1000';
		$config['max_width'] = '8000';
		$config['max_height'] = '5000';
		$config['overwrite'] = true;
		$config['file_name'] = $param1;
		//$pic=$config['file_name'];
		$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload('image')){
			
			$data['error']=$this->upload->display_errors();
				
			
		} else {
			
			$filedata = $this->upload->data();
			$pic=$filedata['raw_name'].$filedata['file_ext'];
			$data['image']=$pic;
			$data['success_msg']="Successfully uploaded";
			 
// //$data['eventname']=$this->sm->eventupdate1($param1,$pic);
			if($data['eventname']=$this->sm->eventupdate($pic,$param1,$d1,$d2,$d3)){
			echo "successfully updated";	
			}
			
			else{
				echo"Not an approprite size";
			}



}

// $data['eventname']=$this->sm->eventupdate($pic,$param1,$d1,$d2,$d3);




  	}


  	public function deleteevent($param1="") {//leki

$data=$this->sm->eventdelete($param1);


  	}

  	public function uploadpic1($param1=""){//leki

		
		// $cid=$this->session->userdata('cid');
		 $data['getdetail']=$this->sm->getevent($param1);

		
		$config['upload_path'] = "./assets/img/event/";
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']     = '100';
		$config['max_width'] = '8000';
		$config['max_height'] = '5000';
		$config['overwrite'] = true;
		$config['file_name'] = $param1;
		//$pic=$config['file_name'];
		$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload('image')){
			
			$data['error']=$this->upload->display_errors();
				
			
		} else {
			
			$filedata = $this->upload->data();
			$pic=$filedata['raw_name'].$filedata['file_ext'];
			
			$data['success_msg']="Successfully uploaded";
			if($this->sm->updateeventpic($pic,$param1)) {
					
				$query['editdetail']=$this->db->get('event_table')->result_array();
				redirect('Settings/addevents2');//direct superadmin and viewing page doesnt work ,have to go settings
				
			}
			$this->load->view('template/includeheader',$this->dataheader);
			$this->load->view('edit_event',$data);
			$this->load->view('template/includefooter');
		}
		
	}
	   
	public function updateContact() {
		
		$email=$this->input->post('email');
		$occupation=$this->input->post('occupation');
		$organization=$this->input->post('organization');
		

		if($this->sm->updateContact($email,$occupation,$organization)) {
			
			echo "1";
			
		} else echo "0";
	}
	public function updateContact1() {
		
		
		$office_address=$this->input->post('office_address');
		$contact_address=$this->input->post('contact_address');
		$college=$this->input->post('college');
		
		

		if($this->sm->updateContact1($office_address,$contact_address,$college)) {
			
			echo "1";
			
		} else echo "0";
	}
public function updateContact2() {
		
		
		
		$master=$this->input->post('master');
		$phD=$this->input->post('phD');
		$other=$this->input->post('other');
		
		if($this->sm->updateContact2($master,$phD,$other)) {
			
			echo "1";
			
		} else echo "0";
	}
public function updateContact3() {
		
		
		$research_paper=$this->input->post('research_paper');
		$journal=$this->input->post('journal');
		$book=$this->input->post('book');
		

		if($this->sm->updateContact3($research_paper,$journal,$book)) {
			
			echo "1";
			
		} else echo "0";
	}
public function updateContact4() {
		
		
		$seminar=$this->input->post('seminar');
		$training=$this->input->post('training');
		$workshop=$this->input->post('workshop');

		if($this->sm->updateContact4($seminar,$training,$workshop)) {
			
			echo "1";
			
		} else echo "0";
	}


	public function changePassword() {
		
		$old=$this->input->post('old');
		$new=$this->input->post('newpass');
		if($this->sm->checkold($old)) {
			
			if($this->sm->changepass($new)) {
				echo "1";
			} else echo "0";
		} else echo "2";
		
		
	}

	public function uploadpic(){
		
		$cid=$this->session->userdata('cid');
		$data['user']=$this->sm->getprofile($cid);
		
		$config['upload_path'] = "./assets/img/profile/";
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']     = '100';
		$config['max_width'] = '8000';
		$config['max_height'] = '5000';
		$config['overwrite'] = true;
		$config['file_name'] = $cid;
		//$pic=$config['file_name'];
		$this->load->library('upload', $config);
		
		if(!$this->upload->do_upload('userfile')){
			
			$data['error']=$this->upload->display_errors();
				
			
		} else {
			
			$filedata = $this->upload->data();
			$pic=$filedata['raw_name'].$filedata['file_ext'];
			
			$data['success_msg']="Successfully uploaded";
			if($this->sm->updateprofilepic($pic)) {
					
				$data['user']=$this->sm->getprofile($cid);
				redirect('Settings/profile');
				
			}
			$this->load->view('template/includeheader',$this->dataheader);
			$this->load->view('profile',$data);
			$this->load->view('template/includefooter');
		}
		/*Sonam Tshering */
	}
	 public function getmessage($param1=""){
		$data['ReadStatus']='Y';
	 	$this->db->where('Id', $param1);
	 	// $data['RecieverName']=$this->session->userdata('name'); /* added reciver name as soon as reciver clicks on message box the message*/
        $this->db->update('st_message', $data);
		$data['message']=$this->db->get_where('st_message',array('Id' =>$param1))->row();

		$query = "SELECT * FROM st_message WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND ReadStatus='N'";
		$data['messages']=$this->db->query($query)->result_array();
		//$this->db->get_where('st_message',array('RecieverId' =>$this->session->userdata('cid'),'ReadStatus'=>'N'))->result_array();
		$data['userlist']=$this->db->get_where('bpas_user_profiles',array('AgencyMainParentID' =>$this->session->userdata('ministryId'),'AgencyParentID'=>$this->session->userdata('parentID'),'AgencyID'=>$this->session->userdata('agencyID')))->result_array();
		$this->load->view('stmessage',$data); 
	}

	function forward($param1='', $param2=''){
		$data1['message']='';
		$data['ForwarderId']=$this->session->userdata('cid');
		$data['ForwarderName']=$this->session->userdata('name');
	
		$data['Designation']=$this->session->userdata('position'); /* title ..I have created Designation in Stmessage table */
		
		 $data['RecieverId']=implode(', ', $_POST['forwardto']);
		 // $Rcid = implode($data1);

		 

		     

		 
		// $Rcid = implode(" ", $data1);

		// if(isset($data1['RecieverId']))
		// {
		// 	$Rcid = implode(" ", $data1);
			// $data['RecieverName']=$this->ag->name($Rcid);


		// }

		// // var_dump ($data1['RecieverId']);
    // var_dump ($Rcid);
		

		
		 
                                              


	   // $data['RecieverName']=$this->ag->name($Rcid);

	  
        $this->db->update('st_message', $data);
        if($this->db->affected_rows()>0){
        	$dat['ReadStatus']='N';
        	$dat['forwardStatus']='Y';
		 	$this->db->where('Id', $param1);
	        $this->db->update('st_message', $dat);
			$data1['message']='<br /><br /><br /><span class="alert alert-info">You have successfully forwarded the message</span> <br /><br /><br />
			 	<a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';
        }
        else{
			$data1['message']='<br /><br /><br /><span class="alert alert-danger">Not able to forward. please try again </span><br /><br /><br /><a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';
        }
        $this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);

    }
//sonam Tshering

        function forwardnew($param='' ,$param2=''){
			$Updatedata['forwardStatus']='N';
        //die(implode(',', $_POST['forwardto']));
        	$data1['message']='';
        	$Updatedata['ForwarderId']=$this->session->userdata('cid');
        	$Updatedata['ForwarderName']=$this->session->userdata('name');
        	$Updatedata['Designation']=$this->session->userdata('position');
        	$Updatedata['RecieverId']=implode(',',$_POST['forwardto']);
            $Updatedata['Message']=$this->input->post('remarks');
        	$this->db->where('letter_no',$this->input->post('letterNo'));
        	$this->db->update('st_forward',$Updatedata);

        	    if($this->db->affected_rows()>0) {
        	    	$dat['ReadStatus']='N';
        	    $this->db->where('letter_no',$param.'/'.$param2);
        	    $this->db->update('st_forward',$dat);

        	    $data1['message']='<br /><br /><br /><span class="alert alert-info">You have successfully forwarded the message</span> <br /><br /><br />
			 	<a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';

		        }
        	    

        	 else{
			$data1['message']='<br /><br /><br /><span class="alert alert-danger">Not able to forward. please try again </span><br /><br /><br /><a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';

        }

        $this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);

  }
  //sonam tshering

  function forwardnew1($param=''){

  	
  	
			$Updatedata['forwardStatus']='Y';
			//if($param ==)
        //die(implode(',', $_POST['forwardto']));
        	$data1['message']='';

        	// if(isset($this->session->userdata('cid') && $this->session->userdata('name')) )
        	// {

         //     echo "it is inside";
        	//$Updatedata['ForwarderId']=$this->session->userdata('cid'); 
        	$Updatedata['SenderId']=$this->session->userdata('cid');
        	$Updatedata['SenderName']=$this->session->userdata('name');
        	$Updatedata['ForwarderName']=$this->session->userdata('name');
        	$Updatedata['RecievedLetter']=$this->input->post('Rletter'); 
        	$Updatedata['subject']=$this->input->post('subject');
        	  //}


        	$Updatedata['Designation']=$this->session->userdata('position');
        	$Updatedata['RecieverId']=implode(',',$_POST['forwardto']);
            $cids=explode(", ", $Updatedata['RecieverId']);
              foreach ($cids as $key => $cid) {
                 if(trim($cid)!=""){
            $Updatedata['RecieverName']=$this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->FirstName. ' '.$this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->MiddleName.' '.$this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->LastName .', ';

                                                        }  }

            $Updatedata['Message']=$this->input->post('remarks');	
            $Updatedata['letter_no']=$this->input->post('letterNo');
            $Updatedata['ActionDate']=date('Y-m-d');
            $query=$this->ag->forward1($Updatedata);
        	//$this->db->where('letter_no',$this->input->post('letterNo'));
        	//$this->db->update('st_forward',$Updatedata);
        	//$this->db->insert('st_forward',$Updatedata);

        	    if($this->db->affected_rows()>0) {
        	    	//echo "<span class="alert alert-danger">Inintiative of ICT Division, MoEA</span>";

        	    	$dat['ReadStatus']='N';
        	    	//$dat['Designation']=$this->session->userdata('position');
        	       // $dat['RecieverId']=implode(',',$_POST['forwardto']);
                    //$dat['Remark']=$this->input->post('remarks');
        	    $this->db->where('letter_no',$this->input->post('letterNo'));
        	    //$this->db->update('st_forward',$dat);
        	     $this->db->update('st_message',$dat);
        	        // if($this->db->affected_rows()>0){
        	        	
        	        // 	$this->db->where('Remark',$this->input->post('remarks'));
        	        // 	$this->db->insert('st_forward');


        	        //     }

        	    $data1['message']='<br /><br /><br /><span class="alert alert-info">You have successfully forwarded the message</span> <br /><br /><br />
			 	<a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';

		        }
        	    

        	 else{
			$data1['message']='<br /><br /><br /><span class="alert alert-danger">Not able to forward. please try again </span><br /><br /><br /><a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';

        }

        $this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);

  }
  //sonam Tshering
  function completeprocess($param='',$param1=''){
		$Updatedata['completeStatus']='Y';
        	$data1['message']='';
        	$Updatedata['completed_by']=$this->session->userdata('cid');
        	$this->db->where('letter_no',$param.'/'.$param1);
        	$this->db->update('st_forward',$Updatedata);

        	    if($this->db->affected_rows()>0) {
        	    $data1['message']='<br /><br /><br /><span class="alert alert-info">You have completed the process</span> <br /><br /><br />
			 	<a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';

		        }
        	    

        	 else{
			$data1['message']='<br /><br /><br /><span class="alert alert-danger">Not able to complete process. please try again </span><br /><br /><br /><a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';

        }

        $this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);

  }
  //Sonam Tshering
function completeprocess1($param='', $param1=''){
		    $Updatedata['completeStatus']='Y';
        	$data1['message']='';
        	$Updatedata['completed_by']=$this->session->userdata('cid');
        	$whereM=array('Id'=> $param,'letter_no'=>$param1);
        	 //$this->db->where('letter_no',$param);
        	$this->db->where($whereM);
        	//$this->db->update('st_forward',$Updatedata);
        	$this->db->update('st_message',$Updatedata);

        	    if($this->db->affected_rows()>0) {
        	    $data1['message']='<br /><br /><br /><span class="alert alert-info">You have completed the process</span> <br /><br /><br />
			 	<a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';

		        }
        	    

        	 else{
			$data1['message']='<br /><br /><br /><span class="alert alert-danger">Not able to complete process. please try again </span><br /><br /><br /><a href="'.base_url().'index.php/Settings/view_ods_dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;Dashboad</span>
		              </button>
		            </a>';

        }

        $this->load->view('userManagement/acknowledgemntwithoutheaderfooter',$data1);

  }


	//sonam Tshering
	function getAllmessage(){	
		$query = "SELECT * FROM st_message WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%'";
		$data['messages']=$this->db->query($query)->result_array();	
		$this->load->view('allmessages',$data); 
	}

	function getAllmessage1(){	
		$query = "SELECT * FROM st_message  WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' ";// Read Status N
		$data['messages']=$this->db->query($query)->result_array();	
		$this->load->view('allmessages2',$data);

	
	}
	function initiatemessage(){
		$data['userlist']=$this->db->get_where('bpas_user_profiles',array('AgencyMainParentID' =>$this->session->userdata('ministryId'),'AgencyParentID'=>$this->session->userdata('parentID'),'AgencyID'=>$this->session->userdata('agencyID')))->result_array();
		$this->load->view('initiatemessage',$data);
	}
	function initiatemessagesubmit(){

		$data['Subject']=$this->input->post('subject');
		$data['Message']=$this->input->post('message');
		//$data['completeStatus']=$this->input->post('completeStatus');
		$data['RecieverId']=implode(', ', $_POST['forwardto']);
		$data['SenderId']=$this->session->userdata('cid');
		$data['SenderName']=$this->session->userdata('name');
		$data['Designation']=$this->session->userdata('position');
		$data['ActionDate']=date('Y-m-d');
		$data['forwardStatus']='Y';
		if(!empty($_FILES["Attachment"]["name"])){
            move_uploaded_file($_FILES['Attachment']['tmp_name'],'./uploads/'.$_FILES["Attachment"]["name"]);
            $data['Attachment']=$_FILES["Attachment"]["name"];
        }
        //$this->ag-addtotrack();
         $query=$this->db->insert('st_message', $data);
     	if($this->db->affected_rows()>0){
			$data1['message']='<br /><br /><br /><span class="alert alert-info">You have successfully intiated the message</span> <br /><br /><br />';
        }
        else{
			$data1['message']='<br /><br /><br /><span class="alert alert-danger">Not able to initiate message. please try again </span><br /><br /><br />';
        }
		$this->load->view('userManagement/acknowledgemntwithoutheaderfooter', $data1); 
	}
	function downloadfile($param1=""){
		$location=str_replace("kkk","/",$param1);
		$this->load->helper('download');
		if (file_exists($location)){
            force_download($location,null);
        }
		else{
			echo 'Sorry! This file is not there in server.';
		}
	}

	function messagesubmit($param="")

	{
		if($param=="complete"){
			$data['completeStatus']='Y';
		}
		elseif($param=="forward") {
			$data['forwardStatus']='Y';
		}

		$data['letter_no']=$this->input->post('dakLetterNo');
		$data['subject']=$this->input->post('subject');
		$data['place']=$this->input->post('place');
		$data['letterFrom']=$this->input->post('from');
		$data['ActionDate']=$this->input->post('created');
		$data['Message']=$this->input->post('message');
		$data['RecieverId']=implode(', ', $_POST['forwardto']);
		$cids=explode(", ", $data['RecieverId']);
         foreach ($cids as $key => $cid) {
          if(trim($cid)!=""){
         $data['RecieverName']=$this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->FirstName. ' '.$this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->MiddleName.' '.$this->db->get_where('bpas_user_profiles',array('cid' =>trim($cid)))->row()->LastName .', ';

                                                        } }

		$data['RecievedLetter']=$this->input->post('Rletter');  
		$data['Remark']=$this->input->post('remarks');
		$data['SenderId']=$this->session->userdata('cid');
		$data['SenderName']=$this->session->userdata('name');
		$data['Designation']=$this->session->userdata('position');
		$data['Attachment']=$this->input->post('attach');
		
		$data['ActionDate']=date('Y-m-d');
        $query=$this->ag->addtotrack($data); // why not insert it into st_message instead of st_forward

     	if($this->db->affected_rows()>0){
			$data1['message']='<br /><br /><br /><span class="alert alert-info">You have successfully intiated the message</span> <br /><br /><br />';
        }
        else{
			$data1['message']='<br /><br /><br /><span class="alert alert-danger">Not able to initiate message. please try again </span><br /><br /><br />';
        }
		$this->load->view('userManagement/acknowledgemntwithoutheaderfooter', $data1); 
		
	} //Sonam Tshering

	function messageforward($param="")
	{
		$query = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%'";
		$data['messages1']=$this->db->query($query)->result_array();	
		// $this->load->view('allmessages',$data); 
		
		$this->load->view('stmessage1',$data);
		   
	}
	 function message_dashboard(){
		//$data['messages']=$this->db->get_where('st_message',array('RecieverId' =>$this->session->userdata('cid'),'ReadStatus'=>'N'))->result_array();
		// $query = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND ReadStatus='N'";
		// $data['messages1']=$this->db->query($query)->result_array();
		$query = "SELECT * FROM st_message WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND ReadStatus='N'";
		$data['messages1']=$this->db->query($query)->result_array();
		//$data['messages1']=$this->db->order_by("ActionDate", "asc")->result_array();
		$this->load->view('userManagement/acknowledgemntwithout',$data);

		

         }
//Sonam Tshering
         

         function msg($param='',$param2=''){

       
		$data['ReadStatus']='Y';
	 	$this->db->where('letter_no', $param.'/'.$param2);
        $this->db->update('st_forward', $data);
        $data['message1']=$this->db->get_where('st_forward',array('letter_no' =>$param.'/'.$param2))->row();
		//$data['message']=$this->db->get_where('st_forward',array('letter_no' =>$param.'/'.$param2))->row();
		// $this->db->update('st_track_details_audit', $data);
		
        
		// $query = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%'"; 
		// $data5['message4']=$this->db->query($query)->result_array();
		$query = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND letter_no='".$param.'/'.$param2."' AND ReadStatus='N' ";
		$data['messages1']=$this->db->query($query)->result_array();

		$query1 = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND forwardStatus='Y'";
		$data['messages2']=$this->db->query($query)->row();
		//die($this->db->query($query)->row()->completeStatus);
		//die($query);
	
		//$this->db->get_where('st_message',array('RecieverId' =>$this->session->userdata('cid'),'ReadStatus'=>'N'))->result_array();
		$data['userlist']=$this->db->get_where('bpas_user_profiles',array('AgencyMainParentID' =>$this->session->userdata('ministryId'),'AgencyParentID'=>$this->session->userdata('parentID'),'AgencyID'=>$this->session->userdata('agencyID')))->result_array();
		$data['messages']='';
		$this->load->view('stmessage1',$data); 
	}
function msg1($param='', $param1=''){

       
		$data['ReadStatus']='Y';


        $multipleWhere = ['letter_no' => $param, 'Id' => $param1];
        $this->db->where($multipleWhere);
// $this->db->get("table_name");
		 // $data['']=$this->db->post($message);
	 	// $this->db->where('letter_no', $param);
        //$this->db->update('st_forward', $data);
        $this->db->update('st_message', $data);
        // $data['message1']=$this->db->get_where('st_forward',array('letter_no' =>$param))->row();
         //$data['message1']=$this->db->get_where('st_message',array('letter_no' =>$param))->result_array();//made chage here
		$data['message1']=$this->db->get_where('st_message',array('letter_no' =>$param ,'Id'=>$param1))->result_array();



		// $this->db->update('st_track_details_audit', $data);

		//  $query="SELECT a.letter_no ,
		//   a.ForwarderId AS ForwarderId,
		//   a.Attachment AS Attachment,
	 //      a.ForwarderName AS ForwarderName, 
		//   a.subject As subject,
		//   a.Remark AS Remark,	
		//   a.RecieverId, 
		//   a.place AS place,
		//   a.SenderId AS SenderId,
		//   a.SenderName As SenderName,
		//   a.SenderName AS SenderName,
		//   a.ForwarderId AS ForwarderId,
		//   a.ForwarderName As ForwarderName,
		//   a.RecieverId AS RecieverId,
		//   a.RecieverName As RecieverName,
		//   a.Message AS Message,
		//   a.Remark As Remark, 	
		//   a.ActionDate As ActionDate,
  //         a.ReadStatus, 
  //         a.Designation AS Designation,
  //         a.completeStatus AS completeStatus,
  //         a.Action_By AS Action_By,
  //         a.copy_to AS copy_to,
  //         a.letterFrom AS letterFrom,
  //         a.RecievedLetter AS RecievedLetter,
  //         a.forwardStatus AS forwardStatus,
  //         a.completed_by As completed_by,
  //         a.min_Code AS 	min_Code,
  //         a.div_Code AS 	div_Code,
  //         a.dep_Code As dep_Code,
  //         p.ForwarderId As ForwarderId,
  //         p.ForwarderName AS ForwarderName
		 
		 
                        

		//  from st_forward a
		//   LEFT JOIN st_message p ON a.letter_no = p.letter_no where a.letter_no='". $param. "'  AND  a.RecieverId =".$this->session->userdata('cid')."  AND a.ReadStatus='N' ";

		 
  // //      $VAR=implode('',$query);
  // //      echo $VAR;
					
		// // $data['message1']=$this->db->query($query)->result_array();
		
		
        
		// // $query = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%'"; 
		// // $data5['message4']=$this->db->query($query)->result_array();
		// // below  is the code
		//  // $query = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND 	letter_no='".$param."' AND ReadStatus='N'";
		// $data['messages1']=$this->db->query($query)->result_array();

		// $query1 = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND forwardStatus='Y'";
		// $data['messages2']=$this->db->query($query)->row();
		// //die($this->db->query($query)->row()->completeStatus);
		//die($query);
	
		//$this->db->get_where('st_message',array('RecieverId' =>$this->session->userdata('cid'),'ReadStatus'=>'N'))->result_array();
		$data['userlist']=$this->db->get_where('bpas_user_profiles',array('AgencyMainParentID' =>$this->session->userdata('ministryId'),'AgencyParentID'=>$this->session->userdata('parentID'),'AgencyID'=>$this->session->userdata('agencyID')))->result_array();
		$data['messages']='';
		$this->load->view('stmessage1',$data); 
	}


	 function letterfor()
	  {
	  	$query = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND  completeStatus='N'";
	  	$data['messages3']=$this->db->query($query)->result_array();
	  	 foreach ($message3 as $message) 
	  	 {
	  	 	// if $message['completeStatus']== 'N';

	  	 	$data['namelist']=$this->db->get_where('bpas_user_profiles',array('AgencyMainParentID' =>$this->session->userdata('ministryId'),'AgencyParentID'=>$this->session->userdata('parentID'),'AgencyID'=>$this->session->userdata('agencyID')))->result_array();
	  	 	if ($message['SenderName']==$data['namelist'])

	  	 	{
	  	 		echo " you have alreay send to this user, please chose other  user";
	  	 	}
		 


	  	 }

	  	$this->load->view('stmessage1',$data); 



	  	 

	  }
//sonam Tshering
	  function messageread($param1=""){
		$data['ReadStatus']='Y';
	 	$this->db->where('Id', $param1);
        $this->db->update('st_forward', $data);
		$data['message3']=$this->db->get_where('st_forward',array('Id' =>$param1))->row();

		$query = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND ReadStatus='N'";
		$data['messages']=$this->db->query($query)->result_array();
		//$this->db->get_where('st_message',array('RecieverId' =>$this->session->userdata('cid'),'ReadStatus'=>'N'))->result_array();
		$data['userlist']=$this->db->get_where('bpas_user_profiles',array('AgencyMainParentID' =>$this->session->userdata('ministryId'),'AgencyParentID'=>$this->session->userdata('parentID'),'AgencyID'=>$this->session->userdata('agencyID')))->result_array();
		$this->load->view('stmessage1',$data); 
	}
	//sonam Tshering
	function completeTrack($param1='',$param2=''){
		
		$letterno=$param1.'/'.$param2;
		$letterpresent=$this->db->get_where('st_forward',array('letter_no'=>$letterno))->row();

		if(sizeof($letterpresent)>0) 
		{

	 	$this->db->where('letter_no', $param1.'/'.$param2 );
	 	//$this->db->where('letter_no', $param1.'/'.$param2 );
        // $this->db->update('st_forward', $data);
		// $data['message4']=$this->db->get_where('st_forward',array('letter_no' => $param1.'/'.$param2) AND 'completeStatus'=='y')->row();
		$data['message4']=$this->db->get_where('st_forward',array('letter_no' => $param1.'/'.$param2))->row();
		// if(sizeof($message4->RecieverId)>0)
		// {
		// 	echo " yes";
		// }
		//$data['message4']=$this->db->get_where('st_forward',array('letter_no' => $param1.'/'.$param2))->result_array();
		// foreach($message4 as $message)
		// {
			

		// }

		// // $query = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND ReadStatus='Y'";
		// // $data['messages']=$this->db->query($query)->result_array();
		// //$this->db->get_where('st_message',array('RecieverId' =>$this->session->userdata('cid'),'ReadStatus'=>'N'))->result_array();
		// // $data['userlist']=$this->db->get_where('bpas_user_profiles',array('AgencyMainParentID' =>$this->session->userdata('ministryId'),'AgencyParentID'=>$this->session->userdata('parentID'),'AgencyID'=>$this->session->userdata('agencyID')))->result_array();
		$this->load->view('allmessages1',$data); 
		 }
		 else{
		 	 echo '<div class="col-sm-12 text-center"><div class="alert alert-danger">This leter has not been initiated </div></div>';
		 	// echo 'this letter has not been initiated yet for forward';
		 }
		}


		function completeTrack1($param1=''){ 
		
		$letterno=$param1;
		$letterpresent=$this->db->get_where('st_message',array('letter_no'=>$letterno))->row();

		if(sizeof($letterpresent)>0) 
		{

	  	//$this->db->where('letter_no', $param1 );
	 	
		 //    $data['message4']=$this->db->get_where('st_forward',array('letter_no' => $param1))->result_array();
			 $data['message5']=$this->db->get_where('st_message',array('letter_no' => $param1))->result_array();


			/// enter here


		// $query="SELECT a.letter_no ,
		//   a.ForwarderId AS ForwarderId,
		//   a.Attachment AS Attachment,
	 //      a.ForwarderName AS ForwarderName, 
		//   a.subject As subject,
		//   a.Remark AS Remark,	
		//   a.RecieverId, 
		//   a.place AS place,
		//   a.SenderId AS SenderId,
		//   a.SenderName As First_SenderName,
		
		//   a.ForwarderId AS ForwarderId,
		//   a.ForwarderName As ForwarderName,
		//   a.RecieverId AS RecieverId,
		//   a.RecieverName As RecieverName,
		//   a.Message AS Message,
		   	
		//   a.ActionDate As ActionDate,
  //         a.ReadStatus, 
  //         a.Designation AS Designation,
  //         a.completeStatus AS completeStatus,
  //         a.Action_By AS Action_By,
  //         a.copy_to AS copy_to,
  //         a.letterFrom AS letterFrom,
  //         a.RecievedLetter AS RecievedLetter,
  //         a.forwardStatus AS forwardStatus,
  //         a.completed_by As completed_by,
  //         a.min_Code AS 	min_Code,
  //         a.div_Code AS 	div_Code,
  //         a.dep_Code As dep_Code,
  //         p.ForwarderId As ForwarderId,
  //         p.ForwarderName AS Sender1,
  //         p.RecieverId AS RecieverId

		 
		 
                        

		//  from st_forward a
		//   LEFT JOIN st_message p ON a.letter_no = p.letter_no where a.letter_no='". $param1. "'";

		 
  // //      $VAR=implode('',$query);
  // //      echo $VAR;
					
		// // $data['message1']=$this->db->query($query)->result_array();
		
		
        
		// $query = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%'"; 
		// $data5['message4']=$this->db->query($query)->result_array();
		// below  is the code
		 // $query = "SELECT * FROM st_forward WHERE RecieverId LIKE '%".$this->session->userdata('cid')."%' AND 	letter_no='".$param."' AND ReadStatus='N'";
		//$data['message4']=$this->db->query($query)->result_array();
		//$data['message5'] = $this->db->query($query);
      



		

		
		$this->load->view('allmessages1',$data); 
		 }
		 else{
		 	 echo '<div class="col-sm-12 text-center"><div class="alert alert-danger">This leter has not been initiated </div></div>';
		 	
		 }
		}

      // Sonam Tshering

		function TrackDispatch1()
		{
			$this->load->view('TrackDispatch2');
		}





		//Sonam Tshering

		// function TrackDispatch($param1="")
		// {
		// 	//$query=$this->db->get_where('dak_no'=>$param1)

		// $Dispatch_no=$param1;
		// $letterpresent=$this->db->get_where('st_dispatch_table',array('Dispatch_no'=>$letterno))->row();

		// if(sizeof($letterpresent)>0) 
		// {

	 //  	$this->db->where('Dispatch_no', $param1 );
	 	
		// $data['message4']=$this->db->get_where('st_dispatch_table',array('Dispatch_no' => $param1))->row();

		// }
		//  else {

		//  	echo "the dispatch number doesn't match";
		//  }

		//  $this->load->view('dispatchview');


//Sonam Tshering

 function TrackDis($param="")
  {
  	//die($param.'insde TrackDis');
	 $Dispno=$param;
     $Dispno1=$this->db->get_where('st_dispatch_table',array('Dispatch_no'=>$Dispno))->result_array();
     if(sizeof($Dispno1)>0)
 		{

 	 //$this->db->where('Dispatch_no', $Dispno );
	 	
     $data['message5']=$this->db->get_where('st_dispatch_table',array('Dispatch_no'=> $Dispno))->result_array();
     // $var=$data['message5'];
     //  $var1=implode(',', $var);
     // die($var1);

	 //$this->load->view('allmessages4',$data); 

     }
	 
	 // echo " the dispatch number doesn't exist";
 		

// elseif(preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$Dispno)) {

 
//  	$data['message5']=$this->db->get_where('st_dispatch_table',array('Dispatch_no'=>$Dispno))->result_array();
// 	//$this->load->view('allmessages4',$data); 
 	 

//  //}
// // 		{
	

		 

 
	 
		 


else{ 	

	 	echo '<div class="col-sm-12 text-center"><div class="alert alert-danger">This leter has not been initiated </div></div>';


 

}
$this->load->view('allmessages4',$data);
 }

// }



	//sonam Tshering
	function forwardfurther($param="")
	 {
	 	if($param='complete')
	 	{
	 		$data['completeStatus']='Y';
	 	// 	$this->db->where('')
	 	// }
	 	}
	 }
//sonam Tshering
	 function trackLet(){
	//$data['message']="";
	//$data['dakgen']=$this->db->get('dak_mes')->result_array();
	// $this->load->view('track1');
	$data1['message']= '';
	$this->load->view('trackLet',$data1);
	

}

//Sonam Tshering email code


//Sonam Tshering

//  public function email1() {
// // 	// echo "inside email";
//          $this->load->view('email');
//     }

//     function sendemail() {
    	

//     $config = array(
//     'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
//     'smtp_host' => 'ssl://smtp.gmail.com', 
//     'smtp_port' => 465,
//     'smtp_user' => 'sonamt@moea.gov.bt',
//     'smtp_crypto' => 'tls',
//     'smtp_pass' => 'Sarpang@2018',
//     'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
//     'mailtype' => 'text', //plaintext 'text' mails or 'html'
//     'smtp_timeout' => '4', //in seconds
//     'charset' => 'iso-8859-1',
//     'wordwrap' => 'TRUE',
//     'newline'=> 'rn'
//     // 
//                );
//        $this->email->initialize($config);
//       // $ci = get_instance();

    	

   
//         $this->load->config('email');
//         $this->load->library('email');
        
//         $from = $this->config->item('smtp_user');
//         $to = $this->input->post('to');
//         $subject = $this->input->post('subject');
//         $message = $this->input->post('message');
//         // $path= $this->config->item('server_root');
//         // $file=$path .'/kkk/ss/';
//         //$this->email->attach($file);

//         $this->email->set_newline("\r\n");
//         $this->email->from($from);
//         $this->email->to($to);
//         $this->email->subject($subject);
//         $this->email->message($message);

//         if ($this->email->send()) {
//             echo 'Your Email has successfully been sent.';
//         } else {
//             show_error($this->email->print_debugger());
//         }
//     }




	


	


	
}