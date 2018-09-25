<div class="row">
  <div class="col-md-12">
    <a href="<?= site_url('editor/add-article'); ?>" class="btn btn-primary">
      <i class="material-icons">add</i> Tambah
    </a>
  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Daftar Artikel</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>No.</th>
              <th>Judul</th>
              <th>Tanggal</th>
              <th>Penulis</th>
              <th>Dilihat</th>
            </thead>
            <tbody>
              <?php $n = 1; foreach($articles as $article): ?>
                <tr>
                  <td><?= $n; ?></td>
                  <td><?= $article->name; ?></td>
                  <td><?= $article->created_at; ?></td>
                  <td>
                    <?= explode(' ', $article->editor_name)[0]; ?>
                  </td>
                  <td><?= $article->views_count; ?></td>
                </tr>
              <?php $n++; endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
