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
Route::get('display','ProductController@index')->name('product.display');
Route::get('create','ProductController@create')->name('product.create');
Route::post('insert','ProductController@store')->name('product.insert');
Route::get('crud.edit.{id}','ProductController@edit')->name('crud.edit');
Route::put('product.update.{id}','ProductController@update')->name('product.update');
Route::delete('product.delete.{id}','ProductController@destroy')->name('product.destroy');
//Route::get('dashboard/master','ProductController@index')->name('dashboard.master');
?>