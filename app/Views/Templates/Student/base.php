<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>

  <link rel="stylesheet" href="<?= base_url() . 'assets/student/templatemo-glossy-touch.css?r=' . time() ?>">
  <link rel="stylesheet" href="<?= base_url() . 'assets/student/style.css?r=' . time() ?>">
  <style>
  </style>
  <?= $this->renderSection('css'); ?>
</head>

<body>
  <div class="cursor-dot"></div>
  <div class="cursor-outline"></div>

  <div class="bg-shapes">
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
  </div>

  <?= $this->renderSection('content'); ?>

  <!-- SINGLE FOOTER -->
  <div id="footer">
    <div class="container">
      <footer class="glass">
        <div class="footer-content">
          <div class="copyright">
            2025 &copy; Smart Learning. Made with 💖 by <a rel="nofollow" href="https://github.com/izzi-digital" target="_blank">Qohwah</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="<?= base_url() . 'assets/student/script.js?r=' . time() ?>"></script>
  <script src="<?= base_url() . 'assets/student/templatemo-glossy-touch.js?r=' . time() ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    <?php
    if (session()->getFlashdata('info')) {
    ?>
      Swal.fire({
        icon: '<?= session()->getFlashdata('info') ?>',
        title: '<?= session()->getFlashdata('message') ?>',
        text: '<?= session()->getFlashdata('text') ?>',
      })
    <?php
    }
    ?>

    <?php
    if (session()->getFlashdata('success')) {
    ?>
      Swal.fire({
        icon: 'success',
        text: '<?= session()->getFlashdata('success') ?>',
      })
    <?php
    }
    ?>

    <?php
    if (session()->getFlashdata('error')) {
    ?>
      Swal.fire({
        icon: 'error',
        text: '<?= session()->getFlashdata('error') ?>',
      })
    <?php
    }
    ?>
  </script>

  <?= $this->renderSection('js'); ?>
</body>

</html>