@extends('layouts.dashboard.app')

@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/wizard/bs-stepper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
@endsection

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Chefs</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row">
        @if ($tableOrders->count() > 0)
            @foreach ($tableOrders as $tableOrder)
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <form
                        class="form"
                        action="{{ route('dashboard.chefs.update', $tableOrder)}}"
                        method="POST"
                    >
                    @csrf
                    @method('put')
                        <input type="hidden" class="form-control" >
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title d-flex justify-content-between align-items-center">
                                    <h4>
                                        table-Order
                                    </h4>
                                    <h4>Table {{$tableOrder->table_id}} </h4>
                                    </div>
                                <div class="table-responsive">
                                    <table class="table table-striped tab-content">
                                        <thead>
                                        <tr>
                                            <th>Plat</th>
                                            <th>Name</th>
                                            <th>Qte</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tableOrder->meals as $meal)
                                                <tr>
                                                    <td>{{$meal->name}}</td>
                                                    <td>{{ $meal->description }}</td>
                                                    <td>{{$meal->pivot->quantity}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-flat-success text-center mt-5" >
                                        <i data-feather="check" class="mr-25"></i>
                                        <span>Done</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            @endforeach
        @endif
        @if ($clientOrders->count() > 0)
            @foreach ($clientOrders as $clientOrder)
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <form
                            class="form"
                            action="{{ route('dashboard.chefs.store', $clientOrder)}}"
                            method="POST"
                        >
                        @csrf
                        @method('put')
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between align-items-center">
                                        <h4>
                                            Client-Order
                                        </h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped tab-content">
                                            <thead>
                                            <tr>
                                                <th>Plat</th>
                                                <th>Qte</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($clientOrder->meals as $meal)
                                                    <tr>
                                                    <td>{{$meal->name}}</td>
                                                    <td>{{$meal->pivot->quantity}}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-flat-success text-center mt-5" >
                                            <i data-feather="check" class="mr-25"></i>
                                            <span>Done</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            @endforeach
        @endif
@endsection


@section('page-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-user.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-wizard.min.css') }}">
@endsection

@section('page-vendor-scripts')
    <script src="{{ asset('app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
@endsection

@section('theme-script')
    <script src="{{ asset('app-assets/js/scripts/customizer.min.js') }}"></script>
@endsection

@section('page-scripts')
    <script>
        document.querySelector('#users-item').classList.add('active');
    </script>

@endsection





