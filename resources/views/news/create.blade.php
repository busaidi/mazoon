@extends('public.layouts.app')

@section('title', __('news.create_news'))

@section('content')
    <div class="container mt-4">
        <h2>{{ __('news.create_news') }}</h2>
        <form action="{{ route('news.store', app()->getLocale()) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title_en" class="form-label">{{ __('news.title_en') }}</label>
                <input type="text" class="form-control" id="title_en" name="title_en" required>
            </div>
            <div class="mb-3">
                <label for="title_ar" class="form-label">{{ __('news.title_ar') }}</label>
                <input type="text" class="form-control" id="title_ar" name="title_ar" required>
            </div>
            <div class="mb-3">
                <label for="content_en" class="form-label">{{ __('news.content_en') }}</label>
                <textarea class="form-control" id="content_en" name="content_en" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="content_ar" class="form-label">{{ __('news.content_ar') }}</label>
                <textarea class="form-control" id="content_ar" name="content_ar" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('news.save') }}</button>
        </form>
    </div>
@endsection
