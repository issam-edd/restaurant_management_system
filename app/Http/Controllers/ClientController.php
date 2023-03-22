<?php

namespace App\Http\Controllers;


use App\Models\Client;
use App\Models\Table;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

         return view('dashboard.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tables = Table::all();
        return view('dashboard.clients.create',compact('tables'));
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
            'name'  => 'required',
            'email' =>  'required|email',
            'address' =>  'required',
            'password' =>  'required|min:8',
        ]);

        // Create client
       $client = Client::create($request->all());
       $tables = $request->input('tables',[]);
       $hours = $request->input('hours',[]);
       $reservation_dates = $request->input('reservation_dates',[]);
       for($table=0; $table < count($tables); $table++){
           if($tables[$table] != ''){
               $client->tables()->attach($tables[$table],['hour' => $hours[$table]],['reservation_date' => $reservation_dates[$table]]);
           }
       }

        // Set the session
        session()->flash('success','added_successfully');

        return redirect()->route('restaurant.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response;
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('dashboard.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request_data = $request->except(['old_password']);
//        $request->validate([
//            'first_name'  => 'required',
//            'last_name'  => 'required',
//            'email' =>  'email',
//            'address' => 'required',
//            'phone' => 'required|numeric'
//        ]);



        // Update client
        $client->update($request_data);

        // Set the session
        session()->flash('warning', __('updated_successfully'));

        return redirect()->route('dashboard.clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        // Delete client
        $client->delete();

        session()->flash('danger', __('deleted_successfully'));

        return redirect()->route('dashboard.clients.index');
    }
}