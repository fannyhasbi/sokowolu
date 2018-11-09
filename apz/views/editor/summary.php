<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Summary</h4>
        <p class="card-category">Summary adalah bagian keterangan singkat yang ada di halaman depan web.</p>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Slogan <span class="small text-info">Max 300</span></label>
                <input type="text" class="form-control" name="slogan" value="<?= $summary->slogan; ?>" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Keterangan <span class="small text-info">Max 500</span></label>
                <textarea class="form-control" name="information" rows="7"><?= $summary->information; ?></textarea>
              </div>
            </div>
          </div>

          <input type="submit" class="btn btn-primary pull-right" name="save-summary" value="Simpan">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>

  <!-- Highlight Photos -->
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Foto Utama</h4>
        <p class="card-category">Foto utama adalah 3 foto terbaik yang ditampilkan pada bagian summary.</p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class="text-primary">
              <th>No.</th>
              <th>Judul</th>
              <th></th>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Wisata Keren</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
