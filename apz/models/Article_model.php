<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model {
  private function purify_slug($r){
    $tags = ['.',',','/','\'','"','?','!','\\','=','+','*','&','^','%','$','@','<','>'];
    
    $r = str_replace($tags, '', $r);
    $r = str_replace(' ', '-', $r);
    $r = htmlspecialchars($r);
    $r = stripslashes($r);
    $r = trim($r);
    $r = strtolower($r);

    return $r;
  }

  public function checkBySlug($slug){
    return $this->db->get_where('article', ['slug' => $slug]);
  }

  public function get(){
    $this->db->select('article.id, article.name, article.slug, article.created_at, article.views_count, editor.name AS editor_name');
    $this->db->from('article');
    $this->db->join('editor', 'article.id_editor = editor.id');
    $this->db->order_by('created_at', 'DESC');
    $q = $this->db->get();
    
    return $q->result();
  }

  public function getBySlug($slug){
    $q = $this->db->get_where('article', ['slug' => $slug]);
    return $q->row();
  }

  public function add(){
    $slug = $this->purify_slug($this->input->post('name'));

    $data = array(
      'name' => $this->input->post('name'),
      'slug' => $slug,
      'content' => $this->input->post('content'),
      'id_editor' => $this->session->userdata('id')
    );

    $this->db->insert('article', $data);
  }

  public function update($slug){
    $this->db->where('slug', $slug);
    $data = array(
      'name' => $this->input->post('name'),
      'content' => $this->input->post('content')
    );

    $this->db->update('article', $data);
  }

}
