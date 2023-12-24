<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'authGuard']);


// Category & Brand
$routes->get('category', 'CategoryController::index', ['filter' => 'authGuard']);
$routes->get('category/create', 'CategoryController::create', ['filter' => 'authGuard']);
$routes->post('category/store', 'CategoryController::store', ['filter' => 'authGuard']);
$routes->get('brand', 'BrandController::index', ['filter' => 'authGuard']);
$routes->get('brand/create', 'BrandController::create', ['filter' => 'authGuard']);
$routes->post('brand/store', 'BrandController::store', ['filter' => 'authGuard']);

// Product 
$routes->get('product', 'Products::index', ['filter' => 'authGuard']);
$routes->get('product/entry', 'Products::entry', ['filter' => 'authGuard']);
$routes->post('product/store', 'Products::store', ['filter' => 'authGuard']);
$routes->get('product/edit/(:num)', 'Products::edit/$1', ['filter' => 'authGuard']);
$routes->post('product/update/(:num)', 'Products::update/$1', ['filter' => 'authGuard']);
$routes->get('product/delete/(:num)', 'Products::delete/$1', ['filter' => 'authGuard']);

// Customer
$routes->get('customer', 'Customer::index', ['filter' => 'authGuard']);
$routes->get('customer/details', 'Customer::customer_details', ['filter' => 'authGuard']);

// Order
$routes->get('order', 'Order::index', ['filter' => 'authGuard']);
$routes->get('order/details', 'Order::details', ['filter' => 'authGuard']);

//Stock
$routes->get('stock', 'Stock::index', ['filter' => 'authGuard']);

// Complain
$routes->get('Complain', 'ComplainController::index', ['filter' => 'authGuard']);

// Authentication
$routes->get('signup', 'SignupController::index');
$routes->match(['get', 'post'], 'signup/store', 'SignupController::store');
$routes->get('signin', 'SigninController::index');
$routes->post('login', 'SigninController::login');
$routes->get('signout', 'SigninController::logout');

