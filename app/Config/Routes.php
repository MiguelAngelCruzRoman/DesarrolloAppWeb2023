<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/alumno','Alumno::index');
$routes->get('/alumno/mostrar','Alumno::mostrar');
$routes->get('/alumno/agregar','Alumno::agregar');
$routes->post('alumno/insert','Alumno::insert');