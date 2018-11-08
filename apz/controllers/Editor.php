<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends CI_Controller {
  public function __construct(){
    parent::__construct();

    $this->cekLogin();
    $this->load->model('editor_model');
  }

  private function generateAlamatGallery(){
    $alamat = "sokowolu_";
    $n = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    for($i=0;$i<30;$i++){
      $alamat .= $n[rand(0, strlen($n) - 1)];
    }

    return $alamat;
  }

  private function generateAlamatReaction(){
    $alamat = "skwl_";
    $n = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    for($i=0;$i<10;$i++){
      $alamat .= $n[rand(0, strlen($n) - 1)];
    }

    return $alamat;
  }

  public function index(){
    $this->dashboard();
  }

  private function cekLogin(){
    if(!$this->session->userdata('editor_login'))
      redirect(site_url('editor/login'));
  }

  private function dashboard(){
    $data['summary'] = [
      'general' => [
        'visit' => $this->visit_model->getSum()->visit_count
      ],
      'article' => [
        'count' => $this->editor_model->getArticleSummary()->article_count,
        'last' => $this->editor_model->getLastArticle()->created_at,
        'views_count' => $this->editor_model->getArticleViewCount()->views
      ]
    ];

    $data['view_name'] = 'dashboard';
    $this->load->view('editor/index_view', $data);
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

  public function gallery(){
    $this->load->model('gallery_model');

    $data['view_name'] = 'gallery';
    $data['gallery']   = $this->gallery_model->getGallery();

    $this->load->view('editor/index_view', $data);
  }

  public function add_gallery(){
    if($this->input->post('add-gallery')){
      $alamat = $this->generateAlamatGallery();

      $this->load->model('gallery_model');

      // cek apakah ada src yang sama
      $cek = $this->gallery_model->checkSrc($alamat)->num_rows();
      while($cek > 0){
        $alamat = $this->generateAlamatGallery();
        $cek = $this->gallery_model->checkSrc($alamat)->num_rows();
      }

      $config['upload_path']   = './uploads/gallery/';
      $config['file_name']     = $alamat;
      $config['allowed_types'] = 'jpg|png|svg';
      $config['max_size']      = 600;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('foto')){
        notify($this->upload->display_errors('', ''), 'error', 'editor/gallery');
      }
      else {
        $data = $this->upload->data();

        $this->gallery_model->addGallery($data['file_name']);

        notify('Berhasil menambahkan foto ke galeri', 'success', 'editor/gallery');
      }
    }
    else {
      $data['view_name'] = 'add_gallery';
      $this->load->view('editor/index_view', $data);
    }
  }

  public function reaction(){
    $this->load->model('reaction_model');
    $data['view_name'] = 'reaction';
    $data['reactions'] = $this->reaction_model->getReaction();

    $this->load->view('editor/index_view', $data);
  }

  public function edit_reaction($id){
    $this->load->model('reaction_model');

    $cek = $this->reaction_model->check($id);
    if($cek->num_rows() == 0){
      notify('Tanggapan tidak ditemukan', 'warning', 'editor/reaction');
      return;
    }

    if($this->input->post('save-reaction')){
      // cek apakah ada foto yang diupload
      if(!empty($_FILES['foto']['name'])){
        $alamat = $this->generateAlamatReaction();

        // cek apakah ada src yang sama
        $cek = $this->reaction_model->checkPhoto($alamat)->num_rows();
        while($cek > 0){
          $alamat = $this->generateAlamatReaction();
          $cek = $this->reaction_model->checkPhoto($alamat)->num_rows();
        }

        $config['upload_path']   = './uploads/reaction/';
        $config['file_name']     = $alamat;
        $config['allowed_types'] = 'jpg|png|svg';
        $config['max_size']      = 600;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto')){
          notify($this->upload->display_errors('', ''), 'error', 'editor/reaction');
        }
        else {
          $data = $this->upload->data();

          $this->reaction_model->updateReaction($id, $data['file_name']);

          notify('Perubahan berhasil disimpan', 'success', 'editor/reaction');
        }
      }
      else {
        $this->reaction_model->updateReaction($id, NULL);

        notify('Perubahan berhasil disimpan', 'success', 'editor/reaction');
      }
    }
    else {
      $data['view_name'] = 'edit_reaction';
      $data['reaction'] = $this->reaction_model->getReactionById($id);

      $this->load->view('editor/index_view', $data);
    }
  }

}
