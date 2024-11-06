<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Routes untuk RoleController
$routes->get('roles', 'RoleController::index'); // Menampilkan daftar role
$routes->get('roles/getRoles', 'RoleController::getRoles'); // Mengambil data role untuk server-side processing

// Routes untuk membuat role baru
$routes->get('roles/create', 'RoleController::create'); // Menampilkan form untuk tambah role
$routes->post('roles/store', 'RoleController::store'); // Menyimpan role baru

// Routes untuk mengedit role
$routes->get('roles/edit/(:num)', 'RoleController::edit/$1'); // Menampilkan form edit role berdasarkan ID
$routes->post('roles/update/(:num)', 'RoleController::update/$1'); // Menyimpan perubahan data role

// Routes untuk menghapus role
$routes->get('roles/delete/(:num)', 'RoleController::delete/$1'); // Menghapus role berdasarkan ID

// Routes untuk pengaturan permissions
$routes->get('roles/managePermissions/(:num)', 'RoleController::managePermissions/$1'); // Menampilkan form pengaturan permissions untuk role tertentu
$routes->post('roles/assignPermissionToRole/(:num)', 'RoleController::assignPermissionToRole/$1'); // Menyimpan permissions yang dipilih untuk role tertentu


// Routes untuk Department
$routes->get('departments', 'DepartmentController::index');
$routes->get('departments/getDepartments', 'DepartmentController::getDepartments');
$routes->get('departments/create', 'DepartmentController::create');
$routes->post('departments/store', 'DepartmentController::store');
$routes->get('departments/edit/(:num)', 'DepartmentController::edit/$1');
$routes->post('departments/update/(:num)', 'DepartmentController::update/$1');
$routes->get('departments/delete/(:num)', 'DepartmentController::delete/$1');

// Routes untuk Position
$routes->get('positions', 'PositionController::index');
$routes->get('positions/getPositions', 'PositionController::getPositions');
$routes->get('positions/create', 'PositionController::create');
$routes->post('positions/store', 'PositionController::store');
$routes->get('positions/edit/(:num)', 'PositionController::edit/$1');
$routes->post('positions/update/(:num)', 'PositionController::update/$1');
$routes->get('positions/delete/(:num)', 'PositionController::delete/$1');

// Routes untuk User
$routes->get('users', 'UserController::index');
$routes->get('users/getUsers', 'UserController::getUsers');
$routes->get('users/create', 'UserController::create');
$routes->post('users/store', 'UserController::store');
$routes->get('users/edit/(:num)', 'UserController::edit/$1');
$routes->post('users/update/(:num)', 'UserController::update/$1');
$routes->get('users/delete/(:num)', 'UserController::delete/$1');


$routes->get('/suppliers', 'SupplierController::index');
$routes->get('/suppliers/create', 'SupplierController::create');
$routes->post('/suppliers/store', 'SupplierController::store');
$routes->get('/suppliers/edit/(:num)', 'SupplierController::edit/$1');
$routes->post('/suppliers/update/(:num)', 'SupplierController::update/$1');
$routes->get('/suppliers/delete/(:num)', 'SupplierController::delete/$1');
$routes->get('/suppliers/getSuppliers', 'SupplierController::getSuppliers');
