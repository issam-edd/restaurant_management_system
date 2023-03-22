<?php

namespace App\Http\Controllers;

use App\Models\SupplierBill;
use App\Models\TableBill;
use App\Models\User;
use Illuminate\Http\Request;

class TableBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablebills = TableBill::all();
        return view('dashboard.table-bills.index',compact('tablebills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supplierbills = SupplierBill::all();
        $users = User::all();

        return view('dashboard.table-bills.create',compact('supplierbills','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*        $request->validate([
//            'name'  => 'required',
//            'description' => 'required',
//            'price'  => 'required|numeric|min:1',
//            'photo'=>'required'
]);*/


        // Create table-bills
        TableBill::create($request->all());

        // Set the session
        session()->flash('success','added_successfully');

        return redirect()->route('dashboard.table-bills.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TableBill  $tableBill
     * @return \Illuminate\Http\Response
     */
    public function show(TableBill $tableBill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TableBill  $tableBill
     * @return \Illuminate\Http\Response
     */
    public function edit(TableBill $tableBill)
    {
        $tablebills = TableBill::all();
        $users = User::all();
        return view('dashboard.table-bills.create',compact('tableBill','tablebills','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TableBill  $tableBill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TableBill $tableBill)
    {
        $request->validate([
//            'name'  => 'required',
//            'description' => 'required',
//            'price'  => 'required|numeric|min:1',
//            'photo'=>'required'
        ]);

        // Update supplier-order
        $tableBill->update($request->all());

        // Set the session
        session()->flash('warning', __('updated_successfully'));

        return redirect()->route('dashboard.table-bills.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TableBill  $tableBill
     * @return \Illuminate\Http\Response
     */
    public function destroy(TableBill $tableBill)
    {
        $tableBill->delete();

        session()->flash('danger', __('deleted_successfully'));

        return redirect()->route('dashboard.table-orders.index');
    }
}
