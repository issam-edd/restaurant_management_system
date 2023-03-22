<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class LogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store()
    {
        auth()->logout();

        if (Route::currentRouteName()==='dashboard.logout'){
            return redirect()->route('dashboard.login');
        } else {
            return redirect()->route('restaurant.login');
        }
    }
}
