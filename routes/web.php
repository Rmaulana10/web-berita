<?php

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login/auth', [App\Http\Controllers\LoginController::class, 'authenticate']);
Route::get('logout', [App\Http\Controllers\LoginController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\MenuController::class, 'dashboard']);
    Route::get('wilayah', [App\Http\Controllers\WilayahController::class, 'wilayah']);
    Route::post('wilayah/tam', [App\Http\Controllers\WilayahController::class, 'wilayahtambah']);
    Route::get('wilayah/hapus/{id}', [App\Http\Controllers\WilayahController::class, 'hapus']);
    Route::get('berita', [App\Http\Controllers\MenuController::class, 'berita']);
    Route::get('iklan', [App\Http\Controllers\MenuController::class, 'iklan']);
    Route::get('user', [App\Http\Controllers\MenuController::class, 'user']);
});
