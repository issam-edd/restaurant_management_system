<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = ['owner','admin'];
        if (!in_array(auth()->user()->role, $roles)){
            return redirect()->route('dashboard.home');
        }
        $ingredients = Ingredient::all();
        return view('dashboard.ingredients.list',compact('ingredients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = ['owner','admin'];
        if (!in_array(auth()->user()->role, $roles)){
            return redirect()->route('dashboard.home');
        }
        return view('dashboard.ingredients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'unity'=>'required',
            'quantity'=>'required|numeric',
            'quantity_min'=>'required|numeric',
        ]);
        Ingredient::create($request->all());
        session()->flash('success','Ingredient Added successfully');
        return redirect()->route('dashboard.ingredients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        return view('dashboard.ingredients.show',compact('ingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        return view('dashboard.ingredients.edit',compact('ingredient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        $request->validate([
            'name'=>'required',
            'unity'=>'required',
            'quantity'=>'required|numeric',
            'quantity_min'=>'required|numeric',
        ]);
        $ingredient->update($request->all());
        session()->flash('warning','Ingredient updated successfully');
        return redirect()->route('dashboard.ingredients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();

        session()->flash('danger', __('deleted_successfully'));

        return redirect()->route('dashboard.ingredients.index');
    }
}
