<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

#ROUTE ADMIN
$route['admin']	= 'admin/dashboard';
$route['admin/login'] = 'admin/AuthAdmin/login';
$route['admin/logout'] = 'admin/AuthAdmin/logout';

$route['admin/users']	= 'admin/UsersAdmin';
$route['admin/users/add']	= 'admin/UsersAdmin/create_user';
$route['admin/users/detail/(:any)']	= 'admin/UsersAdmin/detail/$1';
$route['admin/users/update']	= 'admin/UsersAdmin/update';
$route['admin/users/changeavatar']	= 'admin/UsersAdmin/changeavatar';