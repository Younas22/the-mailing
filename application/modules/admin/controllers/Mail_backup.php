<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends MY_Controller {
 

		function __construct()
	{
		parent:: __construct();
		$this->load->model('Admin_dashboard_M','admin_dash');
	} 
	
 
	public function test_mail()
	{
		// dd(profile());
		$mail_template = $this->db->where('id',1)->get('mail_template')->row();
// 		dd($mail_template);
		$data['mail_template'] = $mail_template;
		$data['name'] = 'Johen Smith';
		$data['logo'] = 'http://localhost/corebuilder_data/assets/img/profile/1646740414Screenshot5.png';
		$data['ajency_name'] = 'Core Builder';
		$data['ajency_web'] = 'http://tecyoun.com';
		$data['mail'] = 'abc';
		$data['password'] = 'xyz';
		$data['contant_view'] = 'admin/1';
		/*home email*/
		// $data['count_users'] = $this->admin_dash->count_users();
		$this->template->template($data);
	}


	public function email_compose()
	{
	    
		$mail_template = $this->db->where('id',1)->get('mail_template')->row();
// 		dd($mail_template);
		$data['mail_template'] = $mail_template;
		$data['contant_view'] = 'admin/email_compose';
		$this->template->template($data);
	}


	public function mail_campaign()
	{

		if ($this->input->post('template') == 'empty') {
			$template = 1;
		}else{
			$template = $this->input->post('template');
		}

		$mail_campaign = array(
			'from'=> $this->input->post('from'),
			'name'=> $this->input->post('name'),
			'subject'=> $this->input->post('subject'),
			'msg'=> $this->input->post('message'),
			'cc'=> $this->input->post('cc'),
			'bcc'=> $this->input->post('bcc'),
			'template'=> $template
		);

		$this->db->where('id',1)->update('mail_template',$mail_campaign);
		redirect('dashboard/email-compose');

	}


	public function send_mail()
	{
// 		echo "ok"; exit;
			$mail = $this->db->where('status','0')->order_by('id','asc')->limit(1)->get('mail')->row();
			$mail_template = $this->db->where('id',1)->get('mail_template')->row();

            // dd($mail_template->template);
            
			$data['mail_template'] = $mail_template;
	        $this->load->library('email');
	        $this->email->from($mail_template->from, 'test');
	        $this->email->to($mail->email);
	        $this->email->subject('Login details');
	        $msg = $this->load->view('admin/'.$mail_template->template,$data,true);
	        $this->email->message($msg);
	  //       //Send mail
			if($this->email->send()){
			$this->db->where('status','0')->order_by('id','asc')->limit(1)->update('mail',array('status'=>'1'));
				echo json_encode('Yes'); exit();
			}else{
				echo json_encode('No'); exit();
			}
		
			echo json_encode('Something Wrong!');

	}
	
	
	
	public function mail()
	{
	    
        $this->load->library('email');
		 $this->email->from('hm.younas22@gmail.com');
		 $this->email->to('phpfiverrpk@gmail.com');
		 $this->email->subject('Email Test');
		 $this->email->message('Testing the email class.');  
		 $this->email->send();
		 echo $this->email->print_debugger();
		 

// $to = 'phpfiverrpk@gmail.com';
// $subject = 'Marriage Proposal';
// $message = 'Hi Jane, will you marry me?'; 
// $from = 'hm.younas22@gmail.com';
 
// // Sending email
// if(mail($to, $subject, $message)){
//     echo 'Your mail has been sent successfully.';
// } else{
//     echo 'Unable to send email. Please try again.';
// }

	}
	
	
			public function tmail()
		{
            // echo 'ok'; exit;
            
			$sender_email = "hm.younas22@gmail.com";
			$user_password = "Asadarfa";
			$username = "Test";
			$receiver_email = "phpfiverrpk@gmail.com";
			$subject = "Sample";
			$message = "Hello";
			
			$this->emailConfig();

			// Sender email address
			$this->email->from($sender_email, $username);
			// Receiver email address.for single email
			$this->email->to($receiver_email);
			//send multiple email
			$this->email->to("phpfiverrpk@gmail.com");
			// Subject of email
			$this->email->subject($subject);
			// Message in email
			$this->email->message($message);
			// It returns boolean TRUE or FALSE based on success or failure
			
			$mail = ($this->email->send()) ? "Sent" : "Failed" ;
			echo $this->email->print_debugger();
			
			echo $mail;
		}
	
	
			private function emailConfig()
		{
			$config = array(
				'protocol' 	=> 'smtp' , 
				'smtp_host' => 'ssl://smtp.googlemail.com' , 
				'smtp_port' => 465 , 
				'smtp_user' => 'hm.younas22@gmail.com' ,
				'smtp_pass' => 'Asadarfa',
				'mailtype'	=> 'html', 
				'charset' 	=> 'utf-8', 
				'newline' 	=> "\r\n",  
				'wordwrap' 	=> TRUE 
				);
			
			// Load email library and passing configured values to email library
			$this->load->library('email',$config);
		}
}