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
}