<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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
        $employees = Employee::whereNotIn('id',[auth()->user()->userable_id])->get();
        return view('dashboard.employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = ['owner'];
        if (!in_array(auth()->user()->role, $roles)){
            return redirect()->route('dashboard.home');
        }
        return view('dashboard.employees.create');
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
            'phone' => 'required|numeric',
        ]);

        // Create employee
        Employee::create($request->all());

        // Set the session
        session()->flash('success','added_successfully');

        return redirect()->route('dashboard.employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('dashboard.employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('dashboard.employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request_data = $request->except(['old_password']);
//        $request->validate([
//            'first_name'  => 'required',
//            'last_name'  => 'required',
//            'email' =>  'email',
//            'address' => 'required',
//            'phone' => 'required|numeric'
//        ]);



        // Update employee
        $employee->update($request_data);

        // Set the session
        session()->flash('warning', __('updated_successfully'));

        return redirect()->route('dashboard.employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        session()->flash('danger', __('deleted_successfully'));

        return redirect()->route('dashboard.employees.index');
    }
    public function getUser($employee_id)
    {
        // Passing phone id into find()

        return Employee::find($employee_id)->user;
    }
    public function getEmployee($user_id)
    {
        // Passing phone id into find()
        return User::find($user_id)->employee;
    }
}
