<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
  /**
   * Method ini berjalan SEBELUM controller dieksekusi.
   * Tugasnya adalah memeriksa apakah pengguna sudah login.
   *
   * @param RequestInterface $request
   * @param array|null       $arguments
   *
   * @return mixed
   */
  public function before(RequestInterface $request, $arguments = null)
  {
    // Cek apakah session 'isLoggedIn' TIDAK ada atau bernilai false
    if (!session()->get('isLoggedIn')) {
      // Jika pengguna belum login, paksa mereka kembali ke halaman utama (halaman login)
      return redirect()->to('/');
    }
  }

  /**
   * Method ini berjalan SETELAH controller dieksekusi.
   * Untuk kasus filter otentikasi ini, kita tidak perlu melakukan apa-apa.
   *
   * @param RequestInterface  $request
   * @param ResponseInterface $response
   * @param array|null        $arguments
   *
   * @return mixed
   */
  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    // Tidak ada aksi
  }
}
