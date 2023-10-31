<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
//    to passing meat from lang to view
    public function getSEOInfo($page)
    {
        return [
            'description' => __($page . '.description'),
            'keywords' => __($page . '.keywords'),
        ];
    }



    public function index()
    {
        $seoInfo = $this->getSEOInfo('home');
        return view('public.pages.home',$seoInfo);
    }

    public function about()
    {
        $seoInfo = $this->getSEOInfo('about');
        return view('public.pages.about',$seoInfo);
    }


    public function mazoon45()
    {
        $seoInfo = $this->getSEOInfo('mazoon45');
        return view('public.products.mazoon45',$seoInfo);
    }



    public function contact()
    {
        $seoInfo = $this->getSEOInfo('contact');
        return view('public.pages.contact',$seoInfo);
    }












}
