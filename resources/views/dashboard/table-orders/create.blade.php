@extends('layouts.dashboard.app')

@section('breadcrumbs')

    <h2 class="content-header-title float-left mb-0">Orders</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Tables list</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row ">
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4> Categories</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="collapse-default">
                        <div class="card">
                            <div id="headingCollapse1" class="card-header collapsed" data-toggle="collapse" role="button" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                <span class="lead collapse-title">Pizza</span>
                            </div>
                            <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse" style="">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>meal</th>
                                                <th>add</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img class="round mr-1" src="{{asset('restaurant-assets/images/menu-item/piz1.png')}}" alt="avatar" height="30" width="30">
                                                    Margherita </td>
                                                <td><button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                                        <i data-feather='plus'></i>
                                                    </button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="round mr-1" src="{{asset('restaurant-assets/images/menu-item/piz1.png')}}" alt="avatar" height="30" width="30">
                                                    Margherita </td>
                                                <td><button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                                        <i data-feather='plus'></i>
                                                    </button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="round mr-1" src="{{asset('restaurant-assets/images/menu-item/piz1.png')}}" alt="avatar" height="30" width="30">
                                                    Margherita </td>
                                                <td><button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                                        <i data-feather='plus'></i>
                                                    </button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="round mr-1" src="{{asset('restaurant-assets/images/menu-item/piz1.png')}}" alt="avatar" height="30" width="30">
                                                    Margherita </td>
                                                <td><button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                                        <i data-feather='plus'></i>
                                                    </button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="headingCollapse2" class="card-header collapse-header collapsed" data-toggle="collapse" role="button" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <span class="lead collapse-title"> Burger</span>
                                </div>
                                <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse2" class="collapse" aria-expanded="false" style="">
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>meal</th>
                                                <th>add</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img class="round mr-1" src="{{asset('restaurant-assets/images/menu-item/mi-1.png')}}" alt="avatar" height="30" width="30">
                                                    Garlic Burger </td>
                                                <td><button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                                        <i data-feather='plus'></i>
                                                    </button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="round mr-1" src="{{asset('restaurant-assets/images/menu-item/mi-1.png')}}" alt="avatar" height="30" width="30">
                                                    Garlic Burger </td>
                                                <td><button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                                        <i data-feather='plus'></i>
                                                    </button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="round mr-1" src="{{asset('restaurant-assets/images/menu-item/mi-1.png')}}" alt="avatar" height="30" width="30">
                                                    Garlic Burger </td>
                                                <td><button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                                        <i data-feather='plus'></i>
                                                    </button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="round mr-1" src="{{asset('restaurant-assets/images/menu-item/mi-1.png')}}" alt="avatar" height="30" width="30">
                                                    Garlic Burger </td>
                                                <td><button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                                        <i data-feather='plus'></i>
                                                    </button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="headingCollapse3" class="card-header collapse-header" data-toggle="collapse" role="button" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <span class="lead collapse-title">Drinks</span>
                                </div>
                                <div id="collapse3" role="tabpanel" aria-labelledby="headingCollapse3" class="collapse" aria-expanded="false">
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>meal</th>
                                                <th>add</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <img class="round mr-1" src="{{asset('restaurant-assets/images/img/dr5.jpg')}}" alt="avatar" height="30" width="30">
                                                    Beet Juice </td>
                                                <td><button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                                        <i data-feather='plus'></i>
                                                    </button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="round mr-1" src="{{asset('restaurant-assets/images/img/dr5.jpg')}}" alt="avatar" height="30" width="30">
                                                    Beet Juice </td>
                                                <td><button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                                        <i data-feather='plus'></i>
                                                    </button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="round mr-1" src="{{asset('restaurant-assets/images/img/dr5.jpg')}}" alt="avatar" height="30" width="30">
                                                    Beet Juice </td>
                                                <td><button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                                        <i data-feather='plus'></i>
                                                    </button></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img class="round mr-1" src="{{asset('restaurant-assets/images/img/dr5.jpg')}}" alt="avatar" height="30" width="30">
                                                    Beet Juice </td>
                                                <td><button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                                        <i data-feather='plus'></i>
                                                    </button></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h4> Details</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">Receipt Name</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center"> Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">Receipt1</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-warning waves-effect">
                                        <i data-feather='minus'></i>
                                    </button>
                                    2
                                    <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-success waves-effect">
                                        <i data-feather='plus'></i>
                                    </button>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-icon btn-icon rounded-circle btn-flat-danger waves-effect">
                                        <i data-feather='trash'></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
