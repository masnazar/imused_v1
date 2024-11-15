<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ===================================================
// Home Routes
// ===================================================
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::index');

// ===================================================
// Authentication Routes
// ===================================================
$routes->group('auth', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('register', 'AuthController::register');
    $routes->post('storeRegistration', 'AuthController::storeRegistration');
    $routes->get('login', 'AuthController::login');
    $routes->post('authenticate', 'AuthController::authenticate');
    $routes->get('logout', 'AuthController::logout');
});

// ===================================================
// Supplier Management Routes
// ===================================================
$routes->group('suppliers', function ($routes) {
    $routes->get('/', 'SupplierController::index');
    $routes->get('create', 'SupplierController::create');
    $routes->post('store', 'SupplierController::store');
    $routes->get('edit/(:num)', 'SupplierController::edit/$1');
    $routes->post('update/(:num)', 'SupplierController::update/$1');
    $routes->get('delete/(:num)', 'SupplierController::delete/$1');
    $routes->get('getSuppliers', 'SupplierController::getSuppliers');
});

// ===================================================
// Brand Management Routes
// ===================================================
$routes->group('brands', function ($routes) {
    $routes->get('/', 'BrandController::index');
    $routes->get('create', 'BrandController::create');
    $routes->post('store', 'BrandController::store');
    $routes->get('edit/(:num)', 'BrandController::edit/$1');
    $routes->post('update/(:num)', 'BrandController::update/$1');
    $routes->get('delete/(:num)', 'BrandController::delete/$1');
    $routes->get('getBrands', 'BrandController::getBrands');
});

// ===================================================
// Product Management Routes
// ===================================================
$routes->group('products', function ($routes) {
    $routes->get('/', 'ProductController::index');
    $routes->get('create', 'ProductController::create');
    $routes->post('store', 'ProductController::store');
    $routes->get('edit/(:num)', 'ProductController::edit/$1');
    $routes->post('update/(:num)', 'ProductController::update/$1');
    $routes->get('delete/(:num)', 'ProductController::delete/$1');
    $routes->get('getProducts', 'ProductController::getProducts');
});

// ===================================================
// User Management Routes
// ===================================================
$routes->group('users', function ($routes) {
    $routes->get('/', 'UserController::index');
    $routes->get('create', 'UserController::create');
    $routes->post('store', 'UserController::store');
    $routes->get('edit/(:num)', 'UserController::edit/$1');
    $routes->post('update/(:num)', 'UserController::update/$1');
    $routes->get('delete/(:num)', 'UserController::delete/$1');
});

// ===================================================
// Settings Management Routes
// ===================================================
$routes->group('settings', function ($routes) {
    $routes->get('/', 'SettingsController::index');
    $routes->get('business', 'SettingsController::business');
    $routes->get('system', 'SettingsController::system');
    $routes->get('notification', 'SettingsController::notification');
    
    $routes->post('update/business', 'SettingsController::update/business');
    $routes->post('update/system', 'SettingsController::update/system');
    $routes->post('update/notification', 'SettingsController::update/notification');
    $routes->get('logo/(:any)', 'SettingsController::serveLogo/$1');
});

// ===================================================
// Warehouse Management Routes
// ===================================================
$routes->group('warehouses', function ($routes) {
    $routes->get('/', 'WarehouseController::index');
    $routes->get('create', 'WarehouseController::create');
    $routes->post('store', 'WarehouseController::store');
    $routes->get('edit/(:num)', 'WarehouseController::edit/$1');
    $routes->post('update/(:num)', 'WarehouseController::update/$1');
    $routes->get('delete/(:num)', 'WarehouseController::delete/$1');
    $routes->get('getWarehouses', 'WarehouseController::getWarehouses');
});

// ===================================================
// Stock Transfer Management Routes
// ===================================================
$routes->group('stock_transfers', function ($routes) {
    $routes->get('/', 'StockTransferController::index');
    $routes->get('getTransfers', 'StockTransferController::getTransfers');
    $routes->get('create', 'StockTransferController::create');
    $routes->post('store', 'StockTransferController::store');
    $routes->get('approve/(:num)', 'StockTransferController::approve/$1');
    $routes->post('approveTransfer/(:num)', 'StockTransferController::approveTransfer/$1');
    $routes->post('rejectTransfer/(:num)', 'StockTransferController::rejectTransfer/$1');
    $routes->get('show/(:num)', 'StockTransferController::show/$1');
});

// ===================================================
// Warehouse Dashboard Routes
// ===================================================
$routes->group('dashboard/warehouse', function($routes) {
    $routes->get('/', 'WarehouseDashboardController::index');  // Halaman utama dashboard
    $routes->get('getWarehouseStats', 'WarehouseDashboardController::getWarehouseStats'); // Data untuk chart
    $routes->get('getWarehouseTableData', 'WarehouseDashboardController::getWarehouseTableData'); // Data untuk tabel
});


// ===================================================
// Stock Receive Routes
// ===================================================
$routes->group('stock-receive', function ($routes) {
    $routes->get('/', 'StockReceiveController::index');
    $routes->post('store', 'StockReceiveController::store');
});

$routes->get('stock-receive/history', 'StockReceiveController::history');
// di app/Config/Routes.php
$routes->get('stock-receive/getSuppliersByProduct/(:num)', 'StockReceiveController::getSuppliersByProduct/$1');

