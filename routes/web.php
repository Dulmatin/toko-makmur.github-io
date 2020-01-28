<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded badvy the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/index','IndexController@index')->name('layouts.index');


Route::group(['middleware'=>['auth']],function(){
        
        Route::get('/categories', 'Admin\CategoryController@index')->name('category.index');
                // ->middleware(['auth','admin']);
        Route::get('category/cari','Admin\CategoryController@cari')->name('cari');
        // Route::get('category/create', 'CategoryController@create')->name('category.create');
        Route::get('/category/create',
    [ 'uses' => 'Admin\CategoryController@create', 'as'=>'category.create']);
                // ->middleware(['auth','admin']);
        // Route::post('category/store', 'CategoryController@store')->name('category.store');
        Route::post('/category/store',
    [ 'uses' => 'Admin\CategoryController@store', 'as'=>'category.store']);
                // ->middleware(['auth','admin']);
        Route::get('category/{id}', 'Admin\CategoryController@show')->name('category.show');
                //  ->middleware(['auth','admin']);
        Route::get('category/{id}/edit', 'Admin\CategoryController@edit')->name('category.edit');
                //  ->middleware(['auth','admin']);
        Route::put('category/{id}', 'Admin\CategoryController@update')->name('category.update');
                //  ->middleware(['auth','admin']);
        Route::delete('category/{id}/delete', 'Admin\CategoryController@destroy')->name('category.destroy');
                // ->middleware(['auth','admin']);

        //Route Unit
        Route::get('/units','Admin\UnitController@index')->name('unit.index');
                // ->middleware(['auth','admin'])
        Route::get('unit/cari','Admin\UnitController@cari')->name('cari');
        Route::get('/unit/create', 'Admin\UnitController@create')->name('unit.create');      
        Route::post('/unit/store', 'Admin\UnitController@store')->name('unit.store');
        Route::get('/unit/{id}', 'Admin\UnitController@show')->name('unit.show');
        Route::get('/unit/{id}/edit', 'Admin\UnitController@edit')->name('unit.edit');
        Route::put('/unit/{id}', 'Admin\UnitController@update')->name('unit.update');               
        Route::delete('/unit/{id}/delete', 'Admin\UnitController@destroy')->name('unit.destroy');

        //Customer 
        Route::get('/customers','Admin\CustomerController@index')->name('customer.index');
        Route::get('/customer/cari','Admin\CustomerController@cari')->name('cari');
        Route::get('/customer/create','Admin\CustomerController@create')->name('customer.create');
        Route::post('/customer/store','Admin\CustomerController@store')->name('customer.store');
        Route::get('/customer/{id}', 'Admin\CustomerController@show')->name('customer.show');
        Route::get('/customer/{id}/edit', 'Admin\CustomerController@edit')->name('customer.edit');
        Route::put('/customer/{id}','Admin\CustomerController@update')->name('customer.update');
        Route::delete('/customer/{id}/delete', 'Admin\CustomerController@destroy')->name('customer.destroy');


        //Prooduct

        Route::get('/product','Admin\ProductController@index')->name('product.index');
        Route::get('/product/create','Admin\ProductController@create')->name('product.create');        
        Route::post('/product/store','Admin\ProductController@store')->name('product.store');
        Route::get('/product/{id}', 'Admin\ProductController@show')->name('product.show');
        Route::get('/product/{id}/edit', 'Admin\ProductController@edit')->name('product.edit');
        Route::put('/product/{id}','Admin\ProductController@update')->name('product.update');
        Route::delete('/product/{id}/delete', 'Admin\ProductController@destroy')->name('product.destroy');
});


// Route::prefix('admin')
//         ->namespace('Admin')
//         ->middleware(['auth','admin'])
//         ->group(function() {
//             Route::get('/home','HomeController@index')
//             ->name('dashboard');
        
//         });

Auth::routes(['verify'=>true]);

Route::get('/home','HomeController@index')->name('home');