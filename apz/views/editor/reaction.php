<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Daftar Tanggapan Wisatawan</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class=" text-primary">
              <th>No.</th>
              <th>Nama</th>
              <th>Role</th>
              <th>Tanggapan</th>
              <th></th>
            </thead>
            <tbody>
              <?php $no = 1; foreach($reactions as $reaction): ?>
                <tr>
                  <td><?= $no; ?></td>
                  <td><?= $reaction->name; ?></td>
                  <td><?= $reaction->role; ?></td>
                  <td><?= $reaction->reaction; ?></td>
                  <td>
                    <a href="<?= site_url('editor/reaction/'.$reaction->id); ?>" rel="tooltip" title="Edit tanggapan" class="btn btn-default btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </a>

                    <?php if($reaction->is_hidden) { ?>
                      <a href="<?= site_url('editor/action-reaction?action=show&id='.$reaction->id); ?>" rel="tooltip" title="Tampilkan" class="btn btn-success btn-link btn-sm">
                        <i class="material-icons">check</i>
                      </a>
                    <?php } else { ?>
                      <a href="<?= site_url('editor/action-reaction?action=hide&id='.$reaction->id); ?>" rel="tooltip" title="Sembunyikan" class="btn btn-danger btn-link btn-sm">
                        <i class="material-icons">cancel</i>
                      </a>
                    <?php } ?>
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
