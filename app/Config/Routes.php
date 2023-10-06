<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //Rutas de alumno
$routes->get('/', 'Home::index');
$routes->get('/alumno','Alumno::index');
$routes->get('/alumno/mostrar','Alumno::mostrar');
$routes->get('/alumno/agregar','Alumno::agregar');
$routes->get('/alumno/buscar','Alumno::buscar');
$routes->get('/alumno/editar/(:num)','Alumno::editar/$1');
$routes->get('/alumno/delete/(:num)','Alumno::delete/$1');


$routes->post('/alumno/insert','Alumno::insert');
$routes->post('/alumno/update','Alumno::update');


//Rutas de materia
$routes->get('/', 'Home::index');
$routes->get('/materia','Materia::index');
$routes->get('/materia/mostrar','Materia::mostrar');
$routes->get('/materia/agregar','Materia::agregar');
$routes->get('/materia/buscar','Materia::buscar');
$routes->get('/materia/editar/(:num)','Materia::editar/$1');
$routes->get('/materia/delete/(:num)','Materia::delete/$1');


$routes->post('/materia/insert','Materia::insert');
$routes->post('/materia/update','Materia::update');