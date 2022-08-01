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

$routes->get('create-db', function() {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('my_db')) 
    {
        echo 'Database created!';
    }
});

$routes->get('login', 'Auth::login');

$routes->get('/', 'Auth::login');
// $routes->addRedirect('/', 'home');

$routes->get('register', 'Registers::index');
$routes->get('register/user', 'Registers::create');
$routes->post('register', 'Registers::store');

$routes->get('ptgas_jumat', 'petugasJumat::index');
$routes->get('ptgas_jumat/add', 'petugasJumat::create');
$routes->post('ptgas_jumat', 'petugasJumat::store');
$routes->get('ptgas_jumat/edit/(:any)', 'petugasJumat::edit/$1');
$routes->put('ptgas_jumat/(:any)', 'petugasJumat::update/$1');
$routes->delete('ptgas_jumat/(:segment)', 'petugasJumat::destroy/$1');

$routes->get('ptgas_teraweh', 'petugasTeraweh::index');
$routes->get('ptgas_teraweh/add', 'petugasTeraweh::create');
$routes->post('ptgas_teraweh', 'petugasTeraweh::store');
$routes->get('ptgas_teraweh/edit/(:any)', 'petugasTeraweh::edit/$1');
$routes->put('ptgas_teraweh/(:any)', 'petugasTeraweh::update/$1');
$routes->delete('ptgas_teraweh/(:segment)', 'petugasTeraweh::destroy/$1');

$routes->get('ptgas_mc', 'petugasMc::index');
$routes->get('ptgas_mc/add', 'petugasMc::create');
$routes->post('ptgas_mc', 'petugasMc::store');
$routes->get('ptgas_mc/edit/(:any)', 'petugasMc::edit/$1');
$routes->put('ptgas_mc/(:any)', 'petugasMc::update/$1');
$routes->delete('ptgas_mc/(:segment)', 'petugasMc::destroy/$1');




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
