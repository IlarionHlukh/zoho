<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\{
    DealController, AccountController, ZohoController
};

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

Route::redirect('/', 'deals')
    ->name('home');

Route::group(['prefix' => 'login', 'middleware' => ['guest']], function () {

    Route::get('', [LoginController::class, 'showLoginForm'])
        ->name('login.form');

    Route::post('', [LoginController::class, 'login'])
        ->name('login');
});

Route::group(['middleware' => ['auth']], function () {

    Route::get('logout', [LoginController::class, 'logout'])
        ->name('logout');

    Route::resource('deals', DealController::class)
        ->only(['index', 'create', 'store']);

    Route::resource('accounts', AccountController::class)
        ->only(['index', 'create', 'store']);

    Route::group(['prefix' => 'zoho'], function () {

        Route::get('', [ZohoController::class, 'store'])
            ->name('zoho.store');

        Route::get('auth', [ZohoController::class, 'auth'])
            ->name('zoho.auth');
    });
});
