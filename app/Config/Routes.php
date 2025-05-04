<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//LOGIN USER di (view/login/index)
$routes->get('/login', 'Login::index');

//Save/saat kita menekan Register Pada Halaman Register
$routes->post('/login/save', 'Login::save');

//REGISTER USER di (view/login/register/index)
$routes->get('/login/register', 'login::register'); 

//LOGIN USERS
$routes->post('/login/proses', 'Login::proses');

//LOG OUT DI USERS
$routes->get('login/logout', 'Login::logout');


$routes->get('museum', 'Museum::index');
//INI UNTUK TOMBOL (PESAN) terhubung dengan (view/museum/index.php) dan (controller/Museum.php di function save)
$routes->get('museum/pesan/(:segment)','Museum::pesan/$1');

//INI UNTUK TOMBOL (PROSES) terhubung dengan (view/Museum/pesan.php) dan (controller/Museum/.php di function proses)
$routes->post('museum/proses', 'Museum::proses');

$routes->post('proses-pesanan', 'Museum::prosesPesanan');


$routes->group('admin', function ($routes) {
    $routes->add('/','admin\Home::index');
    $routes->add('home','admin\Home::index');
    $routes->add('museum','admin\Museum::index');
    $routes->add('museum/add','admin\Museum::add');
    $routes->add('museum/save','admin\Museum::save');
    $routes->get('museum/edit/(:segment)','admin\Museum::edit/$1');
    $routes->post('museum/update','admin\Museum::update');
    $routes->get('museum/delete/(:segment)','admin\Museum::delete/$1');

    //HALAMAN LOGIN ADMIN//
    $routes->get('login','admin\Login::index');
    $routes->post('login/cek','admin\Login::cek');

    //LOGOUT//
    $routes->get('login/keluar','admin\Login::keluar');

    //PETUGAS//
    $routes->get('petugas','admin\Petugas::index');
    $routes->get('petugas/add','admin\Petugas::add');
    $routes->post('petugas/save','admin\Petugas::save');
    $routes->get('petugas/delete/(:segment)','admin\Petugas::delete/$1');
    $routes->get('petugas/edit/(:segment)','admin\Petugas::edit/$1');
    $routes->post('petugas/update','admin\Petugas::update');

  
   
});
