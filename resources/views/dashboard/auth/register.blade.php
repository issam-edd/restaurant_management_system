@extends('layouts.auth.app')

@section('content')
    <div class="auth-wrapper auth-v1 px-2">
        <div class="auth-inner py-2">
            <!-- Register v1 -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="javascript:void(0);" class="brand-logo">
                        <h2 class="brand-text text-primary ml-1">MAT3AMI</h2>
                    </a>

                    <h4 class="card-title text-secondary mb-1">Register</h4>

                    <form
                        class="auth-register-form mt-2" action="{{ route('dashboard.register') }}" method="post" enctype="multipart/form-data"
                    >
                        @csrf

                        <div class="form-group">
                            <label>Avatar</label>
                            <input type="file" name="avatar" class="form-control image">
                        </div>

                        <div class="form-group">
                            <label for="register-name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="register-name" name="name" placeholder="issam" aria-describedby="register-name" tabindex="1" autofocus />
                        </div>

                        <div class="form-group">
                            <label for="register-email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="register-email" name="email" placeholder="issam@example.com" aria-describedby="register-email" tabindex="2" />
                        </div>

                        <div class="form-group">
                            <label for="register-password" class="form-label">Password</label>

                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="register-password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="register-password_confirmation" class="form-label">Confirm password</label>

                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="register-password_confirmation" name="password_confirmation" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block" tabindex="5">Sign up</button>
                    </form>



                </div>
            </div>
            <!-- /Register v1 -->
        </div>
    </div>
@endsection


@section('page-scripts')
    <script src="{{ asset('app-assets/js/scripts/pages/page-auth-register.js') }}"></script>
@endsection
