@extends('layouts.dashboard.app')

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Edit Employee</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.employees.index') }}">Employees list</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Client</h4>
            </div>
            <div class="card-body">
                @include('partials._errors')
                <form
                    class="form"
                    action="{{ route('dashboard.employees.update', $employee->id) }}"
                    method="POST"
                >
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="media mb-2">
                        <div class="media-body mt-50">
                            <div class="col-12 d-flex mt-1 px-0">
                                <div class="form-group">
                                    <label>Update Avatar</label>
                                    <input type="file" name="avatar" class="form-control image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- Name -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="first_name"
                                >
                                    name
                                </label>
                                <input
                                    type="text"
                                    id="first_name"
                                    class="form-control"
                                    name="name"
                                    placeholder="@lang("fields.name")"
                                    value="{{ $employee->name }}"
                                />
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="phone"
                                >
                                    phone
                                </label>
                                <input
                                    type="text"
                                    id="phone"
                                    class="form-control"
                                    name="phone"
                                    placeholder="@lang("fields.phone")"
                                    value="{{ $employee->phone }}"
                                />
                            </div>
                        </div>


                        <div class="col-12">
                            <button type="submit" class="btn btn-warning mr-1">edit</button>
                            <button type="reset" class="btn btn-outline-warning">cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('special_scripts')
    <script>
        document.getElementById('menu_client').classList.add('active');
    </script>
@endsection
