<?php

namespace App\Http\Controllers;

use App\Models\ClientOrder;
use Illuminate\Http\Request;

class ClientOrderInvoiceController extends Controller
{
    public function index(ClientOrder $clientOrder){
        $roles = ['admin'];
        if (!in_array(auth()->user()->role, $roles)){
            return redirect()->route('dashboard.home');
        }
        return view('invoice.clientorder',compact('clientOrder'));
    }
}
