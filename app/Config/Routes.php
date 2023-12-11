<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('namacontroller', 'NamaController::index');
$routes->get('namacontroller/create', 'NamaController::create');
$routes->post('namacontroller/store', 'NamaController::store');
$routes->get('namacontroller/edit/(:num)', 'NamaController::edit/$1');
$routes->post('namacontroller/update/(:num)', 'NamaController::update/$1');
$routes->get('namacontroller/delete/(:num)', 'NamaController::delete/$1');
