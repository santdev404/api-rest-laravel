<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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
    return view('welcome');
});


Route::get('/pruebas', [PruebasController::class, 'index']);
Route::get('/testOrm', [PruebasController::class, 'testOrm']);

//Rutas de api
Route::get('/usuario/pruebas', [UserController::class, 'pruebas']);
Route::get('/post/pruebas', [PostController::class, 'pruebas']);
Route::get('/category/pruebas', [CategoryController::class, 'pruebas']);

//Ruras User
Route::post('/api/register', [UserController::class, 'register']);
Route::post('/api/login', [UserController::class, 'login']);