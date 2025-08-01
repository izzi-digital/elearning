<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::index');
$routes->post('login', 'AuthController::processLogin');
$routes->post('register', 'AuthController::processRegister');
$routes->get('logout', 'AuthController::logout');
$routes->get('Dashboard', 'Dashboard::index');

$routes->get('KBM', 'GuruController::index');
$routes->get('MateriKBM/(:num)', 'GuruController::materiKBM/$1');
$routes->get('MulaiKBM/(:num)', 'GuruController::mulaiKBM/$1');
$routes->get('AktifkanShareScreen/(:num)', 'GuruController::aktifkanShareScreen/$1');
$routes->get('MulaiShareScreen/(:num)', 'GuruController::mulaiShareScreen/$1');
$routes->get('NonAktifkanShareScreen/(:num)', 'GuruController::nonAktifkanShareScreen/$1');

$routes->post('mapel/simpan', 'GuruController::simpanMapel');
$routes->post('materi/simpan', 'GuruController::simpanMateri');

$routes->get('MasukKBM/(:num)', 'SiswaController::masukKBM/$1');
$routes->get('TontonShareScreen/(:num)', 'SiswaController::tontonShareScreen/$1');


$routes->group('', ['filter' => 'auth'], function ($routes) {
  // Rute untuk Guru
  $routes->group('Teacher', function ($routes) {
    $routes->get('/', 'Teacher\Dashboard::index');
    $routes->get('Dashboard', 'Teacher\Dashboard::index');
  });

  // Rute untuk Siswa
  $routes->group('Student', function ($routes) {
    $routes->get('Dashboard', 'Student\Dashboard::index');
  });
});
