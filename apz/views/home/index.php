<!--
Corporation : Sistem Komputer Universitas Diponegoro
Corp. Website : himaskom.undip.ac.id
Developer : Fanny Hasbi
Developer Website : fannyhasbi.github.io
Redesign from : W3layouts
-->
<!DOCTYPE html>
<html>
<head>
  <title>Desa Sokowolu</title>

  <!--mobile apps-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <link rel="icon" href="<?= base_url(); ?>assets/img/favico.ico">

  <!--Custom Theme files -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css" type="text/css" media="all">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" type="text/css" media="all">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/lightbox.css" type="text/css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css" type="text/css" media="all">

  <!-- js -->
  <script src="<?= base_url(); ?>assets/js/jquery-1.11.1.min.js"></script> 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!--web-fonts-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
</head>
<body>
  <!--banner-->
  <div class="banner">
    <!--navigation-->
    <div class="top-nav">
      <div class="container">
        <div class="navbar-header logo">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigasi-collapse">
            <span class="sr-only">Ganti navigasi</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h1 class="wow fadeInUp animated" data-wow-delay=".2s"><a href="index.html">Sokowolu</a></h1>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigasi-collapse">
          <ul class="nav navbar-right menu__list menu--shylock">
            <li class="menu__item menu__item--current"><a href="<?= site_url('article'); ?>" class="menu__link">Kabar Desa</a></li>
            <li class="menu__item"><a href="#about" class="menu__link scroll">Tentang</a></li>
            <li class="menu__item"><a href="#services" class="menu__link scroll">Tanggapan</a></li>
            <li class="menu__item"><a href="#portfolio" class="menu__link scroll">Foto</a></li>
            <li class="menu__item"><a href="#contact" class="menu__link scroll">Pesan</a></li>
          </ul>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>  
    <!--//navigation-->
    <div class="banner-text">
      <!--banner Slider starts Here-->
      <script>
        // You can also use "$(window).load(function() {"
        $(function () {
          // Slideshow 3
          $("#slider3").responsiveSlides({
          auto: true,
          pager: false,
          nav: true,
          speed: 500,
          namespace: "callbacks",
          before: function () {
            $('.events').append("<li>before event fired.</li>");
          },
          after: function () {
            $('.events').append("<li>after event fired.</li>");
          }
          });
      
        });
      </script>
      <!--//End-slider-script-->
      <div  id="top" class="callbacks_container">
        <ul class="rslides" id="slider3">
          <li>
            <div class="banner-text-info">
              <h2 class="bnr-title wow zoomIn animated" data-wow-delay=".2s">TEMPAT SEJUK</h2> 
              <p class="wow fadeInDown animated" data-wow-delay=".7s">Udara pegunungan yang dingin dan sejuk menambah ketenangan jiwa</p>  
              <div class="more">
                <a href="#about" class="button-tamaya scroll" data-text="Lihat disini"><span>Lihat disini</span></a>
              </div>  
            </div>  
          </li>
          <li>
            <div class="banner-text-info">
              <h3 class="bnr-title">WARGA DESA RAMAH</h3> 
              <p>Warga desa Sokowolu yang dengan senang hati menyambut bahagia para wisatawan</p> 
              <div class="more">
                <a href="#about" class="button-tamaya scroll" data-text="Lihat disini"><span>Lihat disini</span></a>
              </div>
            </div>  
          </li>
          <li>
            <div class="banner-text-info">
              <h3 class="bnr-title">INSTAGRAMMABLE</h3> 
              <p>Pemandangan dataran tinggi yang hijau dan WAH menjadikan Sokowolu menjadi tempat yang <i>instagrammable</i></p>  
              <div class="more">
                <a href="#about" class="button-tamaya scroll" data-text="Lihat disini"><span>Lihat disini</span></a>
              </div>
            </div>  
          </li>
        </ul>
      </div>
    </div>  
  </div>
  <!--//banner-->

  <!--welcome-->
  <div class="welcome" id="about">
    <div class="container">
      <h3 class="title wow fadeInDown animated" data-wow-delay=".2s">Tentang Sokowolu</h3>
      <h4 class="wow fadeInDown animated" data-wow-delay=".7s"><?= $summary->slogan; ?></h4>
      <p class="w-text wow fadeInUp animated" data-wow-delay=".2s"><?= $summary->information; ?></p>
      <div class="welcome-row">
        <?php foreach($highlight as $item): ?>
          <div class="col-md-4 welcome-grids wow slideInLeft animated" data-wow-delay=".2s">
            <div class="welcome-img">
              <img src="<?= base_url('uploads/gallery/'.$item->src); ?>" class="img-responsive zoom-img" alt="<?= 'Sokowolu - '. $item->judul; ?>">
              <div class="welcome-text">
                <h5><?= $item->judul; ?></h5>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
  <!--//welcome-->
  
  <!--services-->
  <div class="services" id="services">
    <div class="container">
      <h3 class="title wow fadeInDown animated" data-wow-delay=".5s">Tanggapan Wisatawan</h3>
      <div class="servc-grids">
        <?php
        foreach($reactions as $reaction):
          if(!$reaction->is_hidden):
        ?>
          <div class="col-sm-12 col-md-4 servc-grid wow fadeInUp animated" data-wow-delay=".5s">
            <ul>
              <li>
                <img src="<?= base_url('uploads/reaction/'.$reaction->photo); ?>" class="img-responsive" alt="<?= 'tanggapan wisata desa Sokowolu - '. $reaction->name; ?>">
              </li>
              <li>
                <h4><?= $reaction->name; ?></h4>
                <p class="rev-job"><?= $reaction->role; ?></p>
              </li>
            </ul> 
            <div class="clearfix"></div>
            <p class="rev-desc"><?= $reaction->reaction; ?></p>
          </div>
        <?php endif; endforeach; ?>
      </div>
    </div>
  </div>
  <!--//services -->
  
  <!--portfolio-->
  <div id="portfolio" class="portfolio">
    <div class="container">
      <h3 class="title wow fadeInDown animated" data-wow-delay=".2s">Foto Wisata</h3>
      <div class="sap_tabs">
        <div class="row">
          <?php
          if(count($gallery) > 0){
            foreach($gallery as $item):
          ?>
            <div class="col-md-4">
              <a class="product-item" style="background-image: url(<?= base_url('uploads/gallery/'.$item->src); ?>);" href="#">
                <div class="details">
                  <h4><?= $item->judul; ?></h4>
                </div>
              </a>
            </div>
          <?php
            endforeach;
          }
          else {
          ?>
          
          <div class="text-center">
            <p>Belum ada foto wisata</p>
          </div>

          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <!--//portfolio-->

  <!--contact -->
  <div class="contact" id="contact">
    <div class="container">
      <h3 class="title wow fadeInDown animated" data-wow-delay=".2s">Kritik &amp; Saran</h3>
      <div class="contact-form">
        <p class="wow slideInDown animated" data-wow-delay=".2s">Silahkan kirim kritik dan saran bagi kalian yang sudah mengunjungi Sokowolu. Kirimkan juga pertanyaan kalian jika kalian berminat mengunjungi Sokowolu.</p>
        <form action="<?= site_url('send-message'); ?>" method="post">
          <div class="col-md-6 form-left wow fadeInDown animated" data-wow-delay=".2s">
            <input type="text" name="name" placeholder="Nama" required>
          </div>
          
          <div class="col-md-6 form-right wow fadeInDown animated" data-wow-delay=".2s">
            <input type="text" class="email" name="email" placeholder="Email" required>
          </div>

          <div class="clearfix"> </div>
          
          <textarea class="wow fadeInDown animated" name="message" data-wow-delay=".9s" placeholder="Pesan" required></textarea>

          <input type="submit" name="kirim" value="Kirim">
        </form>
      </div>
    </div>
  </div>    
  <!--//contact -->

  <!--address-->
  <div class="address wow fadeInDown animated" data-wow-delay=".2s">
    <div class="container">
      <ul>
        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Desa Sokowolu, Kecamatan Getasan, Kabupaten Semarang</li>
        <li></li>
        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>sokowolusemarang@gmail.com</li>
      </ul>
    </div>
  </div>
  <!--//address-->
  
  <!--map-->
  <div class="map">
    <ul class="faq">
      <li class="item1 wow fadeInDown animated" data-wow-delay=".2s"><a href="#">Lihat Peta Sokowolu<span class="glyphicon glyphicon-menu-down"></span></a>
        <ul>
          <li class="subitem1">
            <iframe data-wow-delay=".2s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.538254640682!2d110.45580631477563!3d-7.405518994656809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a7bb9133ce227%3A0x946b3c7ec3b46c0c!2sSOKOWOLU%2CTAJUK%2CKEC.GETASAN%2CKAB.SEMARANG!5e0!3m2!1sen!2sid!4v1520784318890"></iframe>
          </li>                   
        </ul>
      </li>
    </ul>
    <!-- script for tabs -->
    <script type="text/javascript">
      $(function() {
      
        var menu_ul = $('.faq > li > ul'),
             menu_a  = $('.faq > li > a');
        
        menu_ul.hide();
      
        menu_a.click(function(e) {
          e.preventDefault();
          if(!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true,true).slideDown('normal');
          } else {
            $(this).removeClass('active');
            $(this).next().stop(true,true).slideUp('normal');
          }
        });
      
      });
    </script>
    <!-- script for tabs -->
  </div>
  <!--//map-->
  <!--footer-->
  <div class="footer">
    <div class="container">
      <h3 class="wow zoomIn animated" data-wow-delay=".2s"><a href="index.html">Sokowolu</a></h3>
      <p class="wow fadeInUp animated" data-wow-delay=".7s">© 2018 Sokowolu. All rights reserved | Developed by <a href="http://himaskom.undip.ac.id">HIMASKOM UNDIP</a></p>
    </div>
  </div>
  <!--//footer--> 
  <script src="<?= base_url(); ?>assets/js/lightbox-plus-jquery.min.js"> </script>
  <script src="<?= base_url(); ?>assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true   // 100% fit in a container
      });
    });   
  </script>
  <!--script-->

  <?php if($this->session->flashdata('success-message')){ ?>
  <!-- SweetAlert -->
  <script type="text/javascript">
    swal("Terima kasih", "Kritik dan saran Anda cukup membantu untuk perkembangan desa kami :)", "success");
  </script>
  <?php } ?>
  <!--responsive slider-->
  <script src="<?= base_url(); ?>assets/js/responsiveslides.min.js"></script>
  <!--//responsive slider-->
  <!-- start-smooth-scrolling-->
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/move-top.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>assets/js/easing.js"></script> 
  <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
      });
  </script>
  <!--//end-smooth-scrolling-->
  <!--bar-js-->
  <script src="<?= base_url(); ?>assets/js/bars.js"></script>
  <!--bar-js-->
  <!--animate-->
  <script src="<?= base_url(); ?>assets/js/wow.min.js"></script>
    <script>
       new WOW().init();
    </script>
  <!--//end-animate-->
  <!--smooth-scrolling-of-move-up-->
  <script type="text/javascript">
    $(document).ready(function() {
    
      var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
      };
      
      $().UItoTop({ easingType: 'easeOutQuart' });
      
    });
  </script>
  <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
  <!--//smooth-scrolling-of-move-up-->
  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
</body>
</html>