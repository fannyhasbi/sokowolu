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
      $data['message'] = $this->session->flashdata('msg');
      $this->load->view('editor/login', $data);
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

      notify('Perubahan berhasil disimpan', 'success', 'editor/profile');
    }
    else if($this->input->post('save-password')){
      if(strlen($this->input->post('password')) < 6){
        notify('Password harus lebih dari 5 karakter', 'error', 'editor/profile');
      }
      if($this->input->post('password') !== $this->input->post('password2')){
        notify('Password harus sama', 'error', 'editor/profile');
      }
      else {
        $this->editor_model->updatePassword();

        notify('Password berhasil disimpan', 'success', 'editor/profile');
      }
    }
    else {
      $data['view_name'] = 'profile';
      $this->load->view('editor/index_view', $data);
    }
  }

  public function article(){
    $this->load->model('article_model');

    $data['articles'] = $this->article_model->get();
    $data['view_name'] = 'article';
    $this->load->view('editor/index_view', $data);
  }

  public function add_article(){
    if($this->input->post('add-article')){
      $this->load->model('article_model');
      
      $this->article_model->add();

      notify('Artikel berhasil ditambahkan', 'success', 'editor/article');
    }
    else {
      $data['view_name'] = 'add_article';
      $this->load->view('editor/index_view', $data);
    }
  }

  public function edit_article($slug){
    $this->load->model('article_model');

    // Check the slug if it exists
    if($this->article_model->checkBySlug($slug)->num_rows() > 0){
      if($this->input->post('save-article')){
        $this->article_model->update($slug);
        notify('Artikel berhasil disimpan', 'success', 'editor/article');
      }
      else {
        $data['article'] = $this->article_model->getBySlug($slug);
      }
    }
    else {
      notify('Artikel tidak ditemukan', 'error', 'editor/article');
    }

    $data['view_name'] = 'edit_article';
    $this->load->view('editor/index_view', $data);
  }

  public function delete_article($id){
    $this->load->model('article_model');

    // Check if id is exist
    if($this->article_model->checkById($id)->num_rows() > 0){
      $this->article_model->delete($id);

      notify('Artikel berhasil dihapus', 'success', 'editor/article');
    }
    else {
      notify('Artikel tidak ditemukan', 'error', 'editor/article');
    }
  }

}
