<?php

use Illuminate\Http\Request;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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


Route::middleware('HeadersSet')->group(function (){
    Route::post('/login', LoginController::class);
    
    Route::middleware('AuthToken')->group(function (){
        Route::get('/consultation', [ConsultationController::class, 'index']);
        Route::post('/consultation', [ConsultationController::class, 'store']);
        Route::get('/spots', [SpotController::class, 'index']);
        Route::get('/spots/{id}', [SpotController::class, 'show']);
        
        Route::post('/logout', LogoutController::class);
    });
});
