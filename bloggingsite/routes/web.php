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

Route::get('/', 'Blogscontroller@index');

Auth::routes();

Route::get('/blogs', 'Blogscontroller@index')->name('blogs');
Route::get('blogs/create', 'Blogscontroller@create')->name('blogs.create');
Route::post('blogs/store', 'Blogscontroller@store')->name('blogs.store');

//keep trash routes
Route::get('/blogs/trash', 'Blogscontroller@trash')->name('blogs.trash');
Route::get('/blogs/trash/{id}/restore', 'Blogscontroller@restore')->name('blogs.restore');
Route::delete('/blogs/trash/{id}/permanent-delete', 'Blogscontroller@permanentDelete')->name('blogs.permanent-delete');


Route::get('/blogs/{id}', 'BlogsController@show')->name('blogs.show');
Route::get('/blogs/{id}/edit', 'BlogsController@edit')->name('blogs.edit');
Route::patch('/blogs/{id}/update', 'BlogsController@update')->name('blogs.update');
Route::delete('/blogs/{id}/delete', 'BlogsController@delete')->name('blogs.delete');

//admin routes
Route::get('/admin', 'AdminController@index')->name('admin.index')->middleware('admin');