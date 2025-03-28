<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function adm()
    {
        return view('configADM'); 
    }

    public function repo()
    {
        return view('repo'); 
    }

    public function home()
    {
        return view('home'); 
    }

    public function sobre()
    {
        return view('sobre'); 
    }

    public function contato()
    {
        return view('contato');
    }

    public function buscador()
    {
        return view('browser'); 
    }

   
    public function api()
    {
        return view('api'); 
    }

    public function infra()
    {
        return view('infra'); 
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
