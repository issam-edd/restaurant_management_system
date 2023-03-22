@extends("layouts.dashboard.app")


@section("breadcrumbs")
    <h2 class="content-header-title float-left mb-0">Meal Detail</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.tables.index') }}">table order</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section("content")

<div class="row" id="table-striped">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">table orders</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ingredient name</th>
                        <th>unity</th>
                        <th>price</th>
                        <th>quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $total=0;
                        @endphp
                        @foreach ($tableOrder->meals as $meal)
                        <tr>
                            <td>{{ $meal->name }}</td>
                            <td>{{ $meal->unity }}</td>
                            <td>{{ $meal->pivot->price }}</td>
                            <td>{{ $meal->pivot->quantity }}</td>
                            <input type="hidden" value="{{ $total+= $meal->pivot->price*$meal->pivot->quantity }}"></input>
                        </tr>
                        @endforeach
                        <tr>
                            <td class="text-center" colspan="3">total</td>
                            <td>{{$total}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('page-scripts')
 
@endsection