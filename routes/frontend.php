<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CommonController;
use App\Http\Controllers\LanguageController;
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

Route::get('/set-lang/{lang}', LanguageController::class)->name('set-lang');

Route::group([
    'namespace' => 'App\\Http\\Controllers\\Frontend'
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/products', [HomeController::class, 'products'])->name('products');
    Route::get('/products/{slug}', [HomeController::class, 'productDetail'])->name('products.detail');
    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/services/{slug}', [HomeController::class, 'serviceDetail'])->name('services.detail');
    Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
    Route::get('/portfolio/{slug}', [HomeController::class, 'portfolioDetail'])->name('portfolio.detail');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/blog/{slug}', [HomeController::class, 'blogDetail'])->name('blog.detail');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
    Route::get('/scholarship', [HomeController::class, 'scholarship'])->name('scholarship');
    Route::get('/scholarship/{slug}', [HomeController::class, 'scholarshipDetail'])->name('scholarship.detail');
    Route::get('/partners', [HomeController::class, 'partners'])->name('partners');

    Route::post('/send-contact-form', [CommonController::class, 'sendMail'])->name('send.contact.form');

});


