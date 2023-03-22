@extends('layouts.dashboard.app')

@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/forms/select/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
@endsection

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Edit Meal</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.meals.index') }}">Meals list</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Meal</h4>
                </div>
                <div class="card-body">
                    @include('partials._errors')
                    <form
                        class="form"
                        action="{{ route('dashboard.meals.update', $meal->id) }}"
                        method="POST"
                    >
                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="">
                            <div class="media-body mt-50 mb-3">
                                <div class="col-12 d-flex mt-1 px-0">
                                    <div class="form-group">
                                        <label>Update Image</label>
                                        <input type="file" name="photo" class="form-control image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id="name"
                                        placeholder="Meal Name"
                                        value="{{ $meal->name }}"
                                    >
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="price"
                                        id="price"
                                        value="{{ $meal->price }}"
                                        step="0.01"
                                        min="0"
                                    />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="form-group">
                                    <label for="category_id">Description</label>
                                    <select class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea
                                        class="form-control"
                                        name="description"
                                        id="description"
                                        rows="3"
                                        placeholder="Textarea">{{ $meal->description}}</textarea>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table" id="ingredients_table">
                                    <thead>
                                    <tr>
                                        <th>Ingredient</th>
                                        <th>Quantity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach (old('ingredients',  $meal->ingredients->count() ? $meal->ingredients : ['']) as $index => $oldIngredient)
                                        <tr id="ingredient{{ $index }}">
                                            <td>
                                                <select name="ingredients[]" class="form-control">
                                                    <option value="">-- choose ingredient --</option>
                                                    @foreach ($ingredients as $ingredient)
                                                        <option value="{{ $ingredient->id }}">
                                                            {{ $ingredient->name }} ({{ $ingredient->unity}})
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <input type="number" name="quantities[]" class="form-control" value="{{ old('quantities.' . $index) ?? '1' }}" />
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr id="ingredient{{ count(old('ingredients', [''])) }}"></tr>
                                    </tbody>
                                </table>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button id='delete_row' class="pull-right btn btn-danger float-right">- Delete Row</button>
                                        <button id="add_row" class="btn btn-default pull-left float-right">+ Add Row</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-sm-row flex-column mt-2">
                                <button type="submit" class="btn btn-warning mr-1">edit</button>
                                <button type="reset" class="btn btn-outline-warning">cancel</button>
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
    <script src="{{ asset('app-assets/js/scripts/forms/form-number-input.js') }}"></script>
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

