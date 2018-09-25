<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor_model extends CI_Model {
  public function checkUsername($username){
    return $this->db->get_where('editor', ['username' => $username]);
  }
  
  public function getByUsername($username){
    $q = $this->db->get_where('editor', ['username' => $username]);
    return $q->row();
  }

  public function updateName(){
    $this->db->where('id', $this->session->userdata('id'));
    
    $data = array(
      'name' => $this->input->post('name')
    );

    $this->db->update('editor', $data);
  }

  public function updatePassword(){
    $this->db->where('id', $this->session->userdata('id'));

    $data = array(
      'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
    );

    $this->db->update('editor', $data);
  }

}
