<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Sokowolu | Editor</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <!-- CSS Files -->
  <link href="<?= base_url(); ?>assets/css/material-dashboard.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure">
      <div class="logo">
        <a href="<?= site_url(); ?>" class="simple-text logo-normal">Sokowolu</a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
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
            <a class="navbar-brand" href="#">Dashboard</a>
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
                <a class="nav-link" href="<?= site_url('editor/logout'); ?>">
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
          <h2>Hello Sokowolu!</h2>
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
  <!--   Core JS Files   -->
  <script src="<?= base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
  <!-- Chartist JS -->
  <script src="<?= base_url(); ?>assets/js/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url(); ?>assets/js/bootstrap-notify.js"></script>
  <!-- Material -->
  <script src="<?= base_url(); ?>assets/js/material-dashboard.min.js" type="text/javascript"></script>
</body>

</html>