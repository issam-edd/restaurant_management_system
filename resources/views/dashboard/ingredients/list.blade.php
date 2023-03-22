@extends('layouts.dashboard.app')

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Ingredients</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Home</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <!-- Striped rows start -->
    @include('partials._session')
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Ingredients list</h4>
                    <a
                        class="btn btn-success waves-effect waves-float waves-light"
                        href="{{ route('dashboard.ingredients.create') }}"
                    >
                        Add
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped ">
                        <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Unity</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Quantity Minimal</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($ingredients as $ingredient)
                            <tr>
                                <td class="text-center">{{$ingredient->name}}</td>
                                <td class="text-center">{{$ingredient->unity}}</td>
                                <td class="text-center d-flex justify-content-center align-items-center">{{$ingredient->quantity}}
                                    @if ($ingredient->quantity <= $ingredient->quantity_min)
                                        <div class="avatar bg-danger">
                                            <div class="avatar-content" style="width: 15px !important;height: 15px !important;"></div>
                                        </div>
                                    @else
                                        <div class="avatar bg-success">
                                            <div class="avatar-content" style="width: 15px !important;height: 15px !important;"></div>
                                        </div>
                                    @endif
                                </td>
                                <td class="text-center">{{$ingredient->quantity_min}}</td>
                                <td class="text-center">
                                    <a
                                        href="{{ route('dashboard.ingredients.edit', $ingredient->id) }}"
                                        class="btn btn-icon btn-flat-warning">
                                        <i data-feather="edit"></i>
                                    </a>
                                    <form
                                        action="{{ route('dashboard.ingredients.destroy', $ingredient->id) }}"
                                        method="POST"
                                        class="d-inline-block"
                                    >
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-icon btn-flat-danger">
                                            <i data-feather="trash-2"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Striped rows end -->
@endsection

@section('page-scripts')
    <script>
        document.querySelector('#users-item').classList.add('active');
    </script>
@endsection
