<?php

namespace App\Http\Controllers;

use App\Models\ClientBill;
use App\Models\ClientOrder;
use Illuminate\Http\Request;

class ClientBillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientbills = ClientBill::all();
        return view('dashboard.client-bills.index',compact('clientbills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientorders = ClientOrder::all();
        return view('dashboard.client-bills.create',compact('clientorders'));
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
            'type' => 'required',
            'total' => 'required|numeric|min:1',
            'client_orders_id' => 'required'
        ]);

        // Create Client_Bills
        ClientBill::create($request->all());

        // set the session
        session()->flash('success','added_successfully');

        return redirect()->route('dashboard.client-bills.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientBill  $clientBill
     * @return \Illuminate\Http\Response
     */
    public function show(ClientBill $clientBill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientBill  $clientBill
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientBill $clientBill)
    {
        $clientorders = ClientOrder::all();
        return view('dashboard.client-bills.edite',compact('clientBill','clientorders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientBill  $clientBill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientBill $clientBill)
    {
        $request->validate([
            'type' => 'required',
            'total' => 'required|numeric|min:1',
            'client_orders_id' => 'required'
        ]);

        // Create Client_Bills
        $clientBill->update($request->all());

        // set the session
        session()->flash('success','added_successfully');

        return redirect()->route('dashboard.client-bills.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientBill  $clientBill
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientBill $clientBill)
    {
        $clientBill->delete();

        session()->flash('danger', __('deleted_successfully'));

        return redirect()->route('dashboard.client-bills.index');
    }
}
