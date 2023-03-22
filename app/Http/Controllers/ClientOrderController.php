<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ClientOrder;
use App\Models\Employee;
use App\Models\Client;
use App\Models\Meal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ClientOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Route::currentRouteName()==='dashboard.client-orders.index'){
            $roles = ['owner','admin'];
            if (!in_array(auth()->user()->role, $roles)){
                return redirect()->route('dashboard.home');
            }
            $clientorders = ClientOrder::with('clients')->where('done_state',1)->where('delivery_state',1)->orderBy('updated_at','desc')->get();
            return view('dashboard.client-orders.index',compact('clientorders'));
        }
        $clientorders = ClientOrder::all();
        if(Route::currentRouteName()==='restaurant.home'){
            return view('restaurant.home',compact('clientorders'));
        }
        else{
            return view('restaurant.checkout',compact('clientorders'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients=Client::all();
        $meals = Meal::all();
        if(Route::currentRouteName()==='restaurant.shopping-card.create'){
            return view('restaurant.shopping-card',compact('clients','meals'));
        }
        else{
            $roles = ['owner','admin'];
            if (!in_array(auth()->user()->role, $roles)){
                return redirect()->route('dashboard.home');
            }
            return view('dashboard.client-orders.create',compact('clients','meals'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data=[
        //     'client_id'=>$client->id,
        // ];
        $clientorder = ClientOrder::create($request->all());
        $meals = $request->input('meals', []);
        $quantities = $request->input('quantities', []);
        $prices = $request->input('prices', []);
        for ($meal=0; $meal < count($meals); $meal++) {
            if ($meals[$meal] != '') {
                $clientorder->meals()->attach($meals[$meal], [
                    'quantity' => (int)$quantities[$meal],
                    'price' => (float)$prices[$meal]
                ]); }
        }
        $clientorder->user_id=$request->user()->id;
        $clientorder->save();
        session()->forget('cart');
        // Set the session
        session()->flash('success','added_successfully');

        return redirect()->route('restaurant.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientOrder  $clientOrder
     * @return \Illuminate\Http\Response
     */
    public function show(ClientOrder $clientOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientOrder  $clientOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientOrder $clientOrder)
    {
        $clients = Client::all();
        $users = User::all();
        $employees = Employee::all();

        return view('dashboard.users.edit',compact('clientOrder','clients','users','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientOrder  $clientOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientOrder $clientOrder)
    {
        $request->validate([
            'client_id'  => 'required',
            'user_id' => 'required',
            'employee_id'  => 'required',
        ]);

        // Update meal
        $clientOrder->update($request->all());

        // Set the session
        session()->flash('warning', __('updated_successfully'));

        return redirect()->route('dashboard.client-orders.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientOrder  $clientOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientOrder $clientOrder)
    {
        $clientOrder->delete();

        session()->flash('danger', __('deleted_successfully'));

        return redirect()->route('dashboard.client-orders.list');
    }
}
