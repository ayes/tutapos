<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('customers', 'CustomerController');
Route::resource('items', 'ItemController');
Route::resource('inventory', 'InventoryController');
Route::resource('suppliers', 'SupplierController');
Route::resource('receivings', 'ReceivingController');
Route::resource('receiving-item', 'ReceivingItemController');
Route::resource('sales', 'SaleController');
Route::resource('employees', 'EmployeeController');

Route::resource('api/item', 'ReceivingApiController');
Route::resource('api/receivingtemp', 'ReceivingTempApiController');

Route::resource('api/saletemp', 'SaleTempApiController');
