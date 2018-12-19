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
    return redirect('/login');
});

Auth::routes();
Route::group(['middleware'=>['web', 'auth']], function () {
    Route::get('/home', 'Dashboard\ContactController@index')->name('home');
    Route::post('/home/add', 'Dashboard\ContactController@store')->name('add');
    Route::get('/{id}', 'Dashboard\ContactController@show')->name('user');
    Route::post('/home/update', 'Dashboard\ContactController@update')->name('update_push');
    Route::get('/home/update/{id}', 'Dashboard\ContactController@edit')->name('update');
    Route::get('/ajax/contact/{id}', 'Dashboard\ContactController@getAjaxUSER')->name('ajax-contact');
    Route::delete('/home/delete/{id}', 'Dashboard\ContactController@destroy')->name('delete');
});
