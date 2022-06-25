<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\ChangePasswordController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cari', [PencarianController::class, 'cari'])->name('cari');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('profile');

    Route::get('/setting', [ChangePasswordController::class, 'index'])->name('setting');

    Route::post('/updatepassword', [ChangePasswordController::class, 'update'])->name('setting.update.password');

    Route::resource('permohonan', PermohonanController::class);

});
