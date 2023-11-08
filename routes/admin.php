<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::controller(UserController::class)->group(function () {
        Route::get('/users', 'index')->name('users.index');
        Route::get('user/{id}', 'show')->name('user.show');
    });


    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::group(['middleware' => 'guest:admin'], function () {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('get.admin.login');
    Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
});



