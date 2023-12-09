<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>log in</title>
    @if(app()->getLocale() == 'ar')
    @vite(['resources/css/app.rtl.css', 'resources/js/app.js'])
    @else
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
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
                                        <input class="form-control" id="email" name="email" type="email" placeholder="{{ __('login.enter email') }}" value="{{ old('email') }}" required autofocus />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!-- Form Group (password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="password">{{ __('login.password') }}</label>
                                        <input class="form-control" id="password" name="password" type="password" placeholder="{{ __('login.enter password') }}" required autocomplete="current-password" />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
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
                                        {{--<a class="small" href="auth-password-basic.html">Forgot Password?</a>--}}
                                        <button type="submit" class="btn btn-primary">{{ __('login.login') }}</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                {{--<div class="small"><a href="auth-register-basic.html">Need an account? Sign up!</a></div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="footer-admin mt-auto footer-dark">
            <div class="container-xl px-4">
                <div class="row">

                </div>
            </div>
        </footer>
    </div>
</div>

</body>
</html>
