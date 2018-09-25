<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {
  public function get(){
    $this->db->select('article.id, article.name, article.slug, article.created_at, article.views_count, editor.name AS editor_name');
    $this->db->from('article');
    $this->db->join('editor', 'article.id_editor = editor.id');
    $this->db->order_by('created_at', 'DESC');
    $q = $this->db->get();
    
    return $q->result();
  }

}
