<?php

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
use App\Http\Controllers\EventController;   

Route::get('/', [EventController::class, 'index']);

Route::get('/cadastro', [EventController::class, 'cadastrar']);

Route::get('/recuperarSenha', [EventController::class, 'recuperarSenha']);

Route::get('/dashboard', [EventController::class, 'dashboard']);

Route::get('/redefinirSenha', [EventController::class, 'redefinirSenha']);

Route::post('/events', [EventController::class,'store']);

