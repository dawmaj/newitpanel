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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@welcome')->name('admin');

Route::get('/addtask', 'AddTaskController@welcome')->name('admin');
Route::get('/showtask', 'ShowTaskController@show')->name('showtask');
Route::post('/taskadded', 'AddTaskController@store')->name('admin');