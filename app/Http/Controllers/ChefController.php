<?php

namespace App\Http\Controllers;

use App\Models\ClientOrder;
use App\Models\TableOrder;
use Illuminate\Http\Request;


class ChefController extends Controller
{
    public function index(){
        $roles = ['chef'];
        if (!in_array(auth()->user()->role, $roles)){
            return redirect()->route('dashboard.home');
        }
        $clientOrders = ClientOrder::with('clients')->where('done_state',0)->get();
        $tableOrders = TableOrder::with('tables')->where('done_state',0)->get();
        return view('dashboard.chefs.orders',compact('clientOrders','tableOrders'));
    }
    //
    public function store(Request $request,ClientOrder $clientOrder)
    {
        $clientOrder->done_state=1;
        $clientOrder->user_id=$request->user()->id;
        $clientOrder->save();
        return redirect()->route('dashboard.chefs.orders');

    }
    public function update(Request $request,TableOrder $tableOrder)
    {
        $tableOrder->done_state=1;
        $tableOrder->user_id=$request->user()->id;
        $tableOrder->save();
        return redirect()->route('dashboard.chefs.orders');
    }
}
