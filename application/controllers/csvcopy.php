<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Csv_import extends CI_Controller {
 
  public function __construct()
  {
   

   parent::__Construct();
  date_default_timezone_set("Asia/Thimphu");
  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
  $this->load->model('Staff_model','sm');
  $this->load->model('Agency_model','ag');
  $this->load->model('Holidays','hm');
  $this->load->model('Messages_model','mm');
  $this->load->model('ATD_model','atd');
  $this->load->model('csv_import_model');
  $this->header['messages'] = $this->mm->getMessages();
  $this->header['unreadm']=$this->mm->getCountMessages();
  $this->dataheader['header']=$this->header;
  $this->role=$this->session->userdata('role');
  $this->atd->checkloggedin();
  $this->load->library('csvimport');
 }

  function index()
  {
  
  
    $this->load->model("csv_import_model");
    $data['data'] = $this->csv_import_model->select();
     $this->load->view('template/includeheader',$this->dataheader);
    $this->load->view("superadmin/csv_import", $data);
    $this->load->view('template/includefooter');
    
  }
 


 

  

function load_data()
 {

  

  $result = $this->csv_import_model->select();
  $output = '
   <h3 align="center">Student Details</h3>
        <div class="table-responsive">
        <div class="col-lg-10">
         
 <table class="table-responsive table table-bordered ">
         <div class="row">
                <div class="col-lg-12">

  
 
                      
                          
                            <i class="fa fa-bar-chart-o fa-fw"></i>Users
                           
                            
                           
          <tr class="panel panel-primary panel-heading ">
           <th>Sl.No</th>
           <th>Name</th>
           <th>CID / Student_id</th>
           <th>Department</th>
            <th>Gender</th>
            <th>Year of Graduation / Faculty</th>
           </tr>
   ';
   $count = 1;
   if($result->num_rows() > 0)
   {
    foreach($result->result() as $row)
    {
     
     $output .= '
     <tr>
      <td>'.$count.'</td>
      <td>'.$row->name.'</td>
        <td>'.$row->cid.'</td>
     <td>'.$row->ParentAgency.'</td>
    <td>'.$row->gender.'</td>
    <td>'.$row->Agency.'</td>

     
    
     
     </tr>
     ';
     $count++;
    }
   }


   else
   {
    echo 'Error1';  
    $output .= '
   <tr>
       <td colspan="5" align="center">Data not Available</td>
      </tr>
   ';
  }
  $output .= '</table></div></div></div></div>';
  
  echo $output;

 }

  function import()
  {


   $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
   foreach($file_data as $row)
   {
    $data[] = array(
     'FirstName' => $row["Name"],
           'gender'  => $row["Gender1"],
           'cid'   => $row["cid"],
           'AgencyMainParentID'   => $row["AgencyMainParentID"],
           'AgencyParentID'   => $row["AgencyParentID"],
           'AgencyID'   => $row["AgencyID"]
    );
   $data1[] = array(
    
           'relatedUserId'   => $row["cid"],
           'AgencyParentID'   => $row["AgencyParentID"],
           'AgencyID'   => $row["AgencyID"],
           'password'   => md5($row["cid"])
            );
          
   }

   $this->csv_import_model->insert($data,$data1);
   
 }

  
 }

 