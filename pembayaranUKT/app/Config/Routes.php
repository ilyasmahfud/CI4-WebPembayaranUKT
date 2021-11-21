<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('/');
// $routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/pembayaran-ukt', 'Home::index');
$routes->get('/pembayaran-ukt/home', 'Home::home');

// USER PROFILE
$routes->get('/pembayaran-ukt/profile', 'UserController::index');
$routes->get('/pembayaran-ukt/profile/edit', 'UserController::edit');
$routes->post('/pembayaran-ukt/profile/save', 'UserController::save');

// PEMBAYARAN USER
$routes->get('/pembayaran-ukt/pembayaran', 'TagihanController::index');
$routes->post('/pembayaran-ukt/pembayaran/lakukan-pembayaran', 'TagihanController::lakukanPembayaran');
$routes->post('/pembayaran-ukt/pembayaran/konfirmasi-pembayaran', 'TagihanController::konfirmasiPembayaran');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
