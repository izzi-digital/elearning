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
    helper('auth');
    $auth = Auth();
    if ($auth == false) {
      return redirect()->to(base_url());
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
