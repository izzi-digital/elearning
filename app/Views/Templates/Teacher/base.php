<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $title ?></title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/teacher/images/favicon.ico" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/teacher/css/bootstrap.min.css">
  <!--datatable CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/teacher/css/dataTables.bootstrap4.min.css">
  <!-- Typography CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/teacher/css/typography.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/teacher/css/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/teacher/css/responsive.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?= $this->renderSection('css'); ?>
</head>

<body>
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center">
    </div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">
    <!-- Sidebar-->
    <div class="iq-sidebar">
      <div class="iq-sidebar-logo d-flex justify-content-between">
        <a href="index.html" class="header-logo">
          <div class="logo-title">
            <span class="text-primary text-uppercase">e-Learning</span>
          </div>
        </a>
        <div class="iq-menu-bt-sidebar">
          <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
              <div class="main-circle"><i class="las la-bars"></i></div>
            </div>
          </div>
        </div>
      </div>
      <div id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
            <!-- <li class="active active-menu"><a href="<?= base_url() ?>" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a></li> -->
            <li><a href="<?= base_url() ?>" class="iq-waves-effect"><i class="las la-home iq-arrow-left"></i><span>Dashboard</span></a></li>
            <li><a href="<?= base_url('KBM') ?>" class="iq-waves-effect"><i class="fas fa-chalkboard-user"></i>&nbsp;<span>KBM</span></a></li>
            <li><a href="<?= base_url('Kelas') ?>" class="iq-waves-effect"><i class="fas fa-users"></i>&nbsp;<span>Kelas</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- TOP Nav Bar -->
    <div class="iq-top-navbar">
      <div class="iq-navbar-custom">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <div class="iq-menu-bt d-flex align-items-center">
            <div class="wrapper-menu">
              <div class="main-circle"><i class="las la-bars"></i></div>
            </div>
            <div class="iq-navbar-logo d-flex justify-content-between">
              <a href="index.html" class="header-logo">
                <img src="<?= base_url() ?>assets/teacher/images/logo.png" class="img-fluid rounded-normal" alt="">
                <div class="logo-title">
                  <span class="text-primary text-uppercase">E-Learning</span>
                </div>
              </a>
            </div>
          </div>
          <div class="iq-search-bar ml-auto">
            <!-- <form action="#" class="searchbox">
              <input type="text" class="text search-input" placeholder="Search Here...">
              <a class="search-link" href="#"><i class="ri-search-line"></i></a>
            </form> -->
          </div>
          <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
            <i class="ri-menu-3-line"></i>
          </button> -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-list">
              <!-- <li class="nav-item nav-icon search-content">
                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                  <i class="ri-search-line"></i>
                </a>
                <form action="#" class="search-box p-0">
                  <input type="text" class="text search-input" placeholder="Type here to search...">
                  <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                </form>
              </li>
              <li class="nav-item nav-icon">
                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                  <i class="ri-notification-2-line"></i>
                  <span class="bg-primary dots"></span>
                </a>
                <div class="iq-sub-dropdown">
                  <div class="iq-card shadow-none m-0">
                    <div class="iq-card-body p-0">
                      <div class="bg-primary p-3">
                        <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                      </div>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="<?= base_url() ?>assets/teacher/images/user/01.jpg" alt="">
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">Emma Watson Barry</h6>
                            <small class="float-right font-size-12">Just Now</small>
                            <p class="mb-0">95 MB</p>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="<?= base_url() ?>assets/teacher/images/user/02.jpg" alt="">
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">New customer is join</h6>
                            <small class="float-right font-size-12">5 days ago</small>
                            <p class="mb-0">Cyst Barry</p>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="<?= base_url() ?>assets/teacher/images/user/03.jpg" alt="">
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">Two customer is left</h6>
                            <small class="float-right font-size-12">2 days ago</small>
                            <p class="mb-0">Cyst Barry</p>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="<?= base_url() ?>assets/teacher/images/user/04.jpg" alt="">
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">New Mail from Fenny</h6>
                            <small class="float-right font-size-12">3 days ago</small>
                            <p class="mb-0">Cyst Barry</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item nav-icon dropdown">
                <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                  <i class="ri-mail-line"></i>
                  <span class="bg-primary dots"></span>
                </a>
                <div class="iq-sub-dropdown">
                  <div class="iq-card shadow-none m-0">
                    <div class="iq-card-body p-0 ">
                      <div class="bg-primary p-3">
                        <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                      </div>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="<?= base_url() ?>assets/teacher/images/user/01.jpg" alt="">
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">Barry Emma Watson</h6>
                            <small class="float-left font-size-12">13 Jun</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="<?= base_url() ?>assets/teacher/images/user/02.jpg" alt="">
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                            <small class="float-left font-size-12">20 Apr</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="<?= base_url() ?>assets/teacher/images/user/03.jpg" alt="">
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">Why do we use it?</h6>
                            <small class="float-left font-size-12">30 Jun</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="<?= base_url() ?>assets/teacher/images/user/04.jpg" alt="">
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">Variations Passages</h6>
                            <small class="float-left font-size-12">12 Sep</small>
                          </div>
                        </div>
                      </a>
                      <a href="#" class="iq-sub-card">
                        <div class="media align-items-center">
                          <div class="">
                            <img class="avatar-40 rounded" src="<?= base_url() ?>assets/teacher/images/user/05.jpg" alt="">
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                            <small class="float-left font-size-12">5 Dec</small>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </li> -->
              <li class="line-height pt-3">
                <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                  <img src="<?= base_url() ?>assets/teacher/images/user/1.jpg" class="img-fluid rounded-circle mr-3" alt="user">
                </a>
                <div class="iq-sub-dropdown iq-user-dropdown">
                  <div class="iq-card shadow-none m-0">
                    <div class="iq-card-body p-0 ">
                      <div class="bg-primary p-3">
                        <h5 class="mb-0 text-white line-height"><?= Auth()['full_name'] ?></h5>
                        <!-- <span class="text-white font-size-12">Available</span> -->
                      </div>
                      <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                        <div class="media align-items-center">
                          <div class="rounded iq-card-icon iq-bg-primary">
                            <i class="ri-file-user-line"></i>
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">My Profile</h6>
                            <p class="mb-0 font-size-12">View personal profile details.</p>
                          </div>
                        </div>
                      </a>
                      <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                        <div class="media align-items-center">
                          <div class="rounded iq-card-icon iq-bg-primary">
                            <i class="ri-profile-line"></i>
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">Edit Profile</h6>
                            <p class="mb-0 font-size-12">Modify your personal details.</p>
                          </div>
                        </div>
                      </a>
                      <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                        <div class="media align-items-center">
                          <div class="rounded iq-card-icon iq-bg-primary">
                            <i class="ri-account-box-line"></i>
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">Account settings</h6>
                            <p class="mb-0 font-size-12">Manage your account parameters.</p>
                          </div>
                        </div>
                      </a>
                      <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                        <div class="media align-items-center">
                          <div class="rounded iq-card-icon iq-bg-primary">
                            <i class="ri-lock-line"></i>
                          </div>
                          <div class="media-body ml-3">
                            <h6 class="mb-0 ">Privacy Settings</h6>
                            <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                          </div>
                        </div>
                      </a>
                      <div class="d-inline-block w-100 text-center p-3">
                        <a class="bg-primary iq-sign-btn" href="<?= base_url('logout') ?>" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- TOP Nav Bar END -->
    <!-- Page Content  -->
    <div id="content-page" class="content-page">
      <div class="container-fluid">
        <?= $this->renderSection('content'); ?>
      </div>
    </div>
  </div>
  <!-- Wrapper END -->

  <!-- Footer -->
  <footer class="iq-footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 text-right">
          2025 &copy; <a href="https://github.com/izzi-digital">Qohwah</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer END -->

  <!-- Modal -->
  <?= $this->renderSection('modal'); ?>
  <!-- End Modal -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= base_url() ?>assets/teacher/js/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/teacher/js/popper.min.js"></script>
  <script src="<?= base_url() ?>assets/teacher/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/teacher/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/teacher/js/dataTables.bootstrap4.min.js"></script>
  <!-- Appear JavaScript -->
  <script src="<?= base_url() ?>assets/teacher/js/jquery.appear.js"></script>
  <!-- Countdown JavaScript -->
  <script src="<?= base_url() ?>assets/teacher/js/countdown.min.js"></script>
  <!-- Select2 JavaScript -->
  <script src="<?= base_url() ?>assets/teacher/js/select2.min.js"></script>
  <!-- Counterup JavaScript -->
  <script src="<?= base_url() ?>assets/teacher/js/waypoints.min.js"></script>
  <script src="<?= base_url() ?>assets/teacher/js/jquery.counterup.min.js"></script>
  <!-- Wow JavaScript -->
  <script src="<?= base_url() ?>assets/teacher/js/wow.min.js"></script>
  <!-- Slick JavaScript -->
  <script src="<?= base_url() ?>assets/teacher/js/slick.min.js"></script>
  <!-- Owl Carousel JavaScript -->
  <script src="<?= base_url() ?>assets/teacher/js/owl.carousel.min.js"></script>
  <!-- Magnific Popup JavaScript -->
  <script src="<?= base_url() ?>assets/teacher/js/jquery.magnific-popup.min.js"></script>
  <!-- Smooth Scrollbar JavaScript -->
  <script src="<?= base_url() ?>assets/teacher/js/smooth-scrollbar.js"></script>
  <!-- apex Custom JavaScript -->
  <script src="<?= base_url() ?>assets/teacher/js/apexcharts.js"></script>
  <!-- Chart Custom JavaScript -->
  <script src="<?= base_url() ?>assets/teacher/js/chart-custom.js"></script>
  <!-- Custom JavaScript -->
  <script src="<?= base_url() ?>assets/teacher/js/custom.js"></script>
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

  <?= $this->renderSection('js'); ?>

</body>

</html>