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
    $data['view_name'] = 'dashboard';
    $this->load->view('editor/index_view', $data);
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
      $data['view_name'] = 'login';
      $data['message'] = $this->session->flashdata('msg');
      $this->load->view('editor/index_view', $data);
    }
  }

  public function logout(){
    $this->session->sess_destroy();

    redirect(site_url());
  }

  public function profile(){
    if($this->input->post('save')){
      $this->editor_model->updateName();

      $this->session->set_userdata(['name' => $this->input->post('name')]);

      redirect(site_url('editor/profile'));
    }
    else if($this->input->post('save-password')){
      if(strlen($this->input->post('password')) < 6){
        redirect(site_url('editor/profile'));
      }
      if($this->input->post('password') !== $this->input->post('password2')){
        redirect(site_url('editor/profile'));
      }
      else {
        $this->editor_model->updatePassword();

        redirect(site_url('editor/profile'));
      }
    }
    else {
      $data['view_name'] = 'profile';
      $this->load->view('editor/index_view', $data);
    }
  }

}
