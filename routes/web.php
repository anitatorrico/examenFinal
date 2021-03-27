<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productoController;

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
    return view('crear');
});

Route::get('lista', [productoController::class, 'lista'])->name('lista');
Route::post('lista', [productoController::class, 'lista'])->name('lista');

Route::get('crear', [productoController::class, 'create'])->name('crear');
Route::post('crear', [productoController::class, 'create'])->name('crear');
