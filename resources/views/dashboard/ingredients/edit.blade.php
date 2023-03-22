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
    <h2 class="content-header-title float-left mb-0">Edit ingredient</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.ingredients.index') }}">ingredients</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    @include('partials._errors')

    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <form class="form" action="{{ route('dashboard.ingredients.update', $ingredient->id )}}" method="POST" >
                        {{ csrf_field() }}
                        {{ method_field('put') }}
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="name">name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="name"
                                        name="name"
                                        id="name"
                                        value="{{ $ingredient->name }}"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="unity">unity</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="unity"
                                        name="unity"
                                        id="unity"
                                        value="{{ $ingredient->unity }}"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="quantity">quantity</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="quantity"
                                        name="quantity"
                                        id="quantity"
                                        value="{{ $ingredient->quantity }}"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="quantity_min">quantity minimal</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="quantity_min"
                                        name="quantity_min"
                                        id="quantity_min"
                                        value="{{ $ingredient->quantity_min }}"
                                    >
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                <button type="submit" class="btn btn-warning mr-1">Edit</button>
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

