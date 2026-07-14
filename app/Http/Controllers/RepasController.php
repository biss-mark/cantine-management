<?php

namespace App\Http\Controllers;

use App\Models\Repas;
use App\Http\Requests\StoreRepasRequest;
use App\Http\Requests\UpdateRepasRequest;

class RepasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $repas = Repas::all();
        return view('repas.index', compact('repas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('repas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRepasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Repas $repas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Repas $repas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRepasRequest $request, Repas $repas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Repas $repas)
    {
        //
    }
}
