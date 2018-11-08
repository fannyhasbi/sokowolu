<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Tambah Gallery</h4>
      </div>
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Judul</label>
                <input type="text" class="form-control" name="judul" required autofocus>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
                <label class="control-label">Foto</label>
                <input type="file" class="form-control" name="foto" style="opacity: 1; position: inherit;">
            </div>
          </div>

          <input type="submit" class="btn btn-primary pull-right" name="add-gallery" value="Publish">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>
