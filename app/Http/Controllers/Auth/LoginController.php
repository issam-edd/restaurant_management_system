<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        if (Route::currentRouteName()==='dashboard.login'){
            return view('dashboard.auth.login');
        } else {
            return view('restaurant.auth.login');
        }
    }

    public function store(Request $request)
    {
        /* Validate */
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        /* Sign In User */
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details');
        }

        /* Redirect to home */
        if (Route::currentRouteName()==='dashboard.login'){
            return redirect()->route('dashboard.home');
        } else {
            return redirect()->route('restaurant.home');
        }

    }
}
