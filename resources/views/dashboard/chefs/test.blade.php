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
        @for($i=1;$i<3;$i++)
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between align-items-center">
                            <h4>
                                table-Orders
                            </h4>
                            <h4>Table {{$i}} </h4>
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
                                <tr>
                                    <td>Plat 1 </td>
                                    <td>BIGG TASTY</td>
                                    <td>
                                        <?php
                                        echo "<span style='color: blue'>";
                                        echo rand(1,3);
                                        echo"</snap>";
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Plat 2 </td>
                                    <td>BIGG MAC</td>
                                    <td>
                                        <?php
                                        echo "<span style='color: blue'>";
                                        echo rand(1,3);
                                        echo"</snap>";
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Plat 3 </td>
                                    <td>PIZZA</td>
                                    <td>
                                        <?php
                                        echo "<span style='color: blue'>";
                                        echo rand(1,3);
                                        echo"</snap>";
                                        ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-flat-success text-center mt-5" >
                                <i data-feather="check" class="mr-25"></i>
                                <span>Done</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>

    <!-- client-orders -->
    <div class="row">
        @for($i=1;$i<3;$i++)
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between align-items-center">
                            <h4>
                                Client-Orders
                            </h4>
                            <h4>Client ID </h4>
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
                                <tr>
                                    <td>Plat 1 </td>
                                    <td>BIGG TASTY</td>
                                    <td>
                                        <?php
                                        echo "<span style='color: blue'>";
                                        echo rand(1,3);
                                        echo"</snap>";
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Plat 2 </td>
                                    <td>BIGG MAC</td>
                                    <td>
                                        <?php
                                        echo "<span style='color: blue'>";
                                        echo rand(1,3);
                                        echo"</snap>";
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Plat 3 </td>
                                    <td>PIZZA</td>
                                    <td>
                                        <?php
                                        echo "<span style='color: blue'>";
                                        echo rand(1,3);
                                        echo"</snap>";
                                        ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-flat-success text-center mt-5" >
                                <i data-feather="check" class="mr-25"></i>
                                <span>Done</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
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





