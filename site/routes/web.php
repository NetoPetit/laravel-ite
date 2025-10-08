<?php

use App\Http\Controllers\CarrosController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClientesController::class, 'index']);
Route::get('/clientes_cadastro', [ClientesController::class, 'clientesCadastro'])->name('cliente');
Route::get('/produtos', [ClientesController::class, 'produtos']);
Route::get('/template_admin', [ClientesController::class, 'templateAdmin']);
Route::post('/clientes_cadastro', [ClientesController::class, 'recebeDados'])->name('cliente.novo');
Route::get('/carros', [CarrosController::class, 'index'])->name('carros.index');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/carros/cadastrar', [CarrosController::class, 'cadastrar'])->name('carros.cadastrar');
Route::post('/carros', [CarrosController::class, 'salvarCarro'])->name('carros.novo');

