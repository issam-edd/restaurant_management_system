<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = ['owner'];
        if (!in_array(auth()->user()->role, $roles)){
            return redirect()->route('dashboard.home');
        }
        $users = User::where('userable_type','App\Models\Employee')->whereNotIn('id',[auth()->user()->id])->get();
        return view('dashboard.users.list',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        return view('dashboard.users.create', compact('employees'));
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
            'email'  => 'required',
            'password' => 'required',
            'role'  => 'required',
            'employee_id'=>'required'
        ]);

        // Create meal
        $user=new User([
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>Hash::make($request->password),
            'userable_type'=>'App\Models\Employee',
            'userable_id'=>$request->employee_id,
        ]);
        $user->save();
        // Set the session
        session()->flash('success','added_successfully');

        return redirect()->route('dashboard.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
       return view('dashboard.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $employees = Employee::all();
        return view('dashboard.users.edit',compact('user','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'email'  => 'required',
            'password' => 'required',
            'role'  => 'required',
            'employee_id'=>'required'
        ]);

        // Update meal
        $user->update($request->all());

        // Set the session
        session()->flash('warning', __('updated_successfully'));

        return redirect()->route('dashboard.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('danger', __('deleted_successfully'));

        return redirect()->route('dashboard.users.index');
    }
}
