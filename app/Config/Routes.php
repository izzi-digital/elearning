<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::index');
$routes->post('/login', 'AuthController::processLogin');
$routes->post('/register', 'AuthController::processRegister');
$routes->get('/logout', 'AuthController::logout');

$routes->group('', ['filter' => 'auth'], function ($routes) {
  // Rute untuk Guru
  $routes->group('Teacher', function ($routes) {
    $routes->get('Dashboard', 'Teacher\Dashboard::index');
  });

  // Rute untuk Siswa
  $routes->group('Student', function ($routes) {
    $routes->get('Dashboard', 'Student\Dashboard::index');
  });
});
