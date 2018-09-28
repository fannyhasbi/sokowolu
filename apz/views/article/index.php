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
  <title>Artikel Sokowolu</title>
  <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="<?= base_url(); ?>assets/css/personal-blog.css" rel='stylesheet' type='text/css' />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Personal Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
  
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

  <div class="content">
    <div class="container">
      <div class="content-grids">
        <div class="col-md-8 content-main">
          <div class="content-grid">
            <?php foreach($articles as $article): ?>

              <div class="content-grid-info">
                <img src="<?= base_url(); ?>assets/img/bg1.jpg" class="content-img" alt=""/>
                <div class="post-info">
                  <h4>
                    <a href="single.html"><?= $article->name; ?></a>
                    <?= date_definer($article->created_at); ?>
                  </h4>
                  <p><?= substr(strip_tags($article->content), 0, 120) . " ..."; ?></p>
                  <a href="single.html"><span></span>BACA SELENGKAPNYA</a>
                </div>
              </div>

            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-md-4 content-right">
          <div class="recent">
            <h3>RECENT POSTS</h3>
            <ul>
              <li><a href="#">Aliquam tincidunt mauris</a></li>
              <li><a href="#">Vestibulum auctor dapibus  lipsum</a></li>
              <li><a href="#">Nunc dignissim risus consecu</a></li>
              <li><a href="#">Cras ornare tristiqu</a></li>
            </ul>
          </div>
          <div class="comments">
            <h3>RECENT COMMENTS</h3>
            <ul>
              <li><a href="#">Amada Doe </a> on <a href="#">Hello World!</a></li>
              <li><a href="#">Peter Doe </a> on <a href="#"> Photography</a></li>
              <li><a href="#">Steve Roberts  </a> on <a href="#">HTML5/CSS3</a></li>
            </ul>
          </div>
          <div class="clearfix"></div>
          <div class="archives">
            <h3>ARCHIVES</h3>
            <ul>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
            </ul>
          </div>
          <div class="categories">
            <h3>CATEGORIES</h3>
            <ul>
              <li><a href="#">Vivamus vestibulum nulla</a></li>
              <li><a href="#">Integer vitae libero ac risus e</a></li>
              <li><a href="#">Vestibulum commo</a></li>
              <li><a href="#">Cras iaculis ultricies</a></li>
            </ul>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!---->

  <div class="footer">
    <div class="container">
      <p>Copyrights &copy; 2018 Blog All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
  </div>
</body>
</html>