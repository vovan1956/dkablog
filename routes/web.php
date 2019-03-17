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

//  #6  01:35

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']] , function() {
    // #6       03:57		Добавим маршрут к данному методу контроллера
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
});

    // Route::resource('/category', 'CategoryController', ['as'=>'admin']);


/*Route::get('/', function () {
    return view('welcome');
});*/

//                      #5   01:45

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
