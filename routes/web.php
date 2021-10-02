<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignController;
use App\Http\Controllers\MyAccount;

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

Route::group(['prefix' => '/sign', 'as' => 'sign'], function () {
    Route::view('/', 'sign');
    Route::post('/up', [SignController::class, 'up'])->name('.up');
    Route::post('/in', [SignController::class, 'in'])->name('.in');
});

Route::group(['as' => 'account.', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [MyAccount::class, 'dashboard'])->name('dashboard');
});

Route::view('/', 'index')->name('home');
