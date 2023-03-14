<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OsController;
use App\Http\Controllers\SistemaController;
use App\Http\Controllers\ClienteController;

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

Route::get('/', [SistemaController::class, 'welcome']);
Route::get('/sobre', [SistemaController::class, 'sobre']);
Route::get('/servicos', [SistemaController::class, 'servicos']);


Route::get('/cliente/cadastrar', [ClienteController::class, 'create']);
Route::get('/cliente/listar', [ClienteController::class, 'listar']);
Route::get('/cliente/{id}', [ClienteController::class, 'edit']);
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy']);
Route::put('/cliente/atualizar/{id}', [ClienteController::class, 'update']);
Route::post('/cliente', [ClienteController::class, 'store']);

Route::get('/os/cadastrar', [OsController::class, 'create']);
Route::get('/os/listar', [OsController::class, 'listar']);
Route::get('/os/{id}', [OsController::class, 'edit']);
Route::put('/os/atualizar/{id}', [OsController::class, 'update']);
Route::post('/os', [OsController::class, 'store']);
