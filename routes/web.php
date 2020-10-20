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

Route::get('/', [TodosController::class, 'index']);

Route::post('/newtodo', [TodosController::class, 'newtodo']);

Route::get('/toggle', [TodosController::class, 'toggle']);

Route::get('/del', [TodosController::class, 'delTodo']);

Route::get('/todo', [TodosController::class, 'todo']);


