<div class="row">
  <div class="col-md-12">
    <a href="<?= site_url('editor/add-gallery'); ?>" class="btn btn-primary">
      <i class="material-icons">add</i> Tambah
    </a>
  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Daftar Foto Wisata</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>No.</th>
              <th>Judul</th>
              <th></th>
            </thead>
            <tbody>
              <?php $no = 1; foreach($gallery as $item): ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $item->judul; ?></td>
                <td>
                  <a href="<?= base_url('uploads/gallery/'.$item->src); ?>" rel="tooltip" title="Lihat foto" class="btn btn-info btn-link btn-sm" target="_blank">
                    <i class="material-icons">visibility</i>
                  </a>
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
