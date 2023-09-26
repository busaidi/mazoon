@extends('public.layouts.app')
@section('title', __('navbar.about'))
@section('content')
    <div class="container py-5">

        <!-- Title -->
        <h1>{{ __('about.title_1') }}</h1>

        <!-- Intro -->
        <p class="lead">
            {{ __('about.lead') }}
        </p>

        <!-- Journey Timeline -->
        <h3>{{ __('about.title_2') }}</h3>
        <ul class="list-group list-group-flush mb-4">
            <li class="list-group-item">{{ __('about.stage_1') }}</li>
            <li class="list-group-item">{{ __('about.stage_2') }}</li>
            <li class="list-group-item">{{ __('about.stage_3') }}</li>
            <li class="list-group-item">{{ __('about.stage_4') }}</li>
        </ul>

        <!-- Mazoon Aluminum -->
        <h2>{{ __('about.title_3') }}</h2>
        <p>{{ __('about.lead_2') }}</p>

    </div>
@endsection
