<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('article_model');
  }

  public function index(){
    $data['articles'] = $this->article_model->getAll();

    $data['view_name'] = 'index';
    $this->load->view('article/index_view', $data);
  }

  public function detail($slug){
    if($this->article_model->checkBySlug($slug)->num_rows() == 0)
      show_404();

    $data['article'] = $this->article_model->getBySlug($slug);

    $data['view_name'] = 'detail';
    $this->load->view('article/index_view', $data);
  }
}
