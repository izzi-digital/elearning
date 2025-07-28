<?php

namespace App\Controllers\Student;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
  public function index()
  {
    $data['title'] = 'E-Learning';
    return page('dashboard', $data);
  }
}
