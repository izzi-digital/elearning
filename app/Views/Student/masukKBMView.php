<?= $this->extend(student_base()); ?>

<?= $this->section('content'); ?>
<!-- SINGLE NAVIGATION HEADER -->
<header>
  <div class="container">
    <nav class="glass">
      <div class="logo" onclick="showPage('home')">
        <span><?= $title ?></span>
      </div>
      <div class="nav-links">
        <a href="<?= base_url('logout') ?>">Logout</a>
      </div>
    </nav>
  </div>
</header>

<!-- HOME PAGE -->
<div id="home" class="page active">
  <div class="container">
    <div class="content-wrapper">

      <?php if ($materi['aktifkan_share_screen'] == true) : ?>
        <section class="features">
          <div class="feature-card glass">
            <div class="feature-icon">▶️</div>
            <h3>"<?= $materi['full_name'] ?>" sedang menampilkan Share Screen!</h3>
            <a href="<?= base_url('TontonShareScreen/' . $materi['id']) ?>" class="cta-button">Tonton</a>
          </div>
        </section>
      <?php endif ?>
      <?php if ($materi['konten_teks'] != NULL) : ?>
        <section class="hero glass">
          <div class="hero-content">
            <p><?= $materi['konten_teks'] ?></p>
          </div>
        </section>
      <?php endif ?>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('css'); ?>
<style>
  #remote-video {
    width: 100%;
    height: auto;
    background-color: #000;
  }
</style>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>

<?= $this->endSection(); ?>