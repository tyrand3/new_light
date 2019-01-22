<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('forms/form_register');
});



Route::get('/customers', function () {
    return view('customers/index');
});



Route::get('/customer/0', function () {
    return view('customers/details');
})->name('customer.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('data-customer','Customercontroller@data')->name('data-customer');




Route::get('/customer/edit/{id}','CustomerController@edit');
Route::post('customer/update/{id}','CustomerController@update');
Route::get('customer/delete/{id}','CustomerController@destroy');
Route::post('customer/save','CustomerController@save');