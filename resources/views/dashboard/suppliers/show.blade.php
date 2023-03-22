@extends('layouts.dashboard.app')
@section('page-styles')

    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/pickers/form-flat-pickr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-user.css') }}">
@endsection
@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Show supplier</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.suppliers.index') }}">Suppliers</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="first_name"
                                    name="first_name"
                                    id="first_name"
                                    disabled="disabled"
                                    value="{{ $supplier->first_name }}"
                                >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="last_name"
                                    name="last_name"
                                    disabled="disabled"
                                    id="last_name"
                                    value="{{ $supplier->last_name }}"
                                >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="email"
                                    name="email"
                                    id="email"
                                    disabled="disabled"
                                    value="{{ $supplier->email }}"
                                >
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="phone_number">Number phone</label>
                                <input
                                    type="tel"
                                    class="form-control"
                                    placeholder="phone_number"
                                    name="phone_number"
                                    id="phone_number"
                                    disabled="disabled"
                                    value="{{ $supplier->phone_number }}"
                                >
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
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

