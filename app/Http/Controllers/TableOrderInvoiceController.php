<?php

namespace App\Http\Controllers;

use App\Models\TableOrder;
use App\Models\User;
use Illuminate\Http\Request;

class TableOrderInvoiceController extends Controller
{
    public function index(TableOrder $tableOrder){
        $roles = ['admin'];
        if (!in_array(auth()->user()->role, $roles)){
            return redirect()->route('dashboard.home');
        }
        $user=User::find($tableOrder->employee_id);
        return view('invoice.tableorder',compact('tableOrder','user'));
    }
}
