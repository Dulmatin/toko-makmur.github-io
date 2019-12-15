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

Route::get('categories', 'CategoryController@index')->name('category.index');
Route::get('category/create', 'CategoryController@create')->name('category.create');
Route::post('category/store', 'CategoryController@store')->name('category.store');
Route::get('category/{id}', 'CategoryController@show')->name('category.show');
Route::get('category/{id}/edit', 'CategoryController@edit')->name('category.edit');
Route::put('category/{id}', 'CategoryController@update')->name('category.update');
Route::delete('category/{id}/delete', 'CategoryController@destroy')->name('category.destroy');