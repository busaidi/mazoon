@extends('public.layouts.app')
@section('title', __('profile.title'))

@section('content')
<header class="bg-light py-3">
    <div class="container">
        <h2 class="fw-bold fs-2">
            {{ __('profile.profile_information') }}
        </h2>
    </div>
</header>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>

                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
