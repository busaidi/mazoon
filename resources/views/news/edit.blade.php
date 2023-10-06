@extends('public.layouts.app')

@section('title', __('news.edit_news'))

@section('content')
    <div class="container mt-4">
        <h2>{{ __('news.edit_news') }}</h2>
        <form action="{{ route('news.update', ['locale' => app()->getLocale(), 'news' => $news->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title_en" class="form-label">{{ __('news.title_en') }}</label>
                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ $news->title_en }}" required>
            </div>
            <div class="mb-3">
                <label for="title_ar" class="form-label">{{ __('news.title_ar') }}</label>
                <input type="text" class="form-control" id="title_ar" name="title_ar" value="{{ $news->title_ar }}" required>
            </div>
            <div class="mb-3">
                <label for="content_en" class="form-label">{{ __('news.content_en') }}</label>
                <textarea class="form-control" id="content_en" name="content_en" rows="4" required>{{ $news->content_en }}</textarea>
            </div>
            <div class="mb-3">
                <label for="content_ar" class="form-label">{{ __('news.content_ar') }}</label>
                <textarea class="form-control" id="content_ar" name="content_ar" rows="4" required>{{ $news->content_ar }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('news.update') }}</button>
        </form>
    </div>
@endsection
`
