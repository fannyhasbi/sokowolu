<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Edit Foto Highlight</h4>
      </div>
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Judul</label>
                <input type="text" class="form-control" name="name" value="<?= $highlight->judul; ?>" required>
              </div>
            </div>
          </div>

          <div id="upload-container" class="row" style="display: none;">
            <div class="col-md-12">
              <label class="control-label">Foto</label>
              <input type="file" id="upload-input" class="form-control" style="opacity: 1; position: inherit;">
            </div>
          </div>

          <input type="submit" id="btn" class="btn btn-primary" name="save-highlight" value="Simpan">
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