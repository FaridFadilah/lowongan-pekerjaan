<?php

use App\Http\Controllers\AuthController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Company\CompanyIndex;
use App\Http\Livewire\Home;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Home::class)->name('home');

Route::prefix('auth')->name('auth.')->group(function(){
    Route::controller(AuthController::class)->name('post.')->group(function(){
        Route::post('/login', 'login')->name('login')->middleware('withAuth');
        Route::post('/register', 'register')->name('register')->middleware('withAuth');
        Route::get('/logout', 'logout')->name('logout')->middleware('noAuth');
    });
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name("login");
});

Route::prefix('jobs')->controller(JobseekController::class)->name('jobs.')->group(function(){
    Route::get('/', 'index')->name('index'); //complete
    Route::get('/{loker}', 'show')->name('show'); //complete
    Route::get('/type/{type:name}', 'jobsByType')->name('get.type'); //complete
    Route::get('/kota/{kota:name}', 'jobsByKota')->name('get.kota'); // complete
    Route::get('/company/{companyName}', 'jobsByCompany')->name('get.company'); // complete
    Route::get('/category/{categoryName}', 'jobsByCategory')->name('get.category'); // complete
    // Route::get('/apply', 'apply')->name('apply');
    Route::post('/apply', 'apply')->name('apply')->middleware(['auth', 'checkrole:1']);
    // Route::put('/{id}/update', 'update')->name('update');
    Route::delete('/apply/{id}/delete', 'delete')->name('delete');
});

Route::prefix('company')->name('company.')->group(function(){
    route::get('/', CompanyIndex::class)->name('index');
    route::controller(CompanyController::class)->name('action.')->group(function(){
        route::get('/{company}', 'show')->name('show');
        route::post('/', 'store')->name('store');
        route::post('/loker', 'storeLoker')->name('store.loker');
    });
    // route::get('/{company}', '')->name('index');
});


// livewire