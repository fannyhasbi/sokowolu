<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
  public function __construct(){
    parent::__construct();

    $this->visit_model->add();
  }

  public function index(){
    $this->load->model('editor_model');
    $this->load->model('reaction_model');
    $this->load->model('gallery_model');

    $data['summary']   = $this->editor_model->getSummary();
    $data['highlight'] = $this->gallery_model->getHighlight();
    $data['reactions'] = $this->reaction_model->getForHome();
    $data['gallery']   = $this->gallery_model->getForHome();

    $this->load->view('home/index', $data);
  }

  public function login_editor(){
    if($this->session->userdata('editor_login'))
      redirect(site_url('editor'));

    if($this->input->post('login')){
      $recaptcha = $this->input->post('recaptcha');
      
      $url = 'https://www.google.com/recaptcha/api/siteverify';
      $data = array(
        'secret' => getenv('RECAPTCHA_SECRET_KEY'),
        'response' => $this->input->post('g-recaptcha-response')
      );

      $options = array(
        'http' => array (
          'header' => "Content-Type: application/x-www-form-urlencoded",
          'method' => 'POST',
          'content' => http_build_query($data)
        )
      );

      $context  = stream_context_create($options);
      $verify = file_get_contents($url, false, $context);
      
      $output = json_decode($verify);

      if($output->success){
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

      $this->session->set_flashdata('msg', '<div class="alert alert-danger">Hmm you are a robot.</div>');

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

  public function send_message(){
    if(!$this->input->post('kirim')){
      show_404();
      return;
    }

    $this->load->model('home_model');
    $this->home_model->addMessage();

    $this->session->set_flashdata('success-message', true);

    redirect(site_url());
  }
}
