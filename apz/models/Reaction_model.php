<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reaction_model extends CI_Model {
  public function getReaction(){
    $this->db->limit(3);
    $q = $this->db->get('reaction');

    return $q->result();
  } 

}