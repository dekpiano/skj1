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
|		my-controller/my-method	-> my_controller/my_method welcome/not_404
*/
$route['default_controller'] = 'welcome/father_day';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'control_login/login_main';

$route['admin'] = 'admin/control_admin/index';
$route['admin/login'] = 'admin/control_admin/login';

$route['admin/news'] = 'admin/control_admin_news';
$route['admin/news/add'] = 'admin/control_admin_news/add';

$route['admin/banner'] = 'admin/control_admin_banner';
$route['admin/banner/add'] = 'admin/control_admin_banner/add';

$route['admin/journal'] = 'admin/control_admin_journal';
$route['admin/journal/add'] = 'admin/control_admin_journal/add';

$route['admin/personnel'] = 'admin/control_admin_personnel';
$route['admin/personnel/add'] = 'admin/control_admin_personnel/add';
$route['admin/personnel/profile'] = 'admin/control_admin_personnel/profile_personnel';

$route['admin/position'] = 'admin/control_admin_position';
$route['admin/position/add'] = 'admin/control_admin_position/add';

$route['admin/adminmenu'] = 'admin/control_admin_adminmenu';
$route['admin/adminmenu/add'] = 'admin/control_admin_adminmenu/add';

$route['admin/workother'] = 'admin/control_admin_workother';
$route['admin/workother/add'] = 'admin/control_admin_workother/add';

$route['admin/department'] = 'admin/control_admin_department';
$route['admin/department/add'] = 'admin/control_admin_department/add';

$route['admin/learning'] = 'admin/control_admin_learning';
$route['admin/learning/add'] = 'admin/control_admin_learning/add';

$route['admin/aboutschool'] = 'admin/control_admin_aboutschool';
$route['admin/aboutschool/add'] = 'admin/control_admin_aboutschool/add';

$route['admin/recruitstudent'] = 'admin/control_admin_recruitstudent';
$route['admin/recruitstudent/add'] = 'admin/control_admin_recruitstudent/add';

$route['admin/images'] = 'admin/control_admin_images';
$route['admin/images/add'] = 'admin/control_admin_images/add';

$route['admin/institutionO'] = 'admin/control_admin_institutionO';
$route['admin/institutionO/add'] = 'admin/control_admin_institutionO/add';

$route['admin/document'] = 'admin/control_admin_document';
$route['admin/document/add'] = 'admin/control_admin_document/add';


// ข่าวสารทั้งหมด
$route['news/newsDetail/(:any)'] = 'control_news/news_detail/$1';
$route['news/all'] = 'control_news/news_all';

// วารสาร
$route['journal'] = 'control_journal/journal_all';

// เกี่ยวกับโรงเรียน
$route['AboutSchool/(:any)'] = 'control_aboutschool/aboutschool_detail/$1';

// รูปกิจกรรม
$route['Album'] = 'control_images/show_all_album';

// [[บุคลากร]]
$route['Personnel'] = 'control_personnel/show_per_all';
$route['Personnel/(:any)'] = 'control_personnel/show_per_type/$1';

//document
$route['document'] = 'control_document/document_all';
// ติดต่อ
$route['Contact'] = 'control_contact/contact_main';