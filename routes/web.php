<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GastoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\FormaPagamentoController;

Route::get('/', function() {
	return redirect()->route('gastos.index');
});
Route::resource('gastos', GastoController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('forma-pagamentos', FormaPagamentoController::class);
