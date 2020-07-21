<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Files management class created by CodexWorld
 */
class Files extends CI_Controller {
    
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
  $this->load->model("excel_export_model");
   $this->load->model('file');

  }
    
 
    
    public function index(){
        $data = array();
         $this->load->view('template/includeheader',$this->dataheader);
        //get files from database
        $data['files'] = $this->file->getRows();
        
        //load the view
        $this->load->view('index', $data);
         $this->load->view('template/includedfooter2');
    }
    
    public function download($id){
        if(!empty($id)){
            //load download helper
            $this->load->helper('download');
            
            //get file info from database
            $fileInfo = $this->file->getRows(array('id' => $id));
            
            //file path
            $file = 'uploads/'.$fileInfo['file_name'];
            
            //download file from directory
            force_download($file, NULL);
        }
    }
}