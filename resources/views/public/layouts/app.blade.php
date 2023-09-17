<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Company</title>
    {{--    initial bootsrap--}}
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @endif
    {{--    end initial bootsrap--}}

    <link rel="stylesheet" href="{{ asset('css/carousel-style.css') }}">


</head>
<body>
@include('public.partials.topbar')

@include('public.partials.navbar')

<header>
    @include('public.partials.header')
    @include('public.partials.slider')
</header>

<div class="container">
    @include('public.partials.carousel')
    @yield('content')
</div>

<footer>
    @include('public.partials.footer')
</footer>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

</body>
</html>
