<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Jobseek\JobseekController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', fn() => 'Server running in port 8000');

// Route::prefix('auth')->name('auth.')->controller(AuthController::class)->group(function(){
//     Route::post('/login', 'login')->name('login');
//     Route::post('/register', 'register')->name('register');
//     Route::get('/logout', 'logout')->name('logout');
// });

Route::prefix('jobs')->controller(JobseekController::class)->name('jobs.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/{loker}', 'show')->name('show');
    Route::get('/type/{type}', 'jobsByType')->name('get.type');
    Route::get('/kota/{type}', 'jobsByKota')->name('get.kota');
    Route::get('/category/{type}', 'jobsByCategory')->name('get.category');
    Route::post('/', 'store')->name('store');
    Route::put('/{id}/update', 'update')->name('update');
    Route::delete('/{id}/delete', 'delete')->name('delete');
});

// Route::prefix('type')->controller(::class)->

Route::prefix()->controller(CompanyController::class)->name('company')->group(function(){
    route::get('/', '');
});