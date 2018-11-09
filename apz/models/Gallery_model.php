<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {
  public function checkSrc($src){
    return $this->db->get_where('gallery', ['src' => $src]);
  }

  public function getForHome(){
    $this->db->limit(9);
    $this->db->order_by('id', 'DESC');
    $q = $this->db->get('gallery');

    return $q->result();
  }

  public function get(){
    $this->db->order_by('id', 'DESC');
    $q = $this->db->get('gallery');

    return $q->result();
  }

  public function getHighlight(){
    $q = $this->db->get('highlight_photo');
    return $q->result();
  }

  public function addGallery($alamat){
    $data = array(
      'judul' => purify($this->input->post('judul')),
      'src'   => $alamat
    );

    $this->db->insert('gallery', $data);
  }

  public function delete($id){
    $this->db->where('id', $id);

    $this->db->delete('gallery');
  }
}