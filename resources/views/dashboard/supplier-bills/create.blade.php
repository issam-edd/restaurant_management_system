@extends('layouts.dashboard.app')

@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Supplier Bills</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.supplier-bills.index') }}">Supplier Bills list</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Supplier Bill</h4>
                </div>
                <div class="card-body">
                    @include('partials._errors')
                    <form
                        class="form"
                        action="{{ route('dashboard.supplier-bills.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="total">Total</label>
                                    <input
                                        type="number"
                                        id="total"
                                        class="form-control"
                                        name="total"
                                        min="0"
                                        value="{{ old('total') }}"
                                    >
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="supplier_order_id">Suppliers</label>
                                    <select
                                        id="supplier_order_id"
                                        class="form-control"
                                        name="supplier_order_id"
                                    >
                                        <option hidden value="">-- select supplier order--</option>
                                        @foreach($supplierorders as $supplierorder)
                                            <option
                                                value="{{ $supplierorder->id }}"
                                                @if( old('supplierorder') === $supplierorder->id )
                                                selected="selected"
                                                @endif
                                            >
                                                {{ $supplierorder->supplier_id }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="user">Users</label>
                                    <select
                                        id="user"
                                        class="form-control"
                                        name="user"
                                    >
                                        <option hidden value="">-- select user --</option>
                                        @foreach($users as $user)
                                            <option
                                                value="{{ $user->id }}"
                                                @if( old('user') === $user->id )
                                                selected="selected"
                                                @endif
                                            >
                                                {{ $user->first_name." ".$user->last_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                <button
                                    type="submit"
                                    class="btn btn-success mb-1 mb-sm-0 mr-0 mr-sm-1 waves-effect waves-float waves-light"
                                >
                                    Add
                                </button>
                                <button type="reset" class="btn btn-outline-success waves-effect">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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

