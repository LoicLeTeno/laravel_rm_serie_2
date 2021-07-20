<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewController;
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

Route::get('/', [IndexController::class, 'nav'])->name('welcome');

Route::get('/home', [HomeController::class, 'nav'])->name('home');

Route::get('/config', [ConfigController::class, 'nav'])->name('config');

Route::get('/about', [AboutController::class, 'nav'])->name('about');

Route::get('/new', [NewController::class, 'index']);