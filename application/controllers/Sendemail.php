<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendemail extends CI_Controller {


	public function __construct() { 
	
	parent::__Construct();
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
	$this->load->model('Staff_model','sm');
	$this->load->model('Agency_model','ag');

	$this->load->model('Messages_model','mm');
	$this->load->model('ATD_model','atd');
	$this->header['messages'] = $this->mm->getMessages();
	$this->header['unreadm']=$this->mm->getCountMessages();
	$this->dataheader['header']=$this->header;
	$this->role=$this->session->userdata('role');
	$this->atd->checkloggedin();
	}
	public function Forgetpasswordemail()
		{
			      // $this->load->view('template/includeheader',$this->dataheader);
				
				$this->load->view('forgetpasswordemailatd');
				// $this->load->view('template/includefooter');
		        		
		}
public function index()
	{
		$this->load->view('template/includeheader',$this->dataheader);
		$this->load->view('superadmin/sendemail');
		$this->load->view('template/includefooter');
}



 function subscribed(){//Tamang(When clicking the approved button)
   	  	
  		
  		
		$data12['approve1']=implode(', ', $_POST['approve1']);
		$cid=implode(" ",$data12);
		$data9['email']=implode(' ', $_POST['email']);
		$mail=implode(" ",$data9);

		
  	
	        
	          
	        $query1=$this->db->query("SELECT *  from bpas_logins where relatedUserId='".$cid."' ");
	       $row=$query1->result_array(); 


	       	if ($query1->num_rows()>0){


	 		
			$data12['approve1']=implode(', ', $_POST['approve1']);
			$cid=implode(" ",$data12);

			$data9['email']=implode(' ', $_POST['email']);
			$mail=implode(" ",$data9);
		
        	$passwordplain = $this->db->query("SELECT relatedUserId  from bpas_logins where relatedUserId='".$cid."'")->row()->relatedUserId;
	        
	      
	        
	
        	 $message='<h3 align="center">Registration Successful</h3><br> Dear '.$row[0]['FirstName'].', thank you for registration.<br><br> Your both <b>username</b> and <b>password</b> is <b>'.$passwordplain.'.</b><br>Please update your profile after signing in.<br><br>Thanks & regards <br>  <h3> Alumni Management System</h3>'. "\r\n";
	      
	        
        	
			

			$config = Array(
		      	'protocol' 	=> 'smtp',
		      	'smtp_host' => 'ssl://smtp.googlemail.com',
		      	'smtp_port' => 465,
		      	'smtp_user' => 'nimawangchuktamang7@gmail.com', 
		      	'smtp_pass' => 'Choewangchuk@!_123', 
		      	'mailtype' 	=> 'html',
		      	'charset' 	=> 'iso-8859-1',
		      	'wordwrap' 	=> TRUE
		    );
			
		    $this->email->initialize($config);
		     $subject = $this->input->post("name");
			// $mails = $this->input->post("email");
		    $this->email->set_newline("\r\n");

		    $this->email->from('nimawangchuktamang7@gmail.com', 'Alumni Management System');
		    $this->email->to($mail);
		   
		    $this->email->subject('OTP from Alumni Management System');
		   
	        $this->email->message($message);

	     // $this->db->where('relatedUserId', $cid);
		  		// $this->db->update('bpas_logins',$da);
		  		

	      
	        if($this->email->send())
	        {
	        	$data12['approve1']=implode(', ', $_POST['approve1']);
				$cid=implode(" ",$data12);
	        		 $dat['status1']='approved';
			
					 $this->db->where ('relatedUserId', $cid);
			 		$this->db->update('bpas_logins',$dat);

	        	 
                       
                     redirect(base_url() . "index.php/Settings/registered_user1");  
               
          
           } 


					

	        	
	        
	          else
	        {
	        	redirect(base_url() . "index.php/Settings/notregistered_user1");
	        		
		       
					

	        	
	        }
		

	

			
	 
}
else{

 $data6['message']='<br /><br /><br /><span class="alert alert-info">Registration Failed</span> <br /><br /><br /><a href="'.base_url().'index.php/ATD/dashboard/"> <button type="button" class="btn btn-warning">
		              <i class="fa fa-dashboard" aria-hidden="true"  ></i>&nbsp;&nbsp;&nbsp;OK</span>
		              </button>
		            </a>';
			 	
			$this->load->view('userManagement/acknowledgemntwithoutheaderfooter1',$data6);
					


	}
}


	




public function send1(){
$this->load->library('email');
$mail = $this->input->post("password");
// $cid = $this->input->post("cid");

	if($mail==$this->input->post("password")){

		
	   		$this->load->library('email');
	         $email = $this->input->post('password');
	         // $cid = $this->input->post('cid');      	         
	         $findemail = $this->ForgotPassword($email);
	         // $findcid = $this->cid($cid);   	         
	         if($findemail ){
	         	
	           $email = $this->input->post("password");
	           $cid = $this->input->post('cid'); 
        	// $email = $data['email'];
	        $query1=$this->db->query("SELECT *  from bpas_logins where email = '".$email."' ");
	       $row=$query1->result_array(); 


	       	if ($query1->num_rows()>0){
       		 $passwordplain = "";
	        $passwordplain  = rand(999999999,9999999999);
	        $newpass['password'] = md5($passwordplain);
	        $this->db->where('email', $email);
	        $this->db->update('bpas_logins', $newpass);
	        // $this->db->where('email', $email);
	        // $this->db->update('user_profiles', $newpass);
        	  $message='<h3 align="center">Password Reset</h3><br> Dear '.$row[0]['FirstName'].', Thanks for contacting regarding to forgot password,<br> your <b>password</b> is randomly reset to <b>'.$passwordplain.'</b><br>Please update your password after signing in <br>Thanks & regards <br>  <h3> Alumni Management System</h3>'. "\r\n";
	      
	        
        	
			

			$config = Array(
		      	'protocol' 	=> 'smtp',
		      	'smtp_host' => 'ssl://smtp.googlemail.com',
		      	'smtp_port' => 465,
		      	'smtp_user' => 'nimawangchuktamang7@gmail.com', 
		      	'smtp_pass' => 'Choewangchuk@!_123', 
		      	'mailtype' 	=> 'html',
		      	'charset' 	=> 'iso-8859-1',
		      	'wordwrap' 	=> TRUE
		    );
			
		    $this->email->initialize($config);

		    $this->email->set_newline("\r\n");
		    $this->email->from('nimawangchuktamang7@gmail.com', 'Alumni Management System');
		    $this->email->to($mail);
		   
		    $this->email->subject('OTP from Alumni Management System');
		   
	        $this->email->message($message);

	     
	      
	        if($this->email->send())
	        {
	        	
	        		$this->session->set_flashdata('message', 'Password has been sent successfully to your email!!');
	        		redirect('Settings/passwordemail');
	        	
	        }

	        else
	        {
	        	
	        		$this->session->set_flashdata('message', 'There is an error in email send');
	        		redirect('Settings/passwordemail');
	        	
	        }       	          
	           
	           }

	            

	            }
	              else{

	          $this->session->set_flashdata('message', 'Email did not match');
	        		redirect('Settings/passwordemail');	      
	      		}

	 		echo $this->email->print_debugger();

	        
	    }

	   }

	   public function send2(){
$this->load->library('email');
$mail = $this->input->post("password");
$cid = $this->input->post("cid");

	if($mail==$this->input->post("password")&&$cid == $this->input->post("cid")){

		
	   		$this->load->library('email');
	         $email = $this->input->post('password');
	         $cid = $this->input->post('cid');      	         
	         $findemail = $this->ForgotPassword($email);
	         $findcid = $this->cid($cid);   	         
	         if($findemail && $findcid){
	         	
	           $email = $this->input->post("password");
	           $cid = $this->input->post('cid'); 
        	// $email = $data['email'];
	        $query1=$this->db->query("SELECT *  from login where email = '".$email."' and relatedUserId='".$cid."' ");
	       $row=$query1->result_array(); 


	       	if ($query1->num_rows()>0){
       		 $passwordplain = "";
	        $passwordplain  = rand(999999999,9999999999);
	        $newpass['password'] = md5($passwordplain);
	        $this->db->where('email', $email);
	        $this->db->update('login', $newpass);
	        // $this->db->where('email', $email);
	        // $this->db->update('user_profiles', $newpass);
        	 $message='<h3 align="center">Password Reset</h3><br> Dear '.$row[0]['FirstName'].', Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is randomly reset to <b>'.$passwordplain.'</b><br>Please update your password after signing in <br>Thanks & Regards <br>  <h3> Alumni Management System</h3>'. "\r\n";
	      
	        
        	
			

			$config = Array(
		      	'protocol' 	=> 'smtp',
		      	'smtp_host' => 'ssl://smtp.googlemail.com',
		      	'smtp_port' => 465,
		      	'smtp_user' => 'nimawangchuktamang7@gmail.com', 
		      	'smtp_pass' => 'Choewangchuk@!_123',  
		      	'mailtype' 	=> 'html',
		      	'charset' 	=> 'iso-8859-1',
		      	'wordwrap' 	=> TRUE
		    );
			
		    $this->email->initialize($config);

		    $this->email->set_newline("\r\n");
		    $this->email->from('nimawangchuktamang7@gmail.com', 'Alumni Management System');
		    $this->email->to($mail);
		   
		    $this->email->subject('OTP from Alumni Management System');
		   
	        $this->email->message($message);

	     
	      
	        if($this->email->send())
	        {
	        	
	        		$this->session->set_flashdata('message', 'Password has been sent successfully to your email!!');
	        		redirect('Settings/passwordemail');
	        	
	        }

	        else
	        {
	        	
	        		$this->session->set_flashdata('message', 'There is an error in email send');
	        		redirect('Settings/passwordemail');
	        	
	        }       	          
	           
	           }

	            

	            }
	              else{

	          $this->session->set_flashdata('message', 'Email did not match');
	        		redirect('Settings/passwordemail');	      
	      		}

	 		echo $this->email->print_debugger();

	        
	    }

	   }

	
	public function send()
	{
		$this->load->library('email');
		
	$file_data = $this->upload_file();
		if($file_data)
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
		      	'smtp_pass' => 'Choewangchuk@!_123', 
		      	'mailtype' 	=> 'html',
		      	'charset' 	=> 'iso-8859-1',
		      	'wordwrap' 	=> TRUE
		    );
			
		    $this->email->initialize($config);
		    $this->email->set_newline("\r\n");
		    $subject = $this->input->post("name");
			$mails = $this->input->post("email");
		    $this->email->from('nimawangchuktamang7@gmail.com', 'Alumni Management System');
			$this->email->to($mails);
		   	$this->email->subject($subject);
	        $this->email->message($message);
	       $this->email->attach($file_data['full_path']);

	        // foreach ($_FILES as $key => $value) {
	        // 	if(!empty($key['resume'])){
	        // 		if(!$this->upload->do_upload($key)){
	        // 				$this->session->set_flashdata('message', 'There is an error in attach file');
	       	// 				 redirect('sendemail');
	        // 		}
	        // 		else{
	        // 			$upload_data=$this->upload->data();
	        // 			$this->email->attach($upload_data['full_path']);
	        // 		}
	        // 	}
	        // }
	      
	        if($this->email->send())
	        {
	        	// if(delete_files($file_data['file_path']))
	        	// {
	        		$this->session->set_flashdata('message', 'Mail has been sent successfully!!');
	        		redirect('sendemail');
	        	// }
	        }

	        else
	        {
	        	// if(delete_files($file_data['file_path']))
	        	// {
	        		echo $this->email->print_debugger();
	        		$this->session->set_flashdata('message', 'There is an error in email send');
	        		redirect('sendemail');
	        	// }
	        }
	        echo $this->email->print_debugger();
	    }
	    else
	    {
	    	$this->session->set_flashdata('message', 'There is an error in email send');
	        redirect('sendemail');
	    }
	}

	function upload_file()
	{
		$config['upload_path'] = 'uploads/';
		$config['allowed_types'] = 'xls|doc|docx|pdf|gif|jpg|png|jpeg';
		$this->load->library('upload');
		$this->load->initialize($config);
		if($this->upload->do_upload('resume'))
		{
			return $this->upload->data();

		}
		else
		{
			return $this->upload->display_errors();
		}
	}
	



 		function ForgotPassword($email)
			 {
			 		$this->load->library('email');
			        $this->db->select('email');
			        $this->db->from('bpas_logins'); 
			        $this->db->where('email', $email); 
			        $query=$this->db->get();
			        return $query->row_array();
			 }
			function cid($cid)
			 {
			 		$this->load->library('email');
			        $this->db->select('relatedUserId');
			        $this->db->from('bpas_logins'); 
			        $this->db->where('relatedUserId', $cid); 
			        $query=$this->db->get();
			        return $query->row_array();
			 }

			 function ForgotPasswordatd($email)
			 {
			 		$this->load->library('email');
			        $this->db->select('email');
			        $this->db->from('bpas_user_profiles'); 
			        $this->db->where('email', $email); 
			        $query=$this->db->get();
			        return $query->row_array();
			 }
			function cidatd($cid)
			 {
			 		$this->load->library('email');
			        $this->db->select('cid');
			        $this->db->from('bpas_user_profiles'); 
			        $this->db->where('cid', $cid); 
			        $query=$this->db->get();
			        return $query->row_array();
			 }
		

	

	
}

