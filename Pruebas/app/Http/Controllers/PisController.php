<?php

namespace App\Http\Controllers;

use App\Models\Pis;
use App\Http\Requests\StorePisRequest;
use App\Http\Requests\UpdatePisRequest;

class PisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pisos = Pis::all();
        echo "hola index pisos";
        return view('pisos.index', compact ('pisos'));
    }

    /**
     * Show the form for creating a new resource
     */
    public function create()
    {
        return view('pisos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePisRequest $request)
    {
        //
    }

    /** 
     * Display the specified resource.
     */
    public function show(Pis $pis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pis $pis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePisRequest $request, Pis $pis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pis $pis)
    {
        //
    }
}