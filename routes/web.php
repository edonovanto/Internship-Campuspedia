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

Route::get('/aboutme', function () {
    return view('dashboard.aboutme');
});

// Add Controller
Route::get('/add', 'addController@index')->name('add');

// Change Controller
Route::get('/change', 'changeController@index')->name('change');

// View Controller
Route::get('/view', 'viewController@index')->name('view');
