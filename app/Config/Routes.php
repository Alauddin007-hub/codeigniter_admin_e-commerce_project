<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// Category & Brand
$routes->get('category', 'CategoryController::index');
$routes->get('category/create', 'CategoryController::create');
$routes->post('category/store', 'CategoryController::store');
$routes->get('brand', 'BrandController::index');
$routes->get('brand/create', 'BrandController::create');
$routes->post('brand/store', 'BrandController::store');

// Product 
$routes->get('product', 'Products::index');
$routes->get('product/entry', 'Products::entry');
$routes->post('product/store', 'Products::store');
$routes->get('product/edit/(:num)', 'Products::edit/$1');
$routes->post('product/update/(:num)', 'Products::update/$1');
$routes->get('product/delete/(:num)', 'Products::delete/$1');

// Customer
$routes->get('customer', 'Customer::index');
$routes->get('customer/details', 'Customer::customer_details');

// Order
$routes->get('order', 'Order::index');
$routes->get('order/details', 'Order::details');

//Stock
$routes->get('stock', 'Stock::index');

