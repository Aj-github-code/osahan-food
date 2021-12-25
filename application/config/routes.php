
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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'main_page/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home']['GET'] = 'main_page/index';
// $route['home']['POST'] = 'home_page/index';
$route['offers']['GET'] = 'main_page/offerss';
$route['listing']['GET'] = 'main_page/listings';
$route['detailss']['GET'] = 'main_page/details';
$route['checkout']['GET'] = 'main_page/checkouts';
$route['register']['GET'] = 'main_page/registers';
$route['error_404']['GET'] = 'main_page/error_404s';
$route['extra']['GET'] = 'main_page/extras';
$route['invoice']['GET'] = 'main_page/invoices';
$route['login']['GET'] = 'main_page/logins';
$route['orders']['GET'] = 'main_page/orderss';
$route['register']['GET'] = 'main_page/registers';
$route['thanks']['GET'] = 'main_page/thankss';
$route['track_order']['GET'] = 'main_page/track_orders';


$route['auth']['GET'] = 'main_page/auth';
$route['auth']['POST'] = 'main_page/auth';
$route['signin']['GET'] = 'main_page/signin';
$route['signin']['POST'] = 'main_page/signin';
$route['home_addr']['GET'] = 'main_page/home_addr';
$route['home_addr']['POST'] = 'main_page/home_addr';
$route['order_place']['GET'] = 'main_page/order_place';
$route['order_place']['POST'] = 'main_page/order_place';
$route['increment']['GET'] = 'main_page/increment';
$route['increment']['POST'] = 'main_page/increment';
$route['decrement']['GET'] = 'main_page/decrement';
$route['decrement']['POST'] = 'main_page/decrement';


$route['single/(:any)']['GET'] = 'main_page/singleProduct/$id';
$route['add_to_cart']['GET'] = 'main_page/add_to_cart';
$route['add_to_cart']['POST'] = 'main_page/add_to_cart';
$route['single/(:any)']['POST'] = 'main_page/singleProduct/$id';
$route['list_cart']['POST'] = 'main_page/list_cart';
$route['list_cart']['GET'] = 'main_page/list_cart';

//Admin Routes

$route['dashboard1']['GET'] = 'admin_controller/dashboard_1';
$route['dashboard2']['GET'] = 'admin_controller/dashboard_2';
$route['dashboard3']['GET'] = 'admin_controller/dashboard_3';
$route['contact']['GET'] = 'admin_controller/contact';
// $route['contact']['POST'] = 'admin_controller/contact';
$route['edit_list']['GET'] = 'admin_controller/edit_listing';


