<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/buscador', function () {
    return view('browser');
});

Route::get('/api', function () {
    return view('api');
});

Route::get('/infra', function () {
    return view('infra');
});