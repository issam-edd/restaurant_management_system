<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {

        if (Route::currentRouteName()==='dashboard.register'){
            if (User::where('userable_type','App\Models\Employee')->count()>=1){
                return redirect()->route('dashboard.login');
            }
            return view('dashboard.auth.register');
        } else {
            return view('restaurant.auth.register');
        }
    }

    public function store(Request $request)
    {

        /* Validate */
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        if (Route::currentRouteName()==='dashboard.register') {

            /* Validate */
            $this->validate($request, [
                'avatar' => 'image|mimes:jpeg,jpg,png'
            ]);

            /* Create Employe */
            $employee = Employee::create($request->only('name'));

            /* Upload picture */
            if ($request->hasFile('avatar')) {
                $path = $request->file('avatar')->store('employees');

                $employee->avatar = $path;

                $employee->save();
            }

            /* Add User */
            $employee->user()->save(User::make([
                'email' => $request->email,
                'password'  => Hash::make($request->password),
                'role'  => 'owner'
            ]));

            /* Sign In */
            auth()->attempt($request->only('email', 'password'));

            /* Redirect to home */
            return redirect()->route('dashboard.users.index');
        } else {

            $this->validate($request, [
                'address' => 'required',
                'phone' => 'required'
            ]);

            /* Create Client */
            $client = Client::create($request->only('name','address','phone'));

            /* Add User */
            $client->user()->save(User::make([
                'email' => $request->email,
                'password'  => Hash::make($request->password),
            ]));

            /* Sign In */
            auth()->attempt($request->only('email', 'password'));

            /* Redirect to home */
            return redirect()->route('home');
        }
    }
}
