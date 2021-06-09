<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['(?i)Home'] = 'Dashboard/index';
$route['(?i)Home-Hindi'] = 'Dashboard/dashboard_hindi';
$route['(?i)About-Organisation'] = 'Dashboard/organisation';
$route['(?i)Tenders-Details']='Dashboard/tender';

$route['(?i)User-Signup']='Dashboard/user_signup';
$route['(?i)User-Login']='Dashboard/user_login';
$route['(?i)Contacts-Details']='Dashboard/contacts';

$route['(?i)Current-Project-Details']='Dashboard/current_project';
$route['(?i)Future-Project-Details']='Dashboard/future_project';
$route['(?i)Complete-Project-Details']='Dashboard/complete_project';
$route['(?i)Indraprasth-Phase-One-Details']='Dashboard/indraprasth_phase_one';

$route['(?i)Indraprasth-Phase-Two-Details']='Dashboard/indraprasth_phase_two';

$route['(?i)Indraprasth-Phase-Two-App-Form']='Dashboard/indraprasth_application_form';
$route['(?i)Indraprasth-Phase-Two-Drawing']='Dashboard/indraprasth_application_drawings';
$route['(?i)Online-Payment']='Dashboard/online_payment';

//Sakshi
$route['(?i)OtherScheme-Details']='Dashboard/otherScheme';



























