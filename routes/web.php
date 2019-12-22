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

//Route Kategori
Route::get('/categories', 'CategoryController@index')
        ->name('category.index');

Route::get('category/create', 'CategoryController@create')
        ->name('category.create');

Route::post('category/store', 'CategoryController@store')
        ->name('category.store');

Route::get('category/{id}', 'CategoryController@show')
        ->name('category.show');

Route::get('category/{id}/edit', 'CategoryController@edit')
        ->name('category.edit');

Route::put('category/{id}', 'CategoryController@update')
        ->name('category.update');

Route::delete('category/{id}/delete', 'CategoryController@destroy')
        ->name('category.destroy');

//Route Unit
Route::get('/units','UnitController@index')
        ->name('unit.index');
       

Route::get('/unit/create', 'UnitController@create')
        ->name('unit.create');
        

Route::post('/unit/store', 'UnitController@store')
        ->name('unit.store');

Route::get('/unit/{id}', 'UnitController@show')
        ->name('unit.show');

Route::get('/unit/{id}/edit', 'UnitController@edit')
        ->name('unit.edit');

Route::put('/unit/{id}', 'UnitController@update')
        ->name('unit.update');
        
Route::delete('/unit/{id}/delete', 'UnitController@destroy')
        ->name('unit.destroy');


//Customer 

Route::get('/customers','CustomerController@index')
        ->name('customer.index');

Route::get('/customer/create','CustomerController@create')
        ->name('customer.create');
       
Route::post('/customer/store','CustomerController@store')
        ->name('customer.store');

Route::get('/customer/{id}', 'CustomerController@show')
        ->name('customer.show');

Route::get('/customer/{id}/edit', 'CustomerController@edit')
        ->name('customer.edit');

Route::put('/customer/{id}','CustomerController@update')
        ->name('customer.update');

Route::delete('/customer/{id}/delete', 'CustomerController@destroy')
        ->name('customer.destroy');



