<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;







Route::get('/api', [SiteController::class, 'api'])->name('api');
Route::get('/infra', [SiteController::class, 'infra'])->name('infra');
Route::get('/amd', [SiteController::class, 'adm'])->name('adm');




Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('sobre');
Route::get('/contato', [SiteController::class, 'contato'])->name('contato');
Route::get('/buscador-rede-iroha', [SiteController::class, 'buscador'])->name('buscador');
Route::get('/area-transacoes', [SiteController::class, 'areaTransacoes'])->name('area.transacoes');