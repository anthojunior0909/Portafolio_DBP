<?php

use CodeIgniter\Router\RouteCollection;
use Config\Services;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

// --------------------------------------------------------------------
// Router Setup
// --------------------------------------------------------------------
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Crud');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false); // Desactiva el autoRoute para definir manualmente tus rutas

// --------------------------------------------------------------------
// Route Definitions
// --------------------------------------------------------------------

// Página principal del CRUD
$routes->get('/', 'Crud::index');

// Operaciones CRUD
$routes->post('crear', 'Crud::crear');
$routes->post('actualizar', 'Crud::actualizar');
$routes->get('obtenerNombre/(:any)', 'Crud::obtenerNombre/$1');
$routes->get('eliminar/(:any)', 'Crud::eliminar/$1');

// --------------------------------------------------------------------
// Additional Routing
// --------------------------------------------------------------------
// No borres esto, permite que CodeIgniter cargue rutas adicionales si existen
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
