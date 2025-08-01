<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MateriModel;
use App\Models\MapelModel;

class SiswaController extends BaseController
{
  protected $materiModel;
  protected $mapelModel;
  protected $session;

  public function __construct()
  {
    $this->materiModel = new MateriModel();
    $this->mapelModel = new MapelModel();
    $this->session = \Config\Services::session();
  }


  public function masukKBM($id_materi)
  {
    $materi = $this->materiModel->getJoin()->find($id_materi);

    $data = [
      'title' => $materi['judul_materi'] . ' - ' . $materi['nama_kelas'],
      'materi' => $materi,
    ];

    return page('masukKBMView', $data);
  }

  /**
   * Menampilkan halaman untuk siswa menonton sesi share screen.
   * @param int $id_materi
   */
  public function tontonShareScreen($id_materi)
  {
    // Dapatkan ID guru dari materi yang dipilih
    $materi = $this->materiModel->getJoin()->find($id_materi);
    if (!$materi) {
      // Handle jika materi tidak ada
      return redirect()->to('/dashboard-siswa')->with('gagal', 'Materi tidak ditemukan.');
    }
    if (!$materi['aktifkan_share_screen']) {
      return redirect()->to(base_url('MasukKBM/' . $materi['id']))->with('error', 'Sesi share screen tidak dapat dimulai.');
    }

    $mapel = $this->mapelModel->find($materi['id_mapel']);
    $id_guru_pengajar = $mapel['id_guru'];

    $data = [
      'title'           => 'Menonton Sesi: ' . $materi['judul_materi'],
      'materi'          => $materi,
      'teacher_peer_id' => $id_guru_pengajar, // ID guru yang akan dihubungi
      'student_peer_id' => 'siswa-' . $this->session->get('user_id') // ID unik untuk siswa ini
    ];

    return page('sesi_sharescreen', $data);
  }
}
