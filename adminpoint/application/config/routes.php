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
$route['manage-pages/(:any)'] = 'AdminDashboardController/manage_pages/$1';
$route['content-list'] = 'AdminDashboardController/content_list';
$route['content-list/(:num)'] = 'AdminDashboardController/content_list/$1';
$route['(?i)photo-gallery'] = 'AdminDashboardController/photo_gallery';
$route['(?i)photo-upload-insert'] = 'AdminDashboardController/photo_upload_insert';
/* Admin Routes Start */  

/* Ajax Start */  
$route['get-page-content'] = 'AdminDashboardController/get_page_content';
/* Ajax End */  

