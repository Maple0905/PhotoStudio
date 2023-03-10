<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about_us');
Route::get('/what-we-do', [HomeController::class, 'what_we_do'])->name('what_we_do');
Route::get('/prices', [HomeController::class, 'prices'])->name('prices');
Route::get('/creatives', [HomeController::class, 'creatives'])->name('creatives');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/terms-and-conditions', [HomeController::class, 'terms_and_conditions'])->name('terms_and_conditions');
