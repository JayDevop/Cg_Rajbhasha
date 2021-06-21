<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'AdminLoginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(?i)login'] = 'LoginController/index';
$route['(?i)logout'] = 'LoginController/logout';

/* Admin Routes Start */  
$route['(?i)admin-dashboard'] = 'AdminDashboardController/index';

$route['(?i)manage-pages'] = 'AdminDashboardController/manage_pages';
$route['content-list'] = 'AdminDashboardController/content_list';
$route['content-list/(:num)'] = 'AdminDashboardController/content_list/$1';
$route['(?i)photo-gallery'] = 'AdminDashboardController/photo_gallery';
$route['(?i)video-gallery'] = 'AdminDashboardController/video_gallery';
$route['(?i)photo-upload-insert'] = 'AdminDashboardController/photo_upload_insert';
$route['(?i)video-upload-insert'] = 'AdminDashboardController/video_upload_insert';
$route['(?i)webinar-conduct'] = 'AdminDashboardController/webinar_conduct';
/* Admin Routes Start */  

/* Ajax Start */  
$route['get-page-content'] = 'AdminDashboardController/get_page_content';
/* Ajax End */  

