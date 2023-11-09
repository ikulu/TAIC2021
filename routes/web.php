<?php

use App\Http\Controllers\customAuth\CustomAuthController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpeakerController;
use Illuminate\Support\Facades\Route;


# To push changes 
// https://iprs.ictc.go.tz/index.php/git_pull_taic
//php artisan db:seed --class=ParticipantSeeder

Route::get('/',[HomeController::class,'index'])->name('landing');
Route::get('/local-sponsorship',[HomeController::class,'localsponsorship'])->name('localsponsorship');
Route::get('/international-sponsorship',[HomeController::class,'foreignsponsorship'])->name('foreignsponsorship');
Route::get('/exhibiting',[HomeController::class,'exhibiting'])->name('exhibiting');
Route::get('/registration',[HomeController::class,'opening'])->name('opening');
Route::get('/hospitality',[HomeController::class,'hospitality'])->name('hospitality');
Route::get('/tours',[HomeController::class,'tours'])->name('tours');
Route::get('/timetable',[HomeController::class,'timetable'])->name('timetable');

Route::middleware('auth')->group(
    function(){
            Route::get('/cmd/dashboard/',[HomeController::class,'adminHome']);
            Route::get('/cmd/dashboard/speakers',[SpeakerController::class,'index'])->name('speakers.index');
            Route::post('/cmd/dashboard/speaker/create',[SpeakerController::class,'add_speaker'])->name('add_speaker');
            Route::post('/cmd/dashboard/speaker/updtate-status/{slug}',[SpeakerController::class,'update_showStatus'])->name('update_showStatus');
        }
);
Route::get('/auth/logout',[CustomAuthController::class,'logout']);
Route::get('/taic-registration-app-privacy-policy',[HomeController::class,'appPrivacyPolicy']);

Route::get('/women-youth-day-registration',[GuestController::class,'index'])->name('guest');
Route::get('/women-youth-day-success',[GuestController::class,'guestResponse'])->name('guestResponse');
Route::post('/register-women-youth-day',[GuestController::class,'register'])->name('registerGuest');
Route::get('/system-women-youth-day-list',[GuestController::class,'guestData'])->name('registeredGuest');

Route::get('/print-receipt',[GuestController::class,'downloadReceipt'])->name('downloadReceipt');

Route::get('/conference-certificate',[GuestController::class,'conferenceCertificate'])->name('conferenceCertificate');
Route::post('/participant-certificate',[GuestController::class,'participantQuery'])->name('participantQuery');
Route::get('/participation-certificate',[GuestController::class, 'getCertificate'])->name('certificate');

require __DIR__.'/auth.php';

