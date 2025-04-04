<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;



Route::get('/apl', [SiteController::class, 'api'])->name('apl');
Route::get('/infra', [SiteController::class, 'infra'])->name('infra');
Route::get('/amd', [SiteController::class, 'adm'])->name('adm');
Route::get('/repo', [SiteController::class, 'repo'])->name('repo');



Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/sobre', [SiteController::class, 'sobre'])->name('sobre');
Route::get('/contato', [SiteController::class, 'contato'])->name('contato');
Route::get('/buscador-rede-iroha', [SiteController::class, 'buscador'])->name('buscador');





// Rotas de autenticação
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Rotas autenticadas
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Dashboard de usuário comum
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Rotas de admin
    Route::middleware('is_admin')->prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        // Outras rotas administrativas aqui
    });

    Route::get('/areaDeTransação', [UserController::class, 'transacoes'])->name('area.transacoes');

});

?>