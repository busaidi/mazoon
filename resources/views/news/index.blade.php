@extends('public.layouts.app')

@section('title', __('news.title'))

@section('content')
    <div class="container mt-4">
        <h2>{{ __('news.all_news') }}</h2>
        <a href="{{ route('news.create', app()->getLocale()) }}" class="btn btn-primary mb-3">{{ __('news.new_news') }}</a>
        <div class="row">
            @foreach($newsItems as $news)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $news->title }}</h5>
                            <p class="card-text">{{ Str::limit($news->content, 100) }}</p>
                            <a href="{{ route('news.show', ['locale' => app()->getLocale(), $news]) }}" class="btn btn-primary">{{ __('news.read_more') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
