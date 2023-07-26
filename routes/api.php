<?php

use App\Http\Controllers\customAuth\CustomAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/auth/user/register',[CustomAuthController::class,'registerUser']);
Route::post('/auth/login',[CustomAuthController::class,'userLogin']);
Route::post('/auth/logout',[CustomAuthController::class,'logout']);