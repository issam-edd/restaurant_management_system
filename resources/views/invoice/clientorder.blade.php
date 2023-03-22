@extends('layouts.bill.app')
@section('content')
    <div class="mt-md-0 mt-2">
        <h4 class="font-weight-bold text-right mb-1">INVOICE #T{{$clientOrder->id}}</h4>
        <div class="invoice-date-wrapper">
            <span class="invoice-date-title">Order Date:</span>
            <span class="font-weight-bold">{{$clientOrder->created_at}}</span>
        </div>
    </div>
    </div>

    <hr class="my-2" />
    <div class="row pb-2">
        <div class="col-sm-6">
            <h6 class="mb-1">Invoice To:</h6>
            <p class="mb-25">Name: {{$user->userable->name}}</p>
            <p class="mb-25">{{$user->userable->address ? 'Adress: '. $user->userable->address : 'lqlqql'}}</p>
            <p class="mb-0">{{$user->userable->phone ? 'Phone: '. $user->userable->phone : ''}}</p>
        </div>
    </div>

    <div class="table-responsive mt-2">
        <table class="table m-0">
            <thead>
            <tr>
                <th class="py-1 pl-4">meal</th>
                <th class="py-1">price</th>
                <th class="py-1">quantity</th>
                <th class="py-1">Total</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $total=0;
                @endphp
                @foreach ($clientOrder->meals as $meal)
                    <tr>
                        <td class="py-1 pl-4">
                            <p class="font-weight-semibold mb-25">{{$meal->name}}</p>
                        </td>
                        <td class="py-1">
                            <strong>{{$meal->pivot->price}}</strong>
                        </td>
                        <td class="py-1">
                            <strong>{{$meal->pivot->quantity}}</strong>
                        </td>
                        <td class="py-1">
                            <strong>{{$meal->price*$meal->pivot->quantity}}</strong>
                        </td>
                        @php
                            $total+=$meal->price*$meal->pivot->quantity;
                        @endphp
                    </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>

    <div class="row invoice-sales-total-wrapper mt-3">
        <div class="col-md-6 order-md-1 order-2 mt-md-0 mt-3">
            <p class="card-text mb-0">
                <span class="font-weight-bold">Salesperson:</span> <span class="ml-75">Alfie Solomons</span>
            </p>
        </div>
        <div class="col-md-6 d-flex justify-content-end order-md-2 order-1">
            <div class="invoice-total-wrapper">
                <hr class="my-50" />
                <div class="invoice-total-item">
                    <p class="invoice-total-title">Total:</p>
                    <p class="invoice-total-amount">{{$total}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection()
