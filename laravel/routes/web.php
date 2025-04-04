<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;







Route::get('/api', [SiteController::class, 'api'])->name('api');
Route::get('/infra', [SiteController::class, 'infra'])->name('infra');
Route::get('/amd', [SiteController::class, 'adm'])->name('adm');
Route::get('/repo', [SiteController::class, 'repo'])->name('repo');



Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('sobre');
Route::get('/contato', [SiteController::class, 'contato'])->name('contato');
Route::get('/buscador-rede-iroha', [SiteController::class, 'buscador'])->name('buscador');

Route::get('/area-transacoes', [UserController::class, 'transacoes'])->name('area.transacoes')->middleware('auth');




require __DIR__.'/auth.php';












