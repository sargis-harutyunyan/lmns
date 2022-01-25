<?php

use App\Http\Controllers\Admin\HomeController as AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Pages\HomeController as HomePageController;
use App\Http\Controllers\Admin\Pages\BillingController as BillingPageController;
use App\Http\Controllers\Admin\Pages\CodingController as CodingPageController;
use App\Http\Controllers\Admin\Pages\AboutController as AboutPageController;
use App\Http\Controllers\Admin\SettingsController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/billing', [HomeController::class, 'billing'])->name('billing');
Route::get('/coding', [HomeController::class, 'coding'])->name('coding');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactInfo'])->name('contact-form');
Route::get('/support', [HomeController::class, 'support'])->name('support');

Route::get('/a_d_login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/a_d_login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::group(['prefix' => 'a_d_min', 'middleware' => ['auth']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::group(['prefix' => 'settings', 'as' => 'settings'], function () {
        Route::get('/', [SettingsController::class, 'index'])->name('');
        Route::post('/', [SettingsController::class, 'store'])->name('.store');
        Route::post('/favicon', [SettingsController::class, 'favicon'])->name('.favicon');
        Route::post('/logo', [SettingsController::class, 'logo'])->name('.logo');
        Route::post('/footer', [SettingsController::class, 'footer'])->name('.footer');
    });

    Route::group(['prefix' => 'pages', 'as' => 'pages'], function () {
        Route::get('/home', [HomePageController::class, 'index'])->name('.home');

        Route::post('/top', [HomePageController::class, 'top'])->name('.home.top');
        Route::post('/middle', [HomePageController::class, 'middle'])->name('.home.middle');
        Route::post('/middle-1', [HomePageController::class, 'middleS1'])->name('.home.middle-1');
        Route::post('/middle-2', [HomePageController::class, 'middleS2'])->name('.home.middle-2');
        Route::post('/middle-3', [HomePageController::class, 'middleS3'])->name('.home.middle-3');
        Route::post('/bottom', [HomePageController::class, 'bottom'])->name('.home.bottom');

        Route::get('/billing', [BillingPageController::class, 'index'])->name('.billing');

        Route::post('/billing-top', [BillingPageController::class, 'top'])->name('.billing.top');
        Route::post('/billing-middle', [BillingPageController::class, 'middle'])->name('.billing.middle');
        Route::post('/billing-middle-1', [BillingPageController::class, 'middleS1'])->name('.billing.middle-1');
        Route::post('/billing-middle-2', [BillingPageController::class, 'middleS2'])->name('.billing.middle-2');
        Route::post('/billing-middle-3', [BillingPageController::class, 'middleS3'])->name('.billing.middle-3');
        Route::post('/billing-bottom', [BillingPageController::class, 'bottom'])->name('.billing.bottom');

        Route::get('/coding', [CodingPageController::class, 'index'])->name('.coding');

        Route::post('/coding-top', [CodingPageController::class, 'top'])->name('.coding.top');
        Route::post('/coding-middle', [CodingPageController::class, 'middle'])->name('.coding.middle');
        Route::post('/coding-middle-1', [CodingPageController::class, 'middleS1'])->name('.coding.middle-1');
        Route::post('/coding-middle-2', [CodingPageController::class, 'middleS2'])->name('.coding.middle-2');
        Route::post('/coding-middle-3', [CodingPageController::class, 'middleS3'])->name('.coding.middle-3');
        Route::post('/coding-bottom', [CodingPageController::class, 'bottom'])->name('.coding.bottom');

        Route::get('/about', [AboutPageController::class, 'about'])->name('.about');

        Route::post('/vision', [AboutPageController::class, 'vision'])->name('.about.vision');
        Route::post('/mission', [AboutPageController::class, 'mission'])->name('.about.mission');
        Route::post('/team', [AboutPageController::class, 'team'])->name('.about.team');
    });
});
