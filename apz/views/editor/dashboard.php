<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-warning card-header-icon">
        <div class="card-icon">
          <i class="material-icons">visibility</i>
        </div>
        <p class="card-category">Kunjungan</p>
        <h3 class="card-title">180</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">update</i> Baru Saja
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-success card-header-icon">
        <div class="card-icon">
          <i class="material-icons">file_copy</i>
        </div>
        <p class="card-category">Artikel</p>
        <h3 class="card-title"><?= $summary['article']['count']; ?></h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">date_range</i> <?= date_definer($summary['article']['last']); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-info card-header-icon">
        <div class="card-icon">
          <i class="material-icons">plus_one</i>
        </div>
        <p class="card-category">Artikel Dilihat</p>
        <h3 class="card-title">+<?= $summary['article']['views_count']; ?></h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">update</i> Baru Saja
        </div>
      </div>
    </div>
  </div>
</div>
