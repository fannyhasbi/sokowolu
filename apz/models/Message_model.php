<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model {
  public function get(){
    $this->db->order_by('id', 'DESC');
    $q = $this->db->get('message');
    return $q->result();
  }

}