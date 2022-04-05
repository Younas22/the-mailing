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
		// dd($mail_template);
		$data['mail_template'] = $mail_template;
		$data['name'] = 'Johen Smith';
		$data['logo'] = 'http://localhost/corebuilder_data/assets/img/profile/1646740414Screenshot5.png';
		$data['ajency_name'] = 'Core Builder';
		$data['ajency_web'] = 'http://tecyoun.com';
		$data['mail'] = 'abc';
		$data['password'] = 'xyz';
		$data['contant_view'] = 'admin/2';
		/*home email*/
		// $data['count_users'] = $this->admin_dash->count_users();
		$this->template->template($data);
	}


	public function email_compose()
	{
		$mail_template = $this->db->where('id',1)->get('mail_template')->row();
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
			'msg'=> $this->input->post('msg'),
			'subject_2'=> $this->input->post('subject_2'),
			'msg_2'=> $this->input->post('msg_2'),
			'subject_3'=> $this->input->post('subject_3'),
			'msg_3'=> $this->input->post('msg_3'),
			'cc'=> $this->input->post('cc'),
			'bcc'=> $this->input->post('bcc'),
			'template'=> $template
		);

		$this->db->where('id',1)->update('mail_template',$mail_campaign);
		redirect('dashboard/email-compose');

	}


	public function send_mail()
	{
		// echo "ok";

			$form = '';
			$to = '';
			$msg = '';
			$subject = '';
			$loop_configuration = $this->db->where('id',1)->get('loop_configuration')->row();

			if ($loop_configuration->mail_no == 1) {
				$mail = $this->db->where('status','0')->order_by('id','asc')->limit(1)->get('mail')->row();
				$mail_template = $this->db->where('id',1)->get('mail_template')->row();
				$from = $mail_template->form;
				$to = $mail->email;
				$this->db->where('id',1)->update('loop_configuration',array('mail_no'=>2));

				//send mail
					$data['mail_template'] = $mail_template;
					$this->load->library('email');
					$this->email->from($from, 'test');
					$this->email->to($to);
					$this->email->subject($subject);
					$msg = $this->load->view('admin/test_mail',$data,true);
					$this->email->message($msg);
					//       //Send mail
					if($this->email->send()){
					$this->db->where('status','0')->order_by('id','asc')->limit(1)->update('mail',array('status'=>'1'));
					echo json_encode('Yes'); exit();
					}else{
					echo json_encode('No'); exit();
					}
			}


			if ($loop_configuration->mail_no == 2) {
				$mail = $this->db->where('status','0')->order_by('id','asc')->limit(1)->get('second_mail')->row();
				$mail_template = $this->db->where('id',1)->get('mail_template')->row();
				$from = $mail_template->form;
				$to = $mail->email;
				$this->db->where('id',1)->update('loop_configuration',array('mail_no'=>3));

					//send mail
					$data['mail_template'] = $mail_template;
					$this->load->library('email');
					$this->email->from($from, 'test');
					$this->email->to($to);
					$this->email->subject($subject);
					$msg = $this->load->view('admin/test_mail',$data,true);
					$this->email->message($msg);
					//       //Send mail
					if($this->email->send()){
					$this->db->where('status','0')->order_by('id','asc')->limit(1)->update('second_mail',array('status'=>'1'));
					echo json_encode('Yes'); exit();
					}else{
					echo json_encode('No'); exit();
					}
			}

			if ($loop_configuration->mail_no == 3) {
				$mail = $this->db->where('status','0')->order_by('id','asc')->limit(1)->get('therd_mail')->row();
				$mail_template = $this->db->where('id',1)->get('mail_template')->row();
				$from = $mail_template->form;
				$to = $mail->email;
				$this->db->where('id',1)->update('loop_configuration',array('mail_no'=>1));

					//send mail
					$data['mail_template'] = $mail_template;
					$this->load->library('email');
					$this->email->from($from, 'test');
					$this->email->to($to);
					$this->email->subject($subject);
					$msg = $this->load->view('admin/test_mail',$data,true);
					$this->email->message($msg);
					//       //Send mail
					if($this->email->send()){
					$this->db->where('status','0')->order_by('id','asc')->limit(1)->update('therd_mail',array('status'=>'1'));
					echo json_encode('Yes'); exit();
					}else{
					echo json_encode('No'); exit();
					}
			}
		
			echo json_encode('Something Wrong!');

	}
}