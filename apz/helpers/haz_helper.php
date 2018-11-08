<?php

function notify($message, $type = '', $redirect_to = null){
  $ci =& get_instance();

  // Based on the SweetAlert documentation
  $accepted_type = ['warning', 'error', 'success', 'info'];

  // Change to empty string when the sent type isn't in the accepted_type array
  if($type != ''){
    if(!in_array($type, $accepted_type))
      $type = 'info';
  }

  $ci->session->set_flashdata('msg', $message);
  $ci->session->set_flashdata('type', $type);

  if($redirect_to)
    redirect(site_url($redirect_to));

  return;
}

function month_definer($bulan){
  switch($bulan){
    case 1: return "Januari"; break;
    case 2: return "Februari"; break;
    case 3: return "Maret"; break;
    case 4: return "April"; break;
    case 5: return "Mei"; break;
    case 6: return "Juni"; break;
    case 7: return "Juli"; break;
    case 8: return "Agustus"; break;
    case 9: return "September"; break;
    case 10: return "Oktober"; break;
    case 11: return "November"; break;
    case 12: return "Desember"; break;
  }
}

function date_definer($tanggal){
  /**
   * $tanggal = "YYYY-MM-DD"
   * $tanggal = "2018-07-20"
  */
  $tanggal = explode("-", $tanggal);
  $tanggal[1] = month_definer($tanggal[1]);
  $tanggal[2] = explode(" ", $tanggal[2])[0];
  $tanggal = array_reverse($tanggal);
  return implode(" ", $tanggal);
}

// purify inputs
function purify($r){
  $r = htmlspecialchars($r);
  $r = stripslashes($r);
  $r = trim($r);

  return $r;
}