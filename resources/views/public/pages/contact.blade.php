@extends('public.layouts.app')
@section('title', __('navbar.contact'))
@section('content')
    <div class="container mt-5">
        <h2 class="border-bottom">{{ __('contact.h1_1') }}</h2>

        <div class="row mt-4">
            <div class="col-md-12">
                <h4><span class="border-bottom d-inline-block border-info">{{ __('contact.location_h') }}</span></h4>
                <p>{{ __('contact.location') }}</p>

                <h4><span class="border-bottom d-inline-block border-info">{{ __('contact.email_h') }}</span></h4>

                <p>{{ __('contact.email') }}</p>

                <h4><span class="border-bottom d-inline-block border-info">{{ __('contact.phone_h') }}</span></h4>

                <p>{{ __('contact.phone') }}</p>
            </div>
        </div>
    </div>
@endsection
