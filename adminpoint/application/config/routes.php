<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'AdminLoginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(?i)login'] = 'LoginController/index';
$route['(?i)logout'] = 'LoginController/logout';

/* Admin Routes Start */  
$route['(?i)admin-dashboard'] = 'AdminDashboardController/index';
$route['(?i)tender-upload-insert'] = 'AdminDashboardController/tender_upload_insert';
$route['(?i)tender-upload'] = 'AdminDashboardController/tender';

$route['manage-pages'] = 'AdminDashboardController/manage_pages';
/* Admin Routes Start */  

/* Ajax Start */  
$route['get-page-content'] = 'AdminDashboardController/get_page_content';
/* Ajax End */  

