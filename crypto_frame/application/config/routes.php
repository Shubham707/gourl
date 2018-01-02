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
$route['default_controller'] = 'welcome';
$route['account/save-data-key'] = 'account/security_key';
$route['account/update-security-coin'] = 'account/security_update';
$route['account/my-account'] = 'account/my_account';
$route['affiliated'] = 'affiliated';
$route['account/my-monitiser-online'] = 'account/monitiser';
$route['welcome/pay-product-online'] = 'welcome/pay_per_product';
$route['product/add-product']='product/add_product';
$route['product/add-per-product']='product/add_pay_product';
$route['payment/add-payment']='payment';
$route['payment/secret-key']='payment/secret_key';
$route['payment/payment-successfull']='payment/payment_successfull';
$route['payment/auto-payments-external-wallet']='payment/auto_payments_external_wallet';
$route['payment/Unrecognised-Received-Payments']='payment/unrecognised_received_payments';

$route['affiliated/add-affiliated']='affiliated/saveAffiliated';
$route['affiliated/edit-affiliated']='affiliated/updateAffiliated';

$route['monetiser/my-monitiser-online']='Monetiser';
$route['monitiser/add-monitiser']='monetiser/saveMonetiser';




/* admin Create Controller */

$route['admin']='admin/dashboard';






/* Admin close */
//$route['method/(:any)'] = 'controller/method/index/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
