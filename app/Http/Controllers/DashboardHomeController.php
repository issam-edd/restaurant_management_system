<?php

namespace App\Http\Controllers;

class DashboardHomeController extends Controller
{
    public function index(){
        $roles = ['owner','admin','delivery','waiter','chef'];
        if (!in_array(auth()->user()->role, $roles)){
            return redirect()->route('dashboard.home');
        }
        return view('dashboard.home');
    }
}
