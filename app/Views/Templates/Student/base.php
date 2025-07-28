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
          <span><?= $title ?></span>
        </div>
        <div class="nav-links">
          <a href="#" onclick="showPage('home')" class="active">Home</a>
          <a href="#" onclick="showPage('about')">Team</a>
          <a href="#" onclick="showPage('services')">Penilaian</a>
          <a href="<?= base_url('logout') ?>">Logout</a>
        </div>
      </nav>
    </div>
  </header>

  <!-- HOME PAGE -->
  <div id="home" class="page active">
    <div class="container">
      <div class="content-wrapper">
        <section class="hero glass">
          <div class="hero-image">
            <img src="<?= base_url() ?>assets/student/images/future.png" alt="Modern Technology Interaction" />
          </div>
          <div class="hero-content">
            <h1>Welcome to the Future!</h1>
            <h2><?= Auth()['full_name'] ?></h2>
            <!-- <h1 class="animated" id="typewriter">MA Al-Anwar</h1> -->
            <p id="quote-display">Memuat kutipan...</p>
            <!-- <a href="#" class="cta-button" onclick="showPage('about')">Learn More</a> -->
          </div>
        </section>

        <section class="features">
          <div class="feature-card glass">
            <div class="feature-icon">✨</div>
            <h3>Modern Design</h3>
            <p>Beautiful glass morphism effects with backdrop blur and translucent elements that create depth and visual hierarchy.</p>
          </div>

          <div class="feature-card glass">
            <div class="feature-icon">⚡</div>
            <h3>Fast Performance</h3>
            <p>Optimized animations and effects that maintain smooth 60fps performance across all modern browsers and devices.</p>
          </div>

          <div class="feature-card glass">
            <div class="feature-icon">📱</div>
            <h3>Responsive</h3>
            <p>Fully responsive design that adapts beautifully to any screen size, from mobile phones to desktop displays.</p>
          </div>

          <div class="feature-card glass">
            <div class="feature-icon">🎨</div>
            <h3>Interactive UI</h3>
            <p>Engaging hover effects, smooth transitions, and micro-animations that create delightful user experiences.</p>
          </div>

          <div class="feature-card glass">
            <div class="feature-icon">🔒</div>
            <h3>Secure & Safe</h3>
            <p>Built with modern security standards and best practices to ensure your data and user privacy are protected.</p>
          </div>

          <div class="feature-card glass">
            <div class="feature-icon">🚀</div>
            <h3>Easy Integration</h3>
            <p>Simple to implement and customize for any project with clean, well-documented code and flexible components.</p>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- ABOUT PAGE -->
  <div id="about" class="page">
    <div class="container">
      <div class="content-wrapper">
        <section class="team-section">
          <h2>Meet Our Team - <?= Auth()['class_room'] ?></h2>
          <div class="team-grid">

            <?php
            $teams = model('UserModel')->where('class_room', Auth()['class_room'])->findAll();
            ?>
            <?php foreach ($teams as $team) : ?>
              <div class="team-member glass">
                <div class="team-avatar">🧕</div>
                <h3><?= $team['full_name'] ?></h3>
                <!-- <p class="role">Senior Developer</p>
                <p class="bio">Frontend specialist with expertise in React and modern JavaScript frameworks.</p>
                <div class="team-social">
                  <a href="#" title="Email">📧</a>
                  <a href="#" title="LinkedIn">💼</a>
                  <a href="#" title="GitHub">💻</a>
                </div> -->
              </div>
            <?php endforeach ?>

          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- SERVICES PAGE -->
  <div id="services" class="page">
    <div class="container">
      <div class="content-wrapper">
        <section class="hero glass">
          <h1>Our Services</h1>
          <p>Comprehensive design and development solutions tailored to your needs</p>
        </section>

        <section class="services-grid">
          <div class="service-card glass">
            <div class="service-header">
              <div class="service-icon">🎨</div>
              <h3>UI/UX Design</h3>
            </div>
            <p>Create stunning user interfaces with modern design principles, focusing on usability and aesthetic appeal.</p>
            <ul class="service-features">
              <li>User Research & Analysis</li>
              <li>Wireframing & Prototyping</li>
              <li>Visual Design & Branding</li>
              <li>Responsive Design</li>
            </ul>
          </div>

          <div class="service-card glass">
            <div class="service-header">
              <div class="service-icon">💻</div>
              <h3>Web Development</h3>
            </div>
            <p>Build fast, secure, and scalable websites using the latest web technologies and best practices.</p>
            <ul class="service-features">
              <li>Frontend Development</li>
              <li>Backend Integration</li>
              <li>Performance Optimization</li>
              <li>SEO Implementation</li>
            </ul>
          </div>

          <div class="service-card glass">
            <div class="service-header">
              <div class="service-icon">📱</div>
              <h3>Mobile Apps</h3>
            </div>
            <p>Develop native and cross-platform mobile applications that deliver exceptional user experiences.</p>
            <ul class="service-features">
              <li>iOS & Android Development</li>
              <li>Cross-platform Solutions</li>
              <li>App Store Optimization</li>
              <li>Maintenance & Updates</li>
            </ul>
          </div>

          <div class="service-card glass">
            <div class="service-header">
              <div class="service-icon">🚀</div>
              <h3>Digital Strategy</h3>
            </div>
            <p>Strategic consulting to help your business thrive in the digital landscape with data-driven insights.</p>
            <ul class="service-features">
              <li>Digital Transformation</li>
              <li>Analytics & Reporting</li>
              <li>Growth Strategy</li>
              <li>Technology Consulting</li>
            </ul>
          </div>

          <div class="service-card glass">
            <div class="service-header">
              <div class="service-icon">☁️</div>
              <h3>Cloud Solutions</h3>
            </div>
            <p>Modernize your infrastructure with scalable cloud services and seamless migration strategies.</p>
            <ul class="service-features">
              <li>Cloud Migration</li>
              <li>DevOps & Automation</li>
              <li>Infrastructure as Code</li>
              <li>24/7 Monitoring</li>
            </ul>
          </div>

          <div class="service-card glass">
            <div class="service-header">
              <div class="service-icon">🔐</div>
              <h3>Cybersecurity</h3>
            </div>
            <p>Protect your digital assets with comprehensive security solutions and threat protection.</p>
            <ul class="service-features">
              <li>Security Auditing</li>
              <li>Penetration Testing</li>
              <li>Data Protection</li>
              <li>Compliance Management</li>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- CONTACT PAGE -->
  <div id="contact" class="page">
    <div class="container">
      <div class="content-wrapper">
        <section class="contact-grid">
          <div class="contact-form glass">
            <h2>Get In Touch</h2>
            <form>
              <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
              </div>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="What's this about?">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Tell us about your project..." required></textarea>
              </div>
              <button type="submit" class="cta-button">Send Message</button>
            </form>
          </div>

          <div class="contact-info glass">
            <h2>Contact Information</h2>

            <div class="contact-item">
              <div class="contact-item-icon">📧</div>
              <div class="contact-item-text">
                <h4>Email</h4>
                <p>hello@glossytouch.com</p>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-item-icon">📞</div>
              <div class="contact-item-text">
                <h4>Phone</h4>
                <p>+1 (555) 123-4567</p>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-item-icon">📍</div>
              <div class="contact-item-text">
                <h4>Address</h4>
                <p>123 Design Street<br>Creative District, CD 12345</p>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-item-icon">🕒</div>
              <div class="contact-item-text">
                <h4>Business Hours</h4>
                <p>Mon-Fri: 9AM-6PM<br>Sat-Sun: 10AM-4PM</p>
              </div>
            </div>
          </div>
        </section>

        <section class="contact-map-section">
          <div class="contact-map glass">
            <h2>Find Us</h2>
            <div class="map-container">
              <div class="map-placeholder">
                <div class="map-placeholder-icon">🗺️</div>
                <p><strong>Interactive Map Area</strong></p>
                <p>123 Design Street</p>
                <p>Creative District, CD 12345</p>
                <p style="margin-top: 15px; font-size: 12px; opacity: 0.7;">
                  Map integration can be added with<br>
                  Google Maps, OpenStreetMap, or Mapbox
                </p>
              </div>
            </div>
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
  <script>
    $(document).ready(function() {
      // Quotes
      const quotes = [
        "Informatika adalah seni mengubah kerumitan menjadi kesederhanaan melalui logika dan kode.",
        "Mempelajari informatika bukan hanya belajar tentang masa kini, tetapi membangun fondasi untuk masa depan yang belum terbayangkan.",
        "Di dunia yang digerakkan oleh data, mereka yang mengerti informatika adalah para navigatornya.",
        "Satu baris data adalah bisikan, jutaan baris adalah pengetahuan. Informatika mengajarkan kita cara mendengarkannya.",
        "Jangan hanya menggunakan teknologi, pahamilah cara kerjanya. Itulah inti dari semangat informatika.",
        "Inti dari informatika bukanlah tentang komputer, tetapi tentang cara berpikir untuk memecahkan masalah secara sistematis.",
        "Setiap bug adalah teka-teki, dan setiap programmer adalah detektif. Informatika melatih kita untuk tidak pernah menyerah pada misteri.",
        "Algoritma yang elegan adalah bukti bahwa solusi paling efisien seringkali adalah yang paling indah.",
        "Kode adalah puisi. Setiap algoritma adalah sajak, dan setiap program adalah sebuah cerita yang dieksekusi oleh mesin.",
        "Informatika adalah jembatan yang menghubungkan imajinasi manusia dengan kekuatan eksekusi mesin.",
      ];

      const quoteElement = document.getElementById("quote-display");

      let currentIndex = 0;

      function changeQuote() {
        quoteElement.style.opacity = 0;
        setTimeout(() => {
          currentIndex = (currentIndex + 1) % quotes.length;
          quoteElement.textContent = quotes[currentIndex];
          quoteElement.style.opacity = 1;
        }, 500);
      }
      quoteElement.textContent = quotes[currentIndex];
      setInterval(changeQuote, 10000);
    });
  </script>
</body>

</html>