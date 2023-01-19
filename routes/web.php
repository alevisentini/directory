<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;
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

Route::get('/', [CompanyController::class, 'index']) -> name('home');

Route::get('/entities', 'App\Http\Controllers\EntityController@index') -> name('entity');

Route::get('/contact', [ContactController::class, 'index']) -> name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/profile/{id}', [ProfileController::class, 'index']) -> name('profile');
