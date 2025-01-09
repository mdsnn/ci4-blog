<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('news', 'News::index'); // Route for listing news
$routes->get('news/(:segment)', 'News::view/$1'); // Route for viewing a single news article
