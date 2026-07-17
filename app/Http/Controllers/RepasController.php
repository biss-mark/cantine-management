<?php

namespace App\Http\Controllers;

use App\Models\Repas;
use App\Http\Requests\StoreRepasRequest;
use App\Http\Requests\UpdateRepasRequest;
use Illuminate\Http\Request;

class RepasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $repas = Repas::all();
        // dd($repas);
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
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'description' => ['required', 'string'],
            'ingredient' => ['required', 'string'],

        ], [
            'name.required' => 'Le nom du repas est requis.',
            'category.required' => 'La catégorie du repas est requise.',
            'image.required' => 'L\'image du repas est requise.',
            'description.required' => 'La description du repas est requise.',
            'ingredient.required' => 'Les ingrédients du repas sont requis.',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('imageRepas', 'public');
            
        }
        
        // dd($request->all());
        $repas = Repas::create([
            'name' => $request->name,
            'image' => $request->image, 
            'category' => $request->category,
            'description' => $request->description,
            'ingredient' => $request->ingredient,
        ]);

        return redirect()->route('repas.index');
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
