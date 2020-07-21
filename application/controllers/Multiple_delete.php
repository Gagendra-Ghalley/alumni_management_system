<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Multiple_delete extends CI_Controller {
 
 public function __construct()
 {
  parent::__construct();
  $this->load->model('multiple_delete_model');
 }

 function index()
 {
  $data['employee_data'] = $this->multiple_delete_model->fetch_data();
  $this->load->view('multiple_delete', $data);
 }

 function delete_all()
 {
  if($this->input->post('checkbox_value'))
  {
   $id = $this->input->post('checkbox_value');
   for($count = 0; $count < count($id); $count++)
   {
    $this->multiple_delete_model->delete($id[$count]);
   }
  }
 }
  
}
?>