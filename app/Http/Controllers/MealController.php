<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(/*Request $request*/)
    {
        $roles = ['owner','admin'];
        if (!in_array(auth()->user()->role, $roles)){
            return redirect()->route('dashboard.home');
        }
        $meals = Meal::all();
        return view('dashboard.meals.list',compact('meals'));

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
        $categories = Category::all();
        $ingredients = Ingredient::all();
        return view('dashboard.meals.create',compact('categories','ingredients'));
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
            'name'  => 'required',
            'description' => 'required',
            'price'  => 'required|numeric|min:1',
            'photo'=>'image|mimes:jpeg,jpg,png,jfif',
            'category_id'=>'required'
        ]);

        $meal = Meal::create($request->except('photo'));
        // image
        if($request->hasFile('photo')){
            $path = $request->file('photo')->store('meals');
            $meal->photo = $path;
            $meal->save();
        }

        // Create meal
        $ingredients = $request->input('ingredients', []);
        $quantities = $request->input('quantities', []);
        for ($ingredient=0; $ingredient < count($ingredients); $ingredient++) {
            $meal->ingredients()->attach($ingredients[$ingredient], ['quantity' => $quantities[$ingredient]]);
        }

        // Set the session
        session()->flash('success','added_successfully');
        return redirect()->route('dashboard.meals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function show(Meal $meal)
    {
        return view('restaurant.single-food',compact('meal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function edit(Meal $meal)
    {
        $categories = Category::all();
        $ingredients = Ingredient::all();
        return view('dashboard.meals.edit', compact('meal','categories','ingredients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meal $meal)
    {
        $request->validate([
            'name'  => 'required',
            'description' => 'required',
            'price'  => 'required|numeric|min:1',
            'category_id'=>'required'
        ]);

        // Update meal
        $meal->update($request->except('photo'));
        if($request->hasFile('photo')){
            $path = $request->file('photo')->store('meals');
            $meal->photo = $path;
            $meal->save();
        }

        $meal->ingredients()->detach();
        $ingredients = $request->input('ingredients', []);
        $quantities = $request->input('quantities', []);
        for ($ingredient=0; $ingredient < count($ingredients); $ingredient++) {
            if ($ingredients[$ingredient] != '') {
                $meal->ingredients()->attach($ingredients[$ingredient], ['quantity' => $quantities[$ingredient]]);
            }
        }

        // Set the session
        session()->flash('warning', __('updated_successfully'));

        return redirect()->route('dashboard.meals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meal $meal)
    {
        // Delete meal
        $meal->delete();

        session()->flash('danger', __('deleted_successfully'));

        return redirect()->route('dashboard.meals.index');
    }
    //test
    public function cart()
    {
        return view('restaurant.shopping-card');
    }
    public function addToCart($id)
    {
        $meal = Meal::find($id);

        if(!$meal) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first meal
        if(!$cart) {

            $cart = [
                $id => [
                    "name" => $meal->name,
                    "quantity" => 1,
                    "price" => $meal->price,
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'meal added to cart successfully!');
        }

        // if cart not empty then check if this meal exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'meal added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $meal->name,
            "quantity" => 1,
            "price" => $meal->price,
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'meal added to cart successfully!');
    }
    //remove
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
