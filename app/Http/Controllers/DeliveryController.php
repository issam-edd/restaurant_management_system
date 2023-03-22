<?php

namespace App\Http\Controllers;

use App\Models\ClientOrder;
use Illuminate\Http\Request;


class DeliveryController extends Controller
{
    public function index(){
        $roles = ['delivery'];
        if (!in_array(auth()->user()->role, $roles)){
            return redirect()->route('dashboard.home');
        }
        $clientOrders = ClientOrder::with('clients')->where('done_state',1)->where('delivery_state',0)->get();
        return view('dashboard.delivery-men.delivery-orders',compact('clientOrders'));
    }
    //
    public function store(Request $request,ClientOrder $clientOrder)
    {
        $clientOrder->delivery_state=1;
        $clientOrder->employee_id=$request->user()->id;
        $clientOrder->save();
        return redirect()->route('dashboard.delivery');
    }
}
