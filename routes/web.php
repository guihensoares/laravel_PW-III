<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::prefix('/financeiro')->group(function () {
    Route::get('/', [App\Http\Controllers\FinanceiroController::class, 'index'])->name('financeiro.index');
    Route::post('/salvar', [App\Http\Controllers\FinanceiroController::class, 'salvar'])->name('financeiro.salvar');
    Route::get('/historico', [App\Http\Controllers\FinanceiroController::class, 'historico'])->name('financeiro.historico');
    Route::delete('/remove/{id}', [App\Http\Controllers\FinanceiroController::class, 'remove'])->name('financeiro.remove');
});
