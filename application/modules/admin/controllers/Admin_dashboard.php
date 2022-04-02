<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends MY_Controller {
 

		function __construct()
	{
		parent:: __construct();
		$this->load->model('Admin_dashboard_M','admin_dash');
	} 
	

	public function index()
	{
		// dd(profile());
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'admin/dashboard';
		/*home email*/
		// $data['count_users'] = $this->admin_dash->count_users();
		$this->template->template($data);
	}



	public function mail()
	{
		$this->email->initialize($config);
		$this->load->library('email');
		$config = Array(
		                'protocol' => 'smtp',
		                'smtp_host' => 'tls://smtp.gmail.com',
		                'smtp_port' => 587,
		                'smtp_user' => '******', // your email
		                'smtp_pass' => '*****', // your password
		                'smtp_timeout'=>20,
		                'mailtype' => 'text',
		                'charset' => 'iso-8859-1',
		                'newline'=>"\r\n",
		                'wordwrap' => TRUE
		               );

		 $this->email->initialize($config);
		 $this->email->from('***@gmail.com');
		 $this->email->to('***@gmail.com');
		 $this->email->subject('Email Test');
		 $this->email->message('Testing the email class.');  
		 $this->email->send();
		 echo $this->email->print_debugger();
	}
}