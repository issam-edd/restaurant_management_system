<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Route;

class RestaurantController extends Controller
{
    public function index() {
        $categories = Category::with('meals')->get();

        if(Route::currentRouteName()==='restaurant.home'){
            return view('restaurant.home',compact('categories'));
        }
        else{
            return view('restaurant.menu',compact('categories'));
        }
    }
}
