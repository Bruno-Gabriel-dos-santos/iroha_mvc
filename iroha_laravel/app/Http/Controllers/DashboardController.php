<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Mostrar o dashboard do usuário padrão.
     */
    public function index()
    {
        return view('dashboard');
    }
}