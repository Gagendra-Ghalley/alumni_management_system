<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends CI_Controller {
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

public function index()
	{
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('sendemail');
		$this->load->view('template/includefooter');
}



	
	public function send()
	{
		$this->load->library('email');
		$subject = $this->input->post("name");
		// $programming_languages = implode(", ", $this->input->post("programming_languages"));
		$mails = $this->input->post("email");
		$file_data = $this->upload_file();
		if(is_array($file_data))
		{
			$message = '
			<h3 align="center">Alumni Management System</h3>
				<table  width="100%" cellpadding="5">
					
					
					<tr>
						
						<td width="100%">'.$this->input->post("additional_information").'</td>
					</tr>
				</table>
			';

			$config = Array(
		      	'protocol' 	=> 'smtp',
		      	'smtp_host' => 'ssl://smtp.googlemail.com',
		      	'smtp_port' => 465,
		      	'smtp_user' => 'nimawangchuktamang7@gmail.com', 
		      	'smtp_pass' => 'Wangchuk_12345', 
		      	'mailtype' 	=> 'html',
		      	'charset' 	=> 'iso-8859-1',
		      	'wordwrap' 	=> TRUE
		    );
			//$file_path = 'uploads/' . $file_name;
			// $this->load->library('encrypt');
		    $this->email->initialize($config);

		    $this->email->set_newline("\r\n");
		    $this->email->from('0215521.cst@rub.edu.bt');
		    $this->email->to($mails);
		    // $this->email->to($this->input->post("email"));
		    $this->email->subject($subject);
	        $this->email->message($message);
	        $this->email->attach($file_data['full_path']);
	        if($this->email->send())
	        {
	        	if(delete_files($file_data['file_path']))
	        	{
	        		$this->session->set_flashdata('message', 'Message has been sent successfully!!');
	        		redirect('sendemail');
	        	}
	        }

	        else
	        {
	        	if(delete_files($file_data['file_path']))
	        	{
	        		$this->session->set_flashdata('message', 'There is an error in email send');
	        		redirect('sendemail');
	        	}
	        }
	        echo $this->email->print_debugger();
	    }
	    else
	    {
	    	$this->session->set_flashdata('message', 'There is an error in attach file');
	        redirect('sendemail');
	    }
	}



	function upload_file()
	{
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'doc|docx|pdf';
		$this->load->library('upload', $config);
		if($this->upload->do_upload('resume'))
		{
			return $this->upload->data();			
		}
		else
		{
			return $this->upload->display_errors();
		}
	}
}
