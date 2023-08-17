<?php

use App\Http\Controllers\customAuth\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SpeakerController;
use Illuminate\Support\Facades\Route;

# To push changes 
// https://iprs.ictc.go.tz/index.php/git_pull_taic
Route::get('/',[HomeController::class,'index'])->name('landing');
Route::get('/sponsorship',[HomeController::class,'sponsorship'])->name('sponsorship');
Route::get('/exhibiting',[HomeController::class,'exhibiting'])->name('exhibiting');
Route::get('/registration',[HomeController::class,'opening'])->name('opening');
Route::get('/hospitality',[HomeController::class,'hospitality'])->name('hospitality');
Route::get('/tours',[HomeController::class,'tours'])->name('tours');

Route::middleware('auth')->group(
    function(){
            Route::get('/cmd/dashboard/',[HomeController::class,'adminHome']);
            Route::get('/cmd/dashboard/speakers',[SpeakerController::class,'index'])->name('speakers.index');
            Route::post('/cmd/dashboard/speaker/create',[SpeakerController::class,'add_speaker'])->name('add_speaker');
            Route::post('/cmd/dashboard/speaker/updtate-status/{slug}',[SpeakerController::class,'update_showStatus'])->name('update_showStatus');
        }
);


Route::get('/auth/logout',[CustomAuthController::class,'logout']);


require __DIR__.'/auth.php';
