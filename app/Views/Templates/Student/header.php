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
        <span><?= $title ?></span>
      </div>
      <div class="nav-links">
        <!-- <a href="#" onclick="showPage('home')" class="active">KBM</a> -->
        <a href="#" onclick="showPage('home')">KBM</a>
        <a href="#" onclick="showPage('about')">Team</a>
        <!-- <a href="#" onclick="showPage('services')">Penilaian</a> -->
        <a href="<?= base_url('logout') ?>">Logout</a>
      </div>
    </nav>
  </div>
</header>