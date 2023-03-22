@extends('layouts.dashboard.app')

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Edit Supplier Bill</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.supplier-Orders.index') }}">Supplier Bill list</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Supplier Bill</h4>
            </div>
            <div class="card-body">
                @include('partials._errors')
                <form
                    class="form"
                    action="{{ route('dashboard.supplier-bills.update', $supplierBill->id) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="user_id"
                                >
                                    @lang('user_id')
                                </label>
                                <select
                                    id="user_id"
                                    class="form-control"
                                    name="user_id"
                                >
                                    <option hidden value="">-- Select user --</option>
                                    @foreach($users as $user)
                                        <option
                                            value="{{ $user->id }}"
                                            {{--@if( $supplier->$supplier_id === $supplier_id )--}}
                                            selected="selected"
                                            {{--@endif--}}
                                        >
                                            {{ $user->role }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="supplier_order_id"
                                >
                                    @lang('fields.supplier_order_id')
                                </label>
                                <select
                                    id="supplier_order_id"
                                    class="form-control"
                                    name="supplier_order_id"
                                >
                                    <option hidden value="">-- Select Supplier Order --</option>
                                    @foreach($supplierorders as $supplierorder)
                                        <option
                                            value="{{ $supplierorder->id }}"
                                            {{--@if( $supplierorder->$supplierorder_id === $supplierorder_id )--}}
                                            selected="selected"
                                            {{--@endif--}}
                                        >
                                            {{ $supplierorder->id }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="total"
                                >
                                    @lang('fields.supplier_order_id')
                                </label>
                                <input
                                    id="total"
                                    type="number"
                                    name="total"
                                    value="{{ $supplierBill->total }}"
                                >
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-warning mr-1">Edit</button>
                            <button type="reset" class="btn btn-outline-warning">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('special_scripts')

@endsection
