<?php

function notify($message, $type = '', $redirect_to = null){
  $ci =& get_instance();

  // Based on the SweetAlert documentation
  $accepted_type = ['warning', 'error', 'success', 'info'];

  // Change to empty string when the sent type isn't in the accepted_type array
  if($type != ''){
    if(!in_array($type, $accepted_type))
      $type = '';
  }

  $ci->session->set_flashdata('msg', $message);
  $ci->session->set_flashdata('type', $type);

  if($redirect_to)
    redirect(site_url($redirect_to));

  return;
}