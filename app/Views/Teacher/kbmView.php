<?= $this->extend(teacher_base()); ?>

<?= $this->section('content'); ?>
<div class="row">
  <div class="col">
    <div class="iq-card">
      <div class="iq-card-header d-flex justify-content-between align-items-center">
        <div class="iq-header-title">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
            + Add
          </button>
        </div>
        <div id="top-rated-item-slick-arrow" class="slick-aerrow-block "></div>
      </div>
      <div class="iq-card-body">
        <ul class="list-unstyled row top-rated-item mb-0">
          <?php foreach ($mapel as $key => $data) : ?>
            <li class="col-sm-6 iq-rated-box">
              <div class="iq-card mb-0">
                <div class="iq-card-body p-0">
                  <div class="iq-thumb text-center pt-5">
                    <a href="<?= base_url('MateriKBM/' . $data['id']) ?>" class="btn btn-primary">Masuk</a>
                  </div>
                  <div class="iq-feature-list text-center">
                    <h6 class="font-weight-600 mb-0"><?= $data['nama_kelas'] ?></h6>
                    <p class="mb-0 mt-2"><?= $data['nama_mapel'] ?></p>
                  </div>
                </div>
              </div>
            </li>
          <?php endforeach ?>
        </ul>
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
      <form action="<?= site_url('mapel/simpan') ?>" method="post" class="needs-validation" novalidate>
        <div class="modal-body">

          <?= csrf_field() ?>
          <div class="form-group">
            <label for="nama_mapel">Mata Pelajaran</label>
            <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" required>
          </div>
          <div class="form-group">
            <label for="id_kelas">Kelas</label>
            <select class="form-control" id="id_kelas" name="id_kelas" required>
              <option value="">---</option>
              <?php foreach ($listKelas as $kelas) : ?>
                <option value="<?= $kelas['id'] ?>"><?= $kelas['nama_kelas'] ?></option>
              <?php endforeach ?>
            </select>
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