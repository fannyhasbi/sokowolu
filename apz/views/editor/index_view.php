<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Sokowolu | Editor</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="<?= base_url(); ?>assets/img/favico.ico">
  
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <!-- CSS Files -->
  <link href="<?= base_url(); ?>assets/css/material-dashboard.css" rel="stylesheet" />

  <!-- TinyMCE -->
  <script src="<?= base_url(); ?>assets/js/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/tinymce/editor.js"></script>

  <!-- SweetAlert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!--   Core JS Files   -->
  <script src="<?= base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap-material-design.min.js" type="text/javascript"></script>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure">
      <div class="logo">
        <a href="<?= site_url(); ?>" class="simple-text logo-normal">Sokowolu</a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?= editor_active_link('dashboard', uri_string()) ?>">
            <a class="nav-link" href="<?= site_url('editor'); ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?= editor_active_link('article', uri_string()) ?>">
            <a class="nav-link" href="<?= site_url('editor/article'); ?>">
              <i class="material-icons">file_copy</i>
              <p>Artikel</p>
            </a>
          </li>
          <li class="nav-item <?= uri_string() == 'editor/gallery' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('editor/gallery'); ?>">
              <i class="material-icons">photo</i>
              <p>Gallery</p>
            </a>
          </li>
          <li class="nav-item <?= uri_string() == 'editor/reaction' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('editor/reaction'); ?>">
              <i class="material-icons">mood</i>
              <p>Tanggapan</p>
            </a>
          </li>
          <li class="nav-item <?= uri_string() == 'editor/profile' ? 'active' : '' ?>">
            <a class="nav-link" href="<?= site_url('editor/profile'); ?>">
              <i class="material-icons">person</i>
              <p>Profil</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#"><?= editor_brand_link(uri_string()); ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('editor/logout'); ?>" title="Logout">
                  <i class="material-icons">exit_to_app</i>
                  <p class="d-lg-none d-md-block">Logout</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
      <!-- Content -->
      <div class="content">
        <div class="container-fluid">
          <?php $this->load->view('editor/'.$view_name); ?>
        </div>
      </div>
      <!-- End Content -->

      <!-- Footer -->
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">Home</a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">Article</a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy; <?= date('Y'); ?>, made with <i class="material-icons">favorite</i> by <a href="http://cerc-undip.com" target="_blank">CERC Undip</a>.
          </div>
        </div>
      </footer>
      <!-- End Footer -->
    </div>
  </div>

  <script>
    var msg = '<?= $this->session->flashdata('msg') ?>';
    var type = '<?= $this->session->flashdata('type') ?>';

    if(msg.length !== 0){
      swal('', msg, type);
    }
  </script>

  <script src="<?= base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url(); ?>assets/js/bootstrap-notify.js"></script>
  <!-- Chartist JS -->
  <script src="<?= base_url(); ?>assets/js/chartist.min.js"></script>
  <!-- Material -->
  <script src="<?= base_url(); ?>assets/js/material-dashboard.min.js" type="text/javascript"></script>
</body>
</html>