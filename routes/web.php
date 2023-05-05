<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TareaController;

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

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'create']);

Route::get('/tarea/store', [TareaController::class, 'store'])->name('tarea.store');
Route::get('/tarea', [TareaController::class, 'index'])->name('tarea.index');

Route::get('/tarea/{id}', [TareaController::class, 'destroy'])->name('tarea.destroy');
Route::get('/tarea/{id}/update', [TareaController::class, 'update'])->name('tarea.update');
Route::get('/tarea/{id}/edit', [TareaController::class, 'edit'])->name('tarea.edit');
