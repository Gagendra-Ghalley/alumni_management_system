<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends CI_Model {


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
		// $this->load->library('email');
		// $mailatd = $this->input->post("passwordatd");
		// $cidatd = $this->input->post("cidatd");

		
		// $file_data = $this->upload_file();

		// 	if($mailatd==$this->input->post("passwordatd") && $cidatd == $this->input->post("cidatd")){

		
	 //   		$this->load->library('email');
	 //         $email = $this->input->post('passwordatd');
	 //         $cid = $this->input->post('cidatd');      	         
	 //         $findemail = $this->ForgotPasswordatd($email);
	 //         $findcid = $this->cidatd($cid);   	         
	 //         if($findemail && $findcid){
	 //           $mail = $this->input->post("passwordatd");
	 //           $cid = $this->input->post('cidatd'); 
        	
	 //        $query1=$this->db->query("SELECT *  from bpas_user_profiles where email = '".$email."' and cid='".$cid."' ");
	 //       $row=$query1->result_array(); 


	 //       	if ($query1->num_rows()>0){
  //      		//  $passwordplain = "";
	        // $passwordplain  = rand(999999999,9999999999);
	        // $newpass['password'] = md5($passwordplain);
	        // $this->db->where('email', $email);
	        // $this->db->update('bpas_user_profiles', $newpass);
	       
        	//  $message='<h3 align="center">Password Reset</h3> Dear '.$row[0]['FirstName'].', Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is randomly reset to <b>'.$passwordplain.'</b>'. "\r\n";
	        // $message.='<br><br>Please Update your password after signing in <br>Thanks & Regards <br>  <h3> Alumni Management System</h3>'."\r\n";
	        
        	
			

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
			
		    $this->email->initialize($config);
		    return 	$this->email->send();
		    // $this->email->set_newline("\r\n");
		    // $this->email->from('nimawangchuktamang7@gmail.com', 'Alumni Management System');
		    // $this->email->to($mail);
		    
		    // $this->email->subject('OTP from Alumni Management System');
		    
	        // $this->email->message($message);

	      
	        // if($this->email->send())
	        // {
	        	
	        // 		$this->session->set_flashdata('message', 'Password has been sent successfully to your email!!');
	        // 		redirect('ATD/Forgetpasswordemail');
	        	
	        // }

	        // else
	        // {
	        	
	        // 		$this->session->set_flashdata('message', 'There is an error in email send');
	        // 		redirect('ATD/Forgetpasswordemail');
	        	
	        // }       	          
	           
	       //     }

	       //      }

	       //     else{

	       //    $this->session->set_flashdata('message', 'Email/CID did not match');
	       //  		redirect('ATD/Forgetpasswordemail');	      
	      	// }

	 
	       
		 
       
	        
	        echo $this->email->print_debugger();
	    }

	


		
	}
	



 		

	// 		 function ForgotPasswordatd($email)
	// 		 {
	// 		 		$this->load->library('email');
	// 		        $this->db->select('email');
	// 		        $this->db->from('bpas_user_profiles'); 
	// 		        $this->db->where('email', $email); 
	// 		        $query=$this->db->get();
	// 		        return $query->row_array();
	// 		 }
	// 		function cidatd($cid)
	// 		 {
	// 		 		$this->load->library('email');
	// 		        $this->db->select('cid');
	// 		        $this->db->from('bpas_user_profiles'); 
	// 		        $this->db->where('cid', $cid); 
	// 		        $query=$this->db->get();
	// 		        return $query->row_array();
	// 		 }
		

	

	
// }

