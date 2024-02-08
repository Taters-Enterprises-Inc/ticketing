<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'login';

$route['haha/dashboard'] = 'ticket/dashboard1';

$route['create_ticket'] = 'ticket/create';

$route['dashboard'] = 'ticket/dashboard';
$route['your_tickets'] = 'ticket/your_tickets';

//$route['questionnaire/store'] = 'questionnaire/store';

//$route['login'] = 'login';
$route['login/validate'] = 'login/validate';

$route['resolved_tickets/(:any)'] = 'ticket/resolved_ticket/$1';
$route['closed_tickets/(:any)'] = 'ticket/closed_ticket/$1';
$route['open_tickets/(:any)'] = 'ticket/open_ticket/$1';

/*$route['admin/user/dashboard/(:any)'] = 'employee/display/$1';

$route['admin/mgt/dashboard/(:any)/(:any)'] = 'management/display/$1/$2';
$route['admin/mgt/survey/(:any)'] = 'management/persurvey/$1';

$route['admin/sa/users'] = 'superadmin/display1';
$route['admin/sa/users/edit/(:any)'] = 'superadmin/edit1/$1';
$route['admin/sa/updateuser/(:any)'] = 'superadmin/update1/$1';

$route['admin/sa/departments'] = 'superadmin/display2';
$route['admin/sa/departments/edit/(:any)'] = 'superadmin/edit2/$1';
$route['admin/sa/updatedept/(:any)'] = 'superadmin/update2/$1';

$route['admin/sa/questionnaires'] = 'superadmin/display3';
$route['admin/sa/questionnaires/edit/(:any)'] = 'superadmin/edit3/$1';
$route['admin/sa/updatequestionnaire/(:any)'] = 'superadmin/update3/$1';

$route['admin/user/profile/edit/(:any)'] = 'employee/edit/$1';
$route['admin/user/profile/update/(:any)'] = 'employee/update/$1';

$route['admin/mgt/profile/edit/(:any)'] = 'management/edit/$1';
$route['admin/mgt/profile/update/(:any)'] = 'management/update/$1';*/

$route['logout'] = 'logout';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
