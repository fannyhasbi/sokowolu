<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Editor
$route['editor'] = 'editor';
$route['editor/profile'] = 'editor/profile';
$route['editor/login'] = 'editor/login';
$route['editor/logout'] = 'editor/logout';

// Article
$route['editor/article/(:any)'] = 'editor/edit_article/$1';
$route['editor/article'] = 'editor/article';
$route['editor/add-article'] = 'editor/add_article';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
