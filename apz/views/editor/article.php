<div class="row">
  <div class="col-md-12">
    <a href="<?= site_url('editor/add-article'); ?>" class="btn btn-primary">
      <i class="material-icons">add</i> Tambah
    </a>
  </div>

  <div class="col-md-12">
    <div class="card">
      <div class="card-header card-header-info">
        <h4 class="card-title ">Daftar Artikel</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>No.</th>
              <th>Judul</th>
              <th>Tanggal</th>
              <th>Penulis</th>
              <th>Dilihat</th>
            </thead>
            <tbody>
              <?php $n = 1; foreach($articles as $article): ?>
                <tr>
                  <td><?= $n; ?></td>
                  <td><?= $article->name; ?></td>
                  <td><?= date_definer($article->created_at); ?></td>
                  <td>
                    <?= explode(' ', $article->editor_name)[0]; ?>
                  </td>
                  <td><?= $article->views_count; ?></td>
                  <td>
                    <a href="<?= site_url('article/'.$article->slug); ?>" rel="tooltip" title="Lihat" class="btn btn-info btn-link btn-sm" target="_blank">
                      <i class="material-icons">visibility</i>
                    </a>
                    <a href="<?= site_url('editor/article/'.$article->slug); ?>" rel="tooltip" title="Edit" class="btn btn-default btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </a>
                    <button rel="tooltip" title="Hapus" class="btn btn-danger btn-link btn-sm" onclick="delete_article(<?= $article->id; ?>, '<?= $article->name; ?>')">
                      <i class="material-icons">delete</i>
                    </button>
                  </td>
                </tr>
              <?php $n++; endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function delete_article(id, name){
  swal({
    text: 'Yakin ingin menghapus artikel '+ name +'?',
    icon: 'warning',
    dangerMode: true,
    buttons: {
      cancel: 'Tidak',
      confirm: {
        text: 'Hapus',
        value: 'delete'
      }
    }
  })
  .then((value) => {
    if(value == 'delete'){
      window.location = "<?= site_url('editor/delete-article/'); ?>"+ id;
    }
  });
}
</script>
