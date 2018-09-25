<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends CI_Controller {
  public function __construct(){
    parent::__construct();

    $this->load->model('editor_model');
  }

  public function index(){
    $this->cekLogin();

    $this->dashboard();
  }

  private function cekLogin(){
    if(!$this->session->userdata('editor_login'))
      redirect(site_url('editor/login'));
  }

  private function dashboard(){
    $this->load->view('editor/dashboard');
  }

  public function login(){
    if($this->session->userdata('editor_login'))
      redirect(site_url('editor'));

    if($this->input->post('login')){
      $username = $this->input->post('username');

      if($this->editor_model->checkUsername($username)->num_rows() > 0){
        $editor = $this->editor_model->getByUsername($username);

        $password = $this->input->post('password');

        if(password_verify($password, $editor->password)){
          $session_data = array(
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

  public function logout(){
    $this->session->sess_destroy();

    redirect(site_url());
  }

  public function profile(){    
    $this->load->view('editor/profile');
  }

}
