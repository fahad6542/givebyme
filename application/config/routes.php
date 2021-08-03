<?php

defined('BASEPATH') or exit('No direct script access allowed');



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

$route['default_controller'] = 'Dashboard';

$route['404_override'] = '';

$route['translate_uri_dashes'] = false;

$route['validation'] = 'Form';

// $route['project-remove/:id'] = 'Projects/remove';
/*
 * Start
 * Added by Fahad eInstallment/detail/8*/
//$route['product/(:num)'] = 'catalog/product_lookup_by_id/$1';
$route["donation/detail/(:num)"]="Dividend/detail/$1";

$route["campaign/add"]="/Company/create/company";
$route["campaign/edit/(:num)"]="Company/edit/$1";
$route["campaign/plans/(:num)"]="Company/plans/$1";
$route["campaign/subscribers/(:any)"]="Company/subscribers/$1";
$route["campaign/detail/(:num)"]="invest/details/$1";

$route['my-stripe'] = "StripeController";
$route['stripePost']['post'] = "StripeController/stripePost";
$route['stripeSub']['post'] = "StripeController/stripeSub";

$route['Dividend']='dividend';
$route['Dividend/index']='dividend/inex';
$route['eInstallment'] = 'eInstallment';
$route['eInstallment/detail'] = 'eInstallment/detail';
$route['einstallment'] = 'eInstallment';
$route['einstallment/detail'] = 'eInstallment/detail';

$route['document'] = 'document';
$route['document/create'] = 'document/create';
$route['document/save'] = 'document/save';


$route['company'] = 'company';
$route['company/create'] = 'company/create';
$route['company/save'] = 'company/save';

$route['accountType'] = 'AccountType';
$route['AccountType/choose'] = 'accountType/choose';

//$route['Page/category'] = 'Page/category';
/*
 * End
 * Added by Fahad*/
$route['search'] = 'Dashboard/search';
$route['transections'] = 'Transections';

//$route['payment'] = 'Paypal/make_payment';
$route['payment'] = 'TwoCheckOut/make_payment';

$route['projects'] = 'Projects';

$route['new-project'] = 'Projects/addNewProject';

// $route['industries-remove/:id'] = 'Ajax/remove';

$route['industries/add'] = 'Industries/addnewIndustry';

$route['industries'] = 'Industries';

$route['admin'] = 'SuperAdmin';

$route['change-password'] = 'User/change_password';

$route['settings'] = 'User/settings';

$route['update'] = 'User/update_profile';

$route['risk'] = 'User/risk';

$route['how-it-works'] = 'Welcome/how_it_works';

$route['about-us'] = 'Welcome/aboutus';

$route['faq'] = 'Welcome/faq';

$route['refund'] = 'Welcome/refund';

$route['contact-us'] = 'Welcome/contactus';

$route['terms'] = 'User/terms';

$route['logout'] = 'User/logout';

$route['auth'] = 'User/login';

$route['login'] = 'User/login';

$route['register'] = 'User/register';

$route['forget'] = 'User/forget_password';

$route['my-dashboard'] = 'Dashboard/my_dashboard';

$route['dashboard'] = 'Dashboard';

$route['users'] = 'User/all_Users';
