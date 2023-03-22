@extends('layouts.dashboard.app')

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Client Orders</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Client Orders List</h4>
            </div>
            <div class="card-body">
                @include('partials._session')
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        @if($clientorders->count() <= 0)
                            <tbody>
                            <tr>
                                <td>Empty</td>
                            </tr>
                            </tbody>
                        @else
                            <thead>
                            <tr>
                                <th>Client Order</th>
                                <th>Total</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clientorders as $client_order)
                                <tr>
                                    <td>
                                        C{{ $client_order->id}}
                                    </td>
                                    @php
                                        $total=0;
                                    @endphp
                                @foreach ($client_order->meals as $meal)
                                    @php
                                        $total+=$meal->pivot->price*$meal->pivot->quantity;
                                    @endphp
                                @endforeach
                                    <td>{{$total}}</td>
                                    <td class="text-center">
                                        <a
                                            class="btn btn-icon rounded-circle btn-flat-danger"
                                            href="{{ route('dashboard.invoice.clientorder', $client_order->id) }}"
                                        >
                                            <i data-feather="printer"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    <script>
        document.getElementById('menu_client').classList.add('active');

        $(document).ready(function(){
            $(".delete").click(function(e){
                if(!confirm('Are you sure?')){
                    e.preventDefault();
                    return false;
                }
                return true;
            });
        });
    </script>
@endsection
