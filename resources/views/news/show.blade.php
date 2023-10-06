@extends('public.layouts.app')

@section('title', $news->title)

@section('content')
    <div class="container mt-4">
        <h2>{{ $news->title }}</h2>
        <p>{{ $news->content }}</p>
        <a href="{{ route('news.edit', ['locale' => app()->getLocale(), 'news' => $news->id]) }}" class="btn btn-primary">{{ __('news.edit') }}</a>
        <form action="{{ route('news.destroy', ['locale' => app()->getLocale(), 'news' => $news->id]) }}" method="post" class="d-inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">{{ __('news.delete') }}</button>
        </form>
    </div>
@endsection
