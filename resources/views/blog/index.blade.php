@extends('public.layouts.app')

@section('title', __('blog.title'))

@section('content')
    <div class="container mt-4">
        <h2>{{ __('blog.all_blogs') }}</h2>
        <a href="{{ route('blog.create', app()->getLocale()) }}" class="btn btn-primary mb-3">{{ __('blog.new_blog') }}</a>
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">{{ Str::limit($blog->content, 100) }}</p>
                            <a href="{{ route('blog.show', ['locale' => app()->getLocale(), $blog]) }}" class="btn btn-primary">{{ __('blog.read_more') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
