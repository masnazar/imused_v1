<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ===================================================
// Home Route
// ===================================================
$routes->get('/dashboard', 'Home::index');                                                  // Halaman utama
$routes->get('/', 'Home::index'); 

// ===================================================
// Auth Routes
// ===================================================
$routes->get('register', 'AuthController::register');                             // Form registrasi pengguna baru
$routes->post('auth/storeRegistration', 'AuthController::storeRegistration');      // Proses simpan registrasi
$routes->get('login', 'AuthController::login');                                    // Form login
$routes->post('auth/authenticate', 'AuthController::authenticate');                // Proses autentikasi login
$routes->get('logout', 'AuthController::logout');                                  // Proses logout

// ===================================================
// Supplier Management Routes
// ===================================================
$routes->get('/suppliers', 'SupplierController::index');                           // Daftar supplier
$routes->get('/suppliers/create', 'SupplierController::create');                   // Form tambah supplier
$routes->post('/suppliers/store', 'SupplierController::store');                    // Proses simpan supplier baru
$routes->get('/suppliers/edit/(:num)', 'SupplierController::edit/$1');             // Form edit supplier berdasarkan ID
$routes->post('/suppliers/update/(:num)', 'SupplierController::update/$1');        // Proses update supplier
$routes->get('/suppliers/delete/(:num)', 'SupplierController::delete/$1');         // Proses hapus supplier
$routes->get('/suppliers/getSuppliers', 'SupplierController::getSuppliers');       // Server-side data supplier untuk DataTables

// ===================================================
// Brand Management Routes
// ===================================================
$routes->group('brands', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'BrandController::index');                                   // Daftar brand
    $routes->get('getBrands', 'BrandController::getBrands');                       // Server-side data brand untuk DataTables
    $routes->get('create', 'BrandController::create');                             // Form tambah brand
    $routes->post('store', 'BrandController::store');                              // Proses simpan brand baru
    $routes->get('edit/(:num)', 'BrandController::edit/$1');                       // Form edit brand berdasarkan ID
    $routes->post('update/(:num)', 'BrandController::update/$1');                  // Proses update brand
    $routes->get('delete/(:num)', 'BrandController::delete/$1');                   // Proses hapus brand
});

// ===================================================
// Product Management Routes
// ===================================================
$routes->group('products', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'ProductController::index');                                 // Daftar produk
    $routes->get('create', 'ProductController::create');                           // Form tambah produk
    $routes->post('store', 'ProductController::store');                            // Proses simpan produk baru
    $routes->get('edit/(:num)', 'ProductController::edit/$1');                     // Form edit produk
    $routes->post('update/(:num)', 'ProductController::update/$1');                // Proses update produk
    $routes->get('delete/(:num)', 'ProductController::delete/$1');                 // Proses hapus produk
    $routes->get('getProducts', 'ProductController::getProducts');                 // Server-side data produk untuk DataTables
});

// ===================================================
// User Management Routes
// ===================================================
$routes->get('users', 'UserController::index');                                    // Daftar pengguna
$routes->get('users/create', 'UserController::create');                            // Form tambah pengguna baru
$routes->post('users/store', 'UserController::store');                             // Proses simpan pengguna baru
$routes->get('users/edit/(:num)', 'UserController::edit/$1');                      // Form edit pengguna berdasarkan ID
$routes->post('users/update/(:num)', 'UserController::update/$1');                 // Proses update pengguna
$routes->get('users/delete/(:num)', 'UserController::delete/$1');                  // Proses hapus pengguna

$routes->group('settings', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'SettingsController::index'); // Menampilkan halaman pengaturan
    $routes->post('update', 'SettingsController::update'); // Memperbarui pengaturan
});
$routes->get('logo/(:any)', 'SettingsController::serveLogo/$1');
