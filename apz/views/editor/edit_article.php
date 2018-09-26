<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Edit Artikel</h4>
        <p class="card-category">Isikan detail artikel</p>
      </div>
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Judul</label>
                <input type="text" class="form-control" name="name" required autofocus>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Isi</label>
                <textarea id="article-editor" class="form-control" name="content"></textarea>
              </div>
            </div>
          </div>

          <input type="submit" class="btn btn-primary pull-right" name="save-article" value="Simpan">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>
