<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
  public function addMessage(){
    $data = array(
      'name' => $this->input->post('name'),
      'email'=> $this->input->post('email'),
      'message' => $this->input->post('message')
    );

    $this->db->insert('message', $data);
  }

}