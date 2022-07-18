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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Home::inicio');
$routes->get('/inicio', 'Home_usuario::inicio');
$routes->get('/admin', 'Home::admin');
$routes->get('/proyectos', 'Home::proyectos');
$routes->get('/crear_usuario', 'Home::crear_usuario');
$routes->get('/bodega', 'Home::bodega');
$routes->get('/herramientasinalambricas', 'Home::hinalambricas');
$routes->get('/taladros_atornilladores', 'Home::taladros_atornilladores');
$routes->get('/agregar_producto', 'Home::agregar_producto');
$routes->get('/visualizar_usuarios', 'Home::visualizar_usuarios');
$routes->get('/login', 'Home::login');
$routes->get('/login', 'Home_usuario::login_usuario');
$routes->get('/categorias', 'Home::categorias');
$routes->get('/salir', 'Home::salir');
$routes->get('/editar_producto', 'Home::editar_producto');
$routes->get('/eliminar/(:num)', 'Home::eliminar/$1');
$routes->get('/agregar_proyecto', 'Home::agregar_proyecto');
$routes->get('editar_producto/(:num)', 'Home::editar/$1');
$routes->get('/eliminar_usuarios/(:num)', 'Home::eliminar_usuarios/$1');

$routes->get('editar_producto/(:num)', 'Home::editar/$1');
$routes->get('/editar_usuario(num)', 'Home::edit/1');

// $routes->get('/editar_producto/(:num)', 'Home::editar/$1');

$routes->get('/herramientas_inalambricas', 'Home::herramientas_inalambricas');


$routes->post('/crear_usuario', 'Home::guardar_usuario');
$routes->post('visualizar_usuario', 'Home::crear_usuario');
$routes->post('visualizar_usuario', 'Home::guardar_usuario');
$routes->post('bodega', 'Home::guardar_producto');
$routes->post('proyectos', 'Home::proyectos');
$routes->post('/login', 'Home::login');
$routes->post('/login', 'Home_usuario::login_usuario');
$routes->post('/agregar_producto', 'Home::store');













$routes->get('/inicio_usuario', 'Home_usuario::inicio');









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
