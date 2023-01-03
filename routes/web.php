<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\RegisterHrd;
use App\Http\Controllers\AuthController;
use App\Http\Livewire\Filter\KotaFilter;
use App\Http\Livewire\Filter\TypeFilter;
use App\Http\Livewire\Company\CompanyShow;
use App\Http\Livewire\Jobseek\JobseekShow;
use App\Http\Livewire\Company\CompanyIndex;
use App\Http\Livewire\Filter\CategoryFilter;
use App\Http\Livewire\Company\CompanyDashboard;
use App\Http\Livewire\Jobseek\JobseekDashboard;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Jobseek\JobseekController;

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
    Route::controller(AuthController::class)->name('action.')->group(function(){
        Route::post('/login', 'login')->name('login')->middleware('withAuth');
        Route::post('/register', 'register')->name('register')->middleware('withAuth');
        Route::post('/register/hrd', 'registerHrd')->name('register.hrd');
        Route::get('/logout', 'logout')->name('logout')->middleware('noAuth');
    });
    Route::get('/register', Register::class)->name('register');
    Route::get('/register/hrd', RegisterHrd::class)->name('register.hrd');
    Route::get('/login', Login::class)->name("login");
});
Route::prefix('jobs')->name('jobs.')->group(function(){
    Route::get('/dashboard', JobseekDashboard::class)->name('dashboard')->middleware(['auth', 'checkrole:1']);
    Route::get('/{getId}', JobseekShow::class)->name('show');
    Route::get('/type/{typeName}', TypeFilter::class)->name('type');
    Route::get('/kota/{kotaName}', KotaFilter::class)->name('kota');
    Route::get('/category/{categoryName}', CategoryFilter::class)->name('category');
    Route::prefix('loker')->controller(JobseekController::class)->group(function(){
        // Route::get('/', 'index')->name('index'); //complete
        // Route::get('/{loker}', 'show')->name('show'); //complete
        Route::get('/type/{type:name}', 'jobsByType')->name('get.type'); //complete
        Route::get('/kota/{kota:name}', 'jobsByKota')->name('get.kota'); // complete
        Route::get('/company/{companyName}', 'jobsByCompany')->name('get.company'); // complete
        Route::get('/category/{categoryName}', 'jobsByCategory')->name('get.category'); // complete
        Route::post('/apply', 'apply')->name('action.apply')->middleware(['auth', 'checkrole:1']);
        Route::put('/update/cv', 'updateCv')->name('action.update.cv')->middleware(['auth', 'checkrole:1']);
        Route::get('/download/cv/{id}', 'downloadCv')->name('action.download.cv')->middleware(['auth', 'checkrole:1']);
        Route::post('/store/cv', 'storeCv')->name('action.store.cv')->middleware(['auth', 'checkrole:1']);
        // Route::put('/{id}/update', 'update')->name('update');
        Route::delete('/apply/{id}/delete', 'deleteCv')->name('delete.cv')->middleware(['auth', 'checkrole:1']);
    });
});

Route::prefix('company')->name('company.')->group(function(){
    Route::get('/', CompanyIndex::class)->name('index');
    Route::get('/dashboard', CompanyDashboard::class)->name('dashboard')->middleware(['auth', 'checkrole:2']);
    Route::get('/{getId}', CompanyShow::class)->name('show');
    // Route::get('/category/{categoryName}', CompanyCategory::class)->name('show');
    Route::controller(CompanyController::class)->name('action.')->group(function(){
        Route::get('/{company}', 'show')->name('show');
        Route::post('/loker', 'storeLoker')->name('store.loker');
    });
    // route::get('/{company}', '')->name('index');
});

// livewire