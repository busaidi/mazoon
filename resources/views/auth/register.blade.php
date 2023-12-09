<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register in</title>
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
                    <div class="col-lg-7">
                        <!-- Basic registration form-->
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header justify-content-center">
                                <h3 class="fw-light my-4">{{ __('Create Account') }}</h3>
                            </div>
                            <div class="card-body">
                                <!-- Registration form-->
                                <form method="POST" action="{{ route('register', app()->getLocale()) }}">
                                    @csrf
                                    <!-- Form Row-->
                                    <div class="row gx-3">
                                        <div class="col-md-6">
                                            <!-- Form Group (first name) - Adjust if needed -->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="name">{{ __('Name') }}</label>
                                                <input class="form-control" id="name" name="name" type="text" placeholder="{{ __('Enter name') }}" required autofocus />
                                            </div>
                                        </div>
                                        <!-- ... Add Last Name field if required ... -->
                                    </div>
                                    <!-- Form Group (email address) -->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="email">{{ __('Email') }}</label>
                                        <input class="form-control" id="email" name="email" type="email" placeholder="{{ __('Enter email address') }}" required />
                                    </div>
                                    <!-- Form Row -->
                                    <div class="row gx-3">
                                        <div class="col-md-6">
                                            <!-- Form Group (password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="password">{{ __('Password') }}</label>
                                                <input class="form-control" id="password" name="password" type="password" placeholder="{{ __('Enter password') }}" required />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Form Group (confirm password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="password_confirmation">{{ __('Confirm Password') }}</label>
                                                <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="{{ __('Confirm password') }}" required />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Form Group (create account submit)-->
                                    <button type="submit" class="btn btn-primary btn-block">{{ __('Create Account') }}</button>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="{{ route('login', app()->getLocale()) }}">{{ __('Have an account? Go to login') }}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <!-- ... [footer content] ... -->
    </div>
</div>
<!-- ... [scripts] ... -->
</body>
</html>
