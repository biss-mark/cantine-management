<?php

namespace App\Http\Controllers;

use App\Models\Semaine;
use App\Http\Requests\StoreSemaineRequest;
use App\Http\Requests\UpdateSemaineRequest;

class SemaineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $semaines = Semaine::all();
        return view('semaines.index', compact('semaines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('semaines.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSemaineRequest $request)
    {
        // dd($request->all());
        $semaine = Semaine::create($request->all());
        return redirect()->route('semaines.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Semaine $semaine)
    {
        return view('semaines.show', compact('semaine'));
    }
        
    /**
     * Show the form for editing the specified resource.
    */
    public function edit(Semaine $semaine)
    {
        // dd($semaine);
        return view('semaines.edit', compact('semaine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSemaineRequest $request, Semaine $semaine)
    {
        $semaine->update($request->all());
        return redirect()->route('semaines.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semaine $semaine)
    {
        //
    }
}
