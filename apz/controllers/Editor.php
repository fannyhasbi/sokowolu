<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends CI_Controller {
  public function index(){
    $this->cekLogin();

    $this->dashboard();
  }

  private function cekLogin(){
    if(!$this->session->userdata('editor_login'))
      redirect(site_url('editor/login'));
  }

  private function dashboard(){
    // to do
  }

  public function login(){
    if($this->input->post('login')){
      $session_data = array(
        'editor_login' => true,
        'name' => 'Fanny Hasbi',
        'username' => 'fannyhasbi'
      );

      $this->session->set_userdata($session_data);

      redirect(site_url('editor'));
    }
    else {
      $this->load->view('editor/login');
    }
  }

  public function logout(){
    $this->session->sess_destroy();

    redirect(site_url());
  }

}
