<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Main');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// --------------------------------------------------------------------
$routes->get('/', 'Main::index', ['filter' => 'noauth']);
$routes->get('books', 'Main::books', ['filter' => 'noauth']);
$routes->get('events', 'Main::events', ['filter' => 'noauth']);
$routes->get('about_us', 'Main::about_us', ['filter' => 'noauth']);
$routes->get('contact_us', 'Main::contact_us', ['filter' => 'noauth']);
// --------------------------------------------------------------------

// --------------------------------------------------------------------
$routes->get('dashboard', 'Admin::index', ['filter' => 'login']);
$routes->get('web_config', 'Webconfig::index', ['filter' => 'login']);
// --------------------------------------------------------------------

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
$routes->get('user/user_list', 'User::user_list', ['filter' => 'role:Admin']);
$routes->get('user/(:num)', 'User::user_details/$1', ['filter' => 'role:Admin']);
$routes->get('user/details/(:num)', 'User::user_details/$1', ['filter' => 'role:Admin']);
$routes->get('user/profile', 'User::profile', ['filter' => 'login']);
$routes->get('user/search', 'User::search', ['filter' => 'role:Admin']);
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
