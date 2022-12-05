<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AuthenticationController;
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

Route::controller(AuthenticationController::class)
    ->name('auth.')
    ->group(function () {
        Route::get('/', 'sign_in_page')->name('login');
        Route::post('/validate', 'validate_login')->name('validate');
        Route::get('/logout', 'logout')
            ->name('logout')
            ->middleware(['auth']);
    });

Route::middleware('auth')->group(function () {
    Route::controller(AdminDashboardController::class)
        ->prefix('admin')
        ->name('admin.')
        ->middleware('auth:web')
        ->group(function () {
            Route::get('/', 'index')->name('dashboard');
        });
});