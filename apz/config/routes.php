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

// Summary Editor
$route['editor/summary'] = 'editor/summary';

// Article Editor
$route['editor/article/(:any)'] = 'editor/edit_article/$1';
$route['editor/article'] = 'editor/article';
$route['editor/add-article'] = 'editor/add_article';
$route['editor/delete-article/(:num)'] = 'editor/delete_article/$1';

// Gallery Editor
$route['editor/gallery'] = 'editor/gallery';
$route['editor/add-gallery'] = 'editor/add_gallery';
$route['editor/delete-gallery/(:num)'] = 'editor/delete_gallery/$1';

// Reaction for homepage Editor
$route['editor/reaction'] = 'editor/reaction';
$route['editor/reaction/(:num)'] = 'editor/edit_reaction/$1';
$route['editor/action-reaction'] = 'editor/action_reaction';

// Message Editor
$route['editor/message'] = 'editor/message';
$route['editor/message/(:num)'] = 'editor/see_message/$1';

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
