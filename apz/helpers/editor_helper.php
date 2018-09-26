<?php

function editor_active_link($uri_key, $uri_string){
  $url_db = array(
    'dashboard' => [
      'editor'
    ],
    'article' => [
      'editor/article',
      'editor/add-article'
    ],
    'profile' => [
      'editor/profile'
    ]
  );

  $found = false;
  foreach($url_db as $uri => $routes){
    if($uri_key == $uri){
      $found = true;
      break;
    }
  }

  if($found === true){
    if(in_array($uri_string, $url_db[$uri_key]))
      return 'active';
  }

  return '';
}