@extends('layouts.auth.app')

@section('content')
    <div class="auth-wrapper auth-v1 px-2">
        <div class="auth-inner py-2">
            <!-- reset -->
            <div class="card mb-0">
                <div class="card-body">
                    <a href="javascript:void(0);" class="brand-logo">
                        <h2 class="brand-text text-primary ml-1">MAT3AMI</h2>
                    </a>

                    <h4 class="card-title text-secondary mb-1">Reset Password </h4>

                    <form class="auth-reset-password-form mt-2" action="page-auth-login-v1.html" method="POST" novalidate="novalidate">
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="reset-password-new">New Password</label>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="reset-password-new" name="reset-password-new" placeholder="············" aria-describedby="reset-password-new" tabindex="1" autofocus="">
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label for="reset-password-confirm">Confirm Password</label>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input type="password" class="form-control form-control-merge" id="reset-password-confirm" name="reset-password-confirm" placeholder="············" aria-describedby="reset-password-confirm" tabindex="2">
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block waves-effect waves-float waves-light" tabindex="3">Set New Password</button>
                    </form>


                </div>
            </div>
            <!-- /reset -->
        </div>
    </div>
@endsection

@section('page-scripts')
    <script src="{{ asset('app-assets/js/scripts/pages/page-auth-forgot-password.js') }}"></script>
@endsection
