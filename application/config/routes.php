<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['default_controller'] = 'account/Account';
$route['default_controller'] = 'admin/Admin_dashboard';

 
/*account url*/
// $route['signin'] = 'account/Account';
// $route['doLogin'] = 'account/Account/doLogin';
// $route['already_login'] = 'account/Account/already_login';
// $route['logout'] = 'account/Account/logout';
// $route['signup'] = 'account/Account/signup';
// $route['do-register'] = 'account/Account/do_register';




/*******************admin routes*******************/
$route['dashboard/email-compose'] = 'admin/Mail/email_compose';
$route['dashboard/mail-campaign'] = 'admin/Mail/mail_campaign';
$route['dashboard/send-mail'] = 'admin/Mail/send_mail';
$route['dashboard/test-mail'] = 'admin/Mail/test_mail';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;