<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Detail Pesan</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <table class="table table-responsive">
            <tr>
              <th>Nama</th>
              <td><?= $message->name; ?></td>
            </tr>
            <tr>
              <th>Tanggal</th>
              <td><?= date_definer($message->created_at); ?></td>
            </tr>
            <tr>
              <th>Pesan</th>
              <td><?= $message->message; ?></td>
            </tr>
          </table>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
