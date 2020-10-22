<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;


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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [TodosController::class, 'index'])->name('home');
    Route::post('/newtodo', [TodosController::class, 'newtodo'])->name('newtodo');
    Route::get('/toggle', [TodosController::class, 'toggle'])->name('toggle');
    Route::get('/del', [TodosController::class, 'delTodo'])->name('delTodo');
    Route::get('/todo', [TodosController::class, 'todo'])->name('todo');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

