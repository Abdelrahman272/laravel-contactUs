<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\ContactUsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

    // dashboard ========================================================
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('dashboard');

    // contact us ======================================================

    Route::controller(ContactUsController::class)->group(function () {
        Route::post('/contact-us', 'store')->name('contact-us.store');
    });


    // profile ==========================================================
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
