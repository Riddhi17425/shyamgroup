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
$route['default_controller'] = 'home';
$route['company-profile'] = 'Company_Profile';
$route['vision-and-mission'] = 'Vision_And_Mission';
$route['team'] = 'Team';
$route['associate-team'] = 'Associate_Team';
$route['dholera-news'] = 'Dholera_News';
$route['dholera-videos'] = 'Dholera_Videos';
$route['pressrelease'] = 'Pressrelease';
$route['current-status-dholera'] = 'Current_Status_Dholera';
$route['tenders'] = 'Tenders';
$route['legal-documents'] = 'Legal_Documents';
$route['testimonials'] = 'Testimonials';
$route['event-exhibitions'] = 'Event_exhibitions';
$route['certificate'] = 'Certificate';
$route['contact-us'] = 'Contact_Us';
$route['payment'] = 'Payment';
$route['print-media'] = 'Print_Media';
$route['blog'] = 'Print_media';
$route['awards'] = 'Awards';
$route['gallery'] = 'Gallery';
$route['vender'] = 'Vender';
$route['home'] = 'Home';
$route['social-media'] = 'Social_Media'; 
$route['blogs'] = 'Blog';
$route['blog/(:any)'] = 'Blog/detail/$1';

$route['our-projects'] = 'Our_Projects';

$route['whatsapp/inquiry'] = 'whatsapp/inquiry';

$route['thank-you'] = 'home/thanks';
$route['privacy-policy'] = 'home/privacy_policy';
$route['terms-conditions'] = 'home/terms_conditions';
$route['(:any)'] = 'Project/slug_to_id/$1';
$route['pinnacle-city']     = 'Project/index/5';
$route['dholera-global-city']     = 'Project/index/6';
$route['fort-villa']     = 'Fort_villa';
$route['smart-city-dholera-2']     = 'Project/index/9';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

