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
Route::get('/carros/cadastrar', [CarrosController::class, 'cadastrarCarro'])->name('carros.cadastrar');
Route::get('/carros/{id}', [CarrosController::class, 'buscarCarro'])->name('carro.buscar');
Route::post('/carros', [CarrosController::class, 'salvarCarro'])->name('carros.novo');
Route::post('/carros/alterar', [CarrosController::class, 'alterarCarro'])->name('carro.alterar');
Route::get('/carros/apagar/{id}', [CarrosController::class, 'apagarCarro'])->name('carro.apagar');
Route::post('/clientes/alterar', [ClientesController::class, 'alterarCliente'])->name('clientes.alterar');
Route::get('/clientes/{id}', [ClientesController::class, 'buscarCliente'])->name('cliente.buscar');

