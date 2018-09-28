<?php

function article_image($content){
  preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content, $image);
  
  if(count($image) > 0){
    return $image['src'];
  }

  return false;
}