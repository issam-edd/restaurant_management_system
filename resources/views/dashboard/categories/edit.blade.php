@extends('layouts.dashboard.app')

@section('breadcrumbs')
    <h2 class="content-header-title float-left mb-0">Edit Client</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
{{--                <a href="{{ route('dashboard.index') }}">@lang('site.home')</a>--}}
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard.clients.index') }}">Clients list</a>
            </li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit client</h4>
            </div>
            <div class="card-body">
                @include('partials._errors')
                <form
                    class="form"
                    action="{{ route('dashboard.categories.update', $category->id) }}"
                    method="POST"
                >
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="row">

                        <!-- Name -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="name"
                                >
                                     name
                                </label>
                                <input
                                    type="text"
                                    id="name"
                                    class="form-control"
                                    name="name"
                                    placeholder="@lang("fields.first_name")"
                                    value="{{ $category->name }}"
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
