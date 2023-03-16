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


Route::get('/cliente/cadastrar', [ClienteController::class, 'create'])->middleware('auth');
Route::get('/cliente/listar', [ClienteController::class, 'listar'])->middleware('auth');
Route::get('/cliente/{id}', [ClienteController::class, 'edit'])->middleware('auth');
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy'])->middleware('auth');
Route::put('/cliente/atualizar/{id}', [ClienteController::class, 'update'])->middleware('auth');
Route::post('/cliente', [ClienteController::class, 'store']);

Route::get('/os/cadastrar', [OsController::class, 'create'])->middleware('auth');
Route::get('/os/listar', [OsController::class, 'listar'])->middleware('auth');
Route::get('/os/{id}', [OsController::class, 'edit'])->middleware('auth');
Route::put('/os/atualizar/{id}', [OsController::class, 'update'])->middleware('auth');
Route::post('/os', [OsController::class, 'store'])->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
