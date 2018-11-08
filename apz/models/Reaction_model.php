<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reaction_model extends CI_Model {
  public function check($id){
    $id = purify($id);
    return $this->db->get_where('reaction', ['id' => $id]);
  }

  public function checkPhoto($alamat){
    $alamat = purify($alamat);
    return $this->db->get_where('reaction', ['photo' => $alamat]);
  }

  public function getReaction(){
    $this->db->limit(3);
    $q = $this->db->get('reaction');

    return $q->result();
  } 

  public function getReactionById($id){
    $q = $this->db->get_where('reaction', ['id' => $id]);

    return $q->row();
  }

  public function updateReaction($id, $alamat_foto = NULL){
    $this->db->where('id', purify($id));

    $data = array(
      'name' => purify($this->input->post('name')),
      'role' => purify($this->input->post('role')),
      'reaction' => purify($this->input->post('reaction'))
    );

    if($alamat_foto != NULL){
      $data['photo'] = $alamat_foto;
    }

    $this->db->update('reaction', $data);
  }

  public function updateHideStatus($id, $action){
    $this->db->where('id', $id);

    if($action == 'show'){
      $data['is_hidden'] = 0;
    }
    else if($action == 'hide'){
      $data['is_hidden'] = 1;
    }
    else {
      return;
    }

    $this->db->update('reaction', $data);
  }

}