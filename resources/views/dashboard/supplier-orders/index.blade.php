
 @extends('layouts.dashboard.app')

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Supplier Orders</h2>
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
                <h4 class="card-title">Supplier Orders List</h4>
                <a
                    class="btn btn-success waves-effect waves-float waves-light"
                    href="{{ route('dashboard.supplier-orders.create') }}"
                >
                    <i data-feather="plus-circle"></i>
                    <span>Add</span>
                </a>
            </div>
            <div class="card-body">
                @include('partials._session')
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        
                            <thead>
                            <tr>
                                <th>ingredient name</th>
                                <th>price</th>
                                <th>quantity</th>
                                {{-- <th class="text-center">Actions</th> --}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($supplierorders as $supplierorder)
                            @foreach($supplierorder->ingredients as $ingredient)
                                <tr>
                                    <td>{{$ingredient->name}}</td>
                                    <td>{{ $ingredient->pivot->price }}</td>
                                    <td>{{$ingredient->pivot->quantity}}</td>
                                </tr>
                            @endforeach
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    
@endsection


