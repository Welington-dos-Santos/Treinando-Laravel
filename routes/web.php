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

Route::delete('/users/{id}', [UserController::class, 'destroy'])-> name('usuario.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])-> name('usuario.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])-> name('usuario.edit');
Route::get('/users/usuario', [UserController::class, 'index'])->name('usuario.index');
Route::get('/users/create', [UserController::class, 'create'])->name('usuario.create');
Route::post('/users',[UserController::class, 'store'])->name('usuario.store');
Route::get('/users/usuario/{id}', [UserController::class, 'show'])->name('usuario.show');

Route::get('welcome', [OrdemController::class, 'index'])->name('welcome.Ordem');
