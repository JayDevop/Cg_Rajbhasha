<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'AdminLoginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['(?i)login'] = 'LoginController/index';
// $route['(?i)logout'] = 'LoginController/logout';

/* Admin Routes Start */  
$route['(?i)admin-dashboard'] = 'AdminDashboardController/index';
$route['(?i)tender-upload-insert'] = 'AdminDashboardController/tender_upload_insert';
$route['(?i)tender-upload'] = 'AdminDashboardController/tender';

$route['manage-about'] = 'AdminDashboardController/manage_about';
/* Admin Routes Start */  

/* CEO & ACEO Routes Start */  
/* CEO & ACEO Routes Start */  

