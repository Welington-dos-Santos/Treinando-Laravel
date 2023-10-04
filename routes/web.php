<?php

use App\Http\Controllers\OrdemController;
use App\Http\Controllers\UserController;
use App\Models\Ordem;
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

Route::get('users/usuario', [UserController::class], 'index')->name('usuario.index');

Route::get('welcome', [OrdemController::class, 'index'])->name('welcome.Ordem');
