<?php


class Email_Model extends CI_Model {
	
	
	private $sender = "las@moic.gov.bt";
	private $senderName = "LAS Server";
	public function __construct(){
		
		
		parent::__Construct();
	//$config['protocol'] = 'smtp';
		$this->load->library('email');
    	$config['protocol'] = 'smtp';
	$config['smtp_crypto'] = 'ssl';
    	$config['smtp_host'] = 'smtp.gmail.com';
    	$config['smtp_port'] = 465;
    	$config['smtp_user'] = 'las@moic.gov.bt';
    	$config['smtp_pass'] = 'las@2016';
    	$config['mailtype'] = 'html';
    	$config['charset'] = 'utf-8';
    	$config['newline'] = "\r\n";
    	$config['wordwrap'] = TRUE;
    	$config['smtp_timeout'] = 30;
	
    	/*$this->email->initialize($config);
    	$this->email->from('las@moic.gov.bt', 'LAS admin');
    	$this->email->to('dthapa@dit.gov.bt');
    	$this->email->subject('LAS email success');
    	$message = "Testing";
    	$this->email->message($message);
    	if ( ! $this->email->send()) {
        show_error($this->email->print_debugger());
    } */
	$this->load->model('Messages_model','mm');
        $this->email->initialize($config);
		
	}
	
	public function leaveEndReminder(){
		
		
		$query=$this->db->query("SELECT CONCAT(p.FirstName, ' ', p.MiddleName, ' ', p.LastName) as name, l.userId AS cid, lm.ltitle AS LeaveType, a.name AS Agency, l.startDate, l.endDate, l.remarks 
		FROM `bpas_leave_record` l 
		LEFT JOIN user_profiles p ON p.cid = l.userId
		LEFT JOIN bpas_leave_master lm ON lm.lid = l.leaveType
		LEFT JOIN batch a ON a.batch_ID = l.batch_ID
		WHERE endDate = '".date('Y/m/d')."'");
		
		$this->leaveEndReminderUsers($query);
		$this->leaveEndReminderSuper($query);
		
		
		
	}
	
	private function leaveEndReminderUsers($result){
		
			$subject= "End of Leave";
			foreach($result->result() as $row){
			$email=$this->db->query("SELECT email from user_profiles WHERE cid='".$row->cid."'");
			
			$this->email->from($this->sender, $this->senderName);
	        $this->email->to($email->row()->email);
	        $this->email->subject($subject);
	        $message = "Your leave starting from ".$row->startDate." will be ending today.";
	        $this->email->message($message);
			$this->mm->insertMessage($message,"Admin","LeaveEnd",$row->cid);
	        $this->email->send();
			
		}
		
		
	}

	private function leaveEndReminderSuper($result){
		
		$subject= "Officials end of leave";
		
		
		$agencies = $this->db->query("SELECT DISTINCT(batch_ID) AS batch_ID from bpas_leave_record WHERE endDate='".date(Y/m/d)."'");
		
			foreach($agencies->result() as $agency){
			
			$query=$this->db->query("SELECT CONCAT(p.FirstName, ' ', p.MiddleName, ' ', p.LastName) as name, l.userId AS cid, lm.ltitle AS LeaveType, a.name AS Agency, l.startDate, l.endDate, l.remarks 
			FROM `bpas_leave_record` l 
			LEFT JOIN user_profiles p ON p.cid = l.userId
			LEFT JOIN bpas_leave_master lm ON lm.lid = l.leaveType
			LEFT JOIN batch a ON a.batch_ID = l.batch_ID
			WHERE endDate = '".date('Y/m/d')."' AND l.batch_ID = '".$agency->batch_ID."'");
			
			
			$email=$this->db->query("SELECT email from user_profiles WHERE cid='".$agency->cid."'");
			$this->email->from($this->sender, $this->senderName);
	        $this->email->to($agency->email);
	        $this->email->subject($subject);
	        $message = "Your leave starting from ".$agency->startDate." will be ending today.";
	        $this->email->message($message);
			
	        $this->email->send();
			
		}
		
	}
	
	public function getReminderEmails(){
		
		
		$query = $this->db->query("SELECT u.cid, u.email
					FROM user_profiles u 
					LEFT OUTER JOIN bpas_attendance_log a ON u.cid=a.userid AND a.date = '".date("Y/m/d")."'"."
					WHERE  a.userid is NULL");
		$subject = "LAS login pending for today";
		$message = "Your attendance in LAS is due for today. Please use it inorder to ensure that you are not marked as absent for today.";
		$counter=0;
		foreach($query->result() as $row){
			
		$this->email->from($this->sender, $this->senderName);
        	$this->email->to($row->email);
        	$this->email->subject($subject);
        	$this->email->message($message);

        	$this->email->send();
		$counter++;	
		}
		echo "\n".$counter." users have been notified on date:".date('Y/m/d').".";
		
	}
	
	public function sendEmail($message,$subject,$cid) {
			
		$query=$this->db->query("SELECT email from user_profiles WHERE cid='".$cid."'");
		foreach($query->result() as $row){
			$email = $row->email;
		}
		
		$this->email->from($this->sender, $this->senderName);
        $this->email->to($email);
        $this->email->subject($subject);
        $this->email->message($message);

        $this->email->send();
		
	}
	
	public function notifyLeaveSupervisor($batch_ID,$cid,$role){
		
		$subject = "Leave Request in LAS";
		$message = "There is a leave request pending in LAS from userid :".$cid.". Please visit http://las.moic.gov.bt/las to approve.";
	 	if($role=='4'||$role=='9') {

			$query = $this->db->query("SELECT email FROM user_profiles u 
		LEFT JOIN department a ON (a.director = u.cid) OR (a.offtg = u.cid)
		WHERE a.department_ID = (SELECT department_ID FROM batch WHERE batch_ID= '".$batch_ID."'");
		}
		elseif($role=='3'||$role=='8') {
			$query = $this->db->query("SELECT email FROM user_profiles u WHERE u.roleId='2'||u.roleId='7'");
		} else {
			$query = $this->db->query("SELECT email FROM user_profiles u LEFT JOIN batch a ON (a.chief = u.cid) OR (a.offtg = u.cid) WHERE a.batch_ID = '".$batch_ID."'");
		}
		


		foreach($query->result() as $row){
		$this->email->from($this->sender, $this->senderName);
        $this->email->to($row->email);

        $this->email->subject($subject);
        $this->email->message($message);

        $this->email->send();
			
		}
        
		
	}

public function test() {

	$this->email->from($this->sender, $this->senderName);
        $this->email->to('dthapa@dit.gov.bt');

        $this->email->subject('test');
        $this->email->message('test');

        if($this->email->send()) {

	echo "Sent";
	} else {

	echo "Failed";
                }

}

	
}
