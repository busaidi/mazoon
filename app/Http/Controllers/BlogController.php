<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',
        ]);

        Blog::create($data);

        return redirect()->route('blog.index', app()->getLocale())->with('success', __('blog.blog_created'));
    }

    public function show($locale, Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    public function edit($locale, Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, $locale, Blog $blog)
    {
        $data = $request->validate([
            'title_en' => 'required',
            'title_ar' => 'required',
            'content_en' => 'required',
            'content_ar' => 'required',
        ]);

        $blog->update($data);

//        return redirect()->route('blog.index')->with('success', __('blog.blog_updated'));
        return redirect()->route('blog.index', $locale)->with('success', __('blog.blog_updated'));
    }

    public function destroy($locale, Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index', $locale)->with('success', __('blog.blog_deleted'));
    }
}
