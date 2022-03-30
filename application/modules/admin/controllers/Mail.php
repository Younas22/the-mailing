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
		$data['name'] = 'Johen Smith';
		$data['logo'] = 'http://localhost/corebuilder_data/assets/img/profile/1646740414Screenshot5.png';
		$data['ajency_name'] = 'Core Builder';
		$data['ajency_web'] = 'http://tecyoun.com';
		$data['mail'] = 'abc';
		$data['password'] = 'xyz';
		$data['contant_view'] = 'admin/test_mail';
		/*home email*/
		// $data['count_users'] = $this->admin_dash->count_users();
		$this->template->template($data);
	}


	public function email_compose()
	{
		// dd(profile());
		$data['url'] = current_url();
		$data['url_title'] = 'sign in';
		$data['title'] = 'sign in your account';
		$data['contant_view'] = 'admin/email_compose';
		/*home email*/
		// $data['count_users'] = $this->admin_dash->count_users();
		$this->template->template($data);
	}


	public function mail_campaign()
	{

		$mail_campaign = array(
			'from'=> $this->input->post('from'),
			'name'=> $this->input->post('name'),
			'subject'=> $this->input->post('subject'),
			'msg'=> $this->input->post('message'),
			'template'=> $this->input->post('template')
		);

		$this->db->where('id',1)->update('mail_template',$mail_campaign);
		redirect('dashboard/email-compose');

	}


	public function send_mail()
	{
		// echo "ok";
		// $mail = $this->db->where('status','0')->order_by('id','asc')->limit(1)->get('mail')->row();
		

			// $data['name'] = 'Johen Smith';
			// $data['logo'] = 'http://localhost/corebuilder_data/assets/img/profile/1646740414Screenshot5.png';
			// $data['ajency_name'] = 'Core Builder';
			// $data['ajency_web'] = 'http://tecyoun.com';
			// $data['mail'] = 'abc';
			// $data['password'] = 'xyz';
	        // $msg = $this->load->view('company/mail/accuracy_report',$data,true);
	        // $this->email->message($msg);
	  // //       //Send mail
			// if($this->email->send()){
				$this->db->where('status','0')->order_by('id','asc')->limit(1)->update('mail',array('status'=>'1'));

			// 	echo "Yes";
			// }else{
			// 	echo "No";
			// }
		
			echo json_encode('ok');

	}
}