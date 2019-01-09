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
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Route::post('wdc', 'Auth\RegisterWdcController@register')->name('wdc');

Route::middleware('auth')->group(function(){
   Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});
Route::get('/home', 'HomeController@index')->name('home');
