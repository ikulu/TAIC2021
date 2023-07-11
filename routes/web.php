<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TodoController;

# To push changes 
// https://iprs.ictc.go.tz/index.php/git_pull_taic
Route::get('/',[HomeController::class,'index']);


require __DIR__.'/auth.php';
