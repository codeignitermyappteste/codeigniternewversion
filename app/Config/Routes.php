<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/submit', 'Home::submit');
$routes->post('/teste', 'Home::teste');
$routes->post('/teste2', 'Home::teste2');
