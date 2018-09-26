<?php

function notify($message, $type = 'success', $redirect_to = null){
  $ci =& get_instance();

  $ci->session->set_flashdata('msg', $message);
  $ci->session->set_flashdata('type', $type);

  if($redirect_to)
    redirect(site_url($redirect_to));

  return;
}