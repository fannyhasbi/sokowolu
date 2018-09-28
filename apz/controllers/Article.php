<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('article_model');
  }

  public function index(){
    $data['articles'] = $this->article_model->getAll();
    $this->load->view('article/index', $data);
  }

  public function detail(){
    $this->load->view('article/detail');
  }
}
