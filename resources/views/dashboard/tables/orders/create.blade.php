@extends('layouts.dashboard.app')

@section('breadcrumbs')

    <h2 class="content-header-title float-left mb-0"> table  {{$table->id}} Orders</h2>
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
                        @php $i=0 @endphp
                        @foreach ($categories as $category)
                        <div class="card">
                            <div id="headingCollapse{{$i}}" class="card-header collapsed" data-toggle="collapse"
                             role="button" data-target="#collapse{{$i}}" aria-expanded="false"
                              aria-controls="collapse{{$i}}">
                                <span class="lead collapse-title"> {{$category->name}} </span>
                            </div>
                            <div id="collapse{{$i}}" role="tabpane{{$i}}" aria-labelledby="headingCollapse{{$i}}"
                             class="collapse" style="">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            @foreach ($category->meals as $meal)
                                                <table class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>meal</th>
                                                            <th>add</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody >
                                                        <tr>
                                                            <td>
                                                                <img class="round mr-1" src="{{asset('restaurant-assets/images/menu-item/piz1.png')}}" alt="avatar" height="30" width="30">
                                                                {{$meal->name}}
                                                            </td>
                                                            <td>
                                                                <a id="meal-{{$meal->id}}" data-name="{{$meal->name}}" data-id="{{$meal->id}}"
                                                                    data-price="{{$meal->price}}"
                                                                     class="btn btn-success  waves-effect add-meal-btn">
                                                                    <i class="fa fa-plus" data-feather='plus'></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            @endforeach
                                        </div>
                                    </div>
                            </div>
                        </div>
                        @php $i++ @endphp
                        @endforeach
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
                    <form
                        class="form"
                        action="{{ route('dashboard.tables.orders.store',$table) }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        {{ csrf_field() }}
                        {{ method_field('post') }}

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="text-center">Receipt Name</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-center">price</th>
                                <th class="text-center"> Actions</th>
                            </tr>
                            </thead>
                            <tbody class="order-list">
                            {{-- <tr>
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
                            </tr> --}}
                            </tbody>
                        </table>
                        <h3>total <span class="total-price">0 DH</span></h3>
                        <button type="submit" class="btn btn-primary btn-block disabled" id="add-order-btn">
                            add order
                        </button>

                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('page-scripts')
<script src="{{ asset('app-assets/js/tableorder.js') }}"></script>
@endsection
