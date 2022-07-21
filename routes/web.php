<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('site.index');
});

// auth rout for all users, when they logged in
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::get('/admin', 'App\Http\Controllers\SAdminController@index')->name('dashboard.newtodo');

// routes for super admin only
Route::group(['middleware' => ['auth', 'role:superadmin']], function () {
    Route::get('/dashboard/userlist', 'App\Http\Controllers\SAdminController@userlist')->name('dashboard.userlist');
    Route::get('/registerr', 'App\Http\Controllers\RegisterUserController@create')->name('registerr');
    Route::post('/registerr', 'App\Http\Controllers\RegisterUserController@store')->name('registerr');   
});  

Route::get('/backregisterr', 'App\Http\Controllers\RegisterUserController@createback')->name('backregisterr');
Route::post('/backregisterr', 'App\Http\Controllers\RegisterUserController@storeback')->name('backregisterr');

// routes for admin only
Route::group(['middleware' => ['auth', 'role:admin']], function () {
    Route::get('/header', 'App\Http\Controllers\AdminController@header')->name('header');   
    Route::post('/addheader', 'App\Http\Controllers\AdminController@addheader')->name('addheader'); 
    Route::post('/editheader', 'App\Http\Controllers\AdminController@editheader')->name('editheader'); 
    Route::get('/frontpage', 'App\Http\Controllers\AdminController@frontpage')->name('frontpage');
    Route::post('/addfrontpage', 'App\Http\Controllers\AdminController@addfrontpage')->name('addfrontpage');
    Route::post('/editfrontpage', 'App\Http\Controllers\AdminController@editfrontpage')->name('editfrontpage'); 
    Route::get('/aboutsection', 'App\Http\Controllers\AdminController@aboutsection')->name('aboutsection');
    Route::post('/addaboutsection', 'App\Http\Controllers\AdminController@addaboutsection')->name('addaboutsection'); 
    Route::post('/editaboutsection', 'App\Http\Controllers\AdminController@editaboutsection')->name('editaboutsection'); 
    Route::get('/speakerssection', 'App\Http\Controllers\AdminController@speakerssection')->name('speakerssection');
    Route::post('editspeakerssection', 'App\Http\Controllers\AdminController@editspeakerssection')->name('editspeakerssection');
    Route::post('/addspeakerssection', 'App\Http\Controllers\AdminController@addspeakerssection')->name('addspeakerssection'); 
    Route::get('/{id}/deletespeakerssection', 'App\Http\Controllers\AdminController@deletespeakerssection')->name('deletespeakerssection');
    Route::get('/analyticssection', 'App\Http\Controllers\AdminController@analyticssection')->name('analyticssection');
    Route::post('/addanalyticssection', 'App\Http\Controllers\AdminController@addanalyticssection')->name('addanalyticssection'); 
    Route::get('/{id}/deleteanalyticssection', 'App\Http\Controllers\AdminController@deleteanalyticssection')->name('deleteanalyticssection');
    Route::get('/sponsorssection', 'App\Http\Controllers\AdminController@sponsorssection')->name('sponsorssection');
    Route::post('/addsponsorssection', 'App\Http\Controllers\AdminController@addsponsorssection')->name('addsponsorssection'); 
    Route::get('/{id}/deletesponsorssection', 'App\Http\Controllers\AdminController@deletesponsorssection')->name('deletesponsorssection');
    Route::get('/partnerssection', 'App\Http\Controllers\AdminController@partnerssection')->name('partnerssection');
    Route::post('/addpartnerssection', 'App\Http\Controllers\AdminController@addpartnerssection')->name('addpartnerssection'); 
    Route::get('/{id}/deletepartnerssection', 'App\Http\Controllers\AdminController@deletepartnerssection')->name('deletepartnerssection');
    Route::get('/gallerysection', 'App\Http\Controllers\AdminController@gallerysection')->name('gallerysection');
    Route::post('/addgallerysection', 'App\Http\Controllers\AdminController@addgallerysection')->name('addgallerysection'); 
    Route::get('/{id}/deletegallerysection', 'App\Http\Controllers\AdminController@deletegallerysection')->name('deletegallerysection');
    Route::get('/venuegallerysection', 'App\Http\Controllers\AdminController@venuegallerysection')->name('venuegallerysection');
    Route::post('/addvenuegallerysection', 'App\Http\Controllers\AdminController@addvenuegallerysection')->name('addvenuegallerysection'); 
    Route::get('/{id}/deletevenuegallerysection', 'App\Http\Controllers\AdminController@deletevenuegallerysection')->name('deletevenuegallerysection');
    Route::get('/exhibitorssection', 'App\Http\Controllers\AdminController@exhibitorssection')->name('exhibitorssection');
    Route::post('/addexhibitorssection', 'App\Http\Controllers\AdminController@addexhibitorssection')->name('addexhibitorssection'); 
    Route::get('/{id}/deleteexhibitorssection', 'App\Http\Controllers\AdminController@deleteexhibitorssection')->name('deleteexhibitorssection');
    Route::get('/eventvenuesection', 'App\Http\Controllers\AdminController@eventvenuesection')->name('eventvenuesection');
    Route::post('/addeventvenuesection', 'App\Http\Controllers\AdminController@addeventvenuesection')->name('addeventvenuesection');
    Route::post('/editeventvenue', 'App\Http\Controllers\AdminController@editeventvenue')->name('editeventvenue'); 
    Route::get('/contactssection', 'App\Http\Controllers\AdminController@contactssection')->name('contactssection');
    Route::post('/addcontactssection', 'App\Http\Controllers\AdminController@addcontactssection')->name('addcontactssection');
    Route::post('/editcontactssection', 'App\Http\Controllers\AdminController@editcontactssection')->name('editcontactssection'); 
    Route::get('/schedule', 'App\Http\Controllers\AdminController@schedule')->name('schedule');
    Route::post('/addschedule', 'App\Http\Controllers\AdminController@addschedule')->name('addschedule');
    Route::get('/{id}/deleteschedule', 'App\Http\Controllers\AdminController@deleteschedule')->name('deleteschedule');
    Route::get('/mail', 'App\Http\Controllers\AdminController@mail')->name('mail');
    Route::get('/messages', 'App\Http\Controllers\AdminController@messages')->name('messages');
});

    Route::post('/addmail', 'App\Http\Controllers\AdminController@addmail')->name('addmail');
    Route::post('/addmessage', 'App\Http\Controllers\AdminController@addmessage')->name('addmessage');

// all admins
Route::get('/profile', 'App\Http\Controllers\RouteController@profile')->name('profile');
Route::post('/editprofile', 'App\Http\Controllers\RegisterUserController@editprofile')->name('editprofile');
Route::post('/resetpass', 'App\Http\Controllers\RegisterUserController@resetpass')->name('resetpass');

require __DIR__.'/auth.php';
