<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";
$route['404_override'] = '';

$route['cheat-sheets'] = "home/cheatSheet";
$route['contact-us'] = "home/contactUs";
$route['save-image/(:any)'] = "home/saveImage/$1";

$route['login'] = "account/login";
$route['login-check'] = "account/checkLogin";

$route['sign-up'] = "account/register";
$route['check-sign-up'] = "account/checkSignUp";

$route['logout'] = "account/logout";

$route['account/change-info'] = "account/changeInfo";

$route['account/change-pass'] = "account/changePass";
$route['account/change-pass-ajax'] = "account/changePassAjax";

$route['account/(:any)'] = "account/info/$1/1";
$route['account/(:any)/(:any)'] = "account/info/$1/$2";

$route['community/(:any)'] = "community/index/$1";

$route['save-formula'] = "formula/save";
$route['update-formula'] = "formula/update";
$route['formula/view-(:any)'] = "formula/view/$1";
$route['formula/edit-(:any)'] = "formula/edit/$1";
$route['formula/copy-(:any)'] = "formula/copy/$1";

/* ADMIN */
$route['admin'] = "admin/dashboard/index";
$route['admin/login'] = "admin/user/login";
$route['admin/logout'] = "admin/user/logout";

$route['admin/formula'] = "admin/formula/index/1";
$route['admin/formula/(:any)'] = "admin/formula/index/$1";
$route['admin/formula/delete'] = "admin/formula/delete";

$route['admin/user/'] = "admin/user/index/all/1/";
$route['admin/user/(:any)'] = "admin/user/index/$1/1/";
$route['admin/user/(:any)/(:any)'] = "admin/user/index/$1/$2";
$route['admin/user/delete'] = "admin/user/delete";
$route['admin/user/block'] = "admin/user/block";
$route['admin/user/set-admin'] = "admin/user/setAdmin";
$route['admin/user/change-passs'] = "admin/user/changePass";
/* End of file routes.php */
/* Location: ./application/config/routes.php */