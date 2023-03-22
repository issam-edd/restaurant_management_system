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
    <h2 class="content-header-title float-left mb-0">Create Table</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.tables.index') }}">Tables list</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create table</h4>
                </div>
                <div class="card-body">
                    @include('partials._errors')
                <form
                    class="form"
                    action="{{ route('dashboard.tables.store') }}"
                    method="POST"
                >
                    {{ csrf_field() }}
                    {{ method_field('post') }}
                    <div class="row">

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="places_number">Places Number</label>
                                <select class="form-control" id="places_number" name="places_number">
                                    <option value="">-- choose places number --</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="form-group">
                                <label for="state">State</label>
                                <select class="form-control" id="state" name="state">
                                    <option value="">-- choose state --</option>
                                    <option value="reserved">Reserved</option>
                                    <option value="empty">Empty</option>
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
