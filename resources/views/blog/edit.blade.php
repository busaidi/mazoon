@extends('public.layouts.app')

@section('title', __('blog.edit_blog'))

@section('content')
    <div class="container mt-4">
        <h2>{{ __('blog.edit_blog') }}</h2>
        <form action="{{ route('blog.update', ['locale' => app()->getLocale(), 'blog' => $blog->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title_en" class="form-label">{{ __('blog.title_en') }}</label>
                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ $blog->title_en }}" required>
            </div>
            <div class="mb-3">
                <label for="title_ar" class="form-label">{{ __('blog.title_ar') }}</label>
                <input type="text" class="form-control" id="title_ar" name="title_ar" value="{{ $blog->title_ar }}" required>
            </div>
            <div class="mb-3">
                <label for="content_en" class="form-label">{{ __('blog.content_en') }}</label>
                <textarea class="form-control" id="content_en" name="content_en" rows="4" required>{{ $blog->content_en }}</textarea>
            </div>
            <div class="mb-3">
                <label for="content_ar" class="form-label">{{ __('blog.content_ar') }}</label>
                <textarea class="form-control" id="content_ar" name="content_ar" rows="4" required>{{ $blog->content_ar }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">{{ __('blog.update') }}</button>
        </form>
    </div>
@endsection
