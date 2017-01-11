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
$route['dev'] = 'dev';


$route['category/(:any)'] = 'home/category/$1';
$route['user/(:any)'] = 'home/user/$1';

$route['admin'] = 'admin';
$route['morecategorusers'] = 'home/moreCategorUsers';
$route['search'] = 'home/search';
$route['makefollow'] = 'followers/follow';
$route['makelike'] = 'followers/like';
$route['makeview'] = 'followers/makeview';
$route['makeunlike'] = 'followers/unlike';
$route['makeunfollow'] = 'followers/unfollow';
$route['followerlogin'] = 'followers/login';
$route['signup'] = 'signup';
$route['signup/try'] = 'signup/try';
$route['follower/(:any)/pick-categories'] = 'followers/pickcategories';
$route['follower/(:any)'] = 'followers/profile';
$route['login'] = 'login';
$route['logout'] = 'logout';
$route['about'] = 'home/about';
$route['blog'] = 'home/blog';
$route['trending'] = 'home/trending';
$route['contact'] = 'home/contact';
$route['user/add'] = 'user/add';
$route['user/delete'] = 'user/delete';
$route['profile'] = 'user/profile';
$route['settings'] = 'user/settings';
$route['admin/users'] = 'user';
$route['admin/processajax/(:any)'] = 'user/socialform/$1';
$route['admin/ajaxcontactnumbers/(:any)'] = 'user/contactform/$1';

$route['admin/user/media/(:any)'] = "user/media/$1";
$route['admin/user/(:any)'] = "user/userprofile/$1";
$route['admin/validate/(:any)'] = "user/uservalidate/$1";
$route['admin/deleteuser/(:any)'] = "user/userdelete/$1";
$route['admin/confirmuserdelete/(:any)'] = "user/confirmuserdelete/$1";
$route['admin/uploadprofile/(:any)'] = "upload/index/$1";
$route['admin/uploadmedia/(:any)'] = "upload/media/$1";
$route['admin/updatemedia/(:any)'] = "user/updatemedia/$1";
$route['admin/deletemedia/(:any)'] = "user/deletemedia/$1";



$route['admin/addtestusers'] = "user/addtestusers";





$route['404_override'] = 'home';



/* End of file routes.php */
/* Location: ./application/config/routes.php */