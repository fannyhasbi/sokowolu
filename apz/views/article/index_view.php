<!--
Author: Fanny Hasbi
Organization: Computer Engineering Research Club
Author URL: https://fannyhasbi.github.io
Organization URL: http://cerc-undip.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <title><?= isset($view_title) ? $view_title : 'Artikel Sokowolu' ?></title>
  <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="<?= base_url(); ?>assets/css/personal-blog.css" rel='stylesheet' type='text/css' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <?php if(isset($keywords)){ ?>

  <?php } else { ?>
    <meta name="keywords" content="Sokowolu, Semarang, Salatiga, Desa Wisata Salatiga, HIMASKOM UNDIP, Teknik Komputer Undip" />
  <?php } ?>
  
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  <!----webfonts---->
  <link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>
  <!----//webfonts---->
    
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!--end slider -->
    
  <!--script-->
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/move-top.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/easing.js"></script>
  <!--/script-->
  
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $(".scroll").click(function(event){   
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
      });
    });
  </script>
</head>
<body>
  <!---header---->      
  <div class="header">  
    <div class="container">
      <div class="logo">
        <a href="<?= site_url(); ?>">
          <h1>Sokowolu</h1>
        </a>
      </div>
      <!---start-top-nav---->
      <div class="top-menu">
        <span class="menu"> </span>
          <ul>
            <li class="active"><a href="<?= site_url(); ?>">HOME</a></li>
            <li class="active"><a href="<?= site_url('article'); ?>">ARTIKEL</a></li>
            <div class="clearfix"> </div>
         </ul>
      </div>
      <div class="clearfix"></div>
      
      <script>
        $("span.menu").click(function(){
          $(".top-menu ul").slideToggle("slow" , function(){

          });
        });
      </script>
      <!---//End-top-nav---->
    </div>
  </div>
  <!--/header-->

  <?php $this->load->view('article/'.$view_name); ?>

  <div class="footer">
    <div class="container">
      <p>Copyrights &copy; 2018 Blog All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
  </div>
</body>
</html>