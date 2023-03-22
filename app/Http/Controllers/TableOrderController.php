<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employee;
use App\Models\Meal;
use App\Models\Table;
use App\Models\TableOrder;
use App\Models\User;
use Illuminate\Http\Request;

class TableOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = ['waiter','admin'];
        if (!in_array(auth()->user()->role, $roles)){
            return redirect()->route('dashboard.home');
        }
        $tableorders = TableOrder::with('tables')->where('done_state',1)->orderBy('updated_at','desc')->get();
        return view('dashboard.table-orders.index',compact('tableorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Table $table)
    {
        $categories =Category::with('meals')->get();

        return view('dashboard.tables.orders.create',compact('categories','table'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Table $table)
    {

        $data=[
            'table_id'=>$table->id,
            // 'employee_id'=>$request->user()->id,
        ];
        $tableOrder = TableOrder::create($data);
        $meals = $request->input('meals', []);
        $quantities = $request->input('quantities', []);
        $prices = $request->input('prices', []);
        for ($meal=0; $meal < count($meals); $meal++) {
            if ($meals[$meal] != '') {
                $tableOrder->meals()->attach($meals[$meal], [
                    'quantity' => (int)$quantities[$meal],
                    'price' => (float)$prices[$meal]
                ]);
            }
        }
        $tableOrder->waiter_state=1;
        $tableOrder->employee_id=$request->user()->id;
        $tableOrder->save();
        // Set the session
        session()->flash('success','added_successfully');

        return redirect()->route('dashboard.tables.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TableOrder  $tableOrder
     * @return \Illuminate\Http\Response
     */
    public function show(TableOrder $tableOrder)
    {
        return view('dashboard.table-orders.show',compact('tableOrder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TableOrder  $tableOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(TableOrder $tableOrder)
    {
        $users = User::all();
        $tables = Table::all();
        $employees = Employee::all();

        return view('dashboard.table-orders.create',compact('tableOrder','users','tables','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TableOrder  $tableOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TableOrder $tableOrder)
    {
        $request->validate([
//            'name'  => 'required',
//            'description' => 'required',
//            'price'  => 'required|numeric|min:1',
//            'photo'=>'required'
        ]);

        // Update supplier-order
        $tableOrder->update($request->all());

        // Set the session
        session()->flash('warning', __('updated_successfully'));

        return redirect()->route('dashboard.table-orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TableOrder  $tableOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(TableOrder $tableOrder)
    {
        $tableOrder->delete();

        session()->flash('danger', __('deleted_successfully'));

        return redirect()->route('dashboard.table-orders.index');
    }
}
