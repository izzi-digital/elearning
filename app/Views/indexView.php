<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Learning</title>

  <!-- <link rel="stylesheet" href="public/assets/student/templatemo-glossy-touch.css"> -->
  <!-- <link rel="stylesheet" href="public/assets/student/style.css"> -->
  <link rel="stylesheet" href="<?= base_url('assets/student/templatemo-glossy-touch.css?r=' . time()) ?>">
  <link rel="stylesheet" href="<?= base_url('assets/student/style.css?r=' . time()) ?>">


  <style>
    .card {
      padding: 20px 50px;
      margin: 30px 0;
    }

    .text-white {
      color: white !important;
    }

    .text-red {
      color: red !important;
    }
  </style>
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

  <!-- SINGLE NAVIGATION HEADER -->
  <header>
    <div class="container">
      <nav class="glass">
        <div class="logo" onclick="showPage('home')">
          <div class="logo-icon">
            <svg viewBox="0 0 48 48" fill="white" xmlns="http://www.w3.org/2000/svg">
              <!-- Grid of circles with varying sizes -->
              <circle cx="16" cy="16" r="5" opacity="0.9" />
              <circle cx="32" cy="16" r="4" opacity="0.8" />
              <circle cx="16" cy="32" r="4" opacity="0.7" />
              <circle cx="32" cy="32" r="5" opacity="0.85" />
              <!-- Small accent dots -->
              <circle cx="24" cy="8" r="2" opacity="1" />
              <circle cx="8" cy="24" r="2" opacity="0.9" />
              <circle cx="40" cy="24" r="2" opacity="0.9" />
              <circle cx="24" cy="40" r="2" opacity="1" />
              <!-- Tiny corner dots -->
              <circle cx="8" cy="8" r="1" opacity="0.6" />
              <circle cx="40" cy="8" r="1" opacity="0.6" />
              <circle cx="8" cy="40" r="1" opacity="0.6" />
              <circle cx="40" cy="40" r="1" opacity="0.6" />
            </svg>
          </div>
          <span>E-Learning</span>
        </div>
      </nav>
    </div>
  </header>

  <!-- LOGIN PAGE -->
  <div id="home" class="page active">
    <div class="container">
      <div class="content-wrapper">
        <section class="contact-grid">
          <div class="contact-form glass">
            <h2>Sign In</h2>
            <?= form_open(site_url('login')) ?>
            <div class="form-group">
              <label for="email-login">Email Address</label>
              <input type="email" id="email-login" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="password-login">Password</label>
              <input type="password" id="password-login" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="cta-button">Sign In</button>
            <?= form_close() ?>

            <?php if (session()->getFlashdata('login_errors')) : ?>
              <div class="card glass">
                <p class="text-red">Error!</p>
                <ul class="text-white">
                  <?php foreach (session()->getFlashdata('login_errors') as $item) : ?>
                    <li><?= $item ?></li>
                  <?php endforeach ?>
                </ul>
              </div>
            <?php endif ?>

          </div>

          <div class="contact-info glass">
            <h2>Register</h2>
            <?= form_open(site_url('register')) ?>
            <div class="form-group">
              <label for="full_name">Full Name</label>
              <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
              <label for="class_room">Class Room</label>
              <input type="text" id="class_room" name="class_room" placeholder="Enter your class room" required>
            </div>
            <div class="form-group">
              <label for="email-register">Email Address</label>
              <input type="email" id="email-register" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="password-register">Password</label>
              <input type="password" id="password-register" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="cta-button">Register</button>
            <?= form_close() ?>

            <?php if (session()->getFlashdata('register_errors')) : ?>
              <div class="card glass">
                <p class="text-red">Error!</p>
                <ul class="text-white">
                  <?php foreach (session()->getFlashdata('register_errors') as $item) : ?>
                    <li><?= $item ?></li>
                  <?php endforeach ?>
                </ul>
              </div>
            <?php endif ?>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- SINGLE FOOTER -->
  <div id="footer">
    <div class="container">
      <footer class="glass">
        <div class="footer-content">
          <div class="copyright">
            &copy; 2025 E-Learning. All rights reserved. Crafted with modern web technologies.
            Provided by <a rel="nofollow" href="https://github.com/izzi-digital" target="_blank">Izzi Digital</a>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="<?= base_url('assets/student/style.css?r=' . time()) ?>">
  <script src="<?= base_url('assets/student/script.js?r=' . time()) ?>"></script>
  <script src="<?= base_url('assets/student/script.js?r=' . time()) ?>"></script>
  <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
</body>

</html>