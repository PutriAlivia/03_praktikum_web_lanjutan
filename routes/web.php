<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
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
// Route::get('/hello', function () {
//     return view('hello', ['name' => 'Putri', 'nim' => '1941720108']);
//     });
//home
Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);

Route::prefix('program')->group(function () {
    Route::get('{slug}',[ProgramController::class, 'program']);
});

Route::prefix('product')->group(function () {
    Route::get('{slug}',[ProductController::class, 'product']);
});

Route::get('/news/{slug}', [NewsController::class, 'news']);

Route::get('/about',[AboutController::class, 'about']);

Route::resource('contact', ContactController::class);
