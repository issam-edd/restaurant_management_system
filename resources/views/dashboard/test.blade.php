@extends('layouts.dashboard.app')

@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Supplier Orders</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.supplier-orders.index') }}">Supplier Orders list</a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Supplier Order</h4>
                </div>
                <div class="card-body">
                    @include('partials._errors')
                    <form
                        class="form"
                        action="{{ route('dashboard.tables.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        {{ csrf_field() }}
                        {{ method_field('post') }}
                        <div class="row">


                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="table_id">tables</label>
                                    <select
                                        id="table_id"
                                        class="form-control"
                                        name="table_id"
                                    >
                                        <option hidden value="">-- select table --</option>
                                        @foreach($tables as $table)
                                            <option
                                                value="{{ $table->id }}"
                                                @if( old('table') === $table->id )
                                                selected="selected"
                                                @endif
                                            >
                                                {{ $table->id }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>



                            {{-- many-to-many-start --}}
                            <div class="card-body">
                                <table class="table" id="ingredients_table">
                                    <thead>
                                        <tr>
                                            <th>client</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (old('clients', ['']) as $index => $oldclients)
                                            <tr id="client{{ $index }}">
                                                <td>
                                                    <select name="ingredients[]" class="form-control">
                                                        <option value="">-- choose client --</option>
                                                        @foreach ($clients as $client)
                                                            <option value="{{ $client->id }}"{{ $oldclient == $client->id ? ' selected' : '' }}>
                                                                {{ $client->first_name }} )
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                            </tr>
                                        @endforeach
                                        <tr id="client{{ count(old('clients', [''])) }}"></tr>
                                    </tbody>
                                </table>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button id="add_row" class="btn btn-default pull-left">+ Add Row</button>
                                        <button id='delete_row' class="pull-right btn btn-danger">- Delete Row</button>
                                    </div>
                                </div>
                            </div>
                            {{--end--}}
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
    <script>
        $(document).ready(function(){
          let row_number = {{ count(old('ingredient', [''])) }};
          $("#add_row").click(function(e){
            e.preventDefault();
            let new_row_number = row_number - 1;
            $('#ingredient' + row_number).html($('#ingredient' + new_row_number).html()).find('td:first-child');
            $('#ingredients_table').append('<tr id="ingredient' + (row_number + 1) + '"></tr>');
            row_number++;
          });
          $("#delete_row").click(function(e){
            e.preventDefault();
            if(row_number > 1){
              $("#ingredient" + (row_number - 1)).html('');
              row_number--;
            }
          });
        });
      </script>
@endsection

