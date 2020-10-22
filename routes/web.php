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

Route::get('/', [TodosController::class, 'index'])->middleware('auth');

Route::post('/newtodo', [TodosController::class, 'newtodo'])->middleware('auth');

Route::get('/toggle', [TodosController::class, 'toggle'])->middleware('auth');

Route::get('/del', [TodosController::class, 'delTodo'])->middleware('auth');

Route::get('/todo', [TodosController::class, 'todo'])->middleware('auth');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

