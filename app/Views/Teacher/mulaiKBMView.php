<?= $this->extend(teacher_base()); ?>

<?= $this->section('content'); ?>
<h4 class="text-center mb-3"><?= $title ?></h4>
<div class="row">
  <div class="col">
    <div class="iq-card">
      <div class="iq-card-body">
        <div class="iq-card mb-0">
          <div class="iq-card-body p-0">
            <?php if ($materi['aktifkan_share_screen'] == false) : ?>
              <div class="iq-thumb text-center">
                <a href="<?= base_url('AktifkanShareScreen/' . $materi['id']) ?>" class="btn btn-primary">Aktifkan Share Screen</a>
              </div>
            <?php else : ?>
              <div class="iq-feature-list text-center">
                <h5 class="font-weight-600 mb-0 text-success">Share Screen Siap!</h5>
              </div>
              <div class="iq-thumb text-center">
                <a href="<?= base_url('MulaiShareScreen/' . $materi['id']) ?>" class="btn btn-success">Mulai</a>
                <a href="<?= base_url('NonAktifkanShareScreen/' . $materi['id']) ?>" class="btn btn-primary">Non Aktifkan</a>
              </div>
            <?php endif ?>
            <?php if ($materi['konten_teks'] != NULL) : ?>
              <div class="iq-feature-list">
                <hr class="border-white">
                <?= $materi['konten_teks'] ?>
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
<?= $this->endSection(); ?>