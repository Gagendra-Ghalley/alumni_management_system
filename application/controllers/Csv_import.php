<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Csv_import extends CI_Controller {
 
  public function __construct()
  {
   parent::__construct();
   $this->load->model('csv_import_model');
   $this->load->library('csvimport');
 }

  function index()
  {
  
    $this->load->view("csv_import", $data);
   
     
}

 function load_data()
 {
  $result = $this->csv_import_model->select();
  $output = '
   <h3 align="center">Student Details</h3>
        <div class="table-responsive">
        <div class="col-lg-10">
         
 <table class="table table-bordered ">
         <div class="row">
                <div class="col-lg-12">

  
 <div class="panel panel-primary">
                        <div class="panel-heading">
                          
                            <i class="fa fa-bar-chart-o fa-fw"></i>Users
                           
                            <div class="pull-right">
                           
          <tr>
           <th>Sl.No</th>
           <th>Name</th>
           <th>CID</th>
           <th>Department</th>
            <th>Email</th>
            <th>Year of Graduation</th>
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
    <td>'.$row->Email.'</td>
    <td>'.$row->Agency.'</td>

     
    
     
     </tr>
     ';
     $count++;
    }
   }
   else
   {
   $output .= '
   <tr>
       <td colspan="5" align="center">Data not Available</td>
      </tr>
   ';
  }
  $output .= '</table></div></div></div></div></div>';
  echo $output;
 }

  function import()
  {
   $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
   foreach($file_data as $row)
   {
    $data[] = array(
     'FirstName' => $row["First Name"],
           'LastName'  => $row["Last Name"],
           'cid'   => $row["cid"],
           'AgencyMainParentID'   => $row["AgencyMainParentID"],
           'AgencyParentID'   => $row["AgencyParentID"],
           'AgencyID'   => $row["AgencyID"]
    );
   $data1[] = array(
    
           'relatedUserId'   => $row["cid"],
           'password'   => md5($row["cid"])
            );
          
   }
   $this->csv_import_model->insert($data,$data1);

 }

  
 }

 