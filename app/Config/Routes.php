<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('Principal_CafeteriaNIPPON', 'Home::index');
$routes->get('AcercaDe', 'Home::funcion_AcercaDe');
$routes->get('loguin', 'Home::funcion_loguin');
$routes->get('registracion', 'Home::funcion_registracion');
$routes->get('quienes_somos', 'Home::funcion_quienes_somos');