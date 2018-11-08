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

          <div id="upload-container" class="row" style="display: none;">
            <div class="col-md-12">
              <label class="control-label">Foto</label>
              <input type="file" id="upload-input" class="form-control" style="opacity: 1; position: inherit;">
            </div>
          </div>

          <input type="submit" id="btn" class="btn btn-primary" name="save-reaction" value="Simpan">
          <button type="button" id="btn-upload" class="btn btn btn-info" value="no">Ubah Foto</button>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(function(){
  $("#btn-upload").click(function(){
    if($(this).val() == "no"){
      $("#upload-container").show(700);
      $(this).val("upload");
      $(this).html("Urungkan Foto");
      $("#upload-input").attr("name", "foto");
      $("#upload-input").attr("required", true);
    }
    else {
      $("#upload-container").hide(400);
      $(this).val("no");
      $(this).html("Ubah Foto");
      $("#upload-input").attr("name", "foto-no");
    }
  })
});
</script>