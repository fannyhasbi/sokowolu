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

function editor_brand_link($uri_string){
  // Default value
  $returned = strtoupper($uri_string);

  $url_db = array(
    'editor' => 'Dashboard',
    'editor/article' => 'Artikel',
    'editor/add-article' => 'Tambah Artikel',
    'editor/profile' => 'Profil'
  );

  if(array_key_exists($uri_string, $url_db)){
    $returned = $url_db[$uri_string];
  }

  return $returned;
}