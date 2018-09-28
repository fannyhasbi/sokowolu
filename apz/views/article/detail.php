
<div class="single">
  <div class="container">
    <div class="col-md-8 single-main">
      <div class="single-grid">
        <p><?= $article->content; ?></p>
      </div>
        
      <ul class="comment-list">
        <li><img src="<?= base_url('assets/img/avatar.png'); ?>" class="img-responsive" alt="">
        <div class="desc">
          <p>Ditulis oleh: admin</p>
        </div>
        <div class="clearfix"></div>
        </li>
      </ul>
    </div>

      <div class="col-md-4 side-content">
        <?php include_once __DIR__."/side_content.php"; ?>
      </div>

      <div class="clearfix"></div>
    </div>
  </div>
</div>
