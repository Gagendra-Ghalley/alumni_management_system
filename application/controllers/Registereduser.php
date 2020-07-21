<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registereduser extends CI_Controller {

  protected $header;
  protected $data;
  protected $dataheader;
  protected $role;
  
 

  public function __construct(){
  
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
    $this->load->model('Registereduser_model');

  }

  public function index(){
   
    $this->load->view('template/includeheader',$this->dataheader);
    $this->load->view('registered_users');
    $this->load->view('template/includedfooter1');
    

  }

  public function registeredList(){
    // POST data
    $postData = $this->input->post();

    // Get data
    $data = $this->Registereduser_model->getRegisteredusers($postData);

    echo json_encode($data);
  }

}