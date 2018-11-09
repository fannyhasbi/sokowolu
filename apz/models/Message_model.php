<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model {
  public function check($id){
    return $this->db->get_where('message', ['id' => $id]);
  }

  public function get(){
    $this->db->order_by('is_read', 'ASC');
    $this->db->order_by('id', 'DESC');
    $q = $this->db->get('message');
    
    return $q->result();
  }

  private function getById($id){
    $q = $this->db->get_where('message', ['id' => $id]);
    
    return $q->row();
  }

  public function setRead($id){
    $message = $this->getById($id);

    // jika pesan belum pernah dibaca
    if($message->is_read == 0){
      $this->db->where('id', $id);
      $data = array(
        'is_read' => 1
      );

      $this->db->update('message', $data);
    }
  }
}