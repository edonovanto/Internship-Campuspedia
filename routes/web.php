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
Route::get('/add', 'AddController@index')->name('add');
Route::get('/edit/form/{id}', 'AddController@uploadedit')->name('update');
Route::get('/edit/form/simpan/{id}', 'AddController@edit')->name('edit');
Route::post('/insert', 'AddController@insertdata')->name('insert');


// Change Controller
Route::get('/change', 'ChangeController@index')->name('change');
Route::get('/change/delete/{id}', 'ChangeController@deletedata')->name('deleteSiswa');

// View Controller
Route::get('/view', 'viewController@index')->name('view');
