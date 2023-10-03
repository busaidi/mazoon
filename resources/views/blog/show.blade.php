@extends('public.layouts.app')

@section('title', $blog->title)

@section('content')
    <div class="container mt-4">
        <h2>{{ $blog->title }}</h2>
        <p>{{ $blog->content }}</p>
        <a href="{{ route('blog.edit', ['locale' => app()->getLocale(), 'blog' => $blog->id]) }}" class="btn btn-primary">{{ __('blog.edit') }}</a>
        <form action="{{ route('blog.destroy', ['locale' => app()->getLocale(), 'blog' => $blog->id]) }}" method="post" class="d-inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">{{ __('blog.delete') }}</button>
        </form>
    </div>
@endsection
