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
Route::get('/', 'HomeController@index')->name('homePage');
Route::get('/page/web-design-competition', 'HomeController@wdcPage')->name('wdcPage');
Route::get('/page/mobile-apps-deevelopment-competition', 'HomeController@madcPage')->name('madcPage');
Route::get('/page/international-collegiate-programming-contest', 'HomeController@icpcPage')->name('icpcPage');
Route::get('/page/national-technology-festival', 'HomeController@ntfPage')->name('ntfPage');
Route::get('/page/news', 'HomeController@newsPage')->name('newsPage');


//Ajax Request Data
Route::get('dataUsersMadc', 'AdminController@madcUsers')->name('data.madc.users');
Route::get('dataUsersWdc', 'AdminController@wdcUsers')->name('data.wdc.users');
Route::get('deleteUsersWdc', 'AdminController@wdcUsersDelete')->name('delete.wdc.users');
Route::get('deleteUserMadc', 'AdminController@madcUsersDelete')->name('delete.madc.users');

//payments
Route::get('dataPayment', 'AdminController@paymentsGetData')->name('data.payments.users');
Route::get('confirmedPayments', 'AdminController@confirmedPayments')->name('confirmed.payments');
Route::get('unconfirmedPayments', 'AdminController@unconfirmedPayments')->name('unconfirmed.payments');
Route::get('deletePayment', 'AdminController@deletePayment')->name('delete.payments');

//submission
Route::get('dataSubmission', 'AdminController@submissionsGetData')->name('data.submissions.users');
Route::get('lolosSubmisi', 'AdminController@lolosSubmisi')->name('lolos.submisi');
Route::get('ndakLolosSubmisi', 'AdminController@ndakLolosSubmisi')->name('ndakLolos.submisi');
Route::get('deleteSubmission', 'AdminController@deleteSubmission')->name('delete.submission');

//news
Route::get('dataNews', 'AdminController@newsData')->name('admin.newsData');
Route::post('storeNews', 'AdminController@storeNews')->name('admin.storeNews');
Route::get('publishNews', 'AdminController@publishNews')->name('publish.news');
Route::get('unpublishNews', 'AdminController@unpublishNews')->name('unpublish.news');
Route::get('deleteNews', 'AdminController@deleteNews')->name('delete.news');
Route::get('editNews/{id}', 'AdminController@editNews')->name('edit.news');
Route::post('updateNews', 'AdminController@updateNews')->name('update.news');

//gallaries
Route::get('galleriesData', 'AdminController@galleriesData')->name('galleries.data');
Route::get('fetchGallary', 'AdminController@fetchGallary')->name('fetch.edit.gallary');
Route::post('addGallary', 'AdminController@addGallary')->name('gallery.store');
Route::get('deleteGallary', 'AdminController@deleteGallary')->name('delete.gallary');
Route::get('publishGallary', 'AdminController@publishGallary')->name('publish.gallary');
Route::get('unpublishGallary', 'AdminController@unpublishGallary')->name('unpublish.gallary');

Auth::routes(['verify' => true]);

Route::middleware(['auth', 'admin'])->group(function(){
   Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
   Route::get('/admin/teams/madc', 'AdminController@madcTeams')->name('admin.madcTeams');
   Route::get('/admin/teams/madc/{id}', 'AdminController@viewMadcTeams')->name('view.madc.team');
   Route::get('/admin/teams/wdc', 'AdminController@wdcTeams')->name('admin.wdcTeams');
   Route::get('/admin/teams/wdc/{id}', 'AdminController@viewWdcTeams')->name('view.wdc.team');

   Route::get('/admin/news', 'AdminController@news')->name('admin.news');
   Route::get('/admin/news/add', 'AdminController@addNews')->name('admin.addNews');
   Route::get('/admin/news/edit', 'AdminController@editNews')->name('admin.editNews');

   Route::get('/admin/galleries', 'AdminController@galleries')->name('admin.galleries');
   Route::get('/admin/payments', 'AdminController@payments')->name('admin.payments');
   Route::get('/admin/submissions', 'AdminController@submissions')->name('admin.submissions');
});

Route::middleware(['auth', 'madc'])->group(function(){

   Route::get('madc', 'MadcController@index')->name('madc.dashboard');
   Route::get('madc/team', 'MadcController@team')->name('madc.team');
   Route::post('madc/team/edit', 'MadcController@teamEdit')->name('madc.team.edit');

   Route::get('madc/payment', 'MadcController@payment')->name('madc.payment');
   Route::post('madc/payment/upload', 'MadcController@paymentUpload')->name('madc.payment.upload');
   Route::get('madc/submission', 'MadcController@submission')->name('madc.submission');
   Route::post('madc/submission/upload', 'MadcController@submissionUpload')->name('madc.submission.upload');

   // update progress
   Route::put('madc/progress','MadcController@updateProgress')->name('madc.updateProgress');
});

Route::middleware(['auth', 'wdc'])->group(function(){
    Route::get('wdc', 'WdcController@index')->name('wdc.dashboard');
    Route::get('wdc/team', 'WdcController@team')->name('wdc.team');
    Route::post('wdc/team/edit', 'WdcController@teamEdit')->name('wdc.team.edit');
    Route::get('wdc/payment', 'WdcController@payment')->name('wdc.payment');
    Route::post('wdc/payment/upload', 'WdcController@paymentUpload')->name('wdc.payment.upload');
    Route::get('wdc/submission', 'WdcController@submission')->name('wdc.submission');
    Route::post('wdc/submission/upload', 'WdcController@submissionUpload')->name('wdc.submission.upload');

     // update progress
   Route::put('wdc/progress','WdcController@updateProgress')->name('wdc.updateProgress');
});



Route::get('/home', 'HomeController@index')->name('home');
