<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;

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
Route::get('/',[TestController::class, 'register_view'])->name('register_view');

Route::get('get-department/{hospital_id}', [TestController::class, 'get_department'])->name('get_department');

Route::get('search_page',[TestController::class, 'search_page'])->name('search_page');

Route::get('search',[TestController::class, 'search'])->name('search');

Route::get('register',[TestController::class, 'register'])->name('register');
