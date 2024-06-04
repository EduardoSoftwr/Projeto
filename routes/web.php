<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('produtos'); // Corrigido para redirecionar corretamente
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

    Route::middleware(App\Http\Middleware\AdminMiddleware::class)->group(function () {
        Route::get('/adicionar', [ProdutoController::class, 'create'])->name('adicionar');
        Route::get('/editar', [ProdutoController::class, 'editAll'])->name('editar.produto');
        Route::get('/editar/{produto}', [ProdutoController::class, 'edit'])->name('editar.produto.individual');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');
    Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos');
    Route::put('/produtos/{produto}', [ProdutoController::class, 'update'])->name('produtos.atualizar');
    Route::delete('/produtos/{produto}', [ProdutoController::class, 'destroy'])->name('produtos.excluir');
});
