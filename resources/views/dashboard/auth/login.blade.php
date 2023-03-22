@extends('layouts.auth.app')

@section('content')
    <div class="auth-wrapper auth-v1 px-2">
        <div class="auth-inner py-2">
            <!-- Login v1 -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="javascript:void(0);" class="brand-logo">
                        <h2 class="brand-text text-primary ml-1">MAT3AMI</h2>
                    </a>

                    <h3 class="card-title text-secondary mb-1">Login </h3>

                    <form class="auth-login-form mt-2" method="POST" action="{{ route('dashboard.login') }}">
                      @csrf
                        <div class="form-group">
                            <label for="login-email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="login-email" name="email" placeholder="issam@example.com" aria-describedby="login-email" tabindex="1" autofocus />
                        </div>

                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="login-password">Password</label>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="password" name="password" tabindex="2" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="login-password" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" id="remember-me" tabindex="3" />

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" tabindex="4">Sign in</button>
                    </form>


                </div>
            </div>
            <!-- /Login v1 -->
        </div>
    </div>
@endsection

@section('page-scripts')
    <script src="{{ asset('app-assets/js/scripts/pages/page-auth-login.js') }}"></script>
@endsection
