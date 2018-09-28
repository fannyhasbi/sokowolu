
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
                  <a href="<?= site_url('article/'.$article->slug); ?>"><?= $article->name; ?></a>
                  <?= date_definer($article->created_at); ?>
                </h4>
                <p><?= substr(strip_tags($article->content), 0, 120) . " ..."; ?></p>
                <a href="<?= site_url('article/'.$article->slug); ?>"><span></span>BACA SELENGKAPNYA</a>
              </div>
            </div>

          <?php endforeach; ?>
        </div>
      </div>
      
      <div class="col-md-4 content-right">
        <?php include_once __DIR__."/side_content.php"; ?>
      </div>
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<!---->
