<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('insertproduct', 'ProductController::insertProduct');
$routes->get('products', 'ProductController::readProduct');
$routes->get('editProduct/(:any)', 'ProductController::getProduct/$1'); // Perbaikan pada fungsi getproduct
$routes->post('updateProduct/(:any)', 'ProductController::updateProduct/$1');
$routes->get('deleteProduct/(:any)', 'ProductController::deleteProduct/$1');
