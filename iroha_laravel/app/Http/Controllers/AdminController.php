<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Mostrar o dashboard do administrador.
     */
    public function index()
    {
        return view('admin.dashboard');
    }
}