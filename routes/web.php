<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ReminderController;
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

//Authentication
Route::controller(AuthenticationController::class)
    ->name('auth.')
    ->group(function () {
        Route::get('/login', 'sign_in_page')->name('login');
        Route::post('/validate', 'validate_login')->name('validate');
        Route::get('/logout', 'logout')
            ->name('logout')
            ->middleware(['auth']);
    });

//Porfolio
Route::controller(PortfolioController::class)
    ->name('portfolio.')
    ->group(function () {
        Route::get('/', 'index')->name('view');
    });

//Admin dashboard
Route::middleware('auth')->group(function () {
    Route::controller(AdminDashboardController::class)
        ->prefix('admin')
        ->name('admin.')
        ->middleware('auth:web')
        ->group(function () {
            Route::get('/', 'index')->name('dashboard');
        });
});

//ReminderRoute::middleware('auth')->group(function () {
Route::controller(ReminderController::class)
    ->prefix('reminder')
    ->name('reminder.')
    ->middleware('auth:web')
    ->group(function () {
        Route::get('/', 'index')->name('reminder');
    });

//Emails
Route::get('/send-email', [EmailController::class, 'index']);