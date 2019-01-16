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
    return redirect()->route('admin.dashboard');
});


// Route::middleware(['auth', 'admin'])->group(function(){
   Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
   Route::get('/admin/teams/madc', 'AdminController@madcTeams')->name('admin.madcTeams');
   Route::get('/admin/teams/wdc', 'AdminController@wdcTeams')->name('admin.wdcTeams');

   Route::get('/admin/news', 'AdminController@news')->name('admin.news');
   Route::get('/admin/news/add', 'AdminController@addNews')->name('admin.addNews');
   Route::get('/admin/news/edit', 'AdminController@editNews')->name('admin.editNews');

   Route::get('/admin/galleries', 'AdminController@galleries')->name('admin.galleries');
   Route::get('/admin/payments', 'AdminController@payments')->name('admin.payments');
   Route::get('/admin/submissions', 'AdminController@submissions')->name('admin.submissions');
// });

// Route::middleware(['auth', 'madc'])->group(function(){
   Route::get('madc', 'MadcController@index')->name('madc.dashboard');
   Route::get('madc/team', 'MadcController@team')->name('madc.team');
   Route::post('madc/team/edit', 'MadcController@teamEdit')->name('madc.team.edit');
   Route::get('madc/payment', 'MadcController@payment')->name('madc.payment');
   Route::post('madc/payment/upload', 'MadcController@paymentUpload')->name('madc.payment.upload');
   Route::get('madc/submission', 'MadcController@submission')->name('madc.submission');
   Route::post('madc/submission/upload', 'MadcController@submissionUpload')->name('madc.submission.upload');
// });

// Route::middleware(['auth', 'wdc'])->group(function(){
    Route::get('wdc', 'WdcController@index')->name('wdc.dashboard');
    Route::get('wdc/team', 'WdcController@team')->name('wdc.team');
    Route::get('wdc/payment', 'WdcController@payment')->name('wdc.payment');
    Route::get('wdc/submission', 'WdcController@submission')->name('wdc.submission');
// });

Route::middleware(['auth', 'ntf'])->group(function(){

});


Auth::routes(['verify' => true]);
Route::post('wdc', 'Auth\RegisterWdcController@register')->name('wdc');

// Route::middleware('auth')->group(function(){
//    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// });
Route::get('/home', 'HomeController@index')->name('home');
