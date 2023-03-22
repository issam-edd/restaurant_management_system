@extends('layouts.dashboard.app')

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Suppliers</h2>
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
                    <h4 class="card-title">Suppliers list</h4>
                    <a
                        class="btn btn-success waves-effect waves-float waves-light"
                        href="{{ route('dashboard.suppliers.create') }}">
                        Add
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="text-center">Full name</th>
                            <th class="text-center">Phone number</th>
                            <th class="text-center">email</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td class="text-center">{{$supplier->first_name.' '.$supplier->last_name}}</td>
                                <td class="text-center">{{$supplier->phone_number}}</td>
                                <td class="text-center">{{$supplier->email}}</td>
                                <td class="text-center">
                                  {{-- <a
                                        href="{{ route('dashboard.suppliers.show'),$supplier->id}}"
                                        class="btn btn-icon btn-flat-primary">
                                        <i data-feather="eye"></i>
                                    </a>--}}
                                    <a
                                        href="{{ route('dashboard.suppliers.edit', $supplier->id) }}"
                                        class="btn btn-icon btn-flat-warning">
                                        <i data-feather="edit"></i>
                                    </a>
                                    <form
                                        action="{{ route('dashboard.suppliers.destroy', $supplier->id) }}"
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
