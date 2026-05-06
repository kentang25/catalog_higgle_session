<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/admin', 'Admin_higgle::index');
$routes->post('/admin/save', 'Admin_higgle::save');
$routes->get('/admin/edit/(:num)', 'Admin_higgle::edit/$1');
$routes->post('/admin/update/(:num)', 'Admin_higgle::update/$1');
$routes->get('/admin/delete/(:num)', 'Admin_higgle::delete/$1');


// Higgle Session

$routes->get('/higgle-session', 'Higgle_session::index');
$routes->get('/collection', 'Higgle_session::collection');