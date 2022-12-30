<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Company\CompanyController;
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
    Route::get('/', 'index')->name('index'); //complete
    Route::get('/{loker}', 'show')->name('show'); //complete
    Route::get('/type/{type:name}', 'jobsByType')->name('get.type'); //complete
    Route::get('/kota/{kota:name}', 'jobsByKota')->name('get.kota'); // complete
    Route::get('/company/{company:name}', 'jobsByCompany')->name('get.company'); // complete
    Route::get('/category/{category:name}', 'jobsByCategory')->name('get.category'); // complete
    // Route::get('/apply', 'apply')->name('apply');
    Route::post('/apply', 'apply')->name('apply');
    Route::put('/{id}/update', 'update')->name('update');
    Route::delete('/{id}/delete', 'delete')->name('delete');
});

// Route::prefix('type')->controller(::class)->

// Route::prefix('company')->controller(CompanyController::class)->name('company.')->group(function(){
//     route::get('/', 'index')->name('index');
//     route::get('/{company}', 'show')->name('show');
//     route::post('/company', 'store')->name('store');
//     route::post('/loker', 'storeLoker')->name('store.loker');
//     // route::get('/{company}', '')->name('index');
// });