@extends('layouts.dashboard.app')

@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Users</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.users.index') }}">Users list</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create User</h4>
                </div>
                <div class="card-body">
                    @include('partials._errors')
                    <form
                        class="form"
                        action="{{ route('dashboard.users.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                    <div class="row">

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="employee_id">Employees</label>
                                <select
                                    id="employee_id"
                                    class="form-control"
                                    name="employee_id"
                                >
                                    <option hidden value="">-- select employee --</option>
                                    @foreach($employees as $employee)
                                        <option
                                            value="{{ $employee->id }}"
                                            @if( 'employee_id' === $employee->id )
                                            selected="selected"
                                            @endif
                                        >
                                            {{ $employee->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="email">Login</label>
                                <input
                                    type="email"
                                    class="form-control"
                                    placeholder="email"
                                    name="email"
                                    id="email"
                                    value="{{ "email"}}"
                                >
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    placeholder="your password"
                                    name="password"
                                    id="password"
                                    value="{{ "password"}}"
                                >
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control text-capitalize" id="role" name="role">
                                    <option class="text-capitalize" value="admin">admin</option>
                                    <option class="text-capitalize" value="waiter">waiter</option>
                                    <option class="text-capitalize" value="chef">chef</option>
                                    <option class="text-capitalize" value="delivery">delivery</option>
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
