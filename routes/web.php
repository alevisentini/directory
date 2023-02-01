<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ProfileController;

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

/*DB::listen(function ($query) {
    var_dump($query->sql);
});*/

Route::controller(BusinessController::class)->group(function () {
    Route::get('/', 'index')->name('business');
    Route::get('/{id}', 'show')->name('business.show');
    Route::patch('/{id}', 'edit')->name('business.edit');
    Route::put('/{id}', 'update')->name('business.update');
    Route::delete('/{id}', 'destroy')->name('business.destroy');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
    Route::post('/contact', 'store')->name('contact.store');
});

Route::get('/profile/{name}', [ProfileController::class, 'index']) -> name('profile');

