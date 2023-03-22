<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Supplier;
use App\Models\SupplierOrder;
use Illuminate\Http\Request;

class SupplierOrderController extends Controller
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
        $supplierorders = SupplierOrder::with('ingredients')->get();
        return view('dashboard.supplier-orders.index',compact('supplierorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Supplier $supplier)
    {
        $roles = ['owner'];
        if (!in_array(auth()->user()->role, $roles)){
            return redirect()->route('dashboard.home');
        }
        $suppliers = Supplier::all();
        $ingredients = Ingredient::all();
        return view('dashboard.supplier-orders.create',compact('suppliers','ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplierorders = SupplierOrder::create($request->all());;
        $ingredients = $request->input('ingredients', []);
        $prices = $request->input('prices', []);
        $quantities = $request->input('quantities', []);
        for ($ingredient=0; $ingredient < count($ingredients); $ingredient++) {
            if ($ingredients[$ingredient] != '') {
                $supplierorders->ingredients()->attach($ingredients[$ingredient],['quantity' => $quantities[$ingredient],'price' => $prices[$ingredient]]);
            }
        }
        // Create supplier_order


        // Set the session
        session()->flash('success','added_successfully');

        return redirect()->route('dashboard.supplier-orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SupplierOrder  $supplierOrder
     * @return \Illuminate\Http\Response
     */
    public function show(SupplierOrder $supplierOrder)
    {
        return view('dashboard.supplier-orders.show',compact('supplierOrder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SupplierOrder  $supplierOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(SupplierOrder $supplierOrder)
    {
        $suppliers = Supplier::all();

        return view('dashboard.supplier-orders.edit',compact('supplierOrder','suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SupplierOrder  $supplierOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SupplierOrder $supplierOrder)
    {
        $request->validate([
//            'name'  => 'required',
//            'description' => 'required',
//            'price'  => 'required|numeric|min:1',
//            'photo'=>'required'
        ]);

        // Update supplier-order
        $supplierOrder->update($request->all());

        // Set the session
        session()->flash('warning', __('updated_successfully'));

        return redirect()->route('dashboard.supplier-orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SupplierOrder  $supplierOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(SupplierOrder $supplierOrder)
    {
        $supplierOrder->delete();

        session()->flash('danger', __('deleted_successfully'));

        return redirect()->route('dashboard.supplier-orders.index');
    }
}
