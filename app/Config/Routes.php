<?php namespace Config;

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
$routes->setDefaultController('Usercontroller');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Usercontroller::index');


#Auth routes
$routes->get('/login', 'Usercontroller::showLoginForm');
$routes->post('/login', 'Usercontroller::login');
$routes->get('/register', 'Usercontroller::showRegistrationForm');
$routes->post('/register', 'Usercontroller::register');
$routes->get('/logout', 'Usercontroller::logout');

#user routes
$routes->get('/dashboard', 'Usercontroller::dashboard');


#House keeping routes
$routes->get('/states', 'Housekeepingcontroller::states');
$routes->post('/add-new-state', 'Housekeepingcontroller::addNewState');
$routes->get('/departments', 'Housekeepingcontroller::departments');
$routes->post('/add-new-department', 'Housekeepingcontroller::addNewDepartment');

#Policy config routes
$routes->get('/policy-config', 'Policyconfigcontroller::index');


#cooperators routes
$routes->get('new_application', 'Cooperators::new_application');
$routes->post('new_application', 'Cooperators::new_application');

/**
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