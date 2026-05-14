<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// $routes->get('/', 'Home::index');

// auth higgle

$routes->get('admin/login', 'Admin_auth::index');

// admin higgle

$routes->get('/admin', 'Admin_higgle::index');
$routes->post('/admin/save', 'Admin_higgle::save');
$routes->get('/admin/edit/(:num)', 'Admin_higgle::edit/$1');
$routes->post('/admin/update/(:num)', 'Admin_higgle::update/$1');
$routes->get('/admin/delete/(:num)', 'Admin_higgle::delete/$1');

// about higgle

$routes->get('/admin/about', 'About_higgle::index');
$routes->post('/admin/about/save', 'About_higgle::save');
$routes->get('/admin/about/edit/(:num)', 'About_higgle::edit/$1');
$routes->post('/admin/about/update/(:num)', 'About_higgle::update/$1');


// Higgle Session

$routes->get('/higgle-session', 'Higgle_session::index');
$routes->get('/higgle-session/collection', 'Higgle_session::collection');
$routes->get('/higgle-session/about', 'Higgle_session::about');