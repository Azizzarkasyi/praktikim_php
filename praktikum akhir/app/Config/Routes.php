<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
 $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Admin::Login');
// $routes->get('/register', 'PagesControler::Register');
// $routes->get('/admin', 'PagesControler::Admin');
$routes->get('/create', 'PagesControler::Create');
$routes->get('/update', 'PagesControler::Update');

// route crud
$routes->get('/admin', 'Admin::add_komik',['filter' => 'auth']);
$routes->post('/create', 'Admin::save');
$routes->post('/save', 'Admin::save');
$routes->post('/admin/(:num)', 'Admin::delete/$1');
$routes->get('/edit/(:num)', 'Admin::edit/$1');
$routes->post('/update/(:num)', 'Admin::update/$1');
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);


// route login
$routes->post('/Register/save', 'Register::save');
$routes->get('/register', 'Register::index');
$routes->post('/Login/auth', 'Login::auth');
$routes->get('/', 'Login::index');
$routes->get('/logout', 'Login::logout');
$routes->get('/login/logout', 'Login::logout');
// $routes->get('/create', 'Admin::create');



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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
