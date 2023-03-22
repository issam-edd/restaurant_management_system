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
    <h2 class="content-header-title float-left mb-0">Suppliers</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.suppliers.index') }}">Suppliers list</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')

    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Supplier</h4>
                </div>
                <div class="card-body">
                    @include('partials._errors')
                    <form
                        class="form"
                        action="{{ route('dashboard.suppliers.store') }}"
                        method="POST"
                    >
                        {{ csrf_field() }}
                        {{ method_field('post') }}
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
                                        id="last_name"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="Email"
                                        name="email"
                                        id="email"
                                    >
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="phone_number">Phone number</label>
                                    <input
                                        type="tel"
                                        class="form-control"
                                        placeholder="Phone number"
                                        name="phone_number"
                                        id="phone_number"
                                    >
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
