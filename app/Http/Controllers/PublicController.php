<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('public.pages.home');
    }

    public function about()
    {
        return view('public.pages.about');
    }

    public function products()
    {
        return view('public.pages.products');
    }

    public function contact()
    {
        return view('public.pages.contact');
    }

    public function blog()
    {
        return view('public.pages.blog');
    }

    public function testimonials()
    {
        return view('public.pages.testimonials');
    }

    public function portfolio()
    {
        return view('public.pages.portfolio');
    }

    public function faq()
    {
        return view('public.pages.faq');
    }

    public function pricing()
    {
        return view('public.pages.pricing');
    }

    public function terms()
    {
        return view('public.pages.terms');
    }
}
