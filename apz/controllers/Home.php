<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct(){
    parent::__construct();
  }

  public function index(){
    $this->load->model('article_model');
    $data['latest_article'] = $this->article_model->getLatest()->content;
    $data['latest_article'] = substr(strip_tags($data['latest_article']), 0, 120) . " ...";

    $this->load->view('home/index', $data);
  }

  public function login_editor(){
    if($this->session->userdata('editor_login'))
      redirect(site_url('editor'));

    if($this->input->post('login')){
      $this->load->model('editor_model');
      $username = $this->input->post('username');

      if($this->editor_model->checkUsername($username)->num_rows() > 0){
        $editor = $this->editor_model->getByUsername($username);

        $password = $this->input->post('password');

        if(password_verify($password, $editor->password)){
          $session_data = array(
            'id' => $editor->id,
            'editor_login' => true,
            'name' => $editor->name,
            'username' => $editor->username
          );

          $this->session->set_userdata($session_data);

          redirect(site_url('editor'));
        }
      }

      $this->session->set_flashdata('msg', '<div class="alert alert-danger">Username atau password salah</div>');

      redirect(site_url('editor/login'));
    }
    else {
      $data['message'] = $this->session->flashdata('msg');
      $this->load->view('editor/login', $data);
    }
  }

  public function logout_editor(){
    $this->session->sess_destroy();

    redirect(site_url());
  }
}
