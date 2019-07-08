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
|	http://codeigniter.com/user_guide/general/routing.html
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

$route[''] = 'home';
$route['default_controller'] = 'home';
$route['search'] = 'home/search';
$route['pathway_form'] = 'home/pathway_form';
$route['pathway_fc_form'] = 'home/pathway_fc_form';
$route['gene/(:any)'] = 'home/gene/$1';
$route['pathway/(:any)'] = 'home/pathway/$1';
$route['browse'] = 'home/browse';
$route['faq'] = 'home/faq';
$route['home/nodule/(:num)']='home/module/$1';
$route['tutorial'] = 'home/tutorial';
$route['download'] = 'home/download';
$route['contact-us'] = 'home/contact_us';
$route['contactusform'] = 'home/contactusform';
$route['data'] = 'home/data';
$route['searchresults'] = 'home/search_results';
$route['pathway_information'] = 'home/pathway_information';
$route['searchresults2'] = 'home/search_results2';
$route['searchresultsold'] = 'home/search_results_old';
//$route['browse/(:num)/(:num)'] = 'home/browse/$1/$2';
$route['translate_uri_dashes'] = FALSE;

?>
