<?php

use App\Http\Controllers\Backend\AboutHistoryController;
use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ScholarshipController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\PortfolioTypeController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\FeatureController;
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


Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'App\\Http\\Controllers\\Backend'
], function () {

    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
    });

    Route::group(['middleware' => 'admins'], function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::post('/profile/save', [AdminController::class, 'save'])->name('profile.save');

        Route::post('/remove/media/{id}', [DashboardController::class, 'removeMedia'])->name('remove-media');

        Route::group([
            'prefix' => 'settings',
        ], function () {
            Route::get('/', [SettingsController::class, 'index'])->name('settings.index');
            Route::get('/edit/{id}', [SettingsController::class, 'edit'])->name('settings.edit');
            Route::put('/update/{id}', [SettingsController::class, 'update'])->name('settings.update');
            Route::get('/delete/{id}', [SettingsController::class, 'delete'])->name('settings.delete');
        });

        Route::group([
            'prefix' => 'blogs',
            'as'  => 'blogs.'
        ], function () {
            Route::get('/', [BlogController::class, 'index'])->name('index');
            Route::get('/create', [BlogController::class, 'create'])->name('create');
            Route::post('/store', [BlogController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [BlogController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [BlogController::class, 'delete'])->name('delete');
        });

        Route::group([
            'prefix' => 'teams',
            'as'  => 'teams.'
        ], function () {
            Route::get('/', [TeamController::class, 'index'])->name('index');
            Route::get('/create', [TeamController::class, 'create'])->name('create');
            Route::post('/store', [TeamController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [TeamController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [TeamController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [TeamController::class, 'delete'])->name('delete');
        });

        Route::group([
            'prefix' => 'scholarships',
            'as'  => 'scholarships.'
        ], function () {
            Route::get('/', [ScholarshipController::class, 'index'])->name('index');
            Route::get('/create', [ScholarshipController::class, 'create'])->name('create');
            Route::post('/store', [ScholarshipController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [ScholarshipController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [ScholarshipController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ScholarshipController::class, 'delete'])->name('delete');
        });

        Route::group([
            'prefix' => 'about',
            'as'  => 'about.'
        ], function () {
            Route::get('/edit', [AboutUsController::class, 'edit'])->name('edit');
            Route::put('/update', [AboutUsController::class, 'update'])->name('update');
        });

        Route::group([
            'prefix' => 'about.histories',
            'as'  => 'about.histories.'
        ], function () {
            Route::get('/', [AboutHistoryController::class, 'index'])->name('index');
            Route::get('/create', [AboutHistoryController::class, 'create'])->name('create');
            Route::post('/store', [AboutHistoryController::class, 'store'])->name('store');
            Route::get('/edit/{history}', [AboutHistoryController::class, 'edit'])->name('edit');
            Route::put('/update/{history}', [AboutHistoryController::class, 'update'])->name('update');
            Route::get('/delete/{history}', [AboutHistoryController::class, 'delete'])->name('delete');
        });

        Route::group([
            'prefix' => 'faqs',
            'as'  => 'faqs.'
        ], function () {
            Route::get('/', [FaqController::class, 'index'])->name('index');
            Route::get('/create', [FaqController::class, 'create'])->name('create');
            Route::post('/store', [FaqController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [FaqController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [FaqController::class, 'delete'])->name('delete');
        });

        Route::group([
            'prefix' => 'features',
            'as'  => 'features.'
        ], function () {
            Route::get('/', [FeatureController::class, 'index'])->name('index');
            Route::get('/create', [FeatureController::class, 'create'])->name('create');
            Route::post('/store', [FeatureController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [FeatureController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [FeatureController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [FeatureController::class, 'delete'])->name('delete');
        });

        Route::group([
            'prefix' => 'products',
            'as'  => 'products.'
        ], function () {
            Route::get('/', [ProductController::class, 'index'])->name('index');
            Route::get('/create', [ProductController::class, 'create'])->name('create');
            Route::post('/store', [ProductController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
        });

        Route::group([
            'prefix' => 'services',
            'as'  => 'services.'
        ], function () {
            Route::get('/', [ServiceController::class, 'index'])->name('index');
            Route::get('/create', [ServiceController::class, 'create'])->name('create');
            Route::post('/store', [ServiceController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [ServiceController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [ServiceController::class, 'delete'])->name('delete');
        });

        Route::group([
            'prefix' => 'portfolio_types',
            'as'  => 'portfolio_types.'
        ], function () {
            Route::get('/', [PortfolioTypeController::class, 'index'])->name('index');
            Route::get('/create', [PortfolioTypeController::class, 'create'])->name('create');
            Route::post('/store', [PortfolioTypeController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [PortfolioTypeController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [PortfolioTypeController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PortfolioTypeController::class, 'delete'])->name('delete');
        });

        Route::group([
            'prefix' => 'portfolios',
            'as'  => 'portfolios.'
        ], function () {
            Route::get('/', [PortfolioController::class, 'index'])->name('index');
            Route::get('/create', [PortfolioController::class, 'create'])->name('create');
            Route::post('/store', [PortfolioController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [PortfolioController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [PortfolioController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PortfolioController::class, 'delete'])->name('delete');
        });

        Route::group([
            'prefix' => 'admins',
            'as'  => 'admins.'
        ], function () {
            Route::get('/', [AdminController::class, 'index'])->name('index');
            Route::get('/create', [AdminController::class, 'create'])->name('create');
            Route::post('/store', [AdminController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [AdminController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
        });

    });
});


