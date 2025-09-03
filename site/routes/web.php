<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClientesController::class, 'index']);
Route::get('/clientes_cadastro', [ClientesController::class, 'clientesCadastro'])->name('cliente');
Route::get('/produtos', [ClientesController::class, 'produtos']);
Route::get('/template_admin', [ClientesController::class, 'templateAdmin']);
Route::post('/clientes_cadastro', [ClientesController::class, 'recebeDados'])->name('cliente.novo');

