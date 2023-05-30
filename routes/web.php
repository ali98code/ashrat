<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;




Auth::routes();

/* =============== Front Routes =============== */
Route::get('/', [HomeController::class, 'index'])->name('home');


/* =============== Auth Routes =============== */
Route::group(['middleware' => 'auth'], function() {

    Route::group(['prefix' => 'services', 'as' => 'services.'], function () {
        // Create Service
        Route::get('create', [ServiceController::class, 'create'])->name('create');
        Route::post('create', [ServiceController::class, 'store'])->name('store');
    });
    Route::group(['prefix' => 'portfolios', 'as' => 'portfolios.'], function () {
        // Create Portfolio
        Route::get('create', [PortfolioController::class, 'create'])->name('create');
        Route::post('create', [PortfolioController::class, 'store'])->name('store');
    });
    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function() {
        // Global Settings
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::post('/', [SettingController::class, 'settings_update'])->name('settings_update');
        // Work Settings
        Route::get('/work', [SettingController::class, 'work'])->name('work');
        Route::post('/work', [SettingController::class, 'work_update'])->name('work_update');
        // Phone Settings
        Route::get('/phone', [SettingController::class, 'phone'])->name('phone');
        Route::post('/phone', [SettingController::class, 'phone_update'])->name('phone_update');
        // Change Password
        Route::get('/change-password', [SettingController::class, 'password'])->name('password');
        Route::post('/change-password', [SettingController::class, 'change_password'])->name('change_password');
    });

});

// All Services
Route::get('services/{slug?}/{sub?}', [ServiceController::class, 'index'])->name('services.index');
Route::get('service/{slug}', [ServiceController::class, 'show'])->name('service.show');


/* =============== Ajax Routes =============== */
Route::group(['prefix' => 'ajax', 'as' => 'ajax.'], function() {
    Route::get('get-sub-categories/{id}', [HomeController::class, 'get_sub_categories']);
});

/* =============== All Admin Routes =============== */
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    /* =============== Admin Auth =============== */
    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::post('login', [LoginController::class, 'login_action'])->name('login_action');

    /* =============== Admin Routes =============== */
    Route::group(['middleware' => 'auth:admin'], function() {

        /* =============== Dashboard =============== */
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard')->middleware('role:dashboard');

        /* =============== Categories =============== */
        Route::resource('categories', CategoryController::class);

        /* =============== Users =============== */
        Route::resource('users', UserController::class);

    });

});
