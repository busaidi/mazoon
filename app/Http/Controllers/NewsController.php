<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($locale)
    {
        $newsItems = News::all();
        return view('news.index', compact('newsItems'));
    }

    public function create($locale)
    {
        return view('news.create');
    }

    public function store(Request $request, $locale)
    {
        $data = $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',
        ]);

        News::create($data);

        return redirect()->route('news.index', $locale)->with('success', __('news.news_created'));
    }

    public function show($locale, News $news)
    {
        return view('news.show', compact('news'));
    }

    public function edit($locale, News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $locale, News $news)
    {
        $data = $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',
        ]);

        $news->update($data);

        return redirect()->route('news.index', $locale)->with('success', __('news.news_updated'));
    }

    public function destroy($locale, News $news)
    {
        $news->delete();
        return redirect()->route('news.index', $locale)->with('success', __('news.news_deleted'));
    }
}
