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

Route::get('/', function(){
return view("pages.home");
});

// Route::prefix('admin')
//     ->namespace('Admin')
//     ->group(function() {
//     Route::resource('/', 'DashboardController');
//     Route::resource('/news', 'NewsController');
//     Route::resource('/About', 'AboutController');
//     });

    Auth::routes();

    Route::resource('/news', 'NewsPageController');

    Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::resource('/', 'DashboardController');
    Route::resource('/news', 'NewsController');


    });
