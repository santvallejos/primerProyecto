<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principalview', 'Home::index');
$routes->get('acercade', 'Home::acercade');
$routes->get('quienessomos', 'Home::quienessomos');
$routes->get('login', 'Home::login');
$routes->get('registro', 'Home::registro');

/*Rutas del registro de usuario*/
$routes->get('/registro', 'usuariocontroller::create');
$routes->post('/enviar-form','usuariocontroller::formValidation');

/*rutas del login*/
$routes->get('/login', 'logincontroller');
$routes->post('/enviarlogin', 'logincontroller::auth');
$routes->get('/panel', 'panelcontroller::index',['filter' => 'auth']);
$routes->get('/logout', 'logincontroller::logout');
$routes->get('/logincontroller', 'logincontroller');