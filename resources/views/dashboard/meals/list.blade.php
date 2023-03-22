@extends('layouts.dashboard.app')

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Meals</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.home') }}">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Meals List</h4>
                <a
                    class="btn btn-success waves-effect waves-float waves-light"
                    href="{{ route('dashboard.meals.create') }}"
                >
                    <i data-feather="plus-circle"></i>
                    <span>Add</span>
                </a>
            </div>
            <div class="card-body">
                @include('partials._session')
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        @if($meals->count() <= 0)
                            <tbody>
                            <tr>
                                <td>Empty</td>
                            </tr>
                            </tbody>
                        @else
                            <thead>
                            <tr>
                                <th></th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($meals as $index=>$meal)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>
                                        <img width="40" height="40" src="{{ $meal->photoUrl() }}">
                                    </td>
                                    <td>
                                        {{ $meal->name  }}
                                    </td>
                                    <td>
                                        {{ $meal->price." ".'HD'  }}
                                    </td>
                                    <td class="text-center">
                                        <a
                                            class="btn btn-icon rounded-circle btn-flat-warning"
                                            href="{{ route('dashboard.meals.edit', $meal->id) }}"
                                        >
                                            <i data-feather="edit-2"></i>
                                        </a>
                                        <form
                                            action="{{ route('dashboard.meals.destroy', $meal->id )}}"
                                            method="POST"
                                            class="d-inline-block"
                                        >
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button
                                                class="btn btn-icon rounded-circle btn-flat-danger delete"
                                                type="submit"
                                            >
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        @endif
                    </table>
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
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
@endsection
@section('theme-script')
    <script src="{{ asset('app-assets/js/scripts/customizer.min.js') }}">
    </script>
@endsection
@section('page-scripts')

    <script>
        document.querySelector('#users-item').classList.add('active');
    </script>
    <script src="{{ asset('app-assets/js/scripts/pages/app-ecommerce-wishlist.js') }}"></script>
@endsection
