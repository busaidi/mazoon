<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'navbar.home') | {{ __('navbar.title') }}</title>
    {{--    initial bootsrap--}}
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('css/bootstrap.rtl.min.css') }}">
    @else
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @endif
    {{--    end initial bootsrap--}}

    <link rel="stylesheet" href="{{ asset('css/carousel-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">


</head>
<body>
@include('public.partials.topbar')
@include('public.partials.navbar')
<header>
    @include('public.partials.header')
</header>
    @include('public.partials.carousel')
<div class="container">
    @yield('content')
</div>
<footer>
    @include('public.partials.footer')
</footer>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('js/animation.js') }}"></script>

</body>
</html>
