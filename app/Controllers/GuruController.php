<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasModel;
use App\Models\MapelModel;
use App\Models\MateriModel;

class GuruController extends BaseController
{
  protected $kelasModel;
  protected $mapelModel;
  protected $materiModel;
  protected $session;

  public function __construct()
  {
    $this->kelasModel = new KelasModel();
    $this->mapelModel = new MapelModel();
    $this->materiModel = new MateriModel();
    $this->session = \Config\Services::session();
  }

  public function index()
  {
    $id_guru = $this->session->get('user_id');

    $data = [
      'title' => 'KBM',
      'listKelas' => model('KelasModel')->orderBy('nama_kelas asc')->findAll(),
      'mapel' => $this->mapelModel->getJoin()->where('id_guru', $id_guru)->findAll()
    ];

    return page('kbmView', $data);
  }

  public function materiKBM($id_mapel)
  {
    $mapel = $this->mapelModel->getJoin()->find($id_mapel);
    $materi = $this->materiModel->getJoin()->where('id_mapel', $id_mapel)->where('tanggal', tanggal_sekarang())->first();

    $data = [
      'title' => $mapel['nama_mapel'] . ' ' . $mapel['nama_kelas'] . ' - ' . tanggal_full(tanggal_sekarang()),
      'mapel' => $mapel,
      'materi' => $materi,
    ];

    return page('materiKBMView', $data);
  }

  public function mulaiKBM($id_materi)
  {
    $materi = $this->materiModel->getJoin()->find($id_materi);

    $data = [
      'title' => $materi['judul_materi'] . ' - ' . $materi['nama_kelas'],
      'materi' => $materi,
    ];

    return page('mulaiKBMView', $data);
  }

  public function aktifkanShareScreen($id_materi)
  {
    $this->materiModel->save([
      'id' => $id_materi,
      'aktifkan_share_screen' => true,
    ]);

    $this->session->setFlashdata('success', 'Share Screen dimulai.');
    return redirect()->to('MulaiKBM/' . $id_materi);
  }

  public function mulaiShareScreen($id_materi)
  {
    $materi = $this->materiModel->find($id_materi);
    if (!$materi || !$materi['aktifkan_share_screen']) {
      return redirect()->back()->with('gagal', 'Sesi share screen tidak dapat dimulai.');
    }
    $mapel = $this->mapelModel->find($materi['id_mapel']);
    $id_guru = $this->session->get('user_id');

    if ($mapel['id_guru'] != $id_guru) {
      return redirect()->back()->with('gagal', 'Anda tidak berhak memulai sesi ini.');
    }

    $data = [
      'title'   => 'Share Screen - ' . $materi['judul_materi'],
      'materi'  => $materi,
      'user_id' => $id_guru,
      'room_id' => 'kbm-materi-' . $id_materi
    ];
    return page('sesi_sharescreen', $data);
  }

  public function nonAktifkanShareScreen($id_materi)
  {
    $this->materiModel->save([
      'id' => $id_materi,
      'aktifkan_share_screen' => false,
    ]);

    $this->session->setFlashdata('success', 'Share Screen dihentikan.');
    return redirect()->to('MulaiKBM/' . $id_materi);
  }

  /**
   * Menampilkan detail mata pelajaran dan materi dari sebuah kelas.
   * @param int $id_kelas
   */
  public function kelas($id_kelas)
  {
    $data = [
      'title'     => 'Detail Kelas',
      'kelas'     => $this->kelasModel->find($id_kelas),
      'mapel'     => $this->mapelModel->where('id_kelas', $id_kelas)->findAll(),
      'materi'    => $this->materiModel // Anda bisa tambahkan join di sini jika perlu
    ];

    return view('guru/detail_kelas', $data);
  }

  public function simpanMapel()
  {
    $id_guru = $this->session->get('user_id');
    $cek = $this->mapelModel
      ->where('nama_mapel', $_POST['nama_mapel'])
      ->where('id_kelas', $_POST['id_kelas'])
      ->where('id_guru', $id_guru)
      ->first();

    if ($cek != NULL) {
      $this->session->setFlashdata('error', 'Data sudah ada!');
      return redirect()->to('KBM');
    }

    $this->mapelModel->save([
      'nama_mapel' => $this->request->getPost('nama_mapel'),
      'id_kelas'   => $this->request->getPost('id_kelas'),
      'id_guru'    => $id_guru
    ]);

    $this->session->setFlashdata('success', 'Mata pelajaran berhasil ditambahkan.');
    return redirect()->to('KBM');
  }

  public function simpanMateri()
  {
    $id_mapel = $_POST['id_mapel'];

    $cek = $this->materiModel
      ->where('id_mapel', $id_mapel)
      ->where('tanggal', tanggal_sekarang())
      ->first();

    if ($cek != NULL) {
      $this->session->setFlashdata('error', 'Sudah ada materi!');
      return redirect()->to('MateriKBM/' . $id_mapel);
    }
    $this->materiModel->save([
      'id_mapel'              => $this->request->getPost('id_mapel'),
      'tanggal'               => $this->request->getPost('tanggal'),
      'judul_materi'          => $this->request->getPost('judul_materi'),
      // 'konten_teks'           => $this->request->getPost('konten_teks'),
      // 'link_video'            => $this->request->getPost('link_video'),
      // 'aktifkan_share_screen' => $this->request->getPost('aktifkan_share_screen') ?? 0,
    ]);

    $mapel = $this->mapelModel->find($this->request->getPost('id_mapel'));

    $this->session->setFlashdata('success', 'Materi berhasil ditambahkan.');

    return redirect()->to('MateriKBM/' . $id_mapel);
  }
}
