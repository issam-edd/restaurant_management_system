@extends('layouts.dashboard.app')

@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Tables</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    @if(in_array(auth()->user()->role,['owner','admin']))
        <a
            href="{{route('dashboard.tables.create')}}"
            class="btn btn-success waves-effect">
            Add Table
        </a>
        <br><br>
    @endif
    <div class="row">
        @foreach ($tables as $table)
            {{-- @for($i=1;$i<count($tables);$i++) --}}
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    @if ($table->places_number>=6||$table->places_number==5)
                        <img class="card-img-top" src="{{asset("uploads/table_pictures/table2.jpg")}}" alt="Card image cap">
                    @elseif($table->places_number<=4||$table->places_number>=3)
                        <img class="card-img-top" src="{{asset("uploads/table_pictures/table3.jpg")}}" alt="Card image cap">
                    @elseif($table->places_number<=2)
                        <img class="card-img-top" src="{{asset("uploads/table_pictures/table4.jpg")}}" alt="Card image cap">
                    @endif

                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between align-items-center">
                            <h4>Table  {{$table->id}}</h4>
                            <h4>
                                {{$table->places_number}} <i data-feather='users'></i>
                            </h4>
                        </div>
                        @if(auth()->user()->role==='waiter')
                            @if($table->state=='empty')
                                <a
                                    href="{{route('dashboard.tables.orders.create',$table->id)}}"
                                    class="btn btn-success waves-effect">
                                    Add Order
                                </a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            {{-- @endfor --}}
        @endforeach
    </div>
@endsection

@section('page-styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-user.css') }}">
@endsection

@section('page-vendor-scripts')
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('page-scripts')
    <script>
        document.querySelector('#users-item').classList.add('active');
    </script>
@endsection
