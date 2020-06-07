<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends CI_Controller {

	public function index()
	{
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('sendemail');
		$this->load->view('template/includefooter');
		
	}

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

	public function send()
	{



		$subject = $this->input->post("name");
		$mails = $this->input->post("email");
		// $programming_languages = implode(", ", $this->input->post("programming_languages"));
		$file_data = $this->upload_file();
		if(is_array($file_data))
		{
			$message = '
			<h3 align="center">Alumni Management System</h3>
				<table  width="100%" cellpadding="5">
					
					
					<tr>
						
						<td width="70%">'.$this->input->post("additional_information").'</td>
					</tr>
				</table>
			';

			$config = Array(
		      	'protocol' 	=> 'smtp',
		      	'smtp_host' => 'ssl://smtp.gmail.com',
		      	'smtp_port' => 465,
		      	'smtp_user' => 'nimawangchuktamang7@gmail.com', 
		      	'smtp_pass' => 'Wangchuk_12345', 
		      	'mailtype' 	=> 'html',
		      	'charset' 	=> 'iso-8859-1',
		      	'wordwrap' 	=> TRUE
		    );
			//$file_path = 'uploads/' . $file_name;
			$this->load->library('encrypt');
		    $this->load->library('email', $config);
		    $this->email->set_newline("\r\n");
		    $this->email->from('nimawangchuktamang7@gmail.com');
		    $this->email->to($mails);
		    $this->email->subject($subject);
	        $this->email->message($message);

	      if($this->input->post('submit') != NULL ){
 
      $data = array();

      // Count total files
      $countfiles = count($_FILES['resume']['name']);
 
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
 
        if(!empty($_FILES['resume']['name'][$i])){
 
          // Define new $_FILES array - $_FILES['file']
          $_FILES['resume']['name'] = $_FILES['files']['name'][$i];
          $_FILES['resume']['type'] = $_FILES['files']['type'][$i];
          $_FILES['resume']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['resume']['error'] = $_FILES['files']['error'][$i];
          $_FILES['resume']['size'] = $_FILES['files']['size'][$i];

          // Set preference
          // $config['upload_path'] = 'uploads/'; 
          // $config['allowed_types'] = 'jpg|jpeg|png|gif';
         
 	
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'xls|doc|docx|pdf|gif|jpg|png|jpeg';
		 $config['max_size'] = '5000'; // max_size in kb
          $config['file_name'] = $_FILES['files']['name'][$i];

		$this->load->library('upload', $config);
		if($this->upload->do_upload('name'))
		{
			$uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];

            // Initialize array
            $data['filenames'][] = $filename;
			return $this->upload->data();			
		}
		else
		{
			return $this->upload->display_errors();
		}
	
          

	       
	}



	



}

}




 $this->email->attach($data['filenames'][]);
	        if($this->email->send())
	        {
	        	if(delete_files($data['filenames'][]))
	        	{
	        		$this->session->set_flashdata('message', 'Message sent successfully!!');
	        		redirect('sendemail');
	        	}
	        }
	        else
	        {
	        	if(delete_files($data['filenames'][]))
	        	{
	        		$this->session->set_flashdata('message', 'There is an error in email send');
	        		redirect('sendemail');
	        	}
	        }

	        }
	    
	    else
	    {
	    	$this->session->set_flashdata('message', 'There is an error in attach file');
	        redirect('sendemail');
	    }
}
}
