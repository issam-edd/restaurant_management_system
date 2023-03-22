<?php

namespace App\Http\Controllers;

use App\Models\SupplierBill;
use App\Models\SupplierOrder;
use App\Models\User;
use Illuminate\Http\Request;

class SupplierBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplierbills = SupplierBill::all();
        return view('dashboard.supplier-bills.index',compact('supplierbills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $supplierorders = SupplierOrder::all();
        return view('dashboard.supplier-bills.create',compact('users','supplierorders'));
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


        // Create supplier_bills
        SupplierBill::create($request->all());

        // Set the session
        session()->flash('success','added_successfully');

        return redirect()->route('dashboard.supplier-bills.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupplierBill  $supplierBill
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierBill $supplierBill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SupplierBill  $supplierBill
     * @return \Illuminate\Http\Response
     */
    public function edit(SupplierBill $supplierBill)
    {
        $users = User::all();
        $supplierorders = SupplierOrder::all();
        return view('dashboard.supplier-bills.create',compact('supplierBill','users','supplierorders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SupplierBill  $supplierBill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupplierBill $supplierBill)
    {
        $request->validate([
//            'name'  => 'required',
//            'description' => 'required',
//            'price'  => 'required|numeric|min:1',
//            'photo'=>'required'
        ]);

        // Update supplier-order
        $supplierBill->update($request->all());

        // Set the session
        session()->flash('warning', __('updated_successfully'));

        return redirect()->route('dashboard.supplier-bills.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupplierBill  $supplierBill
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierBill $supplierBill)
    {
        $supplierBill->delete();

        session()->flash('danger', __('deleted_successfully'));

        return redirect()->route('dashboard.supplier-orders.index');
    }
}
