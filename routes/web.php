<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorretorController;

Route::get('/', [CorretorController::class, 'index'])->name('corretores.index');
Route::post('/corretores', [CorretorController::class, 'store'])->name('corretores.store');
Route::delete('/corretores/{id}', [CorretorController::class, 'destroy'])->name('corretores.destroy');
Route::put('/corretores/{id}', [CorretorController::class, 'update'])->name('corretores.update');
Route::get('/corretores/{id}/edit', [CorretorController::class, 'edit'])->name('corretores.edit');
