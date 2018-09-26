<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Edit Profil</h4>
      </div>
      <div class="card-body">
        <p class="lead">Ubah Nama</p>
        <form action="" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Username</label>
                <input type="text" class="form-control" value="fannyhasbi" readonly disabled>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label class="bmd-label-floating">Nama</label>
                <input type="text" class="form-control" name="name" value="<?= $this->session->userdata('name'); ?>" required>
              </div>
            </div>
          </div>

          <input type="submit" class="btn btn-success" name="save" value="Simpan Nama">
          <div class="clearfix"></div>
        </form>

        <hr />

        <p class="lead">Ubah Password</p>
        <form action="" method="post">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Password</label>
                <input type="password" id="pass1" class="form-control" name="password" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="bmd-label-floating">Ulangi Password</label>
                <input type="password" id="pass2" class="form-control" name="password2" required>
              </div>
            </div>
          </div>

          <input type="submit" id="btn" class="btn btn-success" name="save-password" value="Simpan Password">
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(function () {
  $("#btn").click(function(e) {
    var password  = $("#pass1").val();
    var password2 = $("#pass2").val();

    if(password.length < 6){
      // alert('Password harus lebih dari 5 karakter');
      swal('', 'Password harus lebih dari 5 karakter', 'warning');
      return false;
    }

    if (password != password2) {
      // alert('Password harus sama');
      swal('', 'Password harus sama', 'warning');
      return false;
    }

    return true;
  });
});
</script>