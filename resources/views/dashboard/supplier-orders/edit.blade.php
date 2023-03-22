@extends('layouts.dashboard.app')

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Edit Supplier Order</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.supplier-orders.index') }}">Supplier Order list</a>
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
                <h4 class="card-title">Edit Supplier Order</h4>
            </div>
            <div class="card-body">
                @include('partials._errors')
                <form
                    class="form"
                    action="{{ route('dashboard.supplier-orders.update', $supplierOrder->id) }}"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="row">{{-- supplier --}}
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="supplier_id"
                                >
                                    @lang('fields.supplier_id')
                                </label>
                                <select
                                    id="supplier_id"
                                    class="form-control"
                                    name="supplier_id"
                                >
                                    <option hidden value="">-- Select Supplier --</option>
                                    @foreach($suppliers as $supplier)
                                        <option
                                            value="{{ $supplier->id }}"
                                            {{--@if( $supplierOrder->supplier->id === $supplier->id )--}}
                                            selected="selected"
                                            {{--@endif--}}
                                        >
                                            {{ $supplier->first_name." ".$supplier->last_name }}
                                        </option>
                                    @endforeach
                                </select>
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
