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
//    return view('welcome');
    return redirect('/login');
});

Auth::routes();
Route::group(['middleware'=>['web', 'auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/home/add', 'HomeController@store')->name('add');
    Route::get('/{id}', 'HomeController@show')->name('user');
    Route::post('/home/update', 'HomeController@update')->name('update_push');
    Route::get('/home/update/{id}', 'HomeController@edit')->name('update');
    Route::delete('/home/delete/{id}', 'HomeController@destroy')->name('delete');
});
