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
                    action="{{ route('dashboard.clients.update', $client->id) }}"
                    method="POST"
                >
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="row">

                        <!-- Full Name -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="first_name"
                                >
                                    First name
                                </label>
                                <input
                                    type="text"
                                    id="first_name"
                                    class="form-control"
                                    name="first_name"
                                    placeholder="@lang("fields.first_name")"
                                    value="{{ $client->first_name }}"
                                />
                            </div>
                        </div>

                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="last_name"
                                >
                                    Last name
                                </label>
                                <input
                                    type="text"
                                    id="last_name"
                                    class="form-control"
                                    name="last_name"
                                    placeholder="@lang("fields.last_name")"
                                    value="{{ $client->last_name }}"
                                />
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="address"
                                >
                                    @lang("fields.address")
                                </label>
                                <input
                                    type="text"
                                    id="address"
                                    class="form-control"
                                    name="address"
                                    placeholder="@lang("fields.address")"
                                    value="{{ $client->address }}"
                                />
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="email"
                                >
                                    @lang("fields.email")
                                </label>
                                <input
                                    type="email"
                                    id="email"
                                    class="form-control"
                                    name="email"
                                    placeholder="@lang("fields.email")"
                                    value="{{ $client->email }}"
                                />
                            </div>
                        </div>
                        <!-- Old Password -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="old_password"
                                >
                                    Old Password
                                </label>
                                <input
                                    type="password"
                                    id="old_password"
                                    class="form-control"
                                    name="old_password"
                                    value=""
                                />
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group input-group-merge form-password-toggle mb-2">
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        id="password"
                                        placeholder="Your Password"
                                        value="{{ $client->password }}"
                                        aria-describedby="basic-default-password1" />
                                    <div class="input-group-append">
                                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Phone -->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label
                                    for="phone"
                                >
                                    @lang("fields.phone")
                                </label>
                                <input
                                    type="text"
                                    id="phone"
                                    class="form-control"
                                    name="phone"
                                    placeholder="@lang("fields.phone")"
                                    value="{{ $client->phone }}"
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
