<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\TareaController;

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

Route::get('/tarea/store', [TareaController::class, 'store'])->name('tarea.store');
Route::get('/tarea', [TareaController::class, 'index'])->name('tarea.index');

