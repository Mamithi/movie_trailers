<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
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
$routes->get('/', 'Login::index');
$routes->get('/logout', 'Login::logout');
$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);

//$routes->group('/{locale}/movies', ['filter' => 'auth'], function ($routes) {
//    $routes->get('/', 'MoviesController::index');
//    $routes->get('/add', 'MoviesController::addMovieForm');
//});

$routes->get('/{locale}/movies', 'MoviesController::index', ['filter' => 'auth']);
$routes->get('/{locale}/movies/view/(:any)', 'MoviesController::view/$1', ['filter' => 'auth']);
$routes->get('/{locale}/movies/add', 'MoviesController::addMovieForm', ['filter' => 'auth']);
$routes->post('/{locale}/movies/add', 'MoviesController::addMovie', ['filter' => 'auth']);
$routes->get('/{locale}/movies/edit/(:any)', 'MoviesController::edit/$1', ['filter' => 'auth']);
$routes->post('/{locale}/movies/edit', 'MoviesController::update', ['filter' => 'auth']);
$routes->get('/{locale}/movies/delete/(:any)', 'MoviesController::delete/$1', ['filter' => 'auth']);
$routes->get('/{locale}/change/password', 'SettingsController::index', ['filter' => 'auth']);
$routes->post('/{locale}/change/password', 'SettingsController::save', ['filter' => 'auth']);

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
