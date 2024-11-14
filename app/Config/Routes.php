<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UserController::login');
$routes->post('/auth/processLogin', 'UserController::processLogin'); 
$routes->get('/dashboard', 'DashboardController::index');
// clients crud
$routes->get('/clients', 'ClientController::index');
$routes->post('/clients/store', 'ClientController::store');

$routes->get('/clients/edit/(:num)', 'ClientController::edit/$1');
$routes->post('/clients/update/(:num)', 'ClientController::update/$1');
$routes->get('/clients/delete/(:num)', 'ClientController::delete/$1');

$routes->post('client/search', 'ClientController::search');
$routes->get('clients/indexInteraction/(:num)', 'InteractionController::index/$1');
$routes->post('/interactions/storeInteraction/(:num)', 'InteractionController::storeInteraction/$1');

//***********************************transaction******************************** */ 
$routes->get('/transactions', 'TransactionController::listTransactions');
