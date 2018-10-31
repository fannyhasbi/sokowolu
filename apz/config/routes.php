<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['send-message'] = 'home/send_message';

// Article Page
$route['article'] = 'article';
$route['article/(:any)'] = 'article/detail/$1';

// Editor
$route['editor'] = 'editor';
$route['editor/profile'] = 'editor/profile';
$route['editor/login'] = 'home/login_editor';
$route['editor/logout'] = 'home/logout_editor';

// Article Editor
$route['editor/article/(:any)'] = 'editor/edit_article/$1';
$route['editor/article'] = 'editor/article';
$route['editor/add-article'] = 'editor/add_article';
$route['editor/delete-article/(:num)'] = 'editor/delete_article/$1';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
