<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
  public function addMessage(){
    $data = array(
      'name' => purify($this->input->post('name')),
      'email'=> purify($this->input->post('email')),
      'message' => purify($this->input->post('message'))
    );

    $this->db->insert('message', $data);
  }

}