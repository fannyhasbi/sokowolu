<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Edit Tanggapan</h4>
        <p class="card-category">Isikan detail tanggapan</p>
      </div>
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Nama</label>
                <input type="text" class="form-control" name="name" value="<?= $reaction->name; ?>" required autofocus>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Role <span class="small">(Jabatan)</span></label>
                <input type="text" class="form-control" name="role" value="<?= $reaction->role; ?>" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Tanggapan <span class="small alert-info">(Max: 250 huruf)</span></label>
                <textarea name="reaction" class="form-control" rows="10" required><?= $reaction->reaction; ?></textarea>
              </div>
            </div>
          </div>

          <input type="submit" class="btn btn-primary pull-right" name="save-reaction" value="Simpan">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>
