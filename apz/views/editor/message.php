<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Daftar Kritik Masuk</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>No.</th>
              <th>Nama</th>
              <th>Pesan</th>
              <th>Tanggal</th>
              <th></th>
            </thead>
            <tbody>
              <?php $no = 1; foreach($messages as $message): ?>
                <tr style="<?= $message->is_read == 1 ? 'color: #fff; background-color: #999;' : '' ?>">
                  <td><?= $no; ?></td>
                  <td><?= $message->name; ?></td>
                  <td><?= strlen($message->message) > 50 ? substr($message->message, 0, 50) . '...' : $message->message; ?></td>
                  <td><?= date_definer($message->created_at); ?></td>
                  <td>
                    <a href="<?= site_url('editor/message/'.$message->id); ?>">Lihat Pesan</a>
                  </td>
                </tr>
              <?php $no++; endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
