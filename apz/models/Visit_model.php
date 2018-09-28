<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visit_model extends CI_Model {
  public function add(){
    $data = array(
      'link' => uri_string()
    );
    
    $this->db->insert('visit', $data);
  }

}
