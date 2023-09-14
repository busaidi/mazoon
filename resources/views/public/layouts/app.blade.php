<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Company</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
@include('public.partials.topbar')

@include('public.partials.navbar')

<header>
    @include('public.partials.header')
    @include('public.partials.slider')
</header>

<div class="container">
    @yield('content')
</div>

<footer>
    @include('public.partials.footer')
</footer>

<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

</body>
</html>
