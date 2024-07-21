<?php

use CodeIgniter\Router\RouteCollection;
//  Rutas de Index
/**
 * @var RouteCollection $routes
 */
$routes->get("/", "Home::index");
$routes->get("index", "Home::index");
$routes->get("quienes_somos", "Home::quienes_somos");
$routes->get('acercade', 'Home::acercade');
$routes->get('cards_autoridades', 'Home::cards_autoridades');
$routes->get('login', 'Home::login');
$routes->get('registro', 'Home::registro');

// Rutas del Registro de Usuarios
$routes->get('/registro', 'Usuario_controller::create');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');

// Rutas del login
$routes->get('/login', 'Login_controller');
$routes->post('enviarlogin', 'Login_controller::auth');
$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'Login_controller::logout');