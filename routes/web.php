<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\catalogos\ClientesController;
use App\Http\Controllers\catalogos\ProgramasController;
use App\Http\Controllers\registro\AsignacionController;

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
    return view('panel');
});

//Route::get('/', [UserController::class, 'index']);
//Route::get('/', [UserController::class, 'index'])->middleware('auth');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::resource('clientes', ClientesController::class);
Route::resource('programas', ProgramasController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('asignacion', [AsignacionController::class, 'index']);
