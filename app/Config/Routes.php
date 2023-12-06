<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('product', 'Products::index');
$routes->get('entry', 'Products::entry');
// $routes->get('entry', 'Products::entry');
// $routes->get('entry', 'Products::entry');
$routes->get('customer', 'Customer::index');
$routes->get('customer/details', 'Customer::customer_details');

$routes->get('order', 'Order::index');
$routes->get('order/details', 'Order::details');

$routes->get('stock', 'Stock::index');
