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
            <th>Gender</th>
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
  $output .= '</table></div></div></div></div></div>';
  
  echo $output;

 }

  function import()
  {
     if(!empty($_FILES["csv_file"]["name"]))  
 {  


          $connect = mysqli_connect("localhost", "root", "", "waste_db3");  
      $output = '';  
      $allowed_ext = array("csv");  
      $extension = end(explode(".", $_FILES["csv_file"]["name"]));  


    $file_data = fopen($_FILES["csv_file"]["tmp_name"], 'r');  
           fgetcsv($file_data);  
           while($row = fgetcsv($file_data))  
           {  
                $name = mysqli_real_escape_string($connect, $row["Name"]);  
                $gender = mysqli_real_escape_string($connect, $row["Gender1"]);  
                $cid = mysqli_real_escape_string($connect, $row["cid"]);  
                $AgencyMainParentID = mysqli_real_escape_string($connect, $row["AgencyMainParentID"]);  
                $AgencyParentID = mysqli_real_escape_string($connect, $row["AgencyParentID"]); $AgencyID = mysqli_real_escape_string($connect, $row["AgencyID"]); 

                 


   $file_data = $this->csvimport->get_array($_FILES["csv_file"]["tmp_name"]);
   foreach($file_data as $row)
   {
    $data[] = array(
     'FirstName' => $row["Name"],
           'gender' => $row["Gender1"],
           'cid'   => $row["cid"],
           'AgencyMainParentID'   => $row["AgencyMainParentID"],
           'AgencyParentID'   => $row["AgencyParentID"],
           'AgencyID'   => $row["AgencyID"]
    );
   $data1[] = array(
    
           'relatedUserId'   => $row["cid"],
           'password'   => md5($row["cid"])
            );


        if($row!=0){
          $return['data']=true;
          $return['message']="You have successfully imported the data";
          
           $this->csv_import_model->insert($data,$data1);
        }

        else{
         $return['data']=false;
          $return['message']="Error";
      }

     
   }

  
}

}
   

 }

  
 }

 