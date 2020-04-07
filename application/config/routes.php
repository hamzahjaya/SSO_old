<?php
defined('BASEPATH') OR exit('No direct script access allowed');





$route['register'] = 'Auth/register';
$route['profile'] = 'user/profile';
$route['login'] = 'Auth/login';
$route['logout'] = 'Auth/logout';
$route['verify/(:any)/(:any)'] = 'Auth/verify_register/$1/$2';

$route['verify/(:any)/(:any)'] = 'Auth/verify_register/$1/$2';

$route['default_controller'] = 'auth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
