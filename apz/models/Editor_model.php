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

  public function getArticleSummary(){
    $this->db->select('COUNT(*) AS article_count');
    $this->db->from('article');
    $q = $this->db->get();
    return $q->row();
  }

  public function getLastArticle(){
    $this->db->select('created_at');
    $this->db->from('article');
    $this->db->order_by('created_at', 'DESC');
    $this->db->limit(1);
    $q = $this->db->get();

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
