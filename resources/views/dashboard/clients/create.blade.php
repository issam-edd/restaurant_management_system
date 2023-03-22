@extends('layouts.dashboard.app')

@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Clients</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.clients.index') }}">Clients list</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Client</h4>
                </div>
                <div class="card-body">
                    @include('partials._errors')
                <form
                    class="form"
                    action="{{ route('dashboard.clients.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
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
                                    placeholder="John"
                                    name="first_name"
                                    id="first_name"
                                    value="{{ old("first_name") }}"
                                >
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Doe"
                                    name="last_name"
                                    id="last_name"
                                    value="{{ old("last_name") }}"
                                >
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Hay Targa N°101"
                                    name="address"
                                    id="address"
                                    value="{{ old("address") }}"
                                >
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="Example@gmail.com"
                                    name="email"
                                    id="email"
                                    value="{{ old("email") }}"
                                >
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group input-group-merge form-password-toggle mb-2">
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        id="password"
                                        placeholder="Your Password"
                                        aria-describedby="basic-default-password1" />
                                    <div class="input-group-append">
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="phone">phone</label>
                                <input
                                    type="tel"
                                    class="form-control"
                                    placeholder="ex: 06 00 01 11 11"
                                    name="phone"
                                    id="phone"
                                    value="{{ old("phone") }}"
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

    <script src=" {{ asset('app-assets/js/scripts/forms/pickers/form-pickers.js') }} "></script>

    <script>
        $(document).ready(function(){
            let row_number = {{ count(old('tables', [''])) }};
            $("#add_row").click(function(e){
                e.preventDefault();
                let new_row_number = row_number - 1;
                $('#table' + row_number).html($('#table' + new_row_number).html()).find('td:first-child');
                $('#tables_table').append('<tr id="table' + (row_number + 1) + '"></tr>');
                row_number++;
            });
            $("#delete_row").click(function(e){
                e.preventDefault();
                if(row_number > 1){
                    $("#table" + (row_number - 1)).html('');
                    row_number--;
                }
            });
        });
    </script>
@endsection
