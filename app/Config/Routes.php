<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index',);
$routes->get('/Daftar', 'Home::Daftar');
$routes->get('/Login', 'Home::Login');
$routes->get('/Homepage', 'Home::Homepage');
$routes->post('simpan-data', 'Home::simpanData');
$routes->post('Home/login', 'Home::login');
$routes->post('/dashboard', 'Home::Dashboard');






