<?= $this->extend(teacher_base()); ?>

<?= $this->section('content'); ?>
<h4 class="text-center mb-3"><?= $title ?></h4>
<!-- <p>ID Sesi: <strong id="my-peer-id">Memuat...</strong></p> -->
<div class="row">
  <div class="col">
    <div class="iq-card">
      <div class="iq-card-body">
        <div class="iq-card mb-0">
          <div class="iq-card-body p-0">
            <div id="video-container">
              <video id="local-video" autoplay muted></video>
            </div>
            <div class="mt-2">
              <button id="start-share-btn" class="btn btn-success">Mulai Berbagi Layar</button>
              <button id="stop-share-btn" class="btn btn-danger" style="display: none;">Stop</button>
              <a href="<?= base_url('NonAktifkanShareScreen/' . $materi['id']) ?>" class="btn btn-primary">Non Aktifkan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>
<?= $this->endSection(); ?>

<?= $this->section('css'); ?>
<style>
  #video-container video {
    width: 100%;
    height: auto;
    border: 2px solid #ddd;
  }
</style>
<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="https://unpkg.com/peerjs@1.5.2/dist/peerjs.min.js"></script>
<script>
  // Ambil data dari PHP yang dikirim Controller
  const ROOM_ID = '<?= esc($room_id) ?>'; // ID unik untuk ruangan
  const USER_ID = '<?= esc($user_id) ?>'; // ID unik untuk guru

  const myPeer = new Peer(USER_ID, {
    host: 'localhost',
    port: 9000,
    path: '/myapp'
  });
  // const myPeer = new Peer(USER_ID);

  const localVideo = document.getElementById('local-video');
  const startBtn = document.getElementById('start-share-btn');
  const stopBtn = document.getElementById('stop-share-btn');
  let localStream;

  // Tampilkan ID Peer kita setelah terhubung ke server signaling
  myPeer.on('open', id => {
    document.getElementById('my-peer-id').textContent = id;
  });

  // Logika untuk tombol Mulai Berbagi
  startBtn.addEventListener('click', () => {
    // Minta izin ke browser untuk menangkap layar
    navigator.mediaDevices.getDisplayMedia({
      video: true,
      audio: true
    }).then(stream => {
      localStream = stream;
      localVideo.srcObject = stream; // Tampilkan di video kita sendiri

      // Ketika ada siswa yang "menelepon", jawab dengan stream layar kita
      myPeer.on('call', call => {
        call.answer(stream);
      });

      startBtn.style.display = 'none';
      stopBtn.style.display = 'block';
    }).catch(err => {
      console.error("Gagal mengakses layar: ", err);
      alert("Anda harus memberikan izin berbagi layar untuk melanjutkan.");
    });
  });

  // Logika untuk tombol Hentikan Berbagi
  stopBtn.addEventListener('click', () => {
    localStream.getTracks().forEach(track => track.stop()); // Hentikan semua track (video/audio)
    localVideo.srcObject = null;
    startBtn.style.display = 'block';
    stopBtn.style.display = 'none';
  });
</script>
<?= $this->endSection(); ?>