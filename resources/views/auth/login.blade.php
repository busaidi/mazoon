@extends('public.layouts.auth')
@section('title', __('login.login'))

@section('content')
<div class="container-xl px-4">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <!-- Basic login form-->
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header justify-content-center"><h3 class="fw-light my-4">{{ __('login.email') }}</h3></div>
                <div class="card-body">
                    <!-- Login form-->

                    <form method="POST" action="{{ route('login', ['locale' => app()->getLocale()]) }}">
                        @csrf
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="email">{{ __('login.email') }}</label>
                            <input class="form-control" {{--id="email"--}} name="email" type="email" placeholder="{{ __('login.enter email') }}" value="{{ old('email') }}" required autofocus />
                            @error('email')
                            <br>
                            <span class="alert text-danger" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Form Group (password)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="password">{{ __('login.password') }}</label>
                            <input class="form-control" id="password" name="password" type="password" placeholder="{{ __('login.enter password') }}" required autocomplete="current-password" />
                            @error('password')
                            <br>
                            <span class="alert text-danger" role="alert">{{ $message }}</span>
                            @enderror



                        </div>
                        <!-- Form Group (remember password checkbox)-->
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" id="rememberPasswordCheck" type="checkbox" name="remember" />
                                <label class="form-check-label" for="rememberPasswordCheck">{{ __('login.remembered') }}</label>
                            </div>

                        </div>
                        <!-- Form Group (login box)-->
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                            <a class="small" href="auth-password-basic.html">{{ __('login.forget password') }}</a>
                            <button type="submit" class="btn btn-primary">{{ __('login.login') }}</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <div class="small"><a href="auth-register-basic.html">{{ __('login.need account') }}</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
