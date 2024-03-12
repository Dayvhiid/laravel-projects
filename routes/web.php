<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\TodoController;
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

Route::get('/pizzas', [PizzaController::class, 'index']);
Route::post('/pizzas', [PizzaController::class, 'store']);
Route::get('/pizzas/create', [PizzaController::class, 'create']);
Route::get('/show/{id}', [PizzaController::class , 'show']);
Route::get('/showall' , [PizzaController::class, 'showall']);
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);


Route::get('/todo', [TodoController::class, 'index']);
Route::post('/todo', [TodoController::class, 'store']);
Route::delete('/todo/delete', [TodoController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
