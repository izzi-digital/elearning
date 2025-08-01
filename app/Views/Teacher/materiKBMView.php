<?= $this->extend(teacher_base()); ?>

<?= $this->section('content'); ?>
<h4 class="text-center mb-3"><?= $title ?></h4>
<div class="row">
  <div class="col">
    <div class="iq-card">
      <div class="iq-card-body">
        <div class="iq-card mb-0">
          <div class="iq-card-body p-0">
            <?php if ($materi == NULL) : ?>
              <div class="iq-thumb text-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                  Input Materi
                </button>
              </div>
            <?php else : ?>
              <div class="iq-feature-list text-center">
                <h5 class="font-weight-600 mb-0"><?= $materi['judul_materi'] ?></h5>
              </div>
              <div class="iq-thumb text-center pb-3">
                <a href="<?= base_url('MulaiKBM/' . $materi['id']) ?>" class="btn btn-primary">Mulai</a>
              </div>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>
<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Add Mapel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= site_url('materi/simpan') ?>" method="post" class="needs-validation" novalidate>
        <div class="modal-body">

          <?= csrf_field() ?>
          <input type="hidden" name="id_mapel" value="<?= $mapel['id'] ?>">
          <input type="hidden" name="tanggal" value="<?= tanggal_sekarang() ?>">
          <div class="form-group">
            <label for="judul_materi">Judul Materi</label>
            <input type="text" class="form-control" id="judul_materi" name="judul_materi" required>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>