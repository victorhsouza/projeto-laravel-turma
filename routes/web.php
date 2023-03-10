<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OsController;
use App\Http\Controllers\SistemaController;

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
