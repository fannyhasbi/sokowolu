<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visit_model extends CI_Model {
  public function getSum(){
    $q = $this->db->query('SELECT COUNT(*) AS visit_count FROM visit');
    return $q->row();
  }

  public function add(){
    $data = array(
      'link' => uri_string()
    );
    
    $this->db->insert('visit', $data);
  }

}
