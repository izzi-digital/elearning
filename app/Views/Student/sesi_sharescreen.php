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
            <p id="status">Menghubungkan ke sesi guru...</p>

            <video id="remote-video" autoplay></video>
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
<script src="https://unpkg.com/peerjs@1.5.2/dist/peerjs.min.js"></script>
<script>
  // Ambil data dari PHP
  const TEACHER_PEER_ID = '<?= esc($teacher_peer_id) ?>'; // ID Peer Guru yang akan dihubungi
  const STUDENT_PEER_ID = '<?= esc($student_peer_id) ?>'; // ID Peer kita (siswa)

  // Inisialisasi Peer dengan ID unik siswa
  const myPeer = new Peer(STUDENT_PEER_ID, {
    host: 'localhost',
    port: 9000,
    path: '/myapp'
  });

  // MENJADI INI:
  // const myPeer = new Peer(STUDENT_PEER_ID);

  const remoteVideo = document.getElementById('remote-video');
  const statusEl = document.getElementById('status');

  myPeer.on('open', id => {
    console.log('Terhubung ke server signaling dengan ID:', id);
    statusEl.textContent = 'Mencoba menghubungi guru...';

    // Segera panggil guru setelah kita terhubung
    const call = myPeer.call(TEACHER_PEER_ID, null); // Kita tidak mengirim stream, jadi isinya null

    // Ketika kita menerima stream dari guru (setelah guru "mengangkat telepon")
    call.on('stream', remoteStream => {
      statusEl.textContent = 'Terhubung! Menampilkan siaran layar guru.';
      console.log('Menerima stream dari guru.');
      remoteVideo.srcObject = remoteStream; // Tampilkan stream di elemen video
    });

    call.on('close', () => {
      statusEl.textContent = 'Sesi telah diakhiri oleh guru.';
    });

    call.on('error', (err) => {
      statusEl.textContent = 'Gagal terhubung. Pastikan guru sudah memulai sesi.';
      console.error('Panggilan gagal:', err);
    });
  });
</script>
<?= $this->endSection(); ?>